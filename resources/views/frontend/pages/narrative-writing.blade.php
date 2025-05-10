<x-app-layout>

    <x-slot name="metadata">

        <x-frontend.seo-metadata
            title="Narrative Writing Service For Any Genre | American Book Writer"
            description="Got a story to narrate? Hire USA's leading narrative story writing company that knows how to write stories that keep the reader's attention hooked."
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
                                Bring
                            </span>
                            Ideas To Life With USA's
                        </span>
                        <span class="h1">
                            Narrative Writing
                            <span class="font-red">
                                Service
                            </span>
                        </span>
                    </h1>
                    <h2 class="h5">Buzz The Readers With Your Mind Blowing Story!</h2>
                    <p>Americanbookwriter is the USA's highest-rated, creative narrative story writing company that has delivered millions of masterpieces, turning out to be the best-sellers of the town. Our narrative story writing isn't limited to any style or genre. We as professional narrative writers can deal with anything you throw at us.</p>
                    <div class="p-b-10 m-b-10">
                        <a href="{{ route('pages', 'get-free-quote') }}">
                            <button type="button" class="btn-order">Buzz The Readers</button>
                        </a>
                        <span class="or">OR</span>
                        <button role="button" type="button" onclick="openLiveChat();" class="btn-live">Speak To Experts</button>
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
                    <img data-src="{{ asset('assets/frontend/images/services/narrative-writing/narrative-writing-service.webp') }}" class="lazyload img-fluid" alt="Narrative Writing Service" title="Narrative Writing Service" loading="lazy" width="536" height="405" />
                </div>
                <div class="col-12 col-lg-6 my-auto">
                    <h2 class="h2">
                        Our Expert Narrative Writers In USA Perfectly Balances
                        <span class="font-red">
                            Tone, Theme & Pace
                        </span>
                    </h2>
                    <p>A gripping narrative story is a combo of a well-structured plot, compelling characters, a clear theme, immersive settings, pace, tone and smooth dialogues. Our team of creative narrative writers balances out all elements of effective narrative storytelling that enhance the story's impact and leave a mark on the reader's mind. The best part about working with our personal narrative writers is you don't have to worry about the structure or other nuances of the story. Your only role is to speak up about your idea, and we'd deal with everything related to it.</p>
                    <div class="m-t-30">
                        <a href="{{ route('pages', 'get-free-quote') }}">
                            <button type="button" class="btn-order">Hire Expert Writers</button>
                        </a>
                        <button role="button" type="button" onclick="openLiveChat();" class="btn-live">Discuss Your Project</button>
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
                    Discover What Makes Us The
                    <span class="font-red">
                        Best Narrative
                    </span>
                    Writing Service In USA
                </h2>
                <p>American authors cannot resist coming to us for narrative story writing. We've several repeat customers, and this vouches for our excellence and expertise in this field. Here's the difference you'd experience while working with us:</p>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="box">
                        <img data-src="{{ asset('assets/frontend/images/services/narrative-writing/creativity-beyond-limits.svg') }}" class="lazyload img-fluid" alt="Creativity Beyond Limits" title="Creativity Beyond Limits" loading="lazy" width="48" height="48" />
                        <span class="h6">Creativity Beyond Limits</span>
                        <p>Writing generic stories is one thing. But narrating a story in the first person while incorporating tension and a satisfying resolution isn't a craft for everyone. Be it fiction or nonfiction narratives, our professional narrative writers for hire know how to inject creativity into customers' ideas and deliver something that's enchanting.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="box">
                        <img data-src="{{ asset('assets/frontend/images/services/narrative-writing/satisfaction-guaranteed.svg') }}" class="lazyload img-fluid" alt="Satisfaction Guaranteed" title="Satisfaction Guaranteed" loading="lazy" width="48" height="48" />
                        <span class="h6">Satisfaction Guaranteed</span>
                        <p>When we write a narrative story, we ensure everything is on point. But there can be times when you might require some tweaks or basic edits to meet your expectations. And that's totally fine. We cater to revision requests at absolutely no extra charge. We offer free revisions unlimited times until you are satisfied.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="box">
                        <img data-src="{{ asset('assets/frontend/images/services/narrative-writing/privacy-promised.svg') }}" class="lazyload img-fluid" alt="Privacy Promised" title="Privacy Promised" loading="lazy" width="48" height="48" />
                        <span class="h6">Privacy Promised</span>
                        <p>We acknowledge the importance of publishing privacy and promise to secure the client's work, story, concept, data, and other sensitive information. With our first-person narrative stories service, you never have to worry about getting your ideas stolen because we always protect the data and offer a secure spot to the clients.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta cta1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 offset-md-2 text-center">
                    <span class="h2">Get Your Ideas Out Of The Head & Narrate Them To Americans!</span>
                    <p>You are at the right place. Hire a narrative writer here, get vocal about your concept, and we'll deliver you a sensational narrated story within 02 weeks or less.</p>
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
                                <button type="button" class="btn-live d-block p-0">Bring My Ideas To Paper</button>
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
                        Best Narrative Writing In USA, Just For
                        <span class="font-red">
                            {{ config('social-media.currency_symbol') }}799
                        </span>
                    </h2>
                    <p>You can get real-life narrative writing services at a pretty economical price that would guarantee everything under one price quote.</p>
                </div>
                <div class="row mt-5">
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="nav-lists">
                                    <div class="nav nav-tab-list flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <button class="nav-link active" id="v-pills-driving-out-idea-tab" data-bs-toggle="pill" data-bs-target="#v-pills-driving-out-idea" type="button" role="tab" aria-controls="v-pills-driving-out-idea" aria-selected="true">
                                            Driving Out Idea
                                        </button>
                                        <button class="nav-link" id="v-pills-plotting-and-theme-tab" data-bs-toggle="pill" data-bs-target="#v-pills-plotting-and-theme" type="button" role="tab" aria-controls="v-pills-plotting-and-theme" aria-selected="false">
                                            Plotting & Theme
                                        </button>
                                        <button class="nav-link" id="v-pills-characters-tab" data-bs-toggle="pill" data-bs-target="#v-pills-characters" type="button" role="tab" aria-controls="v-pills-characters" aria-selected="false">
                                            Characters
                                        </button>
                                        <button class="nav-link" id="v-pills-resolving-conflict-tab" data-bs-toggle="pill" data-bs-target="#v-pills-resolving-conflict" type="button" role="tab" aria-controls="v-pills-resolving-conflict" aria-selected="false">
                                            Resolving Conflict
                                        </button>
                                        <button class="nav-link" id="v-pills-refining-the-story-tab" data-bs-toggle="pill" data-bs-target="#v-pills-refining-the-story" type="button" role="tab" aria-controls="v-pills-refining-the-story" aria-selected="false">
                                            Refining The Story
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="tab-content nav-tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-driving-out-idea" role="tabpanel" aria-labelledby="v-pills-driving-out-idea-tab">
                                        <div class="service-details">
                                            <span>Driving Out Idea</span>
                                            <p>Already got a concept? Great, let's jump to the next step! If not, then let our professional narrative writers for hire drive out an idea from their creative imagination, and they'll get it approved by you before heading to the next step.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-plotting-and-theme" role="tabpanel" aria-labelledby="v-pills-plotting-and-theme-tab">
                                        <div class="service-details">
                                            <span>Plotting & Theme</span>
                                            <p>A story is nothing without a plot and a theme. Depending upon the theme, our personal narrative story writers will come up with a suspenseful plot, decide the timeline of events happening in the story, and plan the characters involved.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-characters" role="tabpanel" aria-labelledby="v-pills-characters-tab">
                                        <div class="service-details">
                                            <span>Characters</span>
                                            <p>By considering the plot and theme of the story, we strategize the characters, their personalities, roles, dialogues, and everything. We ensure the characters are related to the story, are easy to identify, and deliver dialogues smoothly.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-resolving-conflict" role="tabpanel" aria-labelledby="v-pills-resolving-conflict-tab">
                                        <div class="service-details">
                                            <span>Resolving Conflict</span>
                                            <p>Every story has a conflict or tension that keeps the reader hooked. We resolve the conflict in a satisfying way to ensure the ending surprises the readers, and they are happy with it. We know how to resolve conflicts in the best way.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-refining-the-story" role="tabpanel" aria-labelledby="v-pills-refining-the-story-tab">
                                        <div class="service-details">
                                            <span>Refining The Story</span>
                                            <p>Once we are done with the writing part, we further edit it to enhance the sentences, improve the vocabulary, and make the changes as per the client's feedback. We collaboratively work with the customer to deliver exactly what they want.</p>
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
                        Dig Into Story Narratives Delivered By Our
                        <span class="font-red">
                            American Expert Writers
                        </span>
                    </h2>
                    <p>Our immensely talented narrative story writers have a record of delivering stirring masterpieces to clients for the past 10+ years! It gives us tremendous pride to showcase the work produced by our experts.</p>
                </div>
            </div>
            <div class="row m-t-40">
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/narrative-writing/book-1.webp') }}" class="lazyload img-fluid" alt="The Non Profit Narrative" title="The Non Profit Narrative" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/narrative-writing/book-2.webp') }}" class="lazyload img-fluid" alt="All Creatures Great And Small" title="All Creatures Great And Small" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/narrative-writing/book-3.webp') }}" class="lazyload img-fluid" alt="There You Have It" title="There You Have It" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/narrative-writing/book-4.webp') }}" class="lazyload img-fluid" alt="Sunrise On Half Moon Bay" title="Sunrise On Half Moon Bay" loading="lazy" width="260" height="391" />
                </div>
            </div>
            <div class="row m-t-20">
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/narrative-writing/book-5.webp') }}" class="lazyload img-fluid" alt="The Moon Over Kilmore Quay" title="The Moon Over Kilmore Quay" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/narrative-writing/book-6.webp') }}" class="lazyload img-fluid" alt="Honest Secrets" title="Honest Secrets" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/narrative-writing/book-7.webp') }}" class="lazyload img-fluid" alt="Island Of Secrets" title="Island Of Secrets" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/narrative-writing/book-8.webp') }}" class="lazyload img-fluid" alt="The Book Of Lost Friends" title="The Book Of Lost Friends" loading="lazy" width="260" height="391" />
                </div>
            </div>
        </div>
    </section>
    <section class="cta cta1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 offset-md-2 text-center">
                    <h2 class="h2">Speak Out 'Write A Narrative For Me' & Have A Frantic Masterpiece Written!</h2>
                    <p>We have clients from a broad range of genres telling us to 'write a narrative for me', and we come up with a frantic masterpiece written in no time.</p>
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
                                <button type="button" class="btn-live d-block p-0">Write A Narrative For Me</button>
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
                        A Narrative Writing Service In USA That Gives You
                        <span class="font-red">
                            The Ownership
                        </span>
                    </h2>
                    <p>When you hire us as your narrative ghostwriter in America, you can rest assured that you'll have complete ownership of the book. Several companies secretly pull out the ownership from the customer, and despite being the real owner of the book, they receive a few pennies as profit from their book. However, that's not the scenario here. Our top-tier narrative story-writing company is known for extreme transparency in this matter. We give 100% rights to the customers and claim no share in the profits, no matter how many copies you sell.</p>
                    <div class="m-t-30">
                        <a href="{{ route('pages', 'get-free-quote') }}">
                            <button type="button" class="btn-order">Narrate A Story For Me</button>
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
                    <img data-src="{{ asset('assets/frontend/images/services/narrative-writing/narrative-writers.webp') }}" class="lazyload img-fluid" alt="Narrative Writers" title="Narrative Writers" loading="lazy" width="536" height="405" />
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
                        Reviews Manifesting For Our
                        <span class="font-red">
                            Narrative Writing Service
                        </span>
                        In USA
                    </h2>
                    <p>The following testimonials will help you make the right decision as the town manifests for our services:</p>
                </div>
            </div>
            <div class="swiper review-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">A friend of mine referred me to this online first-person narrative writing service in USA. I tried them, and it turned out to be the best decision. I am highly satisfied with this online company and would recommend it to others, too.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/narrative-writing/dorothy-aurelia.webp') }}" class="lazyload img-fluid" alt="Dorothy Aurelia" title="Dorothy Aurelia" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Dorothy Aurelia</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">I really loved the process. They shared a questionnaire with me, and I penned down all the details. The process was smooth. They understood really well and converted my brief into a quality narrative. Now, I am hiring them for publishing as well.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/narrative-writing/silas-oliver.webp') }}" class="lazyload img-fluid" alt="Silas Oliver" title="Silas Oliver" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Silas Oliver</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">Hiring them was a pleasing experience. I enjoyed working with them. I only had to pick the genre and share the concept. The rest was handled by the narrative writing experts of this company. The delivery was fast, and the prices were very affordable.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/narrative-writing/rose-iris.webp') }}" class="lazyload img-fluid" alt="Rose Iris" title="Rose Iris" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Rose Iris</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">I am overjoyed by the fact that I stumbled over these professional narrative story writers for hire. From start to finish, everything was super smooth. They took my feedback at every stage and amended the story as per my feedback. An ideal company to work with.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/narrative-writing/theodore-hugo.webp') }}" class="lazyload img-fluid" alt="Theodore Hugo" title="Theodore Hugo" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Theodore Hugo</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">I had an outstanding experience with this firm. Although, in the start, I was a bit doubtful since this was the first time I used any online service. But I am so happy that I made the right decision to hire them. Everything was smooth and on time.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/narrative-writing/brooks-frank.webp') }}" class="lazyload img-fluid" alt="Brooks Frank" title="Brooks Frank" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Brooks Frank</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">A perfect narrative writer in the USA! They narrated my story in the way I wanted it exactly. I loved every bit of my narrative story and would surely recommend this service to everyone. Highly recommended!</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/narrative-writing/felix-walter.webp') }}" class="lazyload img-fluid" alt="Felix Walter" title="Felix Walter" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Felix Walter</span>
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
                    <h2 class="h2">Unfold Your Story With American Creative Narrative Writers</h2>
                    <p>Don't let your creative ideas rot in your head! Allow our American creative narrative writers to take over.</p>
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
                                <button type="button" class="btn-live d-block p-0">Unfold My Story</button>
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
                        Trust First-Person Narrative Writing Specialist In America To
                        <span class="font-red">
                            Get The Best-Seller
                        </span>
                        !
                    </h2>
                </div>
            </div>
            <div class="scrollbar" id="style-2">
                <div class="force-overflow">
                    <div class="row m-t-20">
                        <div class="col-12 col-lg-6">
                            <span class="h4">Be It Fiction Or Nonfiction, We Do It All</span>
                            <p>Not every customer is the same; likewise, not every story is the same, and they may fall under different genres like fiction and nonfiction. But the good news is, we deal in fictional and nonfictional narratives, both! Our savvy and professional narrative story writers sit with the customer, jot down their concepts, and join the dots to surpass the customer's expectations. We cover fiction, nonfiction, and educational narratives (like application essays).</p>
                        </div>
                        <div class="col-12 col-lg-6">
                            <span class="h4">You Can Leave Printing & Publishing On Us!</span>
                            <p>It's understood that you will not keep your book hidden from the world. By the end, you'll have a well-written book ready to hit the marketplace. But getting your book on digital shelves like Amazon, Ingram, Apple Books, etc. isn't a child's play. Hence, we can help you with narrative book printing and publishing. What's more, we also offer novel editing services to tidy up your writing! So whatever it is, you can rely on us happily and confidently.</p>
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
                    <span class="h2">FAQs – Have Your Queries Answered!</span>
                    <div class="accordion" id="faqs">
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">
                                    What makes your narrative writing the best in USA?
                                </button>
                            </h3>
                            <div id="collapse-1" class="accordion-collapse collapse" aria-labelledby="heading-1" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Our expertise in narrating any story in the first person makes us the best narrative writing company in the USA. We help authors of all genres to curate a first-class, custom written story. You can expect the best quality work with high-end customer service and on-time delivery with us.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                    I want to hire memoir ghostwriters. Can you help?
                                </button>
                            </h3>
                            <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Yes, we offer memoir ghostwriting services as well. Often, customers want us to narrate their life stories to the audience, and we do look into their requirements. We have a separate team of memoir ghostwriters who look into these requirements. Hence, you can rely on us for memoirs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                    What if I am not satisfied with the narrative you've written?
                                </button>
                            </h3>
                            <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Usually, our customers are happy on the first attempt and never require changes in the work we deliver. In case you are unhappy with what's delivered to you, you can always acquire revisions from us. We offer edits and revisions free of cost. We guarantee 100% customer satisfaction.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                    What other service do you offer with narrative writing service?
                                </button>
                            </h3>
                            <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Yes, we do offer other services as well, like book printing and book publishing. After we are done with the writing part, we can help customers with book publishing and printing as well. We offer novel editing services, too. Just let us know what you want, and we will bring it for you.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                                    Is your narrative story writing company safe to hire?
                                </button>
                            </h3>
                            <div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Yes, it is absolutely safe to work with our narrative story-writing company. We have added all the required protocols in our service to keep this place safe for our customers. You don't have to worry about getting your book's concept stolen or misused in any way. Plus, the payment gateways are highly encrypted.</p>
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
