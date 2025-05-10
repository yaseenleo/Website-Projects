<x-app-layout>

    <x-slot name="metadata">

        <x-frontend.seo-metadata
            title="Contact American Book Writer For Writing and Publishing Queries"
            description="American Book writing experts are right here, available 24/7 for your assistance! You can reach us out at any hour of the day and we'll cater to your query."
            robots="true"
        />

        <link rel="stylesheet" href="{{ mix('assets/frontend/css/contact.css') }}" />
        <link rel="preload" as="image" href="{{ asset('assets/frontend/images/sample/path.webp') }}" />

    </x-slot>

    <section class="main-banner">
        <div class="container">
            <div class="row m-t-20">
                <div class="col-12 col-lg-12 text-center">
                    <h1>
                        <span class="h1">
                            Book Writing
                            <span class="font-red">
                                Experts
                            </span>
                            At Your Service
                        </span>
                    </h1>
                    <h2 class="h5">Get Powerful Words To Support Your Ideas From American Writers</h2>
                    <p class="m-t-30">If you have a crazy idea in your mind that could make the next best-seller or want someone to write your autobiography, we are an ideal solution for all your literary needs. Share your authorship dreams with us and see how we make them a reality.</p>
                </div>
            </div>
        </div>
    </section>
    <hr class="hr-line" />

    <x-frontend.brand />

    <hr class="hr-line" />
    <section class="contact-form">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 col-md-12 col-sm-12 offset-lg-1">
                    <h2 class="h2">
                        Reach Out To Us
                        <span class="font-red">
                            Right Now
                        </span>
                        !
                    </h2>
                    <div class="row mb-5">
                        <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                            <div class="reach-us">
                                <img data-src="{{ asset('assets/frontend/images/icon/location.svg') }}" class="lazyload img-fluid" alt="Location" title="Location" loading="lazy" width="46" height="46" />
                                <p>
                                    Suite #11522 3422 SW 15 Street
                                    <br />
                                    Deerfield Beach, FL 33442
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                            <div class="reach-us">
                                <img data-src="{{ asset('assets/frontend/images/icon/phone.svg') }}" class="lazyload img-fluid" alt="Phone" title="Phone" loading="lazy" width="46" height="46" />
                                <a href="tel:00{{ str_replace(['+', '-', '(', ')', ' '], '', config('social-media.phone.number')) }}">
                                    <p>

                                        {{ config('social-media.phone.number') }}

                                    </p>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                            <div class="reach-us">
                                <img data-src="{{ asset('assets/frontend/images/icon/email.svg') }}" class="lazyload img-fluid" alt="Email" title="Email" loading="lazy" width="46" height="46" />
                                <a href="mailto:{{ config('social-media.email') }}">
                                    <p>

                                        {{ config('social-media.email') }}

                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="contact_form"></div>
            </div>
        </div>
    </section>

    <x-frontend.whats-app />

    <x-slot name="script">

        <script>
            let reCaptchaPublicKey = "{{ config('services.google-re-captcha.public') }}";
        </script>

        <script defer src="{{ mix('assets/frontend/js/contact.js') }}"></script>

    </x-slot>

</x-app-layout>
