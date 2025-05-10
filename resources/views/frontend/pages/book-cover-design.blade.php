<x-app-layout>

    <x-slot name="metadata">

        <x-frontend.seo-metadata
            title="Professional & Creative Book Cover Designs In USA For {{ config('social-media.currency_symbol') }}249"
            description="Hire amazing book cover designers in a few clicks & get a custom book cover designed by our book artists for cheap to delight your audience at a glance."
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
                                Skilled
                            </span>
                            Cover Creator
                        </span>
                        <span class="h1">
                            Book In USA You
                            <span class="font-red">
                                Need
                            </span>
                        </span>
                    </h1>
                    <h2 class="h5">We're The Front Runner In Book Cover Design Market</h2>
                    <p>Let your audience grab your book without having a second thought with AmericanBookWriter. We're an affordable online book cover maker that adds the same spark on the covers. Our eBook cover designs are creative and unique that obliges people to order one!</p>
                    <div class="p-b-10 m-b-10">
                        <a href="{{ route('pages', 'get-free-quote') }}">
                            <button type="button" class="btn-order" style="width: 250px;">Customize My Book Cover Today</button>
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
                    <img data-src="{{ asset('assets/frontend/images/services/book-cover-design/book-cover-designer.webp') }}" class="lazyload img-fluid" alt="Book Cover Designer" title="Book Cover Designer" loading="lazy" width="536" height="405" />
                </div>
                <div class="col-12 col-lg-6 my-auto">
                    <h2 class="h2">
                        Novel Cover Designing In USA Gives The Perfect
                        <span class="font-red">
                            Hint Of Story
                        </span>
                        !
                    </h2>
                    <p>It's obvious that we can't read the book before buying. All you can do is flip through those pages. But actually, your book cover convinces people to buy a book. To make your story reach every corner of the USA, we show your book's potential through stellar covers. Our novel cover design services aid in people sneaking into the story so they can get a clue of what it's about. From brief intro to exceptional graphics, we handle everything. Only our illustrations are enough to give a rousing glimpse of your story. From the tiniest elements to the theme, we know how to transform it for any genre you show up with. Ultimately, our covers are sufficient for people to grab in a flash.</p>
                    <div class="m-t-30">
                        <a href="{{ route('pages', 'get-free-quote') }}">
                            <button type="button" class="btn-order">Design My Book Cover</button>
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
                    We're The Best Book Cover Design Maker In America
                    <span class="font-red">
                        For A Reason
                    </span>
                    !
                </h2>
                <p>Want your book covers to be breathtaking? You've got to grab the linkage to the best book cover design agency in the USA. Here are a few features that will grant your wish for incredible sales.</p>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="box">
                        <img data-src="{{ asset('assets/frontend/images/services/book-cover-design/mind-boggling-illustration.svg') }}" class="lazyload img-fluid" alt="Mind Boggling Illustration" title="Mind Boggling Illustration" loading="lazy" width="48" height="48" />
                        <span class="h6">Mind Boggling Illustration</span>
                        <p>There's no remedy that can break the curse of low sales other than our captivating book covers. We transform your cover into a unique one by adding the spark with exciting illustrations and graphics. We set it up for success by combining engaging typefaces and fonts.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="box">
                        <img data-src="{{ asset('assets/frontend/images/services/book-cover-design/expert-designers.svg') }}" class="lazyload img-fluid" alt="250+ Expert Designers" title="250+ Expert Designers" loading="lazy" width="48" height="48" />
                        <span class="h6">250+ Expert Designers</span>
                        <p>It's not just one person who does the job; an army behind us is working on the same motive of making your book instantly wipe out from the shelves. Our professional book cover designer will burn their days and nights straight to leave the specks of your story on the cover creatively.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="box">
                        <img data-src="{{ asset('assets/frontend/images/services/book-cover-design/fasted-turnaround.svg') }}" class="lazyload img-fluid" alt="Fasted Turnaround In USA" title="Fasted Turnaround In USA" loading="lazy" width="48" height="48" />
                        <span class="h6">Fasted Turnaround In USA</span>
                        <p>We give justice to the term 'pacing up' as we run faster than the clock. Unlike others, we don't take months to craft your cover. Our designing process takes no longer than 3 days. That's the record no one can beat, especially with the premium quality we deliver across the USA.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta cta1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 offset-md-2 text-center">
                    <h2 class="h2">There's No Genre That Our American Book Cover Designers Can't Work On!</h2>
                    <p>You no longer have to find a book cover designer who never declines any challenge. Here's a hint – they're the USA's most loved. Yes, you're right! Our fantasy book cover designers have tricks up their sleeves to produce a stellar cover.</p>
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
                                <button type="button" class="btn-live d-block p-0">Get A Classic Book Cover Designer</button>
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
                        Paying $199 For Cover Designing Can
                        <span class="font-red">
                            Give You So Much
                        </span>
                        !
                    </h2>
                    <p>Emptying your wallet is never the case with our book cover design maker. We design covers that scream quality and are worth every penny.</p>
                </div>
                <div class="row mt-5">
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="nav-lists">
                                    <div class="nav nav-tab-list flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <button class="nav-link active" id="v-pills-no-limit-to-genre-tab" data-bs-toggle="pill" data-bs-target="#v-pills-no-limit-to-genre" type="button" role="tab" aria-controls="v-pills-no-limit-to-genre" aria-selected="true">
                                            No Limit To Genre
                                        </button>
                                        <button class="nav-link" id="v-pills-guaranteed-results-tab" data-bs-toggle="pill" data-bs-target="#v-pills-guaranteed-results" type="button" role="tab" aria-controls="v-pills-guaranteed-results" aria-selected="false">
                                            Guaranteed Results
                                        </button>
                                        <button class="nav-link" id="v-pills-compelling-graphics-tab" data-bs-toggle="pill" data-bs-target="#v-pills-compelling-graphics" type="button" role="tab" aria-controls="v-pills-compelling-graphics" aria-selected="false">
                                            Compelling Graphics
                                        </button>
                                        <button class="nav-link" id="v-pills-affordable-prices-tab" data-bs-toggle="pill" data-bs-target="#v-pills-affordable-prices" type="button" role="tab" aria-controls="v-pills-affordable-prices" aria-selected="false">
                                            Affordable Prices
                                        </button>
                                        <button class="nav-link" id="v-pills-customized-tab" data-bs-toggle="pill" data-bs-target="#v-pills-customized" type="button" role="tab" aria-controls="v-pills-customized" aria-selected="false">
                                            100% Customized
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="tab-content nav-tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-no-limit-to-genre" role="tabpanel" aria-labelledby="v-pills-no-limit-to-genre-tab">
                                        <div class="service-details">
                                            <span>No Limit To Genre</span>
                                            <p>It's not a far-fetched claim, but we actually cater to any genre. That's because our best book cover designers compose unique and striking covers. Fantasy or horror, hit us with any, and let us flex our powers with work.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-guaranteed-results" role="tabpanel" aria-labelledby="v-pills-guaranteed-results-tab">
                                        <div class="service-details">
                                            <span>Guaranteed Results</span>
                                            <p>You want your book to get the most grabs, and our novel cover designers have the knack to do so. A lethal combination, right? Our cover depicts the right elements of the story enough to catch your audience's attention.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-compelling-graphics" role="tabpanel" aria-labelledby="v-pills-compelling-graphics-tab">
                                        <div class="service-details">
                                            <span>Compelling Graphics</span>
                                            <p>We don't just craft any standard cover but do the best that can be done. We know the inside out of the covers, giving us the edge in testing the most novel ideas. Be it graphics or illustrations, we do both flawlessly.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-affordable-prices" role="tabpanel" aria-labelledby="v-pills-affordable-prices-tab">
                                        <div class="service-details">
                                            <span>Affordable Prices</span>
                                            <p>Our quotes are strictly cheap, so no author has to pay the price through their noses. Look out for 'book cover designer near me,' and none of the prices could stand near the value we provide. We believe in giving more at less.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-customized" role="tabpanel" aria-labelledby="v-pills-customized-tab">
                                        <div class="service-details">
                                            <span>100% Customized</span>
                                            <p>If you want to stay indulged during the creative process, you've landed the right destination. We promote customization in designs, which means you can dictate to us what you want. We will do the rest in no time.</p>
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
                        A Quick Look Into Our Outstanding &
                        <span class="font-red">
                            Custom Book Covers
                        </span>
                    </h2>
                    <p>That's just the tip of the iceberg. Our talent is filled up to the brim as we've crossed over 5K+ successful covers.</p>
                </div>
            </div>
            <div class="row m-t-40">
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/book-cover-design/book-1.webp') }}" class="lazyload img-fluid" alt="Shearwater" title="Shearwater" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/book-cover-design/book-2.webp') }}" class="lazyload img-fluid" alt="A Date With Murder" title="A Date With Murder" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/book-cover-design/book-3.webp') }}" class="lazyload img-fluid" alt="The Awakening" title="The Awakening" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/book-cover-design/book-4.webp') }}" class="lazyload img-fluid" alt="Extinction Level" title="Extinction Level" loading="lazy" width="260" height="391" />
                </div>
            </div>
            <div class="row m-t-20">
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/book-cover-design/book-5.webp') }}" class="lazyload img-fluid" alt="Savage Winds" title="Savage Winds" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/book-cover-design/book-6.webp') }}" class="lazyload img-fluid" alt="The Dark Unwinding" title="The Dark Unwinding" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/book-cover-design/book-7.webp') }}" class="lazyload img-fluid" alt="The Maid's Disgrace" title="The Maid's Disgrace" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/book-cover-design/book-8.webp') }}" class="lazyload img-fluid" alt="She Came To Stay" title="She Came To Stay" loading="lazy" width="260" height="391" />
                </div>
            </div>
        </div>
    </section>
    <section class="cta cta1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 offset-md-2 text-center">
                    <h2 class="h2">Hit The Sales Ceiling With Our EBook Cover Design In The USA</h2>
                    <p>Want to be certain of turning your book into a best seller? Let our fiction book cover designers do the job that works like magic.</p>
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
                                <button type="button" class="btn-live d-block p-0">Design Cover To Boost My Sales</button>
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
                        Book Cover Creation In USA That Leaks Just The Right
                        <span class="font-red">
                            Amount of Story
                        </span>
                        !
                    </h2>
                    <p>A great book cover is hard to pull off. However, that's a child's play for the professionals like us. With 10+ years of experience, we have created over 10K+ covers with a precision that blessed the audience with the best-selling author's title. We've got the spell of making your title the season's blockbuster. Our mind drips the most creative graphics and illustrations that depict the story. In a nutshell, we know what parts to reveal in the picture so your audience would amp up to give it a quick grab.</p>
                    <div class="m-t-30">
                        <a href="{{ route('pages', 'get-free-quote') }}">
                            <button type="button" class="btn-order">Customize Book Cover – Sell More</button>
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
                    <img data-src="{{ asset('assets/frontend/images/services/book-cover-design/book-cover-design-service.webp') }}" class="lazyload img-fluid" alt="Book Cover Design Service" title="Book Cover Design Service" loading="lazy" width="536" height="405" />
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
                        Authors of USA Are Under The Spell Of Our
                        <span class="font-red">
                            Magical Book Covers
                        </span>
                    </h2>
                    <p>They aren't just loving our book cover design services for any reason. Navigate to find out the secret:</p>
                </div>
            </div>
            <div class="swiper review-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">I was torturing the search engine for the best book cover designers near me and saw that their book cover illustrators are open for hire. Their cover was 100% original, high quality, and set well with the story. Overall, my experience with them was smooth.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/book-cover-design/william-cruz.webp') }}" class="lazyload img-fluid" alt="William Cruz" title="William Cruz" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">William Cruz</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">After trying many book cover design companies, my heart felt right at theirs. They were known for their professional book cover design services, and I vouch for them. Their work was beyond perfect and low priced. Plus, they always offer free revisions.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/book-cover-design/emma-ryan.webp') }}" class="lazyload img-fluid" alt="Emma Ryan" title="Emma Ryan" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Emma Ryan</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">Their book cover designer website was impressive. They have affordable deals, so I instantly hired their book cover designers for self-publishers. They customized my cover for the romance genre. It was steamy and had everything I wanted. Great work!</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/book-cover-design/blake-quinn.webp') }}" class="lazyload img-fluid" alt="Blake Quinn" title="Blake Quinn" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Blake Quinn</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">I loved their graphic designer for book covers as they always create something unique. I wanted to tweak the title, and they gave me free revisions. Besides that, they never ask you for more money than the initial quote. They give quality at a cheap rate!</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/book-cover-design/alton-barrett.webp') }}" class="lazyload img-fluid" alt="Alton Barrett" title="Alton Barrett" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Alton Barrett</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">I hired their book cover designer for my first book, and the results were incredible. This time, I went again for fantasy book cover illustrators to do my book. I'm shocked to see how brilliant their work is. Creative and quality cover with fast delivery.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/book-cover-design/tina-watkins.webp') }}" class="lazyload img-fluid" alt="Tina Watkins" title="Tina Watkins" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Tina Watkins</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">I saw their book cover artists are for hire, so I placed an online order. Since I was short on time, I asked for a fast delivery. To my surprise, they did that within two days. I've never seen any book cover design website working this fast. Fantastic team!</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/book-cover-design/delores-poole.webp') }}" class="lazyload img-fluid" alt="Delores Poole" title="Delores Poole" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Delores Poole</span>
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
                    <h2 class="h2">Your Custom Book Cover Design Is Just A Tap Away!</h2>
                    <p>Halt your search for a graphic designer for book covers, as you've crossed paths with the best. We utilize the dimensions shrewdly.</p>
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
                                <button type="button" class="btn-live d-block p-0">I Want A Ravishing Book Cover</button>
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
                        We're The Book Cover Artists For Hire,
                        <span class="font-red">
                            Admired By Authors
                        </span>
                        In USA!
                    </h2>
                </div>
            </div>
            <div class="scrollbar" id="style-2">
                <div class="force-overflow">
                    <div class="row m-t-20">
                        <div class="col-12 col-lg-6">
                            <span class="h4">24/7 Services Second To None</span>
                            <p>We never make you the victim of lousy services that hang you up right after receiving the payment. Choose the best book cover designing services to save yourself from that and hit the jackpot. It's not our job to design enthralling covers, but it's our die-hard passion. That's why we never leave you alone during the process. The highest quality services and 24/7 are some of the perks you get along with your book cover. Our experts await your call days and nights, so when you share your experience, it's only positive words!</p>
                        </div>
                        <div class="col-12 col-lg-6">
                            <span class="h4">Outstanding Quality To Perfection</span>
                            <p>A great book cover has a lot of outstanding elements. But adding the right amount is crucial. Putting up everything, including character illustrations, irrelevant font, and an unmatched color scheme, is a recipe for disaster. Stop fretting as our passion for designing covers is filled up to the brim, and that's how we give your book the most attention. That's not it. We never miss out on the quality that will shine through the eyes of our audience. From quality to graphics, our game is stronger than ever.</p>
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
                    <span class="h2">We're Answering What's Greek To You!</span>
                    <div class="accordion" id="faqs">
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">
                                    What do you charge for book cover design and formatting services?
                                </button>
                            </h3>
                            <div id="collapse-1" class="accordion-collapse collapse" aria-labelledby="heading-1" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>It isn't under wraps anymore that we're highly affordable and cater to almost all budgets. We come in with a competitive price tag starting at $25. Depending on the genre or customization, the prices may fluctuate. However, It's still competitive.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                    Are your book cover design artists qualified to work on my project?
                                </button>
                            </h3>
                            <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Becoming part of our design team is no less than an uphill battle. Ebook cover designers and book cover illustrators have to pass through stringent and multiple interviews. Precisely, our top book cover designers are skilled to do the job right!</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                    Do you make fast delivery for cover design services for novel writers?
                                </button>
                            </h3>
                            <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Our ebook cover design services are fast already. Check out any book cover design website near me, and you'll find us with swift services. That's not merely a claim; our turnaround usually takes no more than 4 days across the USA.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                    What can I do if I dislike the work of your American book cover designers?
                                </button>
                            </h3>
                            <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Although it's unlikely, even if you dislike something, we have free revisions for your professional book cover design. You can give your feedback on how you like things done, and we'll make the tweaks until you show us a green flag.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                                    Can I give some inspiration to your illustrated book cover designer?
                                </button>
                            </h3>
                            <div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Absolutely! Our custom book cover design services are for Americans who want to stay involved during the process. You can decide everything and even share if you have any inspirations. For your assistance, our online consultation is available for you.</p>
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
