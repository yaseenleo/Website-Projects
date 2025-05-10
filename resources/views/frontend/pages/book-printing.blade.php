<x-app-layout>

    <x-slot name="metadata">

        <x-frontend.seo-metadata
            title="Best Quality Book Printing Services | Wholesale Book Printing"
            description="We are one of the best print-on-demand companies in the USA, specialising in custom-printed books in hardcover or softcover formats. 11 days only."
            robots="true"
        />

        <link rel="stylesheet" href="{{ mix('assets/frontend/css/service.css') }}" />
        <link rel="preload" as="image" href="{{ asset('assets/frontend/images/sample/path.webp') }}" />
        <link rel="preload" as="image" href="{{ asset('assets/frontend/images/icon/top-icon.webp') }}" />

    </x-slot>

    <section class="main-banner text-lg-start text-center">
        <div class="container">
            <div class="row m-t-20">
                <div class="col-12 col-lg-7 col-md-12">
                    <h1>
                        <span class="h2">
                            <span class="back-green">
                                USA's
                            </span>
                            Book Printing Service That's
                        </span>
                        <span class="h1">
                            All About Ghostwriting
                            <span class="font-red">
                                Quality
                            </span>
                        </span>
                    </h1>
                    <h2 class="h5">Premium Quality Galore In Our Book Printing Shop</h2>
                    <p>If you want your story to be printed perfectly without compromising quality, AmericanBookWriter is your only solution. We're a team of professionals who customize your books in the finest quality. Bring any genre, and we'll print that on demand without ripping you off by any means!</p>
                    <div class="p-b-10 m-b-10">
                        <a href="{{ route('pages', 'get-free-quote') }}">
                            <button type="button" class="btn-order">Customize Your Book Today</button>
                        </a>
                        <span class="or">OR</span>
                        <button role="button" type="button" onclick="openLiveChat();" class="btn-live">Have A Word With Specialist</button>
                    </div>
                    <div class="p-b-0 m-b-0">
                        <img data-src="{{ asset('assets/frontend/images/icon/top-icon.webp') }}" class="lazyload img-fluid" alt="Rating" title="Rating" loading="lazy" width="395" height="92" />
                        <p class="m-t-20">
                            Rated
                            <span>
                                4.9/5
                            </span>
                            at TrustPilot shows we're great!
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-5 col-md-12 text-center">
                    <div class="form">
                        <span class="h3 text-center">
                            <span class="blue">
                                UP TO
                                <span class="red">
                                    50%
                                </span>
                                DISCOUNT
                            </span>
                        </span>
                        <div id="query_form"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="hr-line" />

    <x-frontend.brand />

    <hr class="hr-line" />
    <section class="book-writer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <img data-src="{{ asset('assets/frontend/images/services/book-printing/book-printing-service.webp') }}" class="lazyload img-fluid" alt="Book Printing Service" title="Book Printing Service" loading="lazy" width="536" height="405" />
                </div>
                <div class="col-12 col-lg-6 my-auto">
                    <h2 class="h2">
                        Book Printing Shop In USA That Turns Manuscript Into A
                        <span class="font-red">
                            Printed Book
                        </span>
                    </h2>
                    <p>Wrapping up your story is a great victory, but you can't just keep your manuscript gathering dust. Your dreams will come to fruition as we turn your manuscript into a full-fledged book. Our online book printing is your chance to print customized books according to the genre you have. Fantasy or horror, we print them all to launch your successful career. That's not it. We let have full control over how it comes to life. Be it size, color, cover, or pages, we do everything as you dictate to us. Rest assured, as our print quality is near to perfection. The vibrancy of colors, crisp pages, and HD prints are some features we offer. The cherry on top, our print-on-demand services make it easy on the pocket, too!</p>
                    <div class="m-t-30">
                        <a href="{{ route('pages', 'get-free-quote') }}">
                            <button type="button" class="btn-order">Let's Get This Begin</button>
                        </a>
                        <button role="button" type="button" onclick="openLiveChat();" class="btn-live">Get Quick Estimate</button>
                    </div>
                    <span class="email">
                        Email :
                        <a href="mailto:{{ config('social-media.email') }}">

                            {{ config('social-media.email') }}

                        </a>
                        Phone:
                        <a href="tel:00{{ str_replace(['+', '-', '(', ')', ' '], '', config('social-media.phone.number')) }}">

                            {{ config('social-media.phone.number') }}

                        </a>
                    </span>
                </div>
            </div>
        </div>
    </section>
    <hr class="hr-line" />
    <section class="why-choose">
        <div class="container">
            <div class="why-choose-heading">
                <h2 class="h2">
                    We've Won The Race Of Online Book Printing Services In The USA -
                    <span class="font-red">
                        Here's Why
                    </span>
                    !
                </h2>
                <p>You don't just get the best book printing services title out of nowhere. We worked hard to make this book printing platform a one-stop shop. Here are a few reasons for you to stick with us.</p>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="box">
                        <img data-src="{{ asset('assets/frontend/images/services/book-printing/print-on-demand-service.svg') }}" class="lazyload img-fluid" alt="Print On Demand Service" title="Print On Demand Service" loading="lazy" width="48" height="48" />
                        <span class="h6">Print On Demand Service</span>
                        <p>You no longer have to fill up your cart just to reach that minimum order limit. Thanks to our on-demand book printing that lets you choose the quantity. Don't let your money down the drain by ordering the quantity you actually need. Be it ten or hundreds, we entertain every order.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="box">
                        <img data-src="{{ asset('assets/frontend/images/services/book-printing/supreme-quality-printing.svg') }}" class="lazyload img-fluid" alt="Supreme Quality Printing" title="Supreme Quality Printing" loading="lazy" width="48" height="48" />
                        <span class="h6">Supreme Quality Printing</span>
                        <p>There's no chance we're patching you up with mediocre quality. Your mind-bending tales should be on paper only with the finest prints. That's what we do. Our portfolio book printing is all about high quality, from vivid colors to smooth pages. Flipping through pages will be super satisfying.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="box">
                        <img data-src="{{ asset('assets/frontend/images/services/book-printing/customization-at-wholesale-price.svg') }}" class="lazyload img-fluid" alt="Customization At Wholesale Price" title="Customization At Wholesale Price" loading="lazy" width="48" height="48" />
                        <span class="h6">Customization At Wholesale Price</span>
                        <p>Rest your fingers from typing 'best book printing near me' as we've already granted you a 'print my book at cheap' wish. We adjust your book to your preferences, including color, print, pages, size, and more. Remember all that happens in exchange for the cheapest rates. It's a steal.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta cta1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 offset-md-2 text-center">
                    <span class="h2">Entertaining All Genres Is What We Thrive On!</span>
                    <p>Saying no to any genre has never been our thing. From Fiction to Autobiography, our portfolio is packed with gems.</p>
                    <div class="row m-t-30">
                        <div class="col-md-4 box-end">
                            <div class="row g-0">
                                <div class="col-md-2 my-auto">
                                    <img data-src="{{ asset('assets/frontend/images/icon/phone.webp') }}" class="img-fluid lazyload mx-auto" alt="Phone No - {{ config('social-media.phone.number') }}" title="Phone No - {{ config('social-media.phone.number') }}" loading="lazy" width="38" height="38" />
                                </div>
                                <div class="col-md-9 text-start m-l-10">
                                    <span class="phone">
                                        <a href="tel:00{{ str_replace(['+', '-', '(', ')', ' '], '', config('social-media.phone.number')) }}" class="text-light">

                                            {{ config('social-media.phone.number') }}

                                        </a>
                                    </span>
                                    <span class="e-text">Call us, we are waiting.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 my-auto">
                            <a href="{{ route('pages', 'get-free-quote') }}">
                                <button type="button" class="btn-live d-block p-0">Print My Book Today</button>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <div class="row g-0">
                                <div class="col-md-2 my-auto">
                                    <img data-src="{{ asset('assets/frontend/images/icon/live-chat.webp') }}" class="img-fluid lazyload mx-auto" alt="Live Chat" title="Live Chat" loading="lazy" width="38" height="33" />
                                </div>
                                <div class="col-md-9 text-start m-l-10">
                                    <span class="phone">
                                        <button role="button" type="button" onclick="openLiveChat();" class="text-light">Talk To Our Experts</button>
                                    </span>
                                    <span class="e-text">to know the drill</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="creative-service">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="h2">
                        {{ config('social-media.currency_symbol') }}9 and 'Print My Book'
                        <span class="font-red">
                            Wish Earns
                        </span>
                        You So Much!
                    </h2>
                    <p>Search for the best book printing companies near me, and we'll surely rank the charts. Why? There are many features; get a glimpse of a few.</p>
                </div>
                <div class="row mt-5">
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="nav-lists">
                                    <div class="nav nav-tab-list flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <button class="nav-link active" id="v-pills-every-inch-customized-tab" data-bs-toggle="pill" data-bs-target="#v-pills-every-inch-customized" type="button" role="tab" aria-controls="v-pills-every-inch-customized" aria-selected="true">
                                            Every Inch Customized
                                        </button>
                                        <button class="nav-link" id="v-pills-on-demand-printing-tab" data-bs-toggle="pill" data-bs-target="#v-pills-on-demand-printing" type="button" role="tab" aria-controls="v-pills-on-demand-printing" aria-selected="false">
                                            On-Demand Printing
                                        </button>
                                        <button class="nav-link" id="v-pills-wholesale-price-tab" data-bs-toggle="pill" data-bs-target="#v-pills-wholesale-price" type="button" role="tab" aria-controls="v-pills-wholesale-price" aria-selected="false">
                                            Wholesale Price
                                        </button>
                                        <button class="nav-link" id="v-pills-timely-service-tab" data-bs-toggle="pill" data-bs-target="#v-pills-timely-service" type="button" role="tab" aria-controls="v-pills-timely-service" aria-selected="false">
                                            Timely Service
                                        </button>
                                        <button class="nav-link" id="v-pills-quality-printing-tab" data-bs-toggle="pill" data-bs-target="#v-pills-quality-printing" type="button" role="tab" aria-controls="v-pills-quality-printing" aria-selected="false">
                                            Quality Printing
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="tab-content nav-tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-every-inch-customized" role="tabpanel" aria-labelledby="v-pills-every-inch-customized-tab">
                                        <div class="service-details">
                                            <span>Every Inch Customized</span>
                                            <p>Out of many book printing companies, we're the only one who breaks the shackles of limitation. Our hardback book printing allows you to customize almost everything from design to binding. You can even add more!</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-on-demand-printing" role="tabpanel" aria-labelledby="v-pills-on-demand-printing-tab">
                                        <div class="service-details">
                                            <span>On-Demand Printing</span>
                                            <p>No more printing thousands of units and blowing off your money. We have introduced on-demand printing so you can order the quantity you actually need. Bring up any genre, and we'll print that beautifully.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-wholesale-price" role="tabpanel" aria-labelledby="v-pills-wholesale-price-tab">
                                        <div class="service-details">
                                            <span>Wholesale Price</span>
                                            <p>Fooling around with your finances is strictly out of our policies. Instead, we come in with galore discounts and affordable prices to get the signs of life back in your wallet. Especially for bulk orders, you can save up big.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-timely-service" role="tabpanel" aria-labelledby="v-pills-timely-service-tab">
                                        <div class="service-details">
                                            <span>Timely Service</span>
                                            <p>You get the latest updates on your project and get prompt delivery with us. We keep you in the loop so you know what's going on. We produce and print your book within a week to get it to your doorstep soon.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-quality-printing" role="tabpanel" aria-labelledby="v-pills-quality-printing-tab">
                                        <div class="service-details">
                                            <span>Quality Printing</span>
                                            <p>Any author's career can go down in flames with a flimsy structure and faded prints. That's never the case with us, as we always take the high road and bring you the best quality. Our prints will sparkle in the eyes of the audience.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="hr-line" />
    <section class="samples">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="h2">
                        Pampering Authors With USA's Finest Book Printing
                        <span class="font-red">
                            Creations
                        </span>
                    </h2>
                    <p>We love spoiling authors with our self-publish book printing. Dig through the few to get a quick look into our work.</p>
                </div>
            </div>
            <div class="row m-t-40">
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/sample/cradles-will-fall.webp') }}" class="lazyload img-fluid" alt="Cradles Will Fall" title="Cradles Will Fall" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/sample/spearhead.webp') }}" class="lazyload img-fluid" alt="Spearhead" title="Spearhead" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/sample/the-crossing-point.webp') }}" class="lazyload img-fluid" alt="The Crossing Point" title="The Crossing Point" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/sample/the-fourth-prophecy.webp') }}" class="lazyload img-fluid" alt="The Fourth Prophecy" title="The Fourth Prophecy" loading="lazy" width="260" height="391" />
                </div>
            </div>
            <div class="row m-t-20">
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/sample/the-paris-plot.webp') }}" class="lazyload img-fluid" alt="The Paris Plot" title="The Paris Plot" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/sample/perhaps-i-will.webp') }}" class="lazyload img-fluid" alt="Perhaps I Will" title="Perhaps I Will" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/sample/divine-feminine.webp') }}" class="lazyload img-fluid" alt="Divine Feminine" title="Divine Feminine" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/sample/glass-half-full-of-wine.webp') }}" class="lazyload img-fluid" alt="Glass Half Full of Wine" title="Glass Half Full of Wine" loading="lazy" width="260" height="391" />
                </div>
            </div>
        </div>
    </section>
    <section class="cta cta1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 offset-md-2 text-center">
                    <h3 class="h2">Manuscript Printing Or Any, We Customize Every Order!</h3>
                    <p>Customization is one of the things that makes us stand out from the pool of many printing agencies. Size or style, we do it all.</p>
                    <div class="row m-t-30">
                        <div class="col-md-4 box-end">
                            <div class="row g-0">
                                <div class="col-md-2 my-auto">
                                    <img data-src="{{ asset('assets/frontend/images/icon/phone.webp') }}" class="img-fluid lazyload mx-auto" alt="Phone No - {{ config('social-media.phone.number') }}" title="Phone No - {{ config('social-media.phone.number') }}" loading="lazy" width="38" height="38" />
                                </div>
                                <div class="col-md-9 text-start m-l-10">
                                    <span class="phone">
                                        <a href="tel:00{{ str_replace(['+', '-', '(', ')', ' '], '', config('social-media.phone.number')) }}" class="text-light">

                                            {{ config('social-media.phone.number') }}

                                        </a>
                                    </span>
                                    <span class="e-text">Call us, we are waiting.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 my-auto">
                            <a href="{{ route('pages', 'get-free-quote') }}">
                                <button type="button" class="btn-live d-block p-0">Customize My Book – Boost My Sales</button>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <div class="row g-0">
                                <div class="col-md-2 my-auto">
                                    <img data-src="{{ asset('assets/frontend/images/icon/live-chat.webp') }}" class="img-fluid lazyload mx-auto" alt="Live Chat" title="Live Chat" loading="lazy" width="38" height="33" />
                                </div>
                                <div class="col-md-9 text-start m-l-10">
                                    <span class="phone">
                                        <button role="button" type="button" onclick="openLiveChat();" class="text-light">Talk To Our Experts</button>
                                    </span>
                                    <span class="e-text">to know the drill</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="book-writer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 my-auto">
                    <h2 class="h2">
                        Print Any Genre On-Demand With Top Book
                        <span class="font-red">
                            Printing Platform
                        </span>
                        In USA
                    </h2>
                    <p>Are you still tied up in searching 'yearbook printing near me' or 'bookbinding near me'? If that's what your schedule is like, we have good news. Our book printing on-demand is there to cheer you up with professional services. With a substantial in-house printing facility, we take pride in revealing that now we entertain any quantity. In addition, we love to work on any genre. Thriller, suspense, or memoir, our hardcover book printing services will tackle any. Ultimately, all eyes will be on your fantastic book!</p>
                    <div class="m-t-30">
                        <a href="{{ route('pages', 'get-free-quote') }}">
                            <button type="button" class="btn-order">Get Free Quote</button>
                        </a>
                        <button role="button" type="button" onclick="openLiveChat();" class="btn-live">Chat With Us</button>
                    </div>
                    <span class="email">
                        Email :
                        <a href="mailto:{{ config('social-media.email') }}">

                            {{ config('social-media.email') }}

                        </a>
                        Phone:
                        <a href="tel:00{{ str_replace(['+', '-', '(', ')', ' '], '', config('social-media.phone.number')) }}">

                            {{ config('social-media.phone.number') }}

                        </a>
                    </span>
                </div>
                <div class="col-12 col-lg-6">
                    <img data-src="{{ asset('assets/frontend/images/services/book-printing/book-printing-company.webp') }}" class="lazyload img-fluid" alt="Book Printing Company" title="Book Printing Company" loading="lazy" width="536" height="405" />
                </div>
            </div>
        </div>
    </section>
    <hr class="hr-line" />
    <section class="reviews">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12 text-center">
                    <h2 class="h2">
                        Our Book Printing Service Stealing Hearts Of
                        <span class="font-red">
                            Americans
                        </span>
                        !
                    </h2>
                    <p>That's not even 2% of what we receive daily. Americans are falling for us; give it a read to understand why:</p>
                </div>
            </div>
            <div class="swiper review-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">I have worked with the best print-on-demand book companies, but they all had minimum order quantities. I always end up spending more than the actual budget. That's why working with them was a pleasant experience. They were cheap with no minimum!</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/book-printing/francis-vaughn.webp') }}" class="lazyload img-fluid" alt="Francis Vaughn" title="Francis Vaughn" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Francis Vaughn</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">After searching for 'cheap printing and binding services near me', I came across many websites, but none of the prices were as good as theirs. I ordered everything from their single to coloring book printing; everything turned out perfectly as usual.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/book-printing/nadine-duncan.webp') }}" class="lazyload img-fluid" alt="Nadine Duncan" title="Nadine Duncan" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Nadine Duncan</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">When it comes to quality, there's no one better than them. I went with their wholesale book printing and opted for spiral-bound printing. In the end, they proved them the king with quality. Just search for 'book binding service near me' and order!</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/book-printing/noah-barker.webp') }}" class="lazyload img-fluid" alt="Noah Barker" title="Noah Barker" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Noah Barker</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">My professional photo book printing looked better than what I expected. The customization list was lengthy, but they pulled it off without a hitch. Plus, the charges were highly affordable for the customization and the quality. They're genuinely the best!</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/book-printing/evelyn-shelton.webp') }}" class="lazyload img-fluid" alt="Evelyn Shelton" title="Evelyn Shelton" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Evelyn Shelton</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">I finally went with their deal after digging into multiple book printing services near me. It was a cheap deal, but the reviews were great. I specifically customized the pages, and they did that right on the first try. They had low prices and original work!</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/book-printing/geoffrey-hunter.webp') }}" class="lazyload img-fluid" alt="Geoffrey Hunter" title="Geoffrey Hunter" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Geoffrey Hunter</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">Printing your own book was challenging, so I hired their legal and design team. From children's to art book printing, they did a great job. I came for comic book printing this time, and they did that within 10 days. They were incredibly fast!</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/book-printing/darryl-briggs.webp') }}" class="lazyload img-fluid" alt="Darryl Briggs" title="Darryl Briggs" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Darryl Briggs</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="swiper-button-next">
                    <img data-src="{{ asset('assets/frontend/images/icon/arrow-left.webp') }}" class="lazyload img-fluid" alt="Left" title="Left" loading="lazy" width="20" height="20" />
                </div>
                <div class="swiper-button-prev">
                    <img data-src="{{ asset('assets/frontend/images/icon/arrow-right.webp') }}" class="lazyload img-fluid" alt="Right" title="Right" loading="lazy" width="20" height="20" />
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <section class="cta cta1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 offset-md-2 text-center">
                    <h2 class="h2">American Book Printers Guaranteeing Strudiest Binding!</h2>
                    <p>Let the reader sink in the fascination of our perfect binding. Be it wire-o-bound or saddle stitch, choose what you like.</p>
                    <div class="row m-t-30">
                        <div class="col-md-4 box-end">
                            <div class="row g-0">
                                <div class="col-md-2 my-auto">
                                    <img data-src="{{ asset('assets/frontend/images/icon/phone.webp') }}" class="img-fluid lazyload mx-auto" alt="Phone No - {{ config('social-media.phone.number') }}" title="Phone No - {{ config('social-media.phone.number') }}" loading="lazy" width="38" height="38" />
                                </div>
                                <div class="col-md-9 text-start m-l-10">
                                    <span class="phone">
                                        <a href="tel:00{{ str_replace(['+', '-', '(', ')', ' '], '', config('social-media.phone.number')) }}" class="text-light">

                                            {{ config('social-media.phone.number') }}

                                        </a>
                                    </span>
                                    <span class="e-text">Call us, we are waiting.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 my-auto">
                            <a href="{{ route('pages', 'get-free-quote') }}">
                                <button type="button" class="btn-live d-block p-0">Print My Book Immediately</button>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <div class="row g-0">
                                <div class="col-md-2 my-auto">
                                    <img data-src="{{ asset('assets/frontend/images/icon/live-chat.webp') }}" class="img-fluid lazyload mx-auto" alt="Live Chat" title="Live Chat" loading="lazy" width="38" height="33" />
                                </div>
                                <div class="col-md-9 text-start m-l-10">
                                    <span class="phone">
                                        <button role="button" type="button" onclick="openLiveChat();" class="text-light">Talk To Our Experts</button>
                                    </span>
                                    <span class="e-text">to know the drill</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <h2 class="h2 mx-auto text-center">
                        Becoming USA's Top Book Printing House With
                        <span class="font-red">
                            Outstanding
                        </span>
                        Work
                    </h2>
                </div>
            </div>
            <div class="scrollbar" id="style-2">
                <div class="force-overflow">
                    <div class="row m-t-20">
                        <div class="col-12 col-lg-6">
                            <h2 class="h4">Lulu Book Printing and More</h2>
                            <p>Printing quality is a major factor that affects sales. We're sure you don't want to sabotage that. Bank on us as our name comes in the best book printing agencies in the USA. We take care of the tiniest aspect to give a flawless reading experience. Clear words, no ink bleeding, and much more. That's for print books, but it's equally important for your soft copy to be perfect. That's why we make your ebook a perfection for it to rock on platforms like Lulu, Amazon, Kobo, etc. In a nutshell, our quality is a game changer.</p>
                        </div>
                        <div class="col-12 col-lg-6">
                            <span class="h4">High On Satisfaction Every Time</span>
                            <p>Do you keep searching for the 'book printers near me' and get something just pathetic every time? Ditch those unreliable options; our services are the best you can get. Not just quality, but our service also ranks high on our priority list. Our team is all ears until you get what you came for. From random queries to rectifying big issues, our specialists deal with everything. They're trained to give the prompt solution. Whether day or night, we're at your disposal so you get the taste of the USA's best printing agency.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="hr-line" />
    <section class="faqs">
        <div class="container">
            <div class="row g-0">
                <div class="col-12 col-lg-6">
                    <span class="h2">Dispel Any Doubts!</span>
                    <div class="accordion" id="faqs">
                        <div class="accordion-item">
                            <h2 class="accordion-header h3" id="heading-1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">
                                    Are you one of the most affordable print-on-demand companies?
                                </button>
                            </h2>
                            <div id="collapse-1" class="accordion-collapse collapse" aria-labelledby="heading-1" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>That's for sure! Our book printing company offers the best assistance at cheap prices. Although top American book printers come at premium price tags, we're beating everyone with competitive rates. Precisely, we are the best and budget-friendly too.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header h3" id="heading-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                    What can I customize in my book printing and binding order in the USA?
                                </button>
                            </h2>
                            <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Our company has almost everything one can customize. You can get the ball rolling with the size, page, cover, and design and add additional items like ribbon bookmarks. If you have any specific, we'd print that as a cover or accordingly.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header h3" id="heading-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                    Do you provide hardcover book printing services for a last-minute order?
                                </button>
                            </h2>
                            <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>We are the USA's favorite for multiple reasons. Our fast delivery is one of them. Not only do we offer a swift turnaround, but we cater to almost every order. Even if you show up at the 11th hour, we'd give your project the same protocol and fast delivery.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header h3" id="heading-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                    Is there any minimum order limit for your online book printing services?
                                </button>
                            </h2>
                            <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>This has to be the biggest news of the year that we don't have any minimum order limit. The best part is that we offer print-on-demand services. This means you no longer have to order more just to meet the requirement. Simply order what you need!</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header h3" id="heading-5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                                    What is the quality of your printing and binding services online in USA?
                                </button>
                            </h2>
                            <div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Our custom book printing prioritizes quality. Our printing is of the finest quality with vibrant colors. No pixelation issues and no ink bleeding; our hardcover book printing is one of the best in the market. Pages are so smooth that you'd keep flipping.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="form">
                        <span class="h3 text-center">
                            <span class="red">Book Free Consultation</span>
                            <p>
                                <strong>
                                    Or Call us to discuss now on
                                    <a class="phone-link" href="tel:00{{ str_replace(['+', '-', '(', ')', ' '], '', config('social-media.phone.number')) }}">

                                        {{ config('social-media.phone.number') }}

                                    </a>
                                </strong>
                            </p>
                        </span>
                        <div id="service_form"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-frontend.whats-app />

    <x-slot name="script">

        <x-frontend.service-script />

    </x-slot>

</x-app-layout>
