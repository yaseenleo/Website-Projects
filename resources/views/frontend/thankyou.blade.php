<x-app-layout>

    <x-slot name="metadata">

        <x-frontend.seo-metadata
            title="Thank You! | {{ config('app.name') }}"
            description=""
            robots="true"
        />

        <link rel="stylesheet" href="{{ mix('assets/frontend/css/thankyou.css') }}" />
        <link rel="preload" as="image" href="{{ asset('assets/frontend/images/thankyou/thankyou.webp') }}" />
        <link rel="preload" as="image" href="{{ asset('assets/frontend/images/thankyou/trusted-logo.webp') }}" />
        <link rel="preload" as="image" href="{{ asset('assets/frontend/images/thankyou/american-book-writer-logo.svg') }}" />

    </x-slot>

    <section class="thank-you">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <img data-src="{{ asset('assets/frontend/images/thankyou/thankyou.webp') }}" class="lazyload img-fluid mx-auto" alt="Thank You" title="Thank You" loading="lazy" width="478" height="343" />
                    <span class="h4">We'll be in your inbox soon !</span>
                    <p class="m-t-10">
                        Bounce off your creative ideas to our expert book writers
                        <br />
                        online and they’d tackle them using their years of writing
                    </p>
                    <img data-src="{{ asset('assets/frontend/images/thankyou/trusted-logo.webp') }}" class="lazyload img-fluid mx-auto" alt="Trusted" title="Trusted" loading="lazy" width="601" height="64" />
                </div>
            </div>
            <div class="row m-t-50">
                <div class="col-12 col-lg-4">
                    <img data-src="{{ asset('assets/frontend/images/thankyou/american-book-writer-logo.svg') }}" class="img-fluid lazyload" alt="American Book Writer" title="American Book Writer" width="150" height="53" loading="lazy" />
                </div>
                <div class="col-12 col-lg-4">
                    <span class="h6">Follow Us On:</span>
                    <div class="socials-icons">

                        @if (config('social-media.facebook.url'))

                            <a target="_blank" rel="noopener noreferrer" href="{{ config('social-media.facebook.url') }}">
                                <i class="fa-brands fa-facebook-f text-dark"></i>
                                <span class="visually-hidden">Facebook</span>
                            </a>

                        @endif

                        @if (config('social-media.instagram.url'))

                            <a target="_blank" rel="noopener noreferrer" href="{{ config('social-media.instagram.url') }}">
                                <i class="fa-brands fa-instagram text-dark"></i>
                                <span class="visually-hidden">Instagram</span>
                            </a>

                        @endif

                        @if (config('social-media.linkedin-in.url'))

                            <a target="_blank" rel="noopener noreferrer" href="{{ config('social-media.linkedin-in.url') }}">
                                <i class="fa-brands fa-linkedin-in text-dark"></i>
                                <span class="visually-hidden">LinkedIn</span>
                            </a>

                        @endif

                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <img data-src="{{ asset('assets/frontend/images/thankyou/secured-payment.svg') }}" class="img-fluid lazyload" alt="Secured Payment" title="Secured Payment" width="200" height="22" loading="lazy" />
                </div>
            </div>
            <div>
                <p class="para">© 2018 - {{ date('Y') }} - {{ config('app.name') }}. All Rights Reserved</p>
            </div>
        </div>
    </section>

</x-app-layout>
