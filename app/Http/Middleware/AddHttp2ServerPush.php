<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpFoundation\Response;

class AddHttp2ServerPush
{
    /**
     * The DomCrawler instance.
     *
     * @var \Symfony\Component\DomCrawler\Crawler
     */
    protected $crawler;

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param  \Closure : (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse) $next
     * @param int $limit
     * @param int $sizeLimit
     */
    public function handle(Request $request, Closure $next, int $limit = null, int $sizeLimit = null): Response
    {
        $response = $next($request);

        if ($response->isRedirection() || !$response instanceof Response || $request->isJson()) {
            return $response;
        }

        $this->generateAndAttachLinkHeaders($response, $limit, $sizeLimit);

        return $response;
    }

    /**
     * Generate and attach link headers.
     *
     * @param \Illuminate\Http\Response $response
     * @param int $limit
     * @param int $sizeLimit
     */
    protected function generateAndAttachLinkHeaders(Response $response, int $limit = null, int $sizeLimit = null): AddHttp2ServerPush
    {
        $headers = $this->fetchLinkableNodes($response)
            ->flatten(1)
            ->map(function ($url) {
                return $this->buildLinkHeaderString($url);
            })
            ->unique()
            ->take($limit);

        $headersText = trim($headers->implode(','));

        while (strlen($headersText) > $sizeLimit) {
            $headers->pop();
            $headersText = trim($headers->implode(','));
        }

        if (!empty($headersText)) {
            $this->addLinkHeader($response, $headersText);
        }

        return $this;
    }

    /**
     * Get the DomCrawler instance.
     *
     * @param \Illuminate\Http\Response $response
     */
    protected function getCrawler(Response $response): Crawler
    {
        if ($this->crawler) {
            return $this->crawler;
        }

        return $this->crawler = new Crawler($response->getContent());
    }

    /**
     * Get all nodes we are interested in pushing.
     *
     * @param \Illuminate\Http\Response $response
     */
    protected function fetchLinkableNodes(Response $response): Collection
    {
        $crawler = $this->getCrawler($response);

        return collect($crawler->filter('link:not([rel*="icon"]), script[src], img[src], object[data]')->extract(['src', 'href', 'data']));
    }

    /**
     * Build out header string based on asset extension.
     *
     * @param string $url
     */
    private function buildLinkHeaderString(string $url): string|null
    {
        $linkTypeMap = [
            '.CSS'  => 'style',
            '.JS'   => 'script',
            '.BMP'  => 'image',
            '.GIF'  => 'image',
            '.JPG'  => 'image',
            '.JPEG' => 'image',
            '.PNG'  => 'image',
            '.WEBP' => 'image',
            '.SVG'  => 'image',
            '.TIFF' => 'image',
        ];

        $type = collect($linkTypeMap)->first(function ($type, $extension) use ($url) {
            return Str::contains(strtoupper($url), $extension);
        });

        if ($url && !$type) {
            $type = 'fetch';
        }

        return is_null($type) ? null : "<{$url}>; rel=preload; crossorigin=\"anonymous\" as={$type}";
    }

    /**
     * Add link header.
     *
     * @param \Illuminate\Http\Response $response
     * @param string $link
     */
    private function addLinkHeader(Response $response, string $link): void
    {
        if ($response->headers->get('Link')) {
            $link = $response->headers->get('Link') . ',' . $link;
        }

        $response->header('Link', $link);
    }
}
