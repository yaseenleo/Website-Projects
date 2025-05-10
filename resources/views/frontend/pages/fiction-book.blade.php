<x-app-layout>

    <x-slot name="metadata">

        <x-frontend.seo-metadata
            title="USA's Renowned Fiction Ghostwriting and Publishing Company"
            description="Explore fiction book writing and publishing services led by the USA's best Ghostwriters who craft compelling fiction stories that become best sellers."
            robots="true"
        />

        <link rel="stylesheet" href="{{ mix('assets/frontend/css/service.css') }}" />
        <link rel="preload" as="image" href="{{ asset('assets/frontend/images/sample/path.webp') }}" />
        <link rel="preload" as="image" href="{{ asset('assets/frontend/images/icon/top-icon.webp') }}" />

    </x-slot>

    <section class="main-banner fiction-service text-lg-start text-center">
        <div class="container">
            <div class="row m-t-20">
                <div class="col-12 col-lg-7 col-md-12">
                    <span>
                        <span class="h2">
                            <span class="back-green">
                                Unlock
                            </span>
                            Imagination with the
                        </span>
                        <h1 class="h1">
                            Best Fiction Writing and Publishing
                            <span class="font-red">
                                Service
                            </span>
                        </h1>
                    </span>
                    <h2 class="h5">Turn Your Ideas into The Next Bestseller of the Era</h2>
                    <p>Americanbookwriter is an award-winning fiction writing and publishing company in the USA that has an outstanding record of transforming thoughts, ideas, and feelings into an exceptionally written fiction story! With 200+ fiction writing experts, writing a bestseller story is never challenging for us. Sign up today.</p>
                    <div class="p-b-10 m-b-10">
                        <a href="{{ route('pages', 'get-free-quote') }}">
                            <button type="button" class="btn-order">Write Fiction Book For Me</button>
                        </a>
                        <span class="or">OR</span>
                        <button role="button" type="button" onclick="openLiveChat();" class="btn-live">Grab A Custom Quote</button>
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
                    <img data-src="{{ asset('assets/frontend/images/services/fiction-book/fiction-book-writing.webp') }}" class="lazyload img-fluid" alt="Fiction Book Writing" title="Fiction Book Writing" loading="lazy" width="536" height="405" />
                </div>
                <div class="col-12 col-lg-6 my-auto">
                    <h2 class="h2">
                        American Fiction Writers Who Can
                        <span class="font-red">
                            Cast Spell
                        </span>
                        With Words
                    </h2>
                    <p>Your million-dollar idea is worth transforming into an exceptional story. And for that, you need our top-notch fiction writing agency in USA that's passionate about casting spells with words. Our imaginative fiction writers work tirelessly to shape the story to its best potential. Professional fiction book writers here whittle down the concept into a thrilling story so it exudes emotions and excitement to the audience. If fiction stories are done right, your simplest idea can be honed into a masterpiece.</p>
                    <div class="m-t-30">
                        <a href="{{ route('pages', 'get-free-quote') }}">
                            <button type="button" class="btn-order">Submit Details</button>
                        </a>
                        <button role="button" type="button" onclick="openLiveChat();" class="btn-live">Ring Experts Now</button>
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
                    Our Fiction Writing Website Rises Above All Sites For
                    <span class="font-red">
                        Plenty Of Reasons
                    </span>
                </h2>
                <p>The industry is occupied with uncountable fiction ghostwriting companies, but what makes New York's best sellers trust our fiction writing services in USA? Here are a couple of our standout features:</p>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="box">
                        <img data-src="{{ asset('assets/frontend/images/services/fiction-book/specialist-fiction-book-writers.svg') }}" class="lazyload img-fluid" alt="Specialist Fiction Book Writers" title="Specialist Fiction Book Writers" loading="lazy" width="48" height="48" />
                        <span class="h6">Specialist Fiction Book Writers</span>
                        <p>Ordinary content or book authors cannot pen down fiction stories; you know why? Because fiction writing calls for brilliant vocabulary and the capability to think out of the box. We've been lucky enough to work with specialist fiction book writers who tick both requirements and are professional enough!</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="box">
                        <img data-src="{{ asset('assets/frontend/images/services/fiction-book/on-time-deliveries-guaranteed.svg') }}" class="lazyload img-fluid" alt="On-Time Deliveries Guaranteed" title="On-Time Deliveries Guaranteed" loading="lazy" width="48" height="48" />
                        <span class="h6">On-Time Deliveries Guaranteed</span>
                        <p>Working with us is a fun and transparent process. We get started with the process as soon as the customer submits the requirements and keeps them updated. This results in on-time delivery and hand-to-hand correction of any flaws a customer might encounter during the process.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="box">
                        <img data-src="{{ asset('assets/frontend/images/services/fiction-book/unlimited-free-edits-in-content.svg') }}" class="lazyload img-fluid" alt="Unlimited Free Edits In Content" title="Unlimited Free Edits In Content" loading="lazy" width="48" height="48" />
                        <span class="h6">Unlimited Free Edits In Content</span>
                        <p>We stay by the client's side throughout the process. This means even if you stumble upon the tiniest error in the content, we'll fix the issue at no additional price. We guarantee 100% customer satisfaction. Even if you'd ask us for revisions thousands of times, we'll cater to your requirements happily.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta cta1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 offset-md-2 text-center">
                    <h2 class="h2">A Fiction Book Writing Service In USA That Can Make You Bestseller Overnight</h2>
                    <p>Hire USA's most trusted fiction ghostwriting services and get your masterpiece written by professionals within weeks. It's pretty simple with us.</p>
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
                                <button type="button" class="btn-live d-block p-0">Make Me Bestseller</button>
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
                        Breathe A Soul To Your Idea With USA's Expert
                        <span class="font-red">
                            Fiction Writer
                        </span>
                        Service
                    </h2>
                    <p>Search for the best book printing companies near me, and we'll surely rank the charts. Why? There are many features; get a glimpse of a few.</p>
                </div>
                <div class="row mt-5">
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="nav-lists">
                                    <div class="nav nav-tab-list flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <button class="nav-link active" id="v-pills-storytelling-prowess-tab" data-bs-toggle="pill" data-bs-target="#v-pills-storytelling-prowess" type="button" role="tab" aria-controls="v-pills-storytelling-prowess" aria-selected="true">
                                            Storytelling Prowess
                                        </button>
                                        <button class="nav-link" id="v-pills-theme-integration-tab" data-bs-toggle="pill" data-bs-target="#v-pills-theme-integration" type="button" role="tab" aria-controls="v-pills-theme-integration" aria-selected="false">
                                            Theme Integration
                                        </button>
                                        <button class="nav-link" id="v-pills-plumbing-the-depths-tab" data-bs-toggle="pill" data-bs-target="#v-pills-plumbing-the-depths" type="button" role="tab" aria-controls="v-pills-plumbing-the-depths" aria-selected="false">
                                            Plumbing The Depths
                                        </button>
                                        <button class="nav-link" id="v-pills-smooth-conversations-tab" data-bs-toggle="pill" data-bs-target="#v-pills-smooth-conversations" type="button" role="tab" aria-controls="v-pills-smooth-conversations" aria-selected="false">
                                            Smooth Conversations
                                        </button>
                                        <button class="nav-link" id="v-pills-revise-and-refine-tab" data-bs-toggle="pill" data-bs-target="#v-pills-revise-and-refine" type="button" role="tab" aria-controls="v-pills-revise-and-refine" aria-selected="false">
                                            Revise & Refine
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="tab-content nav-tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-storytelling-prowess" role="tabpanel" aria-labelledby="v-pills-storytelling-prowess-tab">
                                        <div class="service-details">
                                            <span>Storytelling Prowess</span>
                                            <p>The fiction writing experts here know how to spin a mind-blowing narrative that balances out plot twists, pacing, and tension and successfully keeps the readers hooked from the first page till the last word. Their storytelling prowess is just unmatchable.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-theme-integration" role="tabpanel" aria-labelledby="v-pills-theme-integration-tab">
                                        <div class="service-details">
                                            <span>Theme Integration</span>
                                            <p>Our professional ghostwriters explore, pick, and integrate the right theme to add depth and resonance to your story! They make sure readers have something to look for in the story, and the manuscript is not just a series of events happening one after another.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-plumbing-the-depths" role="tabpanel" aria-labelledby="v-pills-plumbing-the-depths-tab">
                                        <div class="service-details">
                                            <span>Plumbing The Depths</span>
                                            <p>Although fiction writing isn't based upon reality, it still needs to be accurate and based upon true facts. Our talented writers plumb the depths online to put in the right and perfect information in the book's content so your audience is not misguided.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-smooth-conversations" role="tabpanel" aria-labelledby="v-pills-smooth-conversations-tab">
                                        <div class="service-details">
                                            <span>Smooth Conversations</span>
                                            <p> What is a story without dialogues? Nothing! We craft engaging and authentic dialogues to enhance character interaction, which further advances the plots in the most natural and believable way. And this is what makes our books the 'bestseller'.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-revise-and-refine" role="tabpanel" aria-labelledby="v-pills-revise-and-refine-tab">
                                        <div class="service-details">
                                            <span>Revise & Refine</span>
                                            <p>The bestselling fiction writers always have their heads up to consider client's feedback and refine the work accordingly. Either you wish to edit some sections of the manuscript or want to refine the structure, the team here would do it absolutely free of cost.</p>
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
                        Some Of The Best-Selling Fiction Books Written By Our
                        <span class="font-red">
                            Fiction Writers
                        </span>
                    </h2>
                    <p>Want to gauge quality before hiring our professional American fiction writers? Go through the samples below, and you'll be satisfied!</p>
                </div>
            </div>
            <div class="row m-t-40">
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/fiction-book/book-1.webp') }}" class="lazyload img-fluid" alt="Easy Writes It" title="Easy Writes It" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/fiction-book/book-2.webp') }}" class="lazyload img-fluid" alt="How To Write A Book In One Month" title="How To Write A Book In One Month" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/fiction-book/book-3.webp') }}" class="lazyload img-fluid" alt="200 Libros Para Descargar Gratis" title="200 Libros Para Descargar Gratis" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/fiction-book/book-4.webp') }}" class="lazyload img-fluid" alt="The Road Once Taken" title="The Road Once Taken" loading="lazy" width="260" height="391" />
                </div>
            </div>
            <div class="row m-t-20">
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/fiction-book/book-5.webp') }}" class="lazyload img-fluid" alt="A Collection Unusual Of Diction" title="A Collection Unusual Of Diction" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/fiction-book/book-6.webp') }}" class="lazyload img-fluid" alt="Sattler's Woods" title="Sattler's Woods" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/fiction-book/book-7.webp') }}" class="lazyload img-fluid" alt="The Slipping Place" title="The Slipping Place" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/fiction-book/book-8.webp') }}" class="lazyload img-fluid" alt="Lost And Found" title="Lost And Found" loading="lazy" width="260" height="391" />
                </div>
            </div>
        </div>
    </section>
    <section class="cta cta1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 offset-md-2 text-center">
                    <span class="h2">Begin Pouring Down Your Ideas & Our Fiction Writers Will Begin ASAP!</span>
                    <p>Have something in your mind? Want to shape it through the right words? We are professional fiction book writers who'll grab your idea and shape it into an irresistible story.</p>
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
                                <button type="button" class="btn-live d-block p-0">Grab My Idea</button>
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
                        American Fiction Publishers
                        <span class="font-red">
                            Who Can Do Any Genre
                        </span>
                    </h2>
                    <p>We excel in all sub-genres of fiction like Adventure, Horror, Dystopian, Contemporary, and many more. Whether you want to encapsulate a magical world for your audience through fantasy stories or wish to instill thrill in your readers' spines via horror stories, our fiction writing experts can do it all! Our well-versed authors know how to adapt their writing styles accordingly. They know how to seamlessly connect with readers by crafting super imaginative scenarios forged out of the right words. Get in touch with us today, and let's discuss your best-seller idea!</p>
                    <div class="m-t-30">
                        <a href="{{ route('pages', 'get-free-quote') }}">
                            <button type="button" class="btn-order">Write My Fiction Book</button>
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
                    <img data-src="{{ asset('assets/frontend/images/services/fiction-book/fiction-book-writers.webp') }}" class="lazyload img-fluid" alt="Fiction Book Writers" title="Fiction Book Writers" loading="lazy" width="536" height="405" />
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
                        98% Of American Authors Recommend Our Top Fiction
                        <span class="font-red">
                            Book Writing
                        </span>
                        Service
                    </h2>
                    <p>Each client that we serve can happily vouch for us. Do you know why? Not only do we offer the best quality service, but we also take care of the client's experience. We stand by what we deliver to them.</p>
                </div>
            </div>
            <div class="swiper review-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">Can't put my experience into words! The fiction book writing was just so perfect. They helped me with the publishing as well. They published my fiction book on Kobo and Amazon. The price was very economical, and the service was fast.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/fiction-book/webster-york.webp') }}" class="lazyload img-fluid" alt="Webster York" title="Webster York" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Webster York</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">This fiction book writing company works with fiction book experts, who understood my idea and recommended how I should complete it and submit the book in a timely manner. I use their fiction book printing service, too. I am 100% satisfied with them.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/fiction-book/ogden-parr.webp') }}" class="lazyload img-fluid" alt="Ogden Parr" title="Ogden Parr" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Ogden Parr</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">I wanted a company that could handle all my requirements, from writing to editing, publishing, and printing. This is the only company that understood my requirements and catered to all of them at a very affordable price. Loved working with them.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/fiction-book/rae-kimberley.webp') }}" class="lazyload img-fluid" alt="Rae Kimberley" title="Rae Kimberley" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Rae Kimberley</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">A legit fiction book writing company in the USA! They work with American fiction book writers who are a dream team to work with. The best part is that it kept me in a loop throughout the whole process. A highly recommended fiction book agency.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/fiction-book/lyndon-miller.webp') }}" class="lazyload img-fluid" alt="Lyndon Miller" title="Lyndon Miller" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Lyndon Miller</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">Thoroughly enjoyed working with these fiction writing experts. Their team guided me step by step and assisted with book illustration as well. This is like a one-stop for all book writing and designing needs. This company is a dream come true.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/fiction-book/whit-wells.webp') }}" class="lazyload img-fluid" alt="Whit Wells" title="Whit Wells" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Whit Wells</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">I had a chance to work with the professionals of American Book Writer. I can confidently say this is the best writing, editing, and publishing service any fiction book writer can hire. The high-quality fiction book they wrote is absolutely flawless.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/fiction-book/corliss-booth.webp') }}" class="lazyload img-fluid" alt="Corliss Booth" title="Corliss Booth" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Corliss Booth</span>
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
                    <span class="h2">Step into the Literary Game with Fiction Specialist at Your Back</span>
                    <p>You have us – the professionals of fiction writing – at your back! If you have already written the book and need to give it a punch of professionalism, allow our eagle-eyed fiction book editors to take over.</p>
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
                                <button type="button" class="btn-live d-block p-0">Step Into The Literary Game</button>
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
                        USA's One Stop Fiction Book Company – We Write, Edit, Design,
                        <span class="font-red">
                            Publish & Print
                        </span>
                        !
                    </h2>
                </div>
            </div>
            <div class="scrollbar" id="style-2">
                <div class="force-overflow">
                    <div class="row m-t-20">
                        <div class="col-12 col-lg-6">
                            <h3 class="h4">One Stop for Fiction Book Writing, Editing & Designing</h3>
                            <p>We are not just the experts in writing, but we have on-boarded a team of talented fiction book designers as well. They take care of fiction book layout design, formatting and everything else that contributes to publishing a manuscript. By understanding what your book is about, our fiction book illustrators come up with designs that resonates with your manuscript. Plus, we offer fiction book editing service too. Just in case you need some language related touchups, consider relying on us.</p>
                        </div>
                        <div class="col-12 col-lg-6">
                            <h3 class="h4">Fiction Book Printing & Publishing Experts</h3>
                            <p>Is Amazon your dream shelf? You won’t have to reach out a different service provider for that because we offer top-notch fiction publishing services too. Not just for Amazon, but you can name any eBook platform and we'd get your book there. What's more, if your audience is not so tech savvy, you can still reach by getting your books printed by us. Yes, we offer fiction book printing services too and can deliver at your doorstep. So whatever your requirements are, just ping us and we'd cater them for you.</p>
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
                    <span class="h2">Queries Running In Your Head? Get Answered Right Away!</span>
                    <div class="accordion" id="faqs">
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">
                                    Can you edit, publish, and print my fiction book for me?
                                </button>
                            </h3>
                            <div id="collapse-1" class="accordion-collapse collapse" aria-labelledby="heading-1" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Cent-percent! We can write, edit, publish, print, and deliver your fiction book to you. We are a one-stop shop for all manuscript-related services. Our aim is to help our customers in any way we can. With us, getting your book is super easy.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                    How much does your fiction book writing service charge?
                                </button>
                            </h3>
                            <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>The prices start from $XXXX/page. But the price would surely vary depending on your requirements, the number of pages, and the effort required. We are an affordable fiction book company that offers every service at a very affordable price.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                    Does your fiction writing service offer any guarantee?
                                </button>
                            </h3>
                            <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Yes, our fiction writing website offers guarantees for client's assurance. We guarantee 100% client satisfaction, on-time deliveries, highest quality content, 24/7 assistance, and much more. We are always eager to exceed customer's expectations.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                    Can you offer me a consultation on my fiction book?
                                </button>
                            </h3>
                            <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Of course! If you are confused about the service or don't know where to start, please contact us. Our professional consultants will resolve your issues in the least time possible. You can always rely on us, even for basic consultation.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                                    I just want you to edit my fiction books. Can you help?
                                </button>
                            </h3>
                            <div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Yes. We don't only offer fiction book writing services but also offer fiction book editing services. That's because sometimes authors have completed their books but want someone to hone them to perfection. We can help you in reaching there in no time.</p>
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
