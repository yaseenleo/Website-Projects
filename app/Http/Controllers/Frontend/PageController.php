<?php

namespace App\Http\Controllers\Frontend;

use ReCaptcha\ReCaptcha;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use ReCaptcha\RequestMethod\CurlPost;
use Illuminate\Support\Facades\Session;
use App\Models\{Contact, Quote, Consultation};
use Appstract\Opcache\OpcacheFacade as OPcache;
use Spatie\ResponseCache\Facades\ResponseCache;
use Illuminate\Support\Facades\{Route, Mail, Cache, Artisan};
use App\Http\Requests\Frontend\{StoreQuery, StoreQuote, StoreConsultation};
use App\Mail\Frontend\{NewContactQueryReceived, NewContactQueryReceivedEmployee};
use Illuminate\Http\{Request, Response, JsonResponse, UploadedFile, RedirectResponse};
use App\Mail\Frontend\Quote\{SendSubmissionMailQuoteToCustomer, SendSubmissionMailQuoteToEmployee,  NewConsultationQueryReceivedEmployee, NewConsultationQueryReceived};

class PageController extends Controller
{
    /**
     * Show the page.
     *
     * @param  Illuminate\Http\Request $request
     */
    public function show(Request $request): View|string
    {
        $slug = $request->slug;

        $renderView = Cache::rememberForever($slug ?? 'home', function () use ($slug) {
            if (
                $slug !== 'home' &&
                view()->exists('frontend.pages.' . $slug)
            ) {
                return view('frontend.pages.' . $slug)->render();
            } else if (Route::currentRouteName() === 'home') {
                return view('frontend.pages.home')->render();
            }
        });

        if (is_null($renderView)) {
            return abort(404);
        } else {
            return $renderView;
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Frontend\StoreQuery $request
     */
    public function storeQuery(StoreQuery $request): JsonResponse
    {
        $reCaptcha = new ReCaptcha(config('services.google-re-captcha.private'), new CurlPost());

        $resp = $reCaptcha->verify($request->input('g-recaptcha-response'), $request->ip());

        if (!$resp->isSuccess()) {
            return response()->json(['re_captcha' => 'The reCAPTCHA wasn\'t entered correctly, Try it again.'], 422);
        }

        $contact = Contact::create(
            $request->validated()
        );

        if ($request->hasFile('files')) {
            $uploads = collect($request->file('files'));

            $uploads->each(function (UploadedFile $file) use ($contact) {
                $contact->addMedia($file)->toMediaCollection('attachments');
            });
        }

        Mail::to(config('mail.from.address'))
            ->bcc(config('mail.bcc.address'))
            ->send(new NewContactQueryReceivedEmployee($contact));

        Mail::to($contact)
            ->send(new NewContactQueryReceived($contact));

        Session::flash('thankyou', "Thank your Contacting Us");

        return response()->json(['message' => 'Thank you for Contacting Us.', 'url' => '/user/thank-you']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreQuote  $request
     * @return \Illuminate\Http\Response
     */
    public function storeQuote(StoreQuote $request): JsonResponse
    {
        $reCaptcha = new \ReCaptcha\ReCaptcha(config('services.google-re-captcha.private'), new \ReCaptcha\RequestMethod\CurlPost());

        $resp = $reCaptcha->verify($request->input('g-recaptcha-response'), $request->ip());

        if (!$resp->isSuccess()) {
            return response()->json(['re_captcha' => 'The reCAPTCHA wasn\'t entered correctly, Try it again.'], 422);
        }

        $data = $request->validated();

        $data['service'] = json_encode(
            $data['service']
        );

        $quote = Quote::create(
            $data
        );

        if ($request->hasFile('files')) {
            $uploads = collect($request->file('files'));

            $uploads->each(function (UploadedFile $file) use ($quote) {
                $quote->addMedia($file)->toMediaCollection('uploads');
            });
        }

        Mail::to(config('mail.from.address'))
            ->bcc(config(config('mail.bcc.address')))
            ->send(new SendSubmissionMailQuoteToEmployee($quote));

        Mail::to($quote)
            ->send(new SendSubmissionMailQuoteToCustomer($quote));

        Session::flash('thankyou', "Thank your Contacting Us");

        return response()->json(['message' => 'Thank you for Contacting Us.', 'url' => '/user/thank-you']);
    }

    /**
     * Show greeting page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectThankYou(): View|RedirectResponse
    {
        if (Session::has('thankyou')) {
            return view('frontend.thankyou');
        }

        return redirect()->route('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Frontend\StoreConsultation $request
     */
    public function storeConsultation(StoreConsultation $request): JsonResponse
    {
        if (!(new ReCaptcha(
            config('services.google-re-captcha.private'),
            new CurlPost()
        ))->verify(
            $request->input('g-recaptcha-response'),
            $request->ip()
        )->isSuccess()) {
            return response()->json(['re_captcha' => 'The reCAPTCHA wasn\'t entered correctly, Try it again.'], 422);
        }

        $consultation = Consultation::create(
            $request->validated()
        );

        if ($request->hasFile('art_works')) {
            $uploads = collect($request->file('art_works'));

            $uploads->each(function (UploadedFile $file) use ($consultation) {
                $consultation->addMedia($file)->toMediaCollection('art-works');
            });
        }

        Mail::to(config('mail.from.address'))
            ->bcc(config('mail.bcc.address'))
            ->send(new NewConsultationQueryReceivedEmployee($consultation));

        Mail::to($consultation)
            ->send(new NewConsultationQueryReceived($consultation));

        Session::flash('thankyou', "Consultation Submitted Successfully");

        return response()->json(['message' => 'Consultation Submitted Successfully !']);
    }

    /**
     * Clear all thing & re config
     *
     * @return \Illuminate\Http\Response
     */
    public function cacheAll(): Response
    {
        OPcache::clear();
        Artisan::call('clear-compiled');
        Artisan::call('optimize:clear');
        Artisan::call('auth:clear-resets');
        Artisan::call('config:clear');
        Artisan::call('cache:forget spatie.permission.cache');
        Artisan::call('cache:clear');
        Artisan::call('event:clear');
        Artisan::call('route:clear');
        Artisan::call('view:clear');
        Artisan::call('page-cache:clear');
        Artisan::call('media-library:clean', [
            '--force' => true
        ]);
        ResponseCache::clear();
        session()->flush();

        Artisan::call('optimize');
        Artisan::call('config:cache');
        Artisan::call('event:cache');
        Artisan::call('route:cache');
        Artisan::call('view:cache');
        Artisan::call('package:discover');
        OPcache::compile(true);

        return abort(404);
    }
}
