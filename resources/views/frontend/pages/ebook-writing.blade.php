<x-app-layout>

    <x-slot name="metadata">

        <x-frontend.seo-metadata
            title="eBook Writing and EBook Publishing Company in the USA"
            description="Turn ideas into eBooks with our professional eBook ghostwriting services that guarantee high-quality & custom eBooks on any genre for just {{ config('social-media.currency_symbol') }}1699."
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
                            Most Reliable Source Of
                        </span>
                        <span class="h1">
                            EBook Writing and Publishing
                            <span class="font-red">
                                Services
                            </span>
                        </span>
                    </h1>
                    <h2 class="h5">A Literary Heaven For Authors Who Seek Brilliance</h2>
                    <p>Struggling to find the right words for your story? AmericanBookWriter.com is an eBook writing company that can take your raw ideas and turn them into mind-blowing narratives. You can only expect best-selling eBooks from our literary maestros. The thing that authors love the most about our services is our cheap and affordable rates.</p>
                    <div class="p-b-10 m-b-10">
                        <a href="{{ route('pages', 'get-free-quote') }}">
                            <button type="button" class="btn-order">Let's Start Writing</button>
                        </a>
                        <span class="or">OR</span>
                        <button role="button" type="button" onclick="openLiveChat();" class="btn-live">xDiscuss Your Ideas</button>
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
                    <img data-src="{{ asset('assets/frontend/images/services/ebook-writing/ebook-writer.webp') }}" class="lazyload img-fluid" alt="Ebook Writer" title="Ebook Writer" loading="lazy" width="536" height="405" />
                </div>
                <div class="col-12 col-lg-6 my-auto">
                    <h2 class="h2">
                        EBook Design and Publishing Agency That's An Ultimate Hub Of
                        <span class="font-red">
                            Creativity
                        </span>
                    </h2>
                    <p>Embark on your authorship journey with confidence, knowing that AmericanBookWriter.com is your comprehensive solution. From initial drafts to final publication, our diverse services cover every aspect of ebook creation. Whether you seek impeccable writing, seamless editing, eye-catching cover design, or strategic publishing, we've got you covered. Our team is always ready to elevate your story.</p>
                    <p>We know that there are so many authors with crazy ideas in their minds, but since they lack the required writing skills, their stories never get a chance to get published and gain exposure. With our ebook ghostwriting services in USA, you can brush the dust off your plot and shape it into a narrative that every reader will admire. Our full-fledged assistance, from writing to publishing, will make your life easier.</p>
                    <div class="m-t-30">
                        <a href="{{ route('pages', 'get-free-quote') }}">
                            <button type="button" class="btn-order">Take My Order</button>
                        </a>
                        <button role="button" type="button" onclick="openLiveChat();" class="btn-live">Get In Touch</button>
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
                    American EBook Writers with Captivating
                    <span class="font-red">
                        Storytelling Skills
                    </span>
                </h2>
                <p>Have you been constantly searching for eBook writer services near me? It is time to put a full stop to your hassle and offer you the comprehensive assistance that every author wishes for. We outshine our competitors in every aspect, but three of the biggest strengths that we possess are:</p>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="box">
                        <img data-src="{{ asset('assets/frontend/images/services/ebook-writing/drafts-ready-for-publishing.svg') }}" class="lazyload img-fluid" alt="Drafts Ready For Publishing" title="Drafts Ready For Publishing" loading="lazy" width="48" height="48" />
                        <span class="h6">Drafts Ready For Publishing</span>
                        <p>Our eBook proofreaders, writers, and designers work together to compose drafts that are ready to be published without any delay. Once we are done with writing and finalizing your story, our American ebook publishers will make your story public for reading enthusiasts all around the world.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="box">
                        <img data-src="{{ asset('assets/frontend/images/services/ebook-writing/flawless-and-timely-execution.svg') }}" class="lazyload img-fluid" alt="Flawless And Timely Execution" title="Flawless And Timely Execution" loading="lazy" width="48" height="48" />
                        <span class="h6">Flawless And Timely Execution</span>
                        <p>We add a touch of creativity and innovation to your narrative while keeping its original charm intact. Whether you need our assistance with fiction book writing or any other genre, the content we deliver will always be refined to perfection. Moreover, our customers do not have to wait long for their drafts.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="box">
                        <img data-src="{{ asset('assets/frontend/images/services/ebook-writing/credible-and-reliable-services.svg') }}" class="lazyload img-fluid" alt="Credible And Reliable Services" title="Credible And Reliable Services" loading="lazy" width="48" height="48" />
                        <span class="h6">Credible And Reliable Services</span>
                        <p>Unlike other ebook ghostwriting companies, we promise our clients confidentiality and transparency. We like to stay behind the curtains and do not ask for any credit from our customers. The story and its ownership rights will remain yours. We are here just to enhance your idea.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta cta1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 offset-md-2 text-center">
                    <span class="h2">Launch Your EBook With Our Help In USA!</span>
                    <p>From your writing allies, we can also convert into your Amazon ebook publishers, ebook designers, editors and proofreaders. We are ready to assist you at every step of your literary journey.</p>
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
                        EBook Writing Services That Cuts Above
                        <span class="font-red">
                            The Rest
                        </span>
                    </h2>
                    <p>Take a detailed look at some of the top reasons why we are popular among American authors:</p>
                </div>
                <div class="row mt-5">
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="nav-lists">
                                    <div class="nav nav-tab-list flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <button class="nav-link active" id="v-pills-all-in-one-platform-tab" data-bs-toggle="pill" data-bs-target="#v-pills-all-in-one-platform" type="button" role="tab" aria-controls="v-pills-all-in-one-platform" aria-selected="true">
                                            All-In-One Platform
                                        </button>
                                        <button class="nav-link" id="v-pills-expert-ebook-writers-tab" data-bs-toggle="pill" data-bs-target="#v-pills-expert-ebook-writers" type="button" role="tab" aria-controls="v-pills-expert-ebook-writers" aria-selected="false">
                                            Expert Ebook Writers
                                        </button>
                                        <button class="nav-link" id="v-pills-cheapest-services-tab" data-bs-toggle="pill" data-bs-target="#v-pills-cheapest-services" type="button" role="tab" aria-controls="v-pills-cheapest-services" aria-selected="false">
                                            Cheapest Services
                                        </button>
                                        <button class="nav-link" id="v-pills-timely-brilliance-tab" data-bs-toggle="pill" data-bs-target="#v-pills-timely-brilliance" type="button" role="tab" aria-controls="v-pills-timely-brilliance" aria-selected="false">
                                            Timely Brilliance
                                        </button>
                                        <button class="nav-link" id="v-pills-keep-the-rewards-tab" data-bs-toggle="pill" data-bs-target="#v-pills-keep-the-rewards" type="button" role="tab" aria-controls="v-pills-keep-the-rewards" aria-selected="false">
                                            Keep The Rewards
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="tab-content nav-tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-all-in-one-platform" role="tabpanel" aria-labelledby="v-pills-all-in-one-platform-tab">
                                        <div class="service-details">
                                            <span>All-In-One Platform</span>
                                            <p>Unlock a world of possibilities with our diversified ebook ghostwriting services that cater to every facet of book creation. From crafting captivating fiction to meticulous cover designing, layout creation, formatting, editing, and proofreading – we are your one-stop destination for comprehensive ebook solutions.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-expert-ebook-writers" role="tabpanel" aria-labelledby="v-pills-expert-ebook-writers-tab">
                                        <div class="service-details">
                                            <span>Expert Ebook Writers</span>
                                            <p>The dream of every author is to publish something that leaves a lasting impression on every reader. We can bring your literary vision to life with unmatched precision and creativity. Our ebook writing experts are genius wordsmiths who weave stories that stand out and make your narrative the star of the show.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-cheapest-services" role="tabpanel" aria-labelledby="v-pills-cheapest-services-tab">
                                        <div class="service-details">
                                            <span>Cheapest Services</span>
                                            <p>At AmericanBookWriter.com, we believe that every author should get a chance to tell their story. We bring literally excellence within your reach. Our cost-effective services redefine affordability without compromising on quality. We respect your financial considerations and prove to be a smart investment in your book.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-timely-brilliance" role="tabpanel" aria-labelledby="v-pills-timely-brilliance-tab">
                                        <div class="service-details">
                                            <span>Timely Brilliance</span>
                                            <p>We know that authors cannot wait to see their work published online or present on the bookshelves. Having us by your side, you can expect nothing short of perfection and timely brilliance. Your literary aspirations deserve to be realized promptly and flawlessly, and our pledge is to make that happen.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-keep-the-rewards" role="tabpanel" aria-labelledby="v-pills-keep-the-rewards-tab">
                                        <div class="service-details">
                                            <span>Keep The Rewards</span>
                                            <p>Your results are the heartbeat of our collaboration, and with us, your literary achievements remain solely and splendidly yours. Our mission is to add flare to your ideas while preserving their authenticity, ensuring your success remains entirely yours. Transparency is the highlight of our ebook ghostwriting services.</p>
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
                    <h2 class="h2">Our Portfolio Contains
                        <span class="font-red">
                            Bestselling
                        </span>
                        EBooks in USA
                    </h2>
                    <p>We cherish our client's success as our own success. These are some of our classic ebook creations that were able to win the hearts of readers.</p>
                </div>
            </div>
            <div class="row m-t-40">
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/ebook-writing/book-1.webp') }}" class="lazyload img-fluid" alt="Star Flower" title="Star Flower" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/ebook-writing/book-2.webp') }}" class="lazyload img-fluid" alt="A Lover's Worth" title="A Lover's Worth" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/ebook-writing/book-3.webp') }}" class="lazyload img-fluid" alt="Once Upon A Wolf" title="Once Upon A Wolf" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/ebook-writing/book-4.webp') }}" class="lazyload img-fluid" alt="Beauty And The Beast" title="Beauty And The Beast" loading="lazy" width="260" height="391" />
                </div>
            </div>
            <div class="row m-t-20">
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/ebook-writing/book-5.webp') }}" class="lazyload img-fluid" alt="The Frog Prince" title="The Frog Prince" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/ebook-writing/book-6.webp') }}" class="lazyload img-fluid" alt="When We Were Still Human" title="When We Were Still Human" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/ebook-writing/book-7.webp') }}" class="lazyload img-fluid" alt="Creator's Call" title="Creator's Call" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/ebook-writing/book-8.webp') }}" class="lazyload img-fluid" alt="Cecelia Ahern" title="Cecelia Ahern" loading="lazy" width="260" height="391" />
                </div>
            </div>
        </div>
    </section>
    <section class="cta cta1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 offset-md-2 text-center">
                    <span class="h2">Hire EBook Writing and Publishing Experts Right Now!</span>
                    <p>Finding an eBook publishing company in USA that can match the quality standards of our services is not that easy. We work on every manuscript like our own, and your draft can be the next one that our writers turn into a masterpiece.</p>
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
                        A Dream Team of American EBook Writers At
                        <span class="font-red">
                            Your Service
                        </span>
                    </h2>
                    <p>Our success is rooted in our exceptional team. At AmericanBookWriter.com, each task, be it writing, editing, publishing, or designing, is handled by dedicated professionals. Our seasoned experts bring a wealth of experience, ensuring that every aspect of your ebook receives the attention it deserves. Trust our team to turn your literary dreams into reality with precision and passion.</p>
                    <p>If you think that your idea has the potential to be the next bestseller, then we are here to make it happen for you. We do not have an ordinary team of writers. These magical wordsmiths have amazing storytelling skills. They can also turn into a scholar if you need an informative draft for publishing online. We put in all our efforts to make your story a sensation among the global community of readers.</p>
                    <div class="m-t-30">
                        <a href="{{ route('pages', 'get-free-quote') }}">
                            <button type="button" class="btn-order">It's Writing Time</button>
                        </a>
                        <button role="button" type="button" onclick="openLiveChat();" class="btn-live">Consult With The Best</button>
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
                    <img data-src="{{ asset('assets/frontend/images/services/ebook-writing/book-writers.webp') }}" class="lazyload img-fluid" alt="Book Writers" title="Book Writers" loading="lazy" width="536" height="405" />
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
                        American Authors Praising Our EBook Writing
                        <span class="font-red">
                            Agency
                        </span>
                    </h2>
                    <p>These reviews are a clear sign that the customers are in love with our ebook ghostwriting services. Every single piece of feedback matters as it conveys the value we offer to our clients.</p>
                </div>
            </div>
            <div class="swiper review-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">These ebook writers in USA turned my ideas into a riveting narrative. The individual working on my project understood my vision and added twists that kept readers hooked. The seamless collaboration and attention to detail made the entire process enjoyable. Highly recommended for authors who need compelling stories.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/ebook-writing/stephen-brooks.webp') }}" class="lazyload img-fluid" alt="Stephen Brooks" title="Stephen Brooks" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Stephen Brooks</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">From editing to cover design, these professionals handled every step with finesse. The result? A professionally polished draft ready for the online market. Their commitment to quality and a keen eye for detail set them apart. Trust them to make your book stand out on any platform. My personal experience with them has been amazing.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/ebook-writing/sylvia-rogers.webp') }}" class="lazyload img-fluid" alt="Sylvia Rogers" title="Sylvia Rogers" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Sylvia Rogers</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">These literary wizards not only wrote my ebook but transformed it into a masterpiece. The editorial team polished every word, and the designers created a cover that screams "bestseller.' They do not just write; they craft literary wonders. Their assistance is quite helpful for serious authors aiming for the top.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/ebook-writing/jonathan-carter.webp') }}" class="lazyload img-fluid" alt="Jonathan Carter" title="Jonathan Carter" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Jonathan Carter</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">What impressed me most about this firm was its versatility. From fiction to non-fiction, they covered it all. The one-stop-shop experience, from writing to publishing, made my journey stress-free. Trust them to bring your book to life, regardless of the genre. Moreover, the prices they charge are also quite minimal.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/ebook-writing/olivia-dixon.webp') }}" class="lazyload img-fluid" alt="Olivia Dixon" title="Olivia Dixon" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Olivia Dixon</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">Choosing this ebook writing agency was a game-changer for me. The editing team refined my draft, and the layout design elevated the reading experience. Their expertise in navigating the publishing platforms ensured a smooth launch. Any aspiring author who needs a  reliable partner should trust these experts with their project.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/ebook-writing/liam-franklin.webp') }}" class="lazyload img-fluid" alt="Liam Franklin" title="Liam Franklin" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Liam Franklin</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">AmericanBookWriter.com did not just write my ebook; they crafted an immersive experience. The team's dedication to excellence, coupled with their understanding of market trends, made my book a hit. For authors seeking a blend of creativity and professionalism, look no further. They know how to make your draft a chartbuster.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/ebook-writing/ellen-harper.webp') }}" class="lazyload img-fluid" alt="Ellen Harper" title="Ellen Harper" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Ellen Harper</span>
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
                    <span class="h2">EBook Writers in USA Who Deliver Mind Blowing Books</span>
                    <p>Our services are an exceptional amalgamation of uniqueness, creativity, and innovation. We are eager to start working on your write-up. Kickstart your authorship journey with our ebook publishing services.</p>
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
                        EBook Writing Services That Put You On The List Of
                        <span class="font-red">
                            Elite American
                        </span>
                        Authors
                    </h2>
                </div>
            </div>
            <div class="scrollbar" id="style-2">
                <div class="force-overflow">
                    <div class="row m-t-20">
                        <div class="col-12 col-lg-6">
                            <h2 class="h4">USA's #1 EBook Writing Agency</h2>
                            <p>At AmericanBookWriter.com, we transcend the ordinary, transforming ideas into captivating narratives. Our ebook writing experts breathe life into your concepts, ensuring your story not only resonates but captivates readers. It is quite tiring for the authors to keep on reading the manuscript over and over again to spot every single error. Still, there is a doubt that you might miss a few. Give yourself a break and hire our ebook proofreading service. We let you enjoy all the applause from your readers.</p>
                        </div>
                        <div class="col-12 col-lg-6">
                            <h2 class="h4">Designing and Publishing EBooks in USA</h2>
                            <p>If you want your story to get published and live forever in the readers' hearts, then our Amazon publishing and ebook printing services can prove to be a great help. We have dedicated experts for all the known ebook publishing platforms, including Kindle, Kobo, Blurb, and Lulu. Stop searching for ebook printers near me. We can get your printed stories to steal all the limelight. From ebook layout design to ebook cover design experts, we have a seasoned crew who make sure that your story looks out of this world.</p>
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
                    <span class="h2">FAQs That Will Clear All About Doubts!</span>
                    <div class="accordion" id="faqs">
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">
                                    What sets you apart from other eBook websites in USA?
                                </button>
                            </h3>
                            <div id="collapse-1" class="accordion-collapse collapse" aria-labelledby="heading-1" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>We are here to bring comfort to authors' lives and handle all the challenges on their behalf. We stand out by offering a comprehensive suite of services that cover almost everything. Our motive is not just to produce words but to create magic with our wordplay that can fascinate the readers.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                    Does your team ensure the originality and authenticity of my work?
                                </button>
                            </h3>
                            <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Our team of expert writers and editors work collaboratively to enhance your narrative while preserving the essence of your original work. We respect the unique voice of each author and ensure that your draft does not contain even a single trace of copied content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                    Do I retain control over my ebook's design and publishing decisions?
                                </button>
                            </h3>
                            <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Absolutely. While we offer expert advice, you retain full control over design and publishing decisions. Our role is to guide and assist, ensuring your preferences and vision are realized. The designs will not be finalized until the customer approves them. You can ask for multiple edits.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                    How much do you charge for your ebook writer services?
                                </button>
                            </h3>
                            <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>The prices vary from project to project. It depends on which services you want. However, we try to maintain a touch of affordability in our packages so every American author can easily access our premium services. The quality that we deliver is way too high compared to our prices.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                                    How do you ensure timely results in ebook creation?
                                </button>
                            </h3>
                            <div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>From writing and editing to design and publishing, we commit to delivering prompt and brilliant outcomes. The release of your book will not be delayed. We know that you have a publishing date in your mind. Our team puts in all their effort to stay one step ahead of the clock.</p>
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
