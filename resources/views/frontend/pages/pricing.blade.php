<x-app-layout>

    <x-slot name="metadata">

        <x-frontend.seo-metadata
            title="Award-Winning Book Writing & Editing Services in USA"
            description="American Book Writer is a California-based Authors’ favorite website to get your book written and published smoothly. *Rated 5-Star *100% Royalties"
            robots="true"
        />

        <link rel="stylesheet" href="{{ mix('assets/frontend/css/pricing.css') }}" />
        <link rel="preload" as="image" href="{{ asset('assets/frontend/images/sample/path.webp') }}" />

    </x-slot>

    <section class="main-banner">
        <div class="container">
            <div class="row m-t-20">
                <div class="col-12 col-lg-12 text-center">
                    <h1>
                        <span class="h1">
                            <span class="font-red">
                                Pricing
                            </span>
                            Plans Tailored For You!
                        </span>
                    </h1>
                    <h2 class="h5">Keep your Literary Dreams Safe From Your Financial Limitations!</h2>
                    <p class="m-t-30">End your struggle with words and hire our American book writers to give your story a new life. You can get a personalized pricing package as per your literary and budget needs.</p>
                    <div class="m-t-40 mb-5">
                        <a href="{{ route('pages', 'get-free-quote') }}">
                            <button type="button" class="btn-order">Place Your Order</button>
                        </a>
                        <span class="or">OR</span>
                        <button role="button" type="button" onclick="openLiveChat();" class="btn-live">Let’s Discuss First</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="hr-line" />

    <x-frontend.brand />

    <hr class="hr-line" />
    <section class="pricing">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="pricing-details">
                        <div class="arrow-ribbon">20% OFF</div>
                        <div class="row">
                            <div class="col-12 col-lg-7 col-md-12 col-sm-12">
                                <span class="h5">Ghost Writing</span>
                                <ul>
                                    <li>
                                        - 200 Pages
                                    </li>
                                    <li>
                                        - Editing, Proofreading,Formatting
                                    </li>
                                    <li>
                                        - Free Cover Design
                                    </li>
                                    <li>
                                        - Unlimited Revision
                                    </li>
                                </ul>
                                <p>You Pay</p>
                                <span class="h6">{{ config('social-media.currency_symbol') }}999.00</span>
                                <a href="javascript:void(0)">
                                    <button type="button" class="btn-order">Order Now</button>
                                </a>
                            </div>
                            <div class="col-12 col-lg-5 col-md-12 col-sm-12 c-image">
                                <div class="pricing-image">
                                    <img data-src="{{ asset('assets/frontend/images/icon/ghost-writing.webp') }}" class="lazyload img-fluid" alt="Ghost Writing" title="Ghost Writing" loading="lazy" width="160" height="160" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="pricing-details">
                        <div class="arrow-ribbon">20% OFF</div>
                        <div class="row">
                            <div class="col-12 col-lg-7 col-md-12 col-sm-12">
                                <span class="h5">Ebook Writing</span>
                                <ul>
                                    <li>
                                        - 200 Pages
                                    </li>
                                    <li>
                                        - Editing, Proofreading,Formatting
                                    </li>
                                    <li>
                                        - Free Cover Design
                                    </li>
                                    <li>
                                        - Unlimited Revision
                                    </li>
                                </ul>
                                <p>You Pay</p>
                                <span class="h6">{{ config('social-media.currency_symbol') }}999.00</span>
                                <a href="javascript:void(0)">
                                    <button type="button" class="btn-order">Order Now</button>
                                </a>
                            </div>
                            <div class="col-12 col-lg-5 col-md-12 col-sm-12 c-image">
                                <div class="pricing-image">
                                    <img data-src="{{ asset('assets/frontend/images/icon/ebook-writing.webp') }}" class="lazyload img-fluid" alt="Ebook Writing" title="Ebook Writing" loading="lazy" width="160" height="160" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="pricing-details">
                        <div class="arrow-ribbon">20% OFF</div>
                        <div class="row">
                            <div class="col-12 col-lg-7 col-md-12 col-sm-12">
                                <span class="h5">Book Video Trailer</span>
                                <ul>
                                    <li>- 200 Pages</li>
                                    <li>- Editing, Proofreading,Formatting</li>
                                    <li>- Free Cover Design</li>
                                    <li>- Unlimited Revision</li>
                                </ul>
                                <p>You Pay</p>
                                <span class="h6">{{ config('social-media.currency_symbol') }}999.00</span>
                                <a href="javascript:void(0)">
                                    <button type="button" class="btn-order">Order Now</button>
                                </a>
                            </div>
                            <div class="col-12 col-lg-5 col-md-12 col-sm-12 c-image">
                                <div class="pricing-image">
                                    <img data-src="{{ asset('assets/frontend/images/icon/book-video.webp') }}" class="lazyload img-fluid" alt="Book Video Trailer" title="Book Video Trailer" loading="lazy" width="160" height="160" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="pricing-details">
                        <div class="arrow-ribbon">20% OFF</div>
                        <div class="row">
                            <div class="col-12 col-lg-7 col-md-12 col-sm-12">
                                <span class="h5">Copy Writing</span>
                                <ul>
                                    <li>
                                        - 200 Pages
                                    </li>
                                    <li>
                                        - Editing, Proofreading,Formatting
                                    </li>
                                    <li>
                                        - Free Cover Design
                                    </li>
                                    <li>
                                        - Unlimited Revision
                                    </li>
                                </ul>
                                <p>You Pay</p>
                                <span class="h6">{{ config('social-media.currency_symbol') }}999.00</span>
                                <a href="javascript:void(0)">
                                    <button type="button" class="btn-order">Order Now</button>
                                </a>
                            </div>
                            <div class="col-12 col-lg-5 col-md-12 col-sm-12 c-image">
                                <div class="pricing-image">
                                    <img data-src="{{ asset('assets/frontend/images/icon/copy-writing.webp') }}" class="lazyload img-fluid" alt="Copy Writing" title="Copy Writing" loading="lazy" width="160" height="160" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="pricing-details">
                        <div class="arrow-ribbon">20% OFF</div>
                        <div class="row">
                            <div class="col-12 col-lg-7 col-md-12 col-sm-12">
                                <span class="h5">Article Writing</span>
                                <ul>
                                    <li>
                                        - 200 Pages
                                    </li>
                                    <li>
                                        - Editing, Proofreading,Formatting
                                    </li>
                                    <li>
                                        - Free Cover Design
                                    </li>
                                    <li>
                                        - Unlimited Revision
                                    </li>
                                </ul>
                                <p>You Pay</p>
                                <span class="h6">{{ config('social-media.currency_symbol') }}999.00</span>
                                <a href="javascript:void(0)">
                                    <button type="button" class="btn-order">Order Now</button>
                                </a>
                            </div>
                            <div class="col-12 col-lg-5 col-md-12 col-sm-12 c-image">
                                <div class="pricing-image">
                                    <img data-src="{{ asset('assets/frontend/images/icon/article-writing.webp') }}" class="lazyload img-fluid" alt="Article Writing" title="Article Writing" loading="lazy" width="160" height="160" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="pricing-details">
                        <div class="arrow-ribbon">20% OFF</div>
                        <div class="row">
                            <div class="col-12 col-lg-7 col-md-12 col-sm-12">
                                <span class="h5">Book Video Trailer</span>
                                <ul>
                                    <li>
                                        - 200 Pages
                                    </li>
                                    <li>
                                        - Editing, Proofreading,Formatting
                                    </li>
                                    <li>
                                        - Free Cover Design
                                    </li>
                                    <li>
                                        - Unlimited Revision
                                    </li>
                                </ul>
                                <p>You Pay</p>
                                <span class="h6">{{ config('social-media.currency_symbol') }}999.00</span>
                                <a href="javascript:void(0)">
                                    <button type="button" class="btn-order">Order Now</button>
                                </a>
                            </div>
                            <div class="col-12 col-lg-5 col-md-12 col-sm-12 c-image">
                                <div class="pricing-image">
                                    <img data-src="{{ asset('assets/frontend/images/icon/book-video-trailer.webp') }}" class="lazyload img-fluid" alt="Book Video Trailer" title="Book Video Trailer" loading="lazy" width="160" height="160" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta cta1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 offset-md-2 text-center">
                    <span class="h2">Let Our Experts Work On Your Story!</span>
                    <p>Do not worry about your limited budget. We are here to craft a masterpiece for you at a price that will never leave any holes in your pocket. Hire us to experience the literary magic of our writing wizards.</p>
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
                                <button type="button" class="btn-live d-block p-0">Get A Custom Quote</button>
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
    <section class="reviews">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12 text-center">
                    <h2 class="h2">
                        Hear Directly From
                        <span class="font-red">
                            Authors In US
                        </span>
                        Who Have Been Our Clients
                    </h2>
                    <p>We truly care about our customers and can go to any extent to satisfy their needs. These reviews are a clear indication that we do not just make tall claims but also deliver what we promise.</p>
                </div>
            </div>
            <div class="swiper review-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">I was not expecting such extraordinary results from these writers. The way they presented my story was beyond remarkable. It felt like they were able to read my mind and execute even the finest details with complete precision. I am overwhelmed with the final result.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/icon/jake-marshal.webp') }}" class="lazyload img-fluid" alt="Jake Marshal" title="Jake Marshal" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Jake Marshal</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">The writing skills these experts possess are mind-blowing. You cannot ask for more from a team of book writing professionals. They not only met but exceeded all my expectations. I can confidently vouch for their services. They deserve all the appreciation.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/icon/ana-bryan.webp') }}" class="lazyload img-fluid" alt="Ana Bryan" title="Ana Bryan" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Ana Bryan</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">The response to my recent publication has been amazing, and all the credit goes to AmericanBookWriter.com. They did all the hard work and literally transformed my rough idea into a captivating story. The feedback from all the readers has been pretty positive.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/icon/mason-franklin.webp') }}" class="lazyload img-fluid" alt="Mason Franklin" title="Mason Franklin" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Mason Franklin</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">I was low on budget and had no idea whether any service provider would be ready to work on my project or not. Surprisingly, I came across this website and saw their pricing packages. I couldn’t believe my eyes because no one else was offering such cheap rates in the market.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/icon/lillie-garcia.webp') }}" class="lazyload img-fluid" alt="Lillie Garcia" title="Lillie Garcia" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Lillie Garcia</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">I hired them for a couple of services. From editing my draft to making it ready for publication and publishing it online on several platforms, they did it all for me. The final pricing for all these services was pretty reasonable. The combo package was really helpful.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/icon/nathan-carter.webp') }}" class="lazyload img-fluid" alt="Nathan Carter" title="Nathan Carter" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Nathan Carter</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">From timely delivery to affordable prices and top-notch quality, AmericanBookWriter.com outshines its counterparts in every aspect. My personal experience with this firm has been outstanding. They are now my go-to book writers for almost every genre.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/icon/cindy-katherine.webp') }}" class="lazyload img-fluid" alt="Cindy Katherine" title="Cindy Katherine" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Cindy Katherine</span>
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

    <x-frontend.whats-app />

    <x-slot name="script">

        <script>
            let reviewSlider = true;
            let reviewSliderScript = "{{ asset('assets/frontend/js/review-slider.js') }}";

            <x-frontend.lazy-script />

            document.getElementsByClassName('reviews')[0].addEventListener('mouseover', function() {
                if (reviewSlider) {
                    loadScript(reviewSliderScript);
                }

                reviewSlider = false;
            });

            setTimeout(function() {
                if (reviewSlider) {
                    loadScript(reviewSliderScript);

                    reviewSlider = false;
                }
            }, 5000);
        </script>

    </x-slot>

</x-app-layout>
