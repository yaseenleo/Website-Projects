<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="dns-prefetch" href="{{ config('app.url') }}" />
        <link rel="dns-prefetch" href="{{ config('app.asset_url') }}" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        {{ $metadata }}

        <meta name="msapplication-TileColor" content="#2b5797" />
        <link rel="manifest" href="{{ asset('site.webmanifest') }}" />
        <meta name="msapplication-TileImage" content="{{ asset('mstile-144x144.png') }}" />
        <link rel="mask-icon" href="{{ asset('safari-pinned-tab.svg') }}" color="#5bbad5" />
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}" />
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}" />
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}" />
        <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('android-chrome-192x192.png') }}" />
        <meta name="theme-color" content="#1e4454" />
        <meta name="yandex-verification" content="7e2bfee22bd8b49b" />

        <script>
            function openLiveChat() {
                LiveChatWidget.call("maximize");
            }
        </script>
    </head>
    <body>
        <div>
            <nav class="navbar navbar-expand-lg" id="scroll-control">
                <div class="container">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img data-src="{{ asset('assets/frontend/images/logo/american-book-writer.svg') }}" class="img-fluid lazyload" alt="{{ config('app.name') }}" title="{{ config('app.name') }}" width="177" height="48" loading="lazy" />
                    </a>
                    <button class="navbar-toggler d-none-lp" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav align-items-center d-none-lp">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('pages', 'about-us') }}">
                                    About us
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <span class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Services
                                </span>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('pages', 'book-printing') }}">
                                            Book Printing
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('pages', 'book-marketing') }}">
                                            Book Marketing
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('pages', 'book-publishing') }}">
                                            Book Publishing
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('pages', 'book-editing') }}">
                                            Book Editing
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('pages', 'novel-writing') }}">
                                            Novel Writing
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('pages', 'ebook-writing') }}">
                                            Ebook Writing
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('pages', 'memoir-writing') }}">
                                            Memoir Writing
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('pages', 'narrative-writing') }}">
                                            Narrative Writing
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('pages', 'biography-writing') }}">
                                            Biography Writing
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('pages', 'fiction-book') }}">
                                            Fiction Book
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('pages', 'children-book') }}">
                                            Children Book
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('pages', 'book-cover-design') }}">
                                            Book Cover Design
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('pages', 'book-design-and-illustration') }}">
                                            Book Design and Illustration
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('pages', 'review') }}">
                                    Reviews
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('pages', 'contact-us') }}">
                                    Contact us
                                </a>
                            </li>
                            <li class="nav-item number">
                                <ul class="d-inline list-unstyled">
                                    <li>
                                        <a class="nav-link p-0" href="tel:00{{ str_replace(['+', '-', '(', ')', ' '], '', config('social-media.phone.number')) }}">
                                            <i class="fa-solid fa-phone"></i>

                                            {{ config('social-media.phone.number') }}

                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link p-0" href="mailto:{{ config('social-media.email') }}">
                                            <i class="fa-solid fa-envelope"></i>

                                            {{ config('social-media.email') }}

                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link animate__animated animate__heartBeat animate__slow animate__infinite animate__delay-5s" href="{{ route('pages', 'book-consultant') }}">
                                    <button type="button" class="btn-live">
                                        Book Consultant
                                    </button>
                                </a>
                            </li>
                        </ul>
                        <ul class="d-none list-unstyled lp-header">
                            <li>
                                <a class="nav-link p-0" href="tel:00{{ str_replace(['+', '-', '(', ')', ' '], '', config('social-media.phone.number')) }}">
                                    <i class="fa-solid fa-phone"></i>
                                    <div class="call">
                                        <span>Call us today:</span>

                                        {{ config('social-media.phone.number') }}

                                    </div>
                                </a>
                            </li>
                            <li>
                                <button type="button" class="btn-order open_popup" data-bs-toggle="modal" data-bs-target="#popupModal">
                                    GET YOUR BOOK SELF PUBLISHED
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        {{ $slot }}

        <section class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <img data-src="{{ asset('assets/frontend/images/logo/american-writer.svg') }}" class="img-fluid lazyload" alt="{{ config('app.name') }}" title="{{ config('app.name') }}" width="177" height="40" loading="lazy" />
                        <p class="m-t-20">AmericanBookWriter is the ultimate hub of reliable and success-driven ghostwriting services. We can be the best friend that every author needs in their life. Our professional ghostwriters can take your rough drafts and convert them into literary masterpieces at extremely affordable prices.</p>
                    </div>
                    <div class="col-12 col-lg-8">
                        <div class="links">
                            <ul>
                                <li>
                                    <a class="nav-link" href="{{ route('pages', 'about-us') }}">
                                        About
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{ route('pages', 'review') }}">
                                        Reviews
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{ route('pages', 'contact-us') }}">
                                        Contact Us
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{ route('pages', 'faq') }}">
                                        Faqs
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{ route('pages', 'sitemap') }}">
                                        Sitemap
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{ route('pages', 'wikipedia-page-creation') }}">
                                        Wikipedia Page Creation
                                    </a>
                                </li>
                            </ul>
                        </div>
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

                            @if (config('social-media.twitter.url'))

                                <a target="_blank" rel="noopener noreferrer" href="{{ config('social-media.twitter.url') }}">
                                    <i class="fa-brands fa-twitter text-dark"></i>
                                    <span class="visually-hidden">Twitter</span>
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
                </div>
                <hr class="hr-line" />
                <div class="row m-t-10">
                    <div class="col-md-6">
                        <p class="para">© 2018 - {{ date('Y') }} {{ config('app.name') }}. All Rights Reserved</p>
                    </div>
                    <div class="col-md-6 text-end">
                        <img data-src="{{ asset('assets/frontend/images/icon/cards-payment.svg') }}" class="img-fluid lazyload mx-auto" alt="We Accept Cards Payment" title="We Accept Cards Payment" loading="lazy" width="260" height="33" />
                    </div>
                </div>
            </div>
        </section>

        <script defer src="{{ mix('assets/frontend/js/bootstrap.js') }}"></script>

        {{ $script ?? '' }}

        <script>
            window.addEventListener('load', () =>
                setTimeout(function () {
                    window.__lc = window.__lc || {};
                    window.__lc.license = 17215095;
                    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
                }, 4000)
            );
        </script>

        <noscript>
            <a href="https://www.livechat.com/chat-with/17215095" rel="nofollow">Chat with us</a>, powered by<a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a>
        </noscript>

        <style>

            {!! $fonts !!}

        </style>
    </body>
</html>
