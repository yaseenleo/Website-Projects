<x-app-layout>

    <x-slot name="metadata">

        <x-frontend.seo-metadata
            title="Self-Publish Book with American Book Writer | Publish Your Book"
            description="American Book Writer is one of the best self-publishing companies that has published 60K+ books of all genres & on all platforms. Starts from {{ config('social-media.currency_symbol') }}699"
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
                                Reach
                            </span>
                            Millions of Readers with
                        </span>
                        <span class="h1">
                            USA's Largest Book
                            <span class="font-red">
                                Publishers
                            </span>
                        </span>
                    </h1>
                    <h2 class="h5">Be Visible Where Your Target Readers Are Present</h2>
                    <p>You've written your book, and now you are eying the best book publishing companies that make your book reach millions of readers, right? Americanbookwriter is the largest book publishing service that masters various publishing platforms, including Amazon Lulu, Kobo, etc., and can help your book get viral overnight.</p>
                    <div class="p-b-10 m-b-10">
                        <a href="{{ route('pages', 'get-free-quote') }}">
                            <button type="button" class="btn-order">Reach Millions Today</button>
                        </a>
                        <span class="or">OR</span>
                        <button role="button" type="button" onclick="openLiveChat();" class="btn-live">Be Visible</button>
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
                    <img data-src="{{ asset('assets/frontend/images/services/book-publishing/american-book-publisher.webp') }}" class="lazyload img-fluid" alt="American Book Publisher" title="American Book Publisher" loading="lazy" width="536" height="405" />
                </div>
                <div class="col-12 col-lg-6 my-auto">
                    <h2 class="h2">
                        American Publishing Company Transforming Manuscripts into
                        <span class="font-red">
                            Market-Ready Books
                        </span>
                    </h2>
                    <p>Want to publish your own book? We are proud you made that decision! We have been in the book publishing business for over ten years and have closely partnered with New York's best-sellers throughout this span. We are among the best book publishing companies that take care of the entire process using our deep expertise. Authors across the USA and other parts of the world prefer our book publishing services to transform their manuscripts into polished, market-ready books at an affordable price.</p>
                    <div class="m-t-30">
                        <a href="{{ route('pages', 'get-free-quote') }}">
                            <button type="button" class="btn-order">Make My Book Market-Ready</button>
                        </a>
                        <button role="button" type="button" onclick="openLiveChat();" class="btn-live">Transform My Book</button>
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
                    Navigate Reasons Making Us The 'Best' Among
                    <span class="font-red">
                        Self-Publishing Companies
                    </span>
                    in USA
                </h2>
                <p>We know that authors run to high-end book publishers. But the price tag they charge can easily break one's bank. Therefore, as professional book and poetry publishers, we offer similar standard publishing at economical prices. Here's what else that makes us the 'best':</p>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="box">
                        <img data-src="{{ asset('assets/frontend/images/services/book-publishing/top-book-publishers.svg') }}" class="lazyload img-fluid" alt="Top Book Publisher" title="Top Book Publisher" loading="lazy" width="48" height="48" />
                        <span class="h6">Top Book Publishers</span>
                        <p>Whether you are a new author or have already become a renowned author in the town, you can always consider working with us. We have roped in top book publishers of the town, who possess thorough industry knowledge. Our team can help you reach any book shelve of your choice.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="box">
                        <img data-src="{{ asset('assets/frontend/images/services/book-publishing/ownership.svg') }}" class="lazyload img-fluid" alt="100% Ownership" title="100% Ownership" loading="lazy" width="48" height="48" />
                        <span class="h6">100% Ownership</span>
                        <p>Several self-publishing websites demand a certain % of share in the profits the authors earn by selling their books. But we, as your publishing associate, will never expect any share. That's because you've done the major part. Hence, profits & ownership should belong to you only.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="box">
                        <img data-src="{{ asset('assets/frontend/images/services/book-publishing/consultation.svg') }}" class="lazyload img-fluid" alt="Consultation" title="Consultation" loading="lazy" width="48" height="48" />
                        <span class="h6">Consultation</span>
                        <p>If you are just stepping into the literary world and unsure how the procedure works, we'll help you. Our consultants stay by the author's side throughout the process to assist them at every step. You can raise as many queries as you want, and we'll resolve them for you within seconds.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta cta1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 offset-md-2 text-center">
                    <h2 class="h2">Hit The Shelves Of Amazon, Barnes & Noble, Kobo & More With the Best Publishing In Town!</h2>
                    <p>Done with the writing? Your part is completed! Tell us to 'publish my book', and we'll help your book hit the shelves of the biggest eBook platforms.</p>
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
                                <button type="button" class="btn-live d-block p-0">Hit The Shelves</button>
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
                        Get Your Book
                        <span class="font-red">
                            Edited, Formatted, Designed & Published,
                        </span>
                        Just For {{ config('social-media.currency_symbol') }}599
                    </h2>
                    <p>Who said hiring professional book publishers will reap out every penny in your pocket? We bring you the most affordable deal in the town that covers everything!</p>
                </div>
                <div class="row mt-5">
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="nav-lists">
                                    <div class="nav nav-tab-list flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <button class="nav-link active" id="v-pills-editing-tab" data-bs-toggle="pill" data-bs-target="#v-pills-editing" type="button" role="tab" aria-controls="v-pills-editing" aria-selected="true">
                                            Editing
                                        </button>
                                        <button class="nav-link" id="v-pills-formatting-tab" data-bs-toggle="pill" data-bs-target="#v-pills-formatting" type="button" role="tab" aria-controls="v-pills-formatting" aria-selected="false">
                                            Formatting
                                        </button>
                                        <button class="nav-link" id="v-pills-book-cover-tab" data-bs-toggle="pill" data-bs-target="#v-pills-book-cover" type="button" role="tab" aria-controls="v-pills-book-cover" aria-selected="false">
                                            Book Cover
                                        </button>
                                        <button class="nav-link" id="v-pills-metadata-tab" data-bs-toggle="pill" data-bs-target="#v-pills-metadata" type="button" role="tab" aria-controls="v-pills-metadata" aria-selected="false">
                                            Metadata
                                        </button>
                                        <button class="nav-link" id="v-pills-satisfaction-guaranteed-tab" data-bs-toggle="pill" data-bs-target="#v-pills-satisfaction-guaranteed" type="button" role="tab" aria-controls="v-pills-satisfaction-guaranteed" aria-selected="false">
                                            Satisfaction Guaranteed
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="tab-content nav-tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-editing" role="tabpanel" aria-labelledby="v-pills-editing-tab">
                                        <div class="service-details">
                                            <span>Editing</span>
                                            <p>Give your readers the smoothest reading experience by making sure your book is squeaky clean, with not even a smear of errors or flaws. Our editors would look into the book and make sure it is perfect in terms of spelling, grammar, and vocabulary.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-formatting" role="tabpanel" aria-labelledby="v-pills-formatting-tab">
                                        <div class="service-details">
                                            <span>Formatting</span>
                                            <p>Who would like to read a book with a messed-up format and jumbled sentences? No one! That's why, before the reader rejects your book, the eBook platform itself would turn down your manuscript. Hence, we look into the layout, so it's perfect.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-book-cover" role="tabpanel" aria-labelledby="v-pills-book-cover-tab">
                                        <div class="service-details">
                                            <span>Book Cover</span>
                                            <p>Needless to say, readers are going to judge your book by its cover! We make sure that your book gives a mind-blowing impression that your manuscript becomes irresistible to grab. Because, of course – what's a book without a compelling cover?</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-metadata" role="tabpanel" aria-labelledby="v-pills-metadata-tab">
                                        <div class="service-details">
                                            <span>Metadata</span>
                                            <p>Metadata plays a key role in getting a book deserving exposure. This includes pricing details, title, subtitle, ISBN, and other information that helps the reader find the book. Since the reader depends upon the metadata, we ensure it's perfectly written.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-satisfaction-guaranteed" role="tabpanel" aria-labelledby="v-pills-satisfaction-guaranteed-tab">
                                        <div class="service-details">
                                            <span>Satisfaction Guaranteed</span>
                                            <p>We stand behind our services and want our customers to be happy. That's why we bring a 100% customer satisfaction guarantee. We keep customers in the loop, allow them to review our changes, and ensure their expectations are exceeded.</p>
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
                        We Have Published Books
                        <span class="font-red">
                            On Every Platform
                        </span>
                        !
                    </h2>
                    <p>Be it publishing on Ingram Spark, Amazon, Kobo, Apple Books or any other platform, we make it all possible for our customers. We have a record of publishing across every renowned platform.</p>
                </div>
            </div>
            <div class="row m-t-40">
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/book-publishing/book-1.webp') }}" class="lazyload img-fluid" alt="Song Of Susannah" title="Song Of Susannah" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/book-publishing/book-2.webp') }}" class="lazyload img-fluid" alt="The Dark Unwinding" title="The Dark Unwinding" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/book-publishing/book-3.webp') }}" class="lazyload img-fluid" alt="The Orphan Thief" title="The Orphan Thief" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/book-publishing/book-4.webp') }}" class="lazyload img-fluid" alt="The Black House" title="The Black House" loading="lazy" width="260" height="391" />
                </div>
            </div>
            <div class="row m-t-20">
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/book-publishing/book-5.webp') }}" class="lazyload img-fluid" alt="The Good Death" title="The Good Death" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/book-publishing/book-6.webp') }}" class="lazyload img-fluid" alt="The Fourth Species" title="The Fourth Species" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/book-publishing/book-7.webp') }}" class="lazyload img-fluid" alt="Joseph Knox The Sleep Walker" title="Joseph Knox The Sleep Walker" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/book-publishing/book-8.webp') }}" class="lazyload img-fluid" alt="The Demon Code" title="The Demon Code" loading="lazy" width="260" height="391" />
                </div>
            </div>
        </div>
    </section>
    <section class="cta cta1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 offset-md-2 text-center">
                    <h2 class="h2">Hire Book Publishers & Make That Masterpiece Available For The World!</h2>
                    <p>Either it's publishing on Lulu, Amazon Kindle, Ingram or anything – it all can be done with us!</p>
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
                                <button type="button" class="btn-live d-block p-0">Publish Now</button>
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
                        A Publishing House In USA That
                        <span class="font-red">
                            Never Says 'No' To Any Genre
                        </span>
                        !
                    </h2>
                    <p>We have a diversified client base. Do you know why? Because we are one of the best book publishing companies that never says 'no' to any genre. Whether you write fiction, non-fiction, comics, autobiography, self-help, or for any genre, you can always come to us and say, 'publish my book on Amazon'. Your request will be catered as per your wish. We deal in audible publishing as well. We aim to give complete control to the authors during the process and help them attain success on their own terms.</p>
                    <div class="m-t-30">
                        <a href="{{ route('pages', 'get-free-quote') }}">
                            <button type="button" class="btn-order">Publish My Book</button>
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
                    <img data-src="{{ asset('assets/frontend/images/services/book-publishing/book-publishing.webp') }}" class="lazyload img-fluid" alt="Book Publishing" title="Book Publishing" loading="lazy" width="536" height="405" />
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
                        Checkout Authors Revealing The
                        <span class="font-red">
                            Best Book Publishing Service
                        </span>
                        In USA
                    </h2>
                    <p>Taking extra assurance is always a great move. Following are the reviews that will help you make the decision.</p>
                </div>
            </div>
            <div class="swiper review-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">Such a professional book publishing site it is! They helped me so much from the start till the end. The publishers explained everything nicely. I am very satisfied with the service.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/book-publishing/wilkes-wilson.webp') }}" class="lazyload img-fluid" alt="Wilkes Wilson" title="Wilkes Wilson" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Wilkes Wilson</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">This online book publisher in the USA helped me in getting my book published on 11 platforms for a very affordable price. I really enjoyed working with them and would surely recommend this site.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/book-publishing/hamilton-tanner.webp') }}" class="lazyload img-fluid" alt="Hamilton Tanne" title="Hamilton Tanne" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Hamilton Tanner</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">Indeed, it was a pleasing experience to work with them. I wasn't sure at the start, but upon a friend's recommendation, I hired them, and I am glad that I made this decision.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/book-publishing/rylan-sandford.webp') }}" class="lazyload img-fluid" alt="Rylan Sandford" title="Rylan Sandford" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Rylan Sandford</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">Need a publisher that beats Lulu Publishing? I swear, no other company matches the standards of this firm. They are truly experts who understand the nitty gritty of this field. Loved working with them.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/book-publishing/wilda-hamilton.webp') }}" class="lazyload img-fluid" alt="Wilda Hamilton" title="Wilda Hamilton" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Wilda Hamilton</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">I had complete control over the publishing process and never felt as if I wasn't a part of the procedure. It is super fun to work with them, as they take care of the whole process very professionally.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/book-publishing/edwina-daisy.webp') }}" class="lazyload img-fluid" alt="Edwina Daisy" title="Edwina Daisy" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Edwina Daisy</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">Really enjoyed hiring the top-notch book publishing experts working here. It was a great experience. My book is already ruling the shelves, and I couldn't be happier. Thanks a big time!</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/book-publishing/felicity-lillian.webp') }}" class="lazyload img-fluid" alt="Felicity Lillian" title="Felicity Lillian" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Felicity Lillian</span>
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
                    <h2 class="h2">Work One-On-One With Top Book Publishers In USA</h2>
                    <p>We will manage the entire process for you, from basic proofreading to editing and final publishing! Just let us know about your requirements, and we'll deal with them.</p>
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
                                <button type="button" class="btn-live d-block p-0">Work One-On-One Now</button>
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
                        Share Your Masterpiece with The World Using USA's
                        <span class="font-red">
                            Top Book Publishing
                        </span>
                        Agents
                    </h2>
                </div>
            </div>
            <div class="scrollbar" id="style-2">
                <div class="force-overflow">
                    <div class="row m-t-20">
                        <div class="col-12 col-lg-6">
                            <h2 class="h4">Get Books Published On 50+ Platforms</h2>
                            <p>Why stick to one platform when you can get your books published on 21+ platforms, including Lulu, Kindle, Amazon, Apple Books, Ingram, and so much more? And to get your books there, you won't have to go through the grind as we can format your book accordingly and extend its reach to a whole new level. Your only role is to tell us, 'publish my book', and we proceed from there.</p>
                        </div>
                        <div class="col-12 col-lg-6">
                            <h2 class="h4">EBook Publishing In USA, At A Dream Price</h2>
                            <p>You might be worried about Amazon book publishing costs because the rates in the industry are sky-high. However, that's not the case here. We offer Amazon Kindle direct publishing at a pretty low price. That's because we have a diversified client base, encompassing authors from every scale. We have the honour of working with renowned authors as well as newbies. Hence, we design our packages accordingly.</p>
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
                    <span class="h2">A General Guide To Frequently Asked Questions</span>
                    <div class="accordion" id="faqs">
                        <div class="accordion-item">
                            <h2 class="accordion-header h3" id="heading-1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">
                                    Why should I trust Americanbookwriter for book publishing?
                                </button>
                            </h2>
                            <div id="collapse-1" class="accordion-collapse collapse" aria-labelledby="heading-1" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Our company have been in this business for over ten years. Ten years is pretty enough to gain market knowledge and experience. We have in-depth knowledge about all eBook platforms and can help you get your book published on any platform.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header h3" id="heading-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                    Is it important to hire a book publishing service?
                                </button>
                            </h2>
                            <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Yes, it is very important to hire book publishers because publishing a book involves many particularities. Self-publishing might be easy to pocket, but a minor slip-up in it can bring irreversible damage. Hence, one must consider hiring a book publishing service.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header h3" id="heading-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                    How will you protect my book?
                                </button>
                            </h2>
                            <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Here, you can rest assured that your manuscript and its content is in the safest hands and won't be misused ever. We are a certified company, and we are compliant with GDPR. This means your book will always be protected, and not all employees will have access to it until it's published.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header h3" id="heading-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                    How long will it take to publish my book?
                                </button>
                            </h2>
                            <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>It takes approximately one to two weeks to publish a book. However, it can depend on several factors like the editing, formatting or designing required by the customer. Also, every platform has its own duration to review the book, which is not included in our service.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header h3" id="heading-5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                                    How much do you charge for a book publishing service?
                                </button>
                            </h2>
                            <div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Our book publishing service starts from $499, and then the price fluctuates as per several factors like the required editing, formatting, layout etc. Hence, it's better to show us the book first so we can quote a better price for the service.</p>
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
