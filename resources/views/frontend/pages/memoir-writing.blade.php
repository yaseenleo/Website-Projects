<x-app-layout>

    <x-slot name="metadata">

        <x-frontend.seo-metadata
            title="USA's Professional Memoir Writers | 280K+ Memoirs Delivered"
            description="Our memoir ghostwriting service in America helps preserve stories with authenticity through mesmerizing memoirs! Hire us to write your first memoir today."
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
                                Hire
                            </span>
                            Our Memoir Ghostwriters In
                        </span>
                        <span class="h1">
                            USA To Preserve Your
                            <span class="font-red">
                                Memories
                            </span>
                        </span>
                    </h1>
                    <h2 class="h5">We Make It Easy For Your Memoir To Become A Chartbuster!</h2>
                    <p>You can find the cream of crop memoir writing experts at AmericanBookWriter.com. The battles you have conquered in your life can be a source of inspiration for others. You can transform your memories into a legacy with our memoir writing services. The best part is that our prices are affordable for all.</p>
                    <div class="p-b-10 m-b-10">
                        <a href="{{ route('pages', 'get-free-quote') }}">
                            <button type="button" class="btn-order">Let's Craft A Memoir</button>
                        </a>
                        <span class="or">OR</span>
                        <button role="button" type="button" onclick="openLiveChat();" class="btn-live">Get A Free Consultation</button>
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
                    <img data-src="{{ asset('assets/frontend/images/services/memoir-writing/memoir-writing-services.webp') }}" class="lazyload img-fluid" alt="Memoir Writing Services" title="Memoir Writing Services" loading="lazy" width="536" height="405" />
                </div>
                <div class="col-12 col-lg-6 my-auto">
                    <h2 class="h2">
                        Memoir Ghostwriting In USA That Empowers Your
                        <span class="font-red">
                            Life Story
                        </span>
                    </h2>
                    <p>Welcome to AmericanBookWriter.com. We combine the art of storytelling with the craft of memoir writing. Your journey from manuscript to bestseller begins here at our memoir publishing company. We turn your memories into legacies that readers will not forget easily. You can not only hire our memoir writers, editors, and proofreaders, but we are also ready to help you with book cover creation.</p>
                    <p>Here at our firm, excellence meets affordability. We gather all the unforgettable and inspirational memories of your life and shape them into a captivating narrative that resonates with readers. Hire our memoir ghostwriters to start your authorship journey and let your story unfold in the hands of experienced wordsmiths. We make sure that your book is captivating enough to win all the hearts.</p>
                    <div class="m-t-30">
                        <a href="{{ route('pages', 'get-free-quote') }}">
                            <button type="button" class="btn-order">Take My Order</button>
                        </a>
                        <button role="button" type="button" onclick="openLiveChat();" class="btn-live">Discuss Your Needs</button>
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
                    American Memoir Writers Who Add A
                    <span class="font-red">
                        Magical Touch
                    </span>
                    To Your Story!
                </h2>
                <p>In the world of literature, a memoir is more than words on paper; it is a testament to a life lived. We understand the profound impact a well-crafted story can have, especially when your personal, real-life moments are involved. You can trust us to take your narrative and return a literary masterpiece using our immaculate writing skills.</p>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="box">
                        <img data-src="{{ asset('assets/frontend/images/services/memoir-writing/tailored-solutions.svg') }}" class="lazyload img-fluid" alt="Tailored Solutions" title="Tailored Solutions" loading="lazy" width="48" height="48" />
                        <span class="h6">Tailored Solutions</span>
                        <p>We understand that every memoir is unique. Our approach is personalized, ensuring that your story is told in a way that keeps your voice and vision intact. There is nothing generic about our writing, and we make sure that your story gets undivided attention from the experts.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="box">
                        <img data-src="{{ asset('assets/frontend/images/services/memoir-writing/expect-no-delays.svg') }}" class="lazyload img-fluid" alt="Expect No Delays" title="Expect No Delays" loading="lazy" width="48" height="48" />
                        <span class="h6">Expect No Delays</span>
                        <p>We value your time. Our efficient workflow and dedicated team ensure timely delivery. You will not have to wait long to get a well-written draft of your memoir. Also, once the writing phase is completed, we will get straight to publishing and unleash your story in no time.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="box">
                        <img data-src="{{ asset('assets/frontend/images/services/memoir-writing/an-all-in-one-team.svg') }}" class="lazyload img-fluid" alt="An All In One Team" title="An All In One Team" loading="lazy" width="48" height="48" />
                        <span class="h6">An All-In-One Team</span>
                        <p>We can cater to all your literary needs. Our team comprises seasoned memoir writers, editors, illustrators, and cover designers with a wealth of experience in crafting such drafts. You can trust us to bring your story to life with skill and precision. It will surely go on to make the headlines.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta cta1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 offset-md-2 text-center">
                    <h2 class="h2">Find The Best Memoir Writers For Hire In USA!</h2>
                    <p>Every person has a story about their life that is worth sharing. If you think that your tale can fascinate reading enthusiasts, then get our assistance to shape it into an enthralling memoir.</p>
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
                        A Memoir Ghostwriting Hub In USA That Will Fulfill All
                        <span class="font-red">
                            Your Needs
                        </span>
                    </h2>
                    <p>We are ready to release your story in front of the whole world. You can enjoy the following perks by hiring our memoir ghostwriting services.</p>
                </div>
                <div class="row mt-5">
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="nav-lists">
                                    <div class="nav nav-tab-list flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <button class="nav-link active" id="v-pills-polished-writing-tab" data-bs-toggle="pill" data-bs-target="#v-pills-polished-writing" type="button" role="tab" aria-controls="v-pills-polished-writing" aria-selected="true">
                                            Polished Writing
                                        </button>
                                        <button class="nav-link" id="v-pills-formatting-and-layout-tab" data-bs-toggle="pill" data-bs-target="#v-pills-formatting-and-layout" type="button" role="tab" aria-controls="v-pills-formatting-and-layout" aria-selected="false">
                                            Formatting & Layout
                                        </button>
                                        <button class="nav-link" id="v-pills-no-extra-cuts-tab" data-bs-toggle="pill" data-bs-target="#v-pills-no-extra-cuts" type="button" role="tab" aria-controls="v-pills-no-extra-cuts" aria-selected="false">
                                            No Extra Cuts
                                        </button>
                                        <button class="nav-link" id="v-pills-printing-assistance-tab" data-bs-toggle="pill" data-bs-target="#v-pills-printing-assistance" type="button" role="tab" aria-controls="v-pills-printing-assistance" aria-selected="false">
                                            Printing Assistance
                                        </button>
                                        <button class="nav-link" id="v-pills-publishing-platforms-tab" data-bs-toggle="pill" data-bs-target="#v-pills-publishing-platforms" type="button" role="tab" aria-controls="v-pills-publishing-platforms" aria-selected="false">
                                            Publishing Platforms
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="tab-content nav-tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-polished-writing" role="tabpanel" aria-labelledby="v-pills-polished-writing-tab">
                                        <div class="service-details">
                                            <span>Polished Writing</span>
                                            <p>We can craft your story from scratch or complete it from the midway, but the final draft that you will get will always be free from all kinds of errors. Our memoir editing and proofreading services will play a crucial role in rectifying your manuscript and turning it into a polished gem that the audience will enjoy reading.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-formatting-and-layout" role="tabpanel" aria-labelledby="v-pills-formatting-and-layout-tab">
                                        <div class="service-details">
                                            <span>Formatting & Layout</span>
                                            <p>We fix the interior and exterior of your book so it can entice the readers at first glance and hold their attention till the end. Our memoir cover design service will potentially uplift the charm of your story. Hiring our memoir illustrators can make it possible for you to captivate the potential audience with a properly formatted draft.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-no-extra-cuts" role="tabpanel" aria-labelledby="v-pills-no-extra-cuts-tab">
                                        <div class="service-details">
                                            <span>No Extra Cuts</span>
                                            <p>American authors rate our memoir writing agency so highly because we treat their projects with utmost respect and transparency. It is the story that contains all the memorable moments of your life, and you deserve complete credit for it. We are American book writers who neither ask for any ownership rights nor keep any share in your royalties.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-printing-assistance" role="tabpanel" aria-labelledby="v-pills-printing-assistance-tab">
                                        <div class="service-details">
                                            <span>Printing Assistance</span>
                                            <p>If you want your story to shine on all the bookshelves, then our memoir printing services can help you out. The paper used in our printing is of premium-quality standards and will give the readers a nice feel when they lift the book and start flipping through the pages. You can get printed copies in any quantity that you prefer.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-publishing-platforms" role="tabpanel" aria-labelledby="v-pills-publishing-platforms-tab">
                                        <div class="service-details">
                                            <span>Publishing Platforms</span>
                                            <p>When you look at other memoir publishing companies in USA, all of them have expertise in different publication platforms. We are the only service providers who can publish the story on any of your desired platforms. From Lulu to Kobo, Amazon, and Kindle, we have dedicated experts for each one of them.</p>
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
                        A Glowing Portfolio Of Our Memoir Writing
                        <span class="font-red">
                            Specialists
                        </span>
                        In USA
                    </h2>
                    <p>Explore a curated collection of our finest works in this Portfolio. Each memoir reflects our excellence, showcasing diverse stories that we have expertly crafted into literary masterpieces. Your journey to extraordinary storytelling begins here.</p>
                </div>
            </div>
            <div class="row m-t-40">
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/memoir-writing/book-1.webp') }}" class="lazyload img-fluid" alt="Song Of The Plains" title="Song Of The Plains" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/memoir-writing/book-2.webp') }}" class="lazyload img-fluid" alt="Danielle Steel" title="Danielle Steel" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/memoir-writing/book-3.webp') }}" class="lazyload img-fluid" alt="The Lantern Men" title="The Lantern Men" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/memoir-writing/book-4.webp') }}" class="lazyload img-fluid" alt="The Stalker" title="The Stalker" loading="lazy" width="260" height="391" />
                </div>
            </div>
            <div class="row m-t-20">
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/memoir-writing/book-5.webp') }}" class="lazyload img-fluid" alt="Charlotte Link" title="Charlotte Link" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/memoir-writing/book-6.webp') }}" class="lazyload img-fluid" alt="Win Some Lose Some" title="Win Some Lose Some" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/memoir-writing/book-7.webp') }}" class="lazyload img-fluid" alt="The Gwendy Trilogy" title="The Gwendy Trilogy" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/memoir-writing/book-8.webp') }}" class="lazyload img-fluid" alt="A Forgotten Murder" title="A Forgotten Murder" loading="lazy" width="260" height="391" />
                </div>
            </div>
        </div>
    </section>
    <section class="cta cta1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 offset-md-2 text-center">
                    <h2 class="h2">Professional Memoir Ghostwriters Eager To Craft Your Story</h2>
                    <p>Hire our memoir ghostwrites in USA to witness the masterclass of storytelling that we put on display. We want your book to break all the records and claim the top spot on the list of bestsellers.</p>
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
                                <button type="button" class="btn-live d-block p-0">Take My Order</button>
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
                        The
                        <span class="font-red">
                            Most Notable
                        </span>
                        Memoir Writing Company In USA
                    </h2>
                    <p>Writing a memoir is an intimate journey, and navigating the complexities of such writing requires more than just pen and paper. We have seasoned memoir ghostwriters for hire who are incredibly versatile and do not shy away from any kind of project. The focus of our memoir writing services is to capture the essence of your experiences, ensuring that every page reflects the authenticity of your story.</p>
                    <p>Our memoir proofreaders refine your prose, ensuring that the narrative flows seamlessly and captivates readers from start to finish. If you want to make a lasting impression, then our memoir cover designers can be your best bet. You will get an overall package from us that will not only get your draft completed but will also get your book ready for publishing and printing. We will stay with you till the release.</p>
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
                    <img data-src="{{ asset('assets/frontend/images/services/memoir-writing/memoir-writing.webp') }}" class="lazyload img-fluid" alt="Memoir Writing" title="Memoir Writing" loading="lazy" width="536" height="405" />
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
                        Reviews From Authors In USA Who Have
                        <span class="font-red">
                            Hired
                        </span>
                        Our Memoir Writers
                    </h2>
                    <p>Explore these testimonials and embark on your memoir-writing journey with confidence. Trust AmericanBookWriter.com to transform your story into a literary legacy that resonates with readers worldwide.</p>
                </div>
            </div>
            <div class="swiper review-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">This ghostwriting agency transformed my memories into a work of art. The storytelling was impeccable, and the editing process was immaculate. A truly professional team that turned my memoir into a bestseller. Highly recommended from my side.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/memoir-writing/sarah-morgan.webp') }}" class="lazyload img-fluid" alt="Sarah Morgan" title="Sarah Morgan" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Sarah Morgan</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">Choosing these ghostwriters was the best decision I made for my book. The collaborative approach, attention to detail, and seamless publishing guidance exceeded my expectations. My story now resonates with readers on a whole new level.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/memoir-writing/micheal-philips.webp') }}" class="lazyload img-fluid" alt="Micheal Philips" title="Micheal Philips" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Micheal Philips</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">It was an absolute pleasure to work with these highly experienced literary masterminds. Their expertise in cover designing gave my draft an enchanting uplift. From the first draft to the final product, they were mind-blowing in every aspect.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/memoir-writing/emma-rogers.webp') }}" class="lazyload img-fluid" alt="Emma Rogers" title="Emma Rogers" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Emma Rogers</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">The team's dedication to preserving my voice in the narrative was commendable. The tailored approach and affordable prices made this ghostwriting firm stand out. My memoir is now a cherished legacy that speaks to the hearts, and these experts deserve all the credit.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/memoir-writing/james-carter.webp') }}" class="lazyload img-fluid" alt="James Carter" title="James Carter" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">James Carter</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">I could not be happier with the results. They took my raw manuscript and converted it into a polished gem. Their commitment to excellence and result-driven publishing process makes them the go-to memoir writing service. They actually deliver what they promise.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/memoir-writing/olivia-candice.webp') }}" class="lazyload img-fluid" alt="Olivia Candice" title="Olivia Candice" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Olivia Candice</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">I was not ready to hire memoir ghostwriters because this book was pretty close to my heart. However, these experts were able to win my trust. They not only crafted an engaging draft but guided me through the intricacies of publishing. My story is out now!</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/memoir-writing/david-brown.webp') }}" class="lazyload img-fluid" alt="David Brown" title="David Brown" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">David Brown</span>
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
                    <span class="h2">A Dream Collab Is Waiting For You!</span>
                    <p>Ready to turn your life's journey into a captivating memoir? Take the first step and avail of our comprehensive memoir writing services. Your legacy awaits!</p>
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
                                <button type="button" class="btn-live d-block p-0">Hire Our Experts</button>
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
                        Releases Your Story In Front Of The
                        <span class="font-red">
                            Whole World
                        </span>
                    </h2>
                </div>
            </div>
            <div class="scrollbar" id="style-2">
                <div class="force-overflow">
                    <div class="row m-t-20">
                        <div class="col-12 col-lg-6">
                            <h2 class="h4">Unleash Memoirs That Soar With Our Writers In USA</h2>
                            <p>At AmericanBookWriter.com, we transcend boundaries, setting the standard as the premier memoir writing agency in the USA. Our guarantee: not just a memoir, but a masterpiece; not just a story, but a bestseller. Elevate your narrative with our professional memoir ghostwriters, distinguished by their unparalleled expertise and extensive experience. We sculpt legacies that resonate, captivate, and leave an indelible mark. Your story deserves nothing less than the best, and at this ghostwriting agency, excellence is our signature.</p>
                        </div>
                        <div class="col-12 col-lg-6">
                            <h2 class="h4">Affordable Ghostwriting That Crafts Memoirs Of Distinction</h2>
                            <p>Discover the art of memoir writing without breaking the bank at AmericanBookWriter.com. We are not just the cheapest memoir writing company in the USA; we redefine affordability without compromising quality. From precise editing to seamless publishing on platforms like Amazon, we handle the technical intricacies with finesse. Our comprehensive services encompass writing, editing, ebook publishing, printing, and cover designing, ensuring your memoir not only tells a compelling story but also does so with elegance and affordability.</p>
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
                    <h2 class="h2">Common Queries About Our Memoir Ghostwriting In USA</h2>
                    <div class="accordion" id="faqs">
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">
                                    How do I get started with your memoir writing services?
                                </button>
                            </h3>
                            <div id="collapse-1" class="accordion-collapse collapse" aria-labelledby="heading-1" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Getting started is easy! Simply reach out to us through our contact page, and one of our representatives will guide you through the initial steps, including a consultation with our memoir writing experts.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                    Can I provide my input during the writing process?
                                </button>
                            </h3>
                            <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Absolutely! We encourage collaboration. Our writers will work closely with you, incorporating your insights and ensuring that the final memoir reflects your vision and experiences authentically.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                    What sets your memoir cover designing apart?
                                </button>
                            </h3>
                            <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Our cover designs are crafted with a keen understanding of your memoir's theme and tone. We strive to create visually striking covers that not only attract readers but also convey the essence of your story.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                    How long does the memoir writing process typically take?
                                </button>
                            </h3>
                            <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>The timeline varies based on the complexity of the project. During the initial consultation, we'll provide an estimate based on your specific needs and preferences. We try our level best to complete the delivery within the promised timeline.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                                    Do you assist with marketing and promotion after publishing?
                                </button>
                            </h3>
                            <div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>While our primary focus is on the creation and production of your memoir, we can offer guidance on basic marketing strategies. For more extensive marketing support, we can connect you with trusted partners in the industry.</p>
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
