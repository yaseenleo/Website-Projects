<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CompressAndOptimizeViewsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        if (
            $response->headers->get('Content-Type') === 'text/html; charset=UTF-8' &&
            config('app.env') === 'production' &&
            !$request->is('user/*')
        ) {

            $collapseWhitespace = [
                "/\n([\S])/" => '$1',
                "/\r/" => '',
                "/\n/" => '',
                "/\t/" => '',
                "/ +/" => ' ',
                "/> +</" => '><',
            ];

            $response->setContent(
                preg_replace(
                    array_keys(
                        $collapseWhitespace
                    ),
                    array_values(
                        $collapseWhitespace
                    ),
                    $response->getContent()
                )
            );

            $elideAttributes = [
                '/ method=("get"|get)/' => '',
                '/ disabled=[^ >]*(.*?)/' => ' disabled',
                '/ selected=[^ >]*(.*?)/' => ' selected',
            ];

            $response->setContent(
                preg_replace(
                    array_keys(
                        $elideAttributes
                    ),
                    array_values(
                        $elideAttributes
                    ),
                    $response->getContent()
                )
            );

            $removeQuotes = [
                '/ src="(.\S*?)"/' => ' src=$1',
                '/ width="(.\S*?)"/' => ' width=$1',
                '/ height="(.\S*?)"/' => ' height=$1',
                '/ name="(.\S*?)"/' => ' name=$1',
                '/ charset="(.\S*?)"/' => ' charset=$1',
                '/ align="(.\S*?)"/' => ' align=$1',
                '/ border="(.\S*?)"/' => ' border=$1',
                '/ crossorigin="(.\S*?)"/' => ' crossorigin=$1',
                '/ type="(.\S*?)"/' => ' type=$1',
            ];

            $response->setContent(
                preg_replace(
                    array_keys(
                        $removeQuotes
                    ),
                    array_values(
                        $removeQuotes
                    ),
                    $response->getContent()
                )
            );
        }

        return $response;
    }
}
