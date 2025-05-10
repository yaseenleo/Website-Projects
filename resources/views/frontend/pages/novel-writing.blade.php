<x-app-layout>

    <x-slot name="metadata">

        <x-frontend.seo-metadata
            title="Award-Winning Novel Writing Service By American Novel Writers"
            description="Captivate readers by hiring a novel writing company in the USA. Our American novel experts will simplify the process of Becoming a Self-Published Author."
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
                                Get
                            </span>
                            Ranked Among Elite Authors
                        </span>
                        <span class="h1">
                            with World’s #1 Novel Writing
                            <span class="font-red">
                                Service
                            </span>
                        </span>
                    </h1>
                    <h2 class="h5">Your Story Is In Safe Hands With Our Novel Writers!</h2>
                    <p>If you want your story to grab the spotlight, then novel writing and publishing help from AmericanBookWriter.com can help you out. You do not have to fight with words. Our novel writing experts will simplify the process of becoming a self-published author for you. The maestros of storytelling will make sure that your story claims its spot among the list of chartbusters.</p>
                    <div class="p-b-10 m-b-10">
                        <a href="{{ route('pages', 'get-free-quote') }}">
                            <button type="button" class="btn-order">It’s Writing Time</button>
                        </a>
                        <span class="or">OR</span>
                        <button role="button" type="button" onclick="openLiveChat();" class="btn-live">Get in Touch</button>
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
                    <img data-src="{{ asset('assets/frontend/images/services/novel-writing/novel-writing-service.webp') }}" class="lazyload img-fluid" alt="Novel Writing Service" title="Novel Writing Service" loading="lazy" width="536" height="405" />
                </div>
                <div class="col-12 col-lg-6 my-auto">
                    <h2 class="h2">
                        Novel Writing and Publishing Company That Only
                        <span class="font-red">
                            Produces Classics
                        </span>
                    </h2>
                    <p>Crafting a bestseller can be extremely challenging especially if you are working on something like a novel. We are an all-in-one firm that can be your novel writing service provider or memoir writing company. It takes something special to convert a plot into a novel that readers can enjoy. With twists and turns keeping the readers intrigued, they will be able to connect with your story on an emotional level. We know how to use the power of words to craft a narrative that breaks all the creativity barriers.</p>
                    <div class="m-t-30">
                        <a href="{{ route('pages', 'get-free-quote') }}">
                            <button type="button" class="btn-order">Take My Order</button>
                        </a>
                        <button role="button" type="button" onclick="openLiveChat();" class="btn-live">Consult With An Expert</button>
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
                    Embrace The Power Of Storytelling With The
                    <span class="font-red">
                        Best Novel
                    </span>
                    Writers and Publishers
                </h2>
                <p>You can get our assistance with writing a romance, fiction, fantasy, mystery, graphic, or any other novel that you want. Our writing holds the power to transport readers to a different dimension. The way we develop characters can force the audience to build a connection with each one of them. Some top reasons why American authors prefer us for online book writing and publishing are:</p>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="box">
                        <img data-src="{{ asset('assets/frontend/images/services/novel-writing/budget-friendly-packages.svg') }}" class="lazyload img-fluid" alt="Budget Friendly Packages" title="Budget Friendly Packages" loading="lazy" width="48" height="48" />
                        <span class="h6">Budget-Friendly Packages</span>
                        <p>Understandably, every author who has a story in mind might not have enough resource to afford expensive novel writing services. We care about our customers’ budgets and respect their financial constraints. You can hire our experts to get an excellent story without breaking the bank.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="box">
                        <img data-src="{{ asset('assets/frontend/images/services/novel-writing/quality-content-from-scratch.svg') }}" class="lazyload img-fluid" alt="Quality Content From Scratch" title="Quality Content From Scratch" loading="lazy" width="48" height="48" />
                        <span class="h6">Quality Content From Scratch</span>
                        <p>You will never find a generic touch in our writing. Creativity and uniqueness ooze out of every single word that we produce. Whether you want writing prompts for novels or a fresh narrative written from scratch, we will always provide you with original content of the highest quality.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="box">
                        <img data-src="{{ asset('assets/frontend/images/services/novel-writing/we-promise-timely-results.svg') }}" class="lazyload img-fluid" alt="We Promise Timely Results" title="We Promise Timely Results" loading="lazy" width="48" height="48" />
                        <span class="h6">We Promise Timely Results</span>
                        <p>Our professional novel writers are always ahead of time and know how to handle tricky deadlines. You can trust us to plot, visualize, write, edit, and publish a mind-blowing story in a minimal timeframe. Delays are never expected from our side because we are all about precision.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta cta1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 offset-md-2 text-center">
                    <h2 class="h2">Become A Published Novel Writer in US!</h2>
                    <p>Have a crazy plot in mind? Let your ideas and stories meet our words so a literary work of art can be formed. Hire us to see your story converted into a published novel in no time at all.</p>
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
                                <button type="button" class="btn-live d-block p-0">Proceed To Order</button>
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
                        5
                        <span class="font-red">
                            Stand-Out
                        </span>
                        Features of Our Novel Writing and Publishing Support
                    </h2>
                    <p>When you hire a novel writer in US from our website, these are the perks that you can enjoy.</p>
                </div>
                <div class="row mt-5">
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="nav-lists">
                                    <div class="nav nav-tab-list flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <button class="nav-link active" id="v-pills-genre-mastery-tab" data-bs-toggle="pill" data-bs-target="#v-pills-genre-mastery" type="button" role="tab" aria-controls="v-pills-genre-mastery" aria-selected="true">
                                            Genre Mastery
                                        </button>
                                        <button class="nav-link" id="v-pills-editing-excellence-tab" data-bs-toggle="pill" data-bs-target="#v-pills-editing-excellence" type="button" role="tab" aria-controls="v-pills-editing-excellence" aria-selected="false">
                                            Editing Excellence
                                        </button>
                                        <button class="nav-link" id="v-pills-visual-storytelling-tab" data-bs-toggle="pill" data-bs-target="#v-pills-visual-storytelling" type="button" role="tab" aria-controls="v-pills-visual-storytelling" aria-selected="false">
                                            Visual Storytelling
                                        </button>
                                        <button class="nav-link" id="v-pills-smart-planning-tab" data-bs-toggle="pill" data-bs-target="#v-pills-smart-planning" type="button" role="tab" aria-controls="v-pills-smart-planning" aria-selected="false">
                                            Smart Planning
                                        </button>
                                        <button class="nav-link" id="v-pills-publishing-support-tab" data-bs-toggle="pill" data-bs-target="#v-pills-publishing-support" type="button" role="tab" aria-controls="v-pills-publishing-support" aria-selected="false">
                                            Publishing Support
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="tab-content nav-tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-genre-mastery" role="tabpanel" aria-labelledby="v-pills-genre-mastery-tab">
                                        <div class="service-details">
                                            <span>Genre Mastery</span>
                                            <p>With coverage on multiple publishing platforms, we ensure your story reaches a wide audience. Our experts not only cover all the major sites for self-publishing but also understand the technical aspects of each genre. From fiction to fantasy, horror, and historical novel writers, our team has the most diversified talent on board.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-editing-excellence" role="tabpanel" aria-labelledby="v-pills-editing-excellence-tab">
                                        <div class="service-details">
                                            <span>Editing Excellence</span>
                                            <p>Beyond correcting tiny errors, our novel editing services take the responsibility to enhance narrative flow, strengthen character arcs, and ensure every chapter contributes seamlessly to the overall story. Your manuscript undergoes a transformative journey, emerging not just error-free but polished and ready for the shelves.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-visual-storytelling" role="tabpanel" aria-labelledby="v-pills-visual-storytelling-tab">
                                        <div class="service-details">
                                            <span>Visual Storytelling</span>
                                            <p>Our novel cover designers and illustrators can potentially uplift the visual charm of your story. These professionals create visuals that work like an extension of your story. You will get a cover that will be like a visual invitation. It will entice readers to step into the world that is meticulously created on the pages within.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-smart-planning" role="tabpanel" aria-labelledby="v-pills-smart-planning-tab">
                                        <div class="service-details">
                                            <span>Smart Planning</span>
                                            <p>We do not head directly towards writing. Strategic planning is an integral part of our story creation. From plotting a novel that keeps readers hooked to suggesting covers that capture attention, we employ a tactical plan at every stage. Your book does not just meet exp\ectations; it exceeds them making a memorable impact.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-publishing-support" role="tabpanel" aria-labelledby="v-pills-publishing-support-tab">
                                        <div class="service-details">
                                            <span>Publishing Support</span>
                                            <p>Want to become a published author? You will need our end-to-end publishing support to realize this dream. Out of all the novel publishing companies, we are the only one who can guide you through the intricacies of formatting, distribution, and publication without adding up to your stress or anxiety. Contact us for hassle-free publishing.</p>
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
                        <span class="font-red">
                            Beautifully
                        </span>
                        Crafted Stories By Our Novel Experts In US
                    </h2>
                    <p>This portfolio contains a diverse collection of books from different genres that we have crafted. It shows our expertise in online novel writing and publishing as an industry leader.</p>
                </div>
            </div>
            <div class="row m-t-40">
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/novel-writing/book-1.webp') }}" class="lazyload img-fluid" alt="Lee Child The Midnight Line" title="Lee Child The Midnight Line" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/novel-writing/book-2.webp') }}" class="lazyload img-fluid" alt="Letting In The Light" title="Letting In The Light" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/novel-writing/book-3.webp') }}" class="lazyload img-fluid" alt="The Secrets Of Thistle Cottage" title="The Secrets Of Thistle Cottage" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/novel-writing/book-4.webp') }}" class="lazyload img-fluid" alt="The Case Of The Undead Client" title="The Case Of The Undead Client" loading="lazy" width="260" height="391" />
                </div>
            </div>
            <div class="row m-t-20">
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/novel-writing/book-5.webp') }}" class="lazyload img-fluid" alt="A Quiver Full Of Arrows" title="A Quiver Full Of Arrows" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/novel-writing/book-6.webp') }}" class="lazyload img-fluid" alt="The Crocodile Hunter" title="The Crocodile Hunter" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/novel-writing/book-7.webp') }}" class="lazyload img-fluid" alt="Calatoarea" title="Calatoarea" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/novel-writing/book-8.webp') }}" class="lazyload img-fluid" alt="Ball of Opportunities" title="Ball of Opportunities" loading="lazy" width="260" height="391" />
                </div>
            </div>
        </div>
    </section>
    <section class="cta cta1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 offset-md-2 text-center">
                    <span class="h2">Start Your Journey As A Novel Writer With Us!</span>
                    <p>Let your story shine and charm the readers with each page. Along with writing, our expert editing, cover designs, and immersive illustrations will elevate your novel. Take a step towards literary success with us.</p>
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
                                <button type="button" class="btn-live d-block p-0">Hire A Writer</button>
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
                        Novel Writing Company in US That Gives Your Vision A
                        <span class="font-red">
                            Voice
                        </span>
                    </h2>
                    <p>You might have envisioned your book being placed on the shelves of bookstores, getting appreciation from reading enthusiasts from all around the world. We have professional novel writers for hire who can make it happen for you. You can collaborate with us for fiction writing, narrative writing, or any other write-up of your choice. We will always deliver a masterpiece that leaves a lasting impression.</p>
                    <p>Our process involves collaborative brainstorming sessions, where we dive deep into your vision and plot details. From there, our experts craft characters that readers can relate with, build storylines that intrigue, and infuse every page with magic that sets your book apart. We understand the pulse of the readership, and our novels do not just conform to genres; they redefine them.</p>
                    <div class="m-t-30">
                        <a href="{{ route('pages', 'get-free-quote') }}">
                            <button type="button" class="btn-order">Place Your Order</button>
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
                    <img data-src="{{ asset('assets/frontend/images/services/novel-writing/novel-writers.webp') }}" class="lazyload img-fluid" alt="Novel Writers" title="Novel Writers" loading="lazy" width="536" height="405" />
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
                        American Authors Sharing Their Views About Our
                        <span class="font-red">
                            Novel Writing
                        </span>
                    </h2>
                    <p>There is a long list of clients who have hired our experts for writing a romance, fantasy, or fiction novel. These reviews reveal everything about the caliber of our services and the satisfaction level American Authors Sharing Their Views About Our Novel Writing of our clients.</p>
                </div>
            </div>
            <div class="swiper review-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">It was a seamless and inspiring journey with this online novel writing website. They infused creativity in every word and transformed my story into a masterpiece. From brainstorming sessions to the final draft, they understood my vision and brought it to life.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/novel-writing/jason-harper.webp') }}" class="lazyload img-fluid" alt="Jason Harper" title="Jason Harper" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Jason Harper</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">I cannot recommend these writers enough to anyone who needs assistance in plotting a novel. Hiring a novel writer from this website was the best decision I made for my book. Their team of seasoned wordsmiths crafted an engaging plot and enriched it with captivating details.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/novel-writing/ellen-david.webp') }}" class="lazyload img-fluid" alt="Ellen David" title="Ellen David" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Ellen David</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">The professionalism and dedication of these novel writing experts are unmatched. My story found its true potential under their guidance. Also, their novel cover design services are nothing short of extraordinary. They captured the essence and translated it into a stunning cover.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/novel-writing/jeff-cooper.webp') }}" class="lazyload img-fluid" alt="Jeff Cooper" title="Jeff Cooper" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Jeff Cooper</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">The novel editing services offered by these professionals elevated my manuscript to new heights. The attention to detail and commitment to quality were evident in every edit. They did not just correct grammar; they enhanced the flow and strengthened my narrative.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/novel-writing/sarah-hendricks.webp') }}" class="lazyload img-fluid" alt="Sarah Hendricks" title="Sarah Hendricks" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Sarah Hendricks</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">I would like to thank these novel publishers for their constant support and expert guidance. From formatting to distribution, they handled it all. Their novel publishing services are like having a supportive partner throughout the process. My book is now available online.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/novel-writing/wayne-briggs.webp') }}" class="lazyload img-fluid" alt="Wayne Briggs" title="Wayne Briggs" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Wayne Briggs</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">They added a visual dimension to my storytelling with their novel illustration services. The talented illustrators brought my characters and scenes to life in ways I could not have imagined. The collaboration was smooth, and the result was beyond my expectations.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/novel-writing/alicia-parker.webp') }}" class="lazyload img-fluid" alt="Alicia Parker" title="Alicia Parker" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Alicia Parker</span>
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
                    <span class="h2">Let’s Craft A Novel For You That Inspires!</span>
                    <p>Get ready to see your plot transformed into a bestselling novel. Hire our experts right now to witness your words come alive. We are eager to help authors make a name for themselves.</p>
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
                                <button type="button" class="btn-live d-block p-0">Write My Novel</button>
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
                        Novel Writing Services In USA That Can Help You
                        <span class="font-red">
                            Wow
                        </span>
                        Your Readers
                    </h2>
                </div>
            </div>
            <div class="scrollbar" id="style-2">
                <div class="force-overflow">
                    <div class="row m-t-20">
                        <div class="col-12 col-lg-6">
                            <h2 class="h4">Novel Writing Help from Literary Wizards</h2>
                            <p>AmericanBookWriter.com is a novel writing company that has a team of literary maestros. We can shape your ideas into mind-blowing stories that captivate readers and turn heads in the literary world. Authors who trust us with their “write my biography” requests can stay assured that their story will impress everyone and sell like hotcakes. We understand the soul of your idea and plot a narrative that can do complete justice to it.</p>
                        </div>
                        <div class="col-12 col-lg-6">
                            <h2 class="h4">Novel Writers Who Know How To Play With Words</h2>
                            <p>We do not stop at novel writing; our experts offer a comprehensive suite of services tailored to your needs. With vast industry knowledge, our experts navigate the nuances of writing, editing, and illustrating with finesse. Our technical awareness ensures your novel meets the highest standards. From plotting a novel that keeps readers hooked to designing covers that visually narrate your story, our tactical plans cover every aspect.</p>
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
                    <span class="h2">Get All Your Doubts Cleared About Our Novel Writing!</span>
                    <div class="accordion" id="faqs">
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">
                                    How can your writers transform my ideas into a bestselling novel?
                                </button>
                            </h3>
                            <div id="collapse-1" class="accordion-collapse collapse" aria-labelledby="heading-1" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Our novel writing company excels in shaping ideas into compelling narratives. Our veteran writers possess a unique blend of creativity and market awareness, ensuring your novel not only stands out artistically but also resonates with readers. From character development to plot intricacies, we infuse every page with a touch of literary magic that captivates audiences and turns your vision into a literary sensation.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                    What sets your novel writing company apart from others?
                                </button>
                            </h3>
                            <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Our novel writing services go beyond mere storytelling; we offer an immersive experience. With a team of the best novel writers for hire, we bring a diverse range of skills to the table. From crafting gripping mysteries to heartwarming romances, our experts tailor their approach to suit any genre. The secret lies in our ability to understand your unique voice and transform it into a captivating narrative, making us the go-to novel writing website in the USA.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                    Can your novel editing services enhance the quality of my draft?
                                </button>
                            </h3>
                            <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Our novel editing services are a meticulous process that is more than just grammar correction. Our editors focus on refining the flow, strengthening character arcs, and ensuring every chapter contributes seamlessly to the overall narrative. We don't just edit; we elevate your manuscript to its full potential, making it not only error-free but a compelling and polished work ready for publication. It is our promise that your draft will never face rejection.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                    Are there any specific genres of novels that you cater to?
                                </button>
                            </h3>
                            <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Whether you need our help in writing a fiction novel or a graphic novel, we are not restricted by any means. Our team celebrates diversity in storytelling. Whether you dream of writing a romance that tugs at heartstrings or a gripping mystery that keeps readers on the edge of their seats, we have professional novel writers for every genre. They thrive on the challenge of crafting unique plots tailored to your chosen category.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                                    Besides book writing and editing, what else do you offer?
                                </button>
                            </h3>
                            <div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Writing is not our only strength; our services encompass the entire spectrum of your publishing journey. From eye-catching novel cover design services to breathtaking illustration services, we provide visual elements that complement your narrative. Our novel publishing services act as the final touch, ensuring your masterpiece reaches the hands of eager readers. With us by your side, no one can stop your publication from becoming successful.</p>
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
