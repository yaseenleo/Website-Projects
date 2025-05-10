<x-app-layout>

    <x-slot name="metadata">

        <x-frontend.seo-metadata
            title="Professional Bio Writing Services For 100% Authentic Biographies"
            description="Take help writing an autobiography from our specialist bio writers to narrate your journey to the world in the easiest way possible & keep all royalties."
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
                            Proficient American
                        </span>
                        <span class="h1">
                            Autobiography
                            <span class="font-red">
                                Writers
                            </span>
                        </span>
                    </h1>
                    <h2 class="h5">Our Professional Bio Writer Skip You To The Best Part</h2>
                    <p>Writing about someone is complex, but only American Book Writer takes that challenge to do it. Our high-quality autobiography writing jots down a person's personality into words. With the best autobiography ghostwriters on the team, we’ll do that effortlessly for you without producing a hefty bill.</p>
                    <div class="p-b-10 m-b-10">
                        <a href="{{ route('pages', 'get-free-quote') }}">
                            <button type="button" class="btn-order" style="width:260px;">Write My Biography In Your Words!</button>
                        </a>
                        <span class="or">OR</span>
                        <button role="button" type="button" onclick="openLiveChat();" class="btn-live">Consult Our Experts For Free</button>
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
                    <img data-src="{{ asset('assets/frontend/images/services/biography-writing/biography-writing-services.webp') }}" class="lazyload img-fluid" alt="Biography Writing Services" title="Biography Writing Services" loading="lazy" width="536" height="405" />
                </div>
                <div class="col-12 col-lg-6 my-auto">
                    <h2 class="h2">
                        Defeat Writer’s Block Only with USA’s Biography
                        <span class="font-red">
                            Writing Services
                        </span>
                        !
                    </h2>
                    <p>Life is full of bitter-sweet memories, but for some, it’s no less than a blockbuster movie with all the drama, emotion, lessons, and so much more. But here’s the catch: Capturing that exact emotion is like grasping at straws. Your bin will flood with the paper balls of your draft because you’re out of words to ingrain those rush of emotions on the paper. If that’s your writing routine, head straight to us to get help writing an autobiography. We’re the USA’s best biography writing services that would help you take your story to the world with exceptional writing.</p>
                    <div class="m-t-30">
                        <a href="{{ route('pages', 'get-free-quote') }}">
                            <button type="button" class="btn-order">Hey – Make My Biography Special</button>
                        </a>
                        <button role="button" type="button" onclick="openLiveChat();" class="btn-live">Get A Free Quote Today</button>
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
                    Our Top-Notch Writers Give Americans Stellar Biographies To
                    <span class="font-red">
                        Binge Read
                    </span>
                    !
                </h2>
                <p>Why go for someone regular to write your biography when you can hire the most perfect and professional assistance for you? Check out the features that compel people to say, ‘Write my biography for me’!</p>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="box">
                    <img data-src="{{ asset('assets/frontend/images/services/biography-writing/engrossing-tales-every-time.svg') }}" class="lazyload img-fluid" alt="Engrossing Tales Every Time" title="Engrossing Tales Every Time" loading="lazy" width="48" height="48" />
                        <span class="h6">Engrossing Tales Every Time</span>
                        <p>We don’t just write to make the audience read; we keep them engaged until they reach the last page. Our unique writing and creative structure keep them bound to your book. We know how to make your reader go ‘wow’ at every step of the way; our captivating writing is one of our secrets.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="box">
                    <img data-src="{{ asset('assets/frontend/images/services/biography-writing/spot-on-character-building.svg') }}" class="lazyload img-fluid" alt="Spot On Character Building" title="Spot On Character Building" loading="lazy" width="48" height="48" />
                        <span class="h6">Spot On Character Building</span>
                        <p>No one other than us builds bang-on portraits of the characters. We justify the character with our compelling vocabulary and engaging writing style. With our inch-perfect persona development, readers will be hooked on what that character does next. We’d do that in a snap of fingers.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="box">
                    <img data-src="{{ asset('assets/frontend/images/services/biography-writing/capturing-the-right-emotion.svg') }}" class="lazyload img-fluid" alt="Capturing The Right Emotion" title="Capturing The Right Emotion" loading="lazy" width="48" height="48" />
                        <span class="h6">Capturing The Right Emotion</span>
                        <p>Bringing the right feeling of the person is really hard to trap in words. But no worries, as we do that very well. Thanks to our fantastic team of expert writers, they do that in no time. We pack the passion into the tale to make it rousing for the readers. They simply can’t resist flipping through more pages.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta cta1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 offset-md-2 text-center">
                    <h2 class="h2">Biography Writers That Crafts Story into USA’s Best Seller!</h2>
                    <p>Our bio writers are filled up with creativity ready to seep out with your words ‘Write a biography for me’!</p>
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
                                <button type="button" class="btn-live d-block p-0">Start My Biography Today</button>
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
                        Bio Writing Services Rises With
                        <span class="font-red">
                            Exclusive Features
                        </span>
                        In The USA!
                    </h2>
                    <p>Can’t write what you have in mind? Simply hire a writer for your biography as we have some features worth fighting for.</p>
                </div>
                <div class="row mt-5">
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="nav-lists">
                                    <div class="nav nav-tab-list flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <button class="nav-link active" id="v-pills-expert-bio-writers-tab" data-bs-toggle="pill" data-bs-target="#v-pills-expert-bio-writers" type="button" role="tab" aria-controls="v-pills-expert-bio-writers" aria-selected="true">
                                            Expert Bio Writers
                                        </button>
                                        <button class="nav-link" id="v-pills-affordable-pricing-tab" data-bs-toggle="pill" data-bs-target="#v-pills-affordable-pricing" type="button" role="tab" aria-controls="v-pills-affordable-pricing" aria-selected="false">
                                            Affordable Pricing
                                        </button>
                                        <button class="nav-link" id="v-pills-peak-of-quality-tab" data-bs-toggle="pill" data-bs-target="#v-pills-peak-of-quality" type="button" role="tab" aria-controls="v-pills-peak-of-quality" aria-selected="false">
                                            Peak Of Quality
                                        </button>
                                        <button class="nav-link" id="v-pills-on-time-delivery-tab" data-bs-toggle="pill" data-bs-target="#v-pills-on-time-delivery" type="button" role="tab" aria-controls="v-pills-on-time-delivery" aria-selected="false">
                                            On-Time Delivery
                                        </button>
                                        <button class="nav-link" id="v-pills-satisfaction-tab" data-bs-toggle="pill" data-bs-target="#v-pills-satisfaction" type="button" role="tab" aria-controls="v-pills-satisfaction" aria-selected="false">
                                            100% Satisfaction
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="tab-content nav-tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-expert-bio-writers" role="tabpanel" aria-labelledby="v-pills-expert-bio-writers-tab">
                                        <div class="service-details">
                                            <span>Expert Bio Writers</span>
                                            <p>We have a battalion of pro writers specialized in writing biographies for years. Their day starts with writing your tale and ends with making it a perfect version of your story. With over 200+ writers, our work captures the essence.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-affordable-pricing" role="tabpanel" aria-labelledby="v-pills-affordable-pricing-tab">
                                        <div class="service-details">
                                            <span>Affordable Pricing</span>
                                            <p> You don’t have to splash out on your next book anymore. Thanks to our cheap pricing that will spread delight over your faces. We go low on the price game so you can get your story out without spending a fortune.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-peak-of-quality" role="tabpanel" aria-labelledby="v-pills-peak-of-quality-tab">
                                        <div class="service-details">
                                            <span>Peak Of Quality</span>
                                            <p> Do you want to live the American dream by becoming a best-selling author? We’ve got you! The quality and creativity of our biography writing are through the roof. Our QA takes the lead to turn it into the next wonder.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-on-time-delivery" role="tabpanel" aria-labelledby="v-pills-on-time-delivery-tab">
                                        <div class="service-details">
                                            <span>On-Time Delivery</span>
                                            <p> We never fill you up with anger over delays. With the best team, we never slow down on writing your tales. Instead, we’re always in a hurry to get the job done before the time. Trust us, it usually takes around 10 days.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-satisfaction" role="tabpanel" aria-labelledby="v-pills-satisfaction-tab">
                                        <div class="service-details">
                                            <span>100% Satisfaction</span>
                                            <p>Opting for our bio writing services is the best decision you can make. With the quality of the work, we also ensure you get the best response from our team. From project updates to answering queries, we do it 24/7.</p>
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
                        Bio Writers Revealing Our Best Seller In USA
                        <span class="font-red">
                            This Season
                        </span>
                        !
                    </h2>
                    <p>We’ve taken the stories of over 10K+ writers around the globe with engrossing writing and spectacular narrative.</p>
                </div>
            </div>
            <div class="row m-t-40">
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/biography-writing/book-1.webp') }}" class="lazyload img-fluid" alt="Samuel Beckett" title="Samuel Beckett" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/biography-writing/book-2.webp') }}" class="lazyload img-fluid" alt="Aepphaa" title="Aepphaa" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/biography-writing/book-3.webp') }}" class="lazyload img-fluid" alt="Ronalld C. White" title="Ronalld C. White" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/biography-writing/book-4.webp') }}" class="lazyload img-fluid" alt="Benjamin Franklin" title="Benjamin Franklin" loading="lazy" width="260" height="391" />
                </div>
            </div>
            <div class="row m-t-20">
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/biography-writing/book-5.webp') }}" class="lazyload img-fluid" alt="Steve Jobs Biography" title="Steve Jobs Biography" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/biography-writing/book-6.webp') }}" class="lazyload img-fluid" alt="Stephen King" title="Stephen King" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/biography-writing/book-7.webp') }}" class="lazyload img-fluid" alt="Stephen Hawking" title="Stephen Hawking" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/biography-writing/book-8.webp') }}" class="lazyload img-fluid" alt="It's A Long Story" title="It's A Long Story" loading="lazy" width="260" height="391" />
                </div>
            </div>
        </div>
    </section>
    <section class="cta cta1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 offset-md-2 text-center">
                    <span class="h2">Professional Bio Writer Composing Legacy In The USA!</span>
                    <p>We’re leaving no chance to make your story a big chartbuster. This is literally the start of your rousing legacy written in words.</p>
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
                                <button type="button" class="btn-live d-block p-0">Write Your Biography – Leave A Legacy</button>
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
                        USA’s Exceptional Bio Writing Services Making Tales
                        <span class="font-red">
                            Reach Million
                        </span>
                        !
                    </h2>
                    <p>Writing a biography journey is full of bummers. Whether you’re seasoned or just ushering into the writing world, writer's block may hit you anytime. That’s where our life story writing services turn up the notch. Our professional biography writer will do all the writing part so your story reaches millions of Americans with the best words. Stop looking for the best biography ghostwriters near me and say, ‘Write a bio for me’. Those words are enough to recharge our brains and hence we transform your book into perfection.</p>
                    <div class="m-t-30">
                        <a href="{{ route('pages', 'get-free-quote') }}">
                            <button type="button" class="btn-order">Let's Get This Journey Begin!</button>
                        </a>
                        <button role="button" type="button" onclick="openLiveChat();" class="btn-live">Get Free Estimate</button>
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
                    <img data-src="{{ asset('assets/frontend/images/services/biography-writing/biography-writers.webp') }}" class="lazyload img-fluid" alt="Biography Writers" title="Biography Writers" loading="lazy" width="536" height="405" />
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
                        American Bio Writers Hooting
                        <span class="font-red">
                            For Our Work
                        </span>
                        !
                    </h2>
                    <p>USA is going head over heels for our biography services. Navigate through a few to find out what it’s all about.</p>
                </div>
            </div>
            <div class="swiper review-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">Their professional biography writing services are the best. They write everything from scratch, and the writing is beyond perfection. They created my autobiography with all the elements I was looking for. Cheap rates and fastest turnaround in USA.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/biography-writing/edward-rodgers.webp') }}" class="lazyload img-fluid" alt="Edward Rodgers" title="Edward Rodgers" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Edward Rodgers</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">I only uttered, ‘Write my autobiography for me’ in 10 days, and they did that wonderfully. I’m still surprised how they pulled it off on such short notice. Plus, the fact that quality top notch was commendable. Their biography ghostwriters produced quality content.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/biography-writing/stewart-perez.webp') }}" class="lazyload img-fluid" alt="Stewart Perez" title="Stewart Perez" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Stewart Perez</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">Finding a ghostwriter for an autobiography was way too difficult. However, only their ghostwriter for autobiography seemed to be the perfect match. I was right, as their writing was 100% and very professional. The fast turnaround made it perfect!</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/biography-writing/deborah-soto.webp') }}" class="lazyload img-fluid" alt="Deborah Soto" title="Deborah Soto" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Deborah Soto</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">My friend suggested you should write your autobiography. That’s how I started the bio writers for hire search. Since their writing was outstanding, I ordered custom illustrations for my book. I couldn't stop, and it was followed by a ‘print my book’ request. Fantastic!</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/biography-writing/shane-phelps.webp') }}" class="lazyload img-fluid" alt="Shane Phelps" title="Shane Phelps" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Shane Phelps</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">Many people asked me to write your biography, but I couldn’t do justice to my life story. That’s when their professional bio-writing services help me out. They sent me the first chapter, and it was way too good. They even offered revisions for free!</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/biography-writing/laura-brown.webp') }}" class="lazyload img-fluid" alt="Laura Brown" title="Laura Brown" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Laura Brown</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">Writing a biography book was a tough nut to crack, so I knocked on their door. Their autobiography writer online is the best at everything. They did a wonderful job in the first shot. I’m impressed with the quality and the fact they’re super affordable.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/biography-writing/daryl-thompson.webp') }}" class="lazyload img-fluid" alt="Daryl Thompson" title="Daryl Thompson" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Daryl Thompson</span>
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
                    <h2 class="h2">USA’s Autobiography Writing That Traps the Essence with Words</h2>
                    <p>Our writers do wonders with their highly engaging writing and stellar vocabulary. All that merges together and produces an award-winning book.</p>
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
                                <button type="button" class="btn-live d-block p-0">Make My Life Story Revolutionary</button>
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
                        A Few Out of Infinite Perks USA’s Biography Writing Company
                        <span class="font-red">
                            Brings to You
                        </span>
                        !
                    </h2>
                </div>
            </div>
            <div class="scrollbar" id="style-2">
                <div class="force-overflow">
                    <div class="row m-t-20">
                        <div class="col-12 col-lg-6">
                            <span class="h4">Incredible 24/7 Customer Support</span>
                            <p>Our biography writing company is your savior to all writing issues. From American book writers to our client support team, all are working for the same motive of giving you the experience of a lifetime. Whether you are asking for a project update, a free consultation, or just looking for a quote, our team is always at your disposal. No matter what issue you go through, there’s nothing that can stand in front of our client support. You can expect on-time delivery, 24/7 prompt response, and unmatched experience.</p>
                        </div>
                        <div class="col-12 col-lg-6">
                            <span class="h4">Unlimited Tweak Free Of Cost</span>
                            <p>Writing a personal biography is definitely not everyone's deal. It’s challenging for your ideas to penetrate wisely onto the paper. But let us just reveal that these are not your headache if you’re going for our autobiography writing service. Our trusted biography writers do the job right in the first round. But even if you want to make tweaks here and there, we have got free revisions. You no longer have to pay any extra amount as our revision is completely free. That’s just to drift a wave of satisfaction to your way.</p>
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
                    <span class="h2">Smashing The Rumors with Biography Writing FAQs!</span>
                    <div class="accordion" id="faqs">
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">
                                    Are your biography writers experienced in doing my book online?
                                </button>
                            </h3>
                            <div id="collapse-1" class="accordion-collapse collapse" aria-labelledby="heading-1" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Writing a life story is not a cup of tea. That’s why we’ve cherry-picked the most qualified biography writers. Yes, we don’t have regular writers, but our experts know the inside out of autobiography writing. No wonder our work is phenomenal.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                    How can I hire a biographer without spending a fortune in the USA?
                                </button>
                            </h3>
                            <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>The answer is simple – stick with the USA’s best biography writing company known for its quality and affordable pricing. Our prices are cheap and very economical, which starts as low as $25. That’s relatively lower than a lot of companies USA.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                    What questions do you ask to begin custom biography writing?
                                </button>
                            </h3>
                            <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>To get the ball rolling, we’ll ask you to narrate the story. We would inquire if you have any preplanned outline to begin with or else we’ll take the lead by employing our best writers to the project. Once you share your story, the hassle’s all ours.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                    Does your biography ghostwriter manage the privacy of the author?
                                </button>
                            </h3>
                            <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Yes, they do! No delicate information will be leaked out, as we have a strict confidentiality policy. Only your project manager, assigned writers and editors will know the drill to give maximum privacy. So, confidentiality issues are out of the question.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                                    Can I urgently hire your best biography writers for my custom book?
                                </button>
                            </h3>
                            <div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Absolutely! We are USA’s favorite for a lot of reasons and fast delivery and last minute orders are few of them. Even if you show up at the 11th hour and ask for express delivery, we’ll put you up as a priority. However, the fast delivery charges will apply.</p>
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
