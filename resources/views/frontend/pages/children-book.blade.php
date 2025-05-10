<x-app-layout>

    <x-slot name="metadata">

        <x-frontend.seo-metadata
            title="USA's Experts Children's Book Writers | Creative Stories For Kids"
            description="Collaborate with an American children's book writing company to write captivating stories that inspire young readers to use their creativity."
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
                                Top
                            </span>
                            Children's Book Writing
                        </span>
                        <span class="h1">
                            Service To Fast Track Your
                            <span class="font-red">
                                Success
                            </span>
                        </span>
                    </h1>
                    <h2 class="h5">Children's Book Company That Never Fails To Impress</h2>
                    <p>Have you thought of writing down a children's book but can't put those emotions into words? AmericanBookWriter.com is your savior! We are an affordable agency that will craft your children's book from writing to publishing and everything in between. We're fast, secure, and USA's professionals!</p>
                    <div class="p-b-10 m-b-10">
                        <a href="{{ route('pages', 'get-free-quote') }}">
                            <button type="button" class="btn-order" style="width: 260px;">Do My Children's Book | 20% OFF</button>
                        </a>
                        <span class="or">OR</span>
                        <button role="button" type="button" onclick="openLiveChat();" class="btn-live">Consult Our Expert For Free</button>
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
                    <img data-src="{{ asset('assets/frontend/images/services/children-book/children-book-writers.webp') }}" class="lazyload img-fluid" alt="Children Book Writers" title="Children Book Writers" loading="lazy" width="536" height="405" />
                </div>
                <div class="col-12 col-lg-6 my-auto">
                    <h2 class="h2">
                        American Book Writers Who Hits The
                        <span class="font-red">
                            Right Chord
                        </span>
                        !
                    </h2>
                    <p>Children are all about fun; their tiniest minds don't comprehend complexity. Moreover, their language is simple and colorful. That's why our children's book-writing experts feed them with the entertainment they need with specks of educational elements. From captivating pictures to rousing layouts and vocabulary that young minds love, it is how we make it 'wow.' We don't make the educational part obvious. We use words to hit the kids in the right chord to keep the fun alive. We blend fun and development together, and don't let your creativity rot in your brain. We nurture it with our words, polish and design it to make it a book children fight for!</p>
                    <div class="m-t-30">
                        <a href="{{ route('pages', 'get-free-quote') }}">
                            <button type="button" class="btn-order" style="width: 260px;">Start Your Children's Book Journey</button>
                        </a>
                        <button role="button" type="button" onclick="openLiveChat();" class="btn-live">Get A Free Estimate</button>
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
                    Your
                    <span class="font-red">
                        Best Selling Dream
                    </span>
                    Will Come True With Our USA's Children's Book Designer
                </h2>
                <p>Isn't that your underlying wish to become a best-selling children's author? We have covert elements that can make any book a blockbuster. Here are a few things that make us inch perfect at everything.</p>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="box">
                        <img data-src="{{ asset('assets/frontend/images/services/children-book/cover-to-cover-creativity.svg') }}" class="lazyload img-fluid" alt="Cover To Cover Creativity" title="Cover To Cover Creativity" loading="lazy" width="48" height="48" />
                        <span class="h6">Cover To Cover Creativity</span>
                        <p>There's no way kids are falling in love with your book that is complex and boring. Kids want fun, which we give them with our engaging writing and children-friendly tone. Whether fairytales or comics, we add a witty touch to the book so that children get curious to know what's next.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="box">
                        <img data-src="{{ asset('assets/frontend/images/services/children-book/imaginative-illustrations.svg') }}" class="lazyload img-fluid" alt="Imaginative Illustrations" title="Imaginative Illustrations" loading="lazy" width="48" height="48" />
                        <span class="h6">Imaginative Illustrations</span>
                        <p>A dancing monkey, flying unicorn, or even a snoopy snowman, there's so much to make your children's book a major win. With great children's book layout design, we make it enticing for kids. Our illustrations mesmerize enough to open their imaginative world and charm them even more.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="box">
                        <img data-src="{{ asset('assets/frontend/images/services/children-book/result-driven-publishing.svg') }}" class="lazyload img-fluid" alt="Result Driven Publishing" title="Result Driven Publishing" loading="lazy" width="48" height="48" />
                        <span class="h6">Result Driven Publishing</span>
                        <p>It goes without saying that it's a battle of numbers. In the end, you'll want to snag the best sales numbers, no worries; our children's book publishing services are known for taking authors onto top-performing platforms. Barnes & Noble, Kobo, or Amazon, we'll take you there.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta cta1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 offset-md-2 text-center">
                    <h2 class="h2">Let USA's Children's Book Editors Cast Spell With Words!</h2>
                    <p>We don't just write; we shape words smartly to turn them into content kids love. We are full of out-of-the-box thinking to bring the best out for children to enjoy.</p>
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
                                <button type="button" class="btn-live d-block p-0">Let's Begin The Process</button>
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
                        5 Features That Make Us Top
                        <span class="font-red">
                            Children's Book
                        </span>
                        Writing and Publishing Agency
                    </h2>
                    <p>Take a hard look at why we should be on your speed dial:</p>
                </div>
                <div class="row mt-5">
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="nav-lists">
                                    <div class="nav nav-tab-list flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <button class="nav-link active" id="v-pills-all-rounder-in-usa-tab" data-bs-toggle="pill" data-bs-target="#v-pills-all-rounder-in-usa" type="button" role="tab" aria-controls="v-pills-all-rounder-in-usa" aria-selected="true">
                                            All Rounder In USA
                                        </button>
                                        <button class="nav-link" id="v-pills-quality-at-cheap-tab" data-bs-toggle="pill" data-bs-target="#v-pills-quality-at-cheap" type="button" role="tab" aria-controls="v-pills-quality-at-cheap" aria-selected="false">
                                            Quality At Cheap
                                        </button>
                                        <button class="nav-link" id="v-pills-swift-at-every-mile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-swift-at-every-mile" type="button" role="tab" aria-controls="v-pills-swift-at-every-mile" aria-selected="false">
                                            Swift At Every Mile
                                        </button>
                                        <button class="nav-link" id="v-pills-team-by-your-side-tab" data-bs-toggle="pill" data-bs-target="#v-pills-team-by-your-side" type="button" role="tab" aria-controls="v-pills-team-by-your-side" aria-selected="false">
                                            Team By Your Side
                                        </button>
                                        <button class="nav-link" id="v-pills-visionary-writers-tab" data-bs-toggle="pill" data-bs-target="#v-pills-visionary-writers" type="button" role="tab" aria-controls="v-pills-visionary-writers" aria-selected="false">
                                            Visionary Writers
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="tab-content nav-tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-all-rounder-in-usa" role="tabpanel" aria-labelledby="v-pills-all-rounder-in-usa-tab">
                                        <div class="service-details">
                                            <span>All Rounder In USA</span>
                                            <p>American Book Writers and are no regulars as we take in everything that falls in the category of children's books. From writing, editing, and formatting to even publishing, we do the most challenging parts without wasting extra time.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-quality-at-cheap" role="tabpanel" aria-labelledby="v-pills-quality-at-cheap-tab">
                                        <div class="service-details">
                                            <span>Quality At Cheap</span>
                                            <p>There are many children's book formatting services that will mess with your finances. Now, no more since our children's book writing is highly affordable. Don't be dubious about the quality, as we never bargain on the quality.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-swift-at-every-mile" role="tabpanel" aria-labelledby="v-pills-swift-at-every-mile-tab">
                                        <div class="service-details">
                                            <span>Swift At Every Mile</span>
                                            <p>Our children's book formatting services are fast. We run faster than your deadline and meet your expectations by composing your ideas into a full-fledged children's book. We do it within the deadline, faster than you think!</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-team-by-your-side" role="tabpanel" aria-labelledby="v-pills-team-by-your-side-tab">
                                        <div class="service-details">
                                            <span>Team By Your Side</span>
                                            <p>We're heroes in the children's books world. Our robust client support is always tied up in resolving the issues. Tiny or big problem, your experience with us will go smoothly as we rectify the situation with our trained staff.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-visionary-writers" role="tabpanel" aria-labelledby="v-pills-visionary-writers-tab">
                                        <div class="service-details">
                                            <span>Visionary Writers</span>
                                            <p>Only the best resource would burn calories on your project. They comprehend the nitty-gritty of children's minds. We do everything from writing plagiarism-free manuscripts to designing them into parent-approved books.</p>
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
                        Unveiling Some Of Our Fun Children's
                        <span class="font-red">
                            Book Creations
                        </span>
                        To America!
                    </h2>
                    <p>Our love for children and commitment to creativity led us to create some exceptional books.</p>
                </div>
            </div>
            <div class="row m-t-40">
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/children-book/book-1.webp') }}" class="lazyload img-fluid" alt="The Journey Of Dreams" title="The Journey Of Dreams" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/children-book/book-2.webp') }}" class="lazyload img-fluid" alt="Believe In The Impossible" title="Believe In The Impossible" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/children-book/book-3.webp') }}" class="lazyload img-fluid" alt="Picture Perfect Science" title="Picture Perfect Science" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/children-book/book-4.webp') }}" class="lazyload img-fluid" alt="Mett Xent" title="Mett Xent" loading="lazy" width="260" height="391" />
                </div>
            </div>
            <div class="row m-t-20">
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/children-book/book-5.webp') }}" class="lazyload img-fluid" alt="The Nettle Princess" title="The Nettle Princess" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/children-book/book-6.webp') }}" class="lazyload img-fluid" alt="The Jungle Book" title="The Jungle Book" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/children-book/book-7.webp') }}" class="lazyload img-fluid" alt="Perfect Match" title="Perfect Match" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/children-book/book-8.webp') }}" class="lazyload img-fluid" alt="Floating In The Blue" title="Floating In The Blue" loading="lazy" width="260" height="391" />
                </div>
            </div>
        </div>
    </section>
    <section class="cta cta1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 offset-md-2 text-center">
                    <h2 class="h2">Let Your Ideas Thrive With USA's Children's Book Designer</h2>
                    <p>Hook the kids and preschoolers with imaginative graphics. We let our designer seep their creativity out so kids can find treasures on every single page.</p>
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
                                <button type="button" class="btn-live d-block p-0">Design My Book Today</button>
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
                        USA's Children's Book Experts Customizes Everything For
                        <span class="font-red">
                            Young Minds
                        </span>
                        !
                    </h2>
                    <p>Throwing stones without setting a target isn't going to win you the game. Similarly, if you're writing without considering the audience, it's a long shot. Our children's book writer services work for a specific age group, like teens and pre-teens. You can use formats like poems, prose, chapters, riddles, etc. There's no bound on creativity when you're working with us. We have solid writers for every genre, from fairy tales to picture books. We are not limited to writing; we also make compelling covers on your command.</p>
                    <div class="m-t-30">
                        <a href="{{ route('pages', 'get-free-quote') }}">
                            <button type="button" class="btn-order">Customize My Children's Book</button>
                        </a>
                        <button role="button" type="button" onclick="openLiveChat();" class="btn-live">Quick Chat With Expert</button>
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
                    <img data-src="{{ asset('assets/frontend/images/services/children-book/children-book-writing.webp') }}" class="lazyload img-fluid" alt="Children Book Writing" title="Children Book Writing" loading="lazy" width="536" height="405" />
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
                        Children's Book Ghostwriting Organization That Gets The Love Of The
                        <span class="font-red">
                            Whole USA
                        </span>
                    </h2>
                    <p>Americans only go for our original services out of infinite online book promotion websites. Take a peek at their comments:</p>
                </div>
            </div>
            <div class="swiper review-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">I went for their children's Illustrations & book designing, which was very affordable. Their children's book-writing experts did a great job bringing my ideas into words. The fact that everything was done on time before the deadline was a plus. I highly recommend it to everyone.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/children-book/janice-hicks.webp') }}" class="lazyload img-fluid" alt="Janice Hicks" title="Janice Hicks" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Janice Hicks</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">I checked out many publishing companies for children's books, but their Amazon book publishing seemed genuine. Their team was professional, and they did everything from writing to distribution in a cinch. They are a fast and cheap children's book cover design agency.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/children-book/lillie-simmons.webp') }}" class="lazyload img-fluid" alt="Lillie Simmons" title="Lillie Simmons" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Lillie Simmons</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">They're by far the best children's book formatting and publishing agency. I wanted to format my book, but the prices were so cheap that I went for illustrating a children's book. The deal was highly affordable, and they handled everything. No barrier in communication and fast delivery!</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/children-book/kirk-brady.webp') }}" class="lazyload img-fluid" alt="Kirk Brady" title="Kirk Brady" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Kirk Brady</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">I looked up reliable eBook proofreading companies and found them to be perfect. Their Children's book editing and proofreading were phenomenal because the quality of their assistance was top-notch. Later, I chose them for publishing a children's book, too, as prices were low.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/children-book/kelly-elijah.webp') }}" class="lazyload img-fluid" alt="Kelly Elijah" title="Kelly Elijah" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Kelly Elijah</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">My search for 'children's book illustrators near me' took me to their website. I loved their children's book illustration services as I only had to share an inspiration, and they did the rest. Their children's book designer did a perfect job of bringing my vision to life. Quality work!</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/children-book/marty-farmer.webp') }}" class="lazyload img-fluid" alt="Marty Farmer" title="Marty Farmer" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Marty Farmer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">I only had to look up 'children's book publishers near me,' and the webpage was filled with great reviews. Apparently, their children's book publishers are very famous in the USA. The reason is their on-time services. My book was available on my different platforms in one week.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/children-book/orlando-warner.webp') }}" class="lazyload img-fluid" alt="Orlando Warner" title="Orlando Warner" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Orlando Warner</span>
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
                    <span class="h2">Defy Conventional In USA As We Do Amazon Book Publishing & More!</span>
                    <p>Amazon is just one step. There are so many children's book platforms that you need to conquer. Let our children's book-writing experts land your book on the best ones.</p>
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
                                <button type="button" class="btn-live d-block p-0"style="width: 240px;">Publish My Children's Book – Immediately</button>
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
                        Here's Why We're Sitting On The Throne Of Best Children's Book Writing
                        <span class="font-red">
                            Company
                        </span>
                    </h2>
                </div>
            </div>
            <div class="scrollbar" id="style-2">
                <div class="force-overflow">
                    <div class="row m-t-20">
                        <div class="col-12 col-lg-6">
                            <h2 class="h4">Children's Book Writing Services</h2>
                            <p>No matter how seasoned writer you are, jotting down fascinating stories that resonate with the young mind isn't child's play. We completely understand what children look for. Interesting vocabulary, easy structure, and highly engaging format are some elements we add to children's books. We're also stretching our services to proofreading and formatting. Our writing is the only way you'll become a hero of the young world.</p>
                        </div>
                        <div class="col-12 col-lg-6">
                            <h2 class="h4">Book Design and Publishing Services</h2>
                            <p>Internet is flooded with online children's book publishing platforms, but how many of them actually do the job right? Don't worry – we do! We're result-driven and always give you results in numbers. We make the cover captivating as a candy for children. Later, we guarantee to place your book in the USA's most loved bookstores. Be it Amazon or Barnes & Noble, taking you to the world is our thing.</p>
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
                    <span class="h2">Want To Publish A Children's Book? Review These FAQs First!</span>
                    <div class="accordion" id="faqs">
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">
                                    Are your children's book writing services confidential?
                                </button>
                            </h3>
                            <div id="collapse-1" class="accordion-collapse collapse" aria-labelledby="heading-1" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Our children's book ghostwriting services are completely secure and legal. We never let your personal or project information on the loose. Only our children's book editors and writers can access your book. This is to promote confidentiality.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                    Are you the best in children's book publishing companies?
                                </button>
                            </h3>
                            <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>There are many children's book writing websites, but only we have built that trust in America. That is simply because of our incredible children's book editing and designing services. From cheap prices to fast delivery time, we're the best.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                    Are your children's book cover designers experienced in USA?
                                </button>
                            </h3>
                            <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Our team comprises children's book cover design experts from all over the USA. They've become part of our team after rigorous tests and meeting the criteria. Our children's book illustrators are available for hire at an economical price.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                    How long your children's book proofreading services are take?
                                </button>
                            </h3>
                            <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Our children's book proofreaders finish the job within a few days. However, the time duration may differ depending on the services you're taking. For instance, our children's book writer service takes only 7-10 days in America and around.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                                    How much does your children's book publishing company charge?
                                </button>
                            </h3>
                            <div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Our children's book publishing services are affordable and don't charge a lot. Unlike many children's book writing and editing companies, our starting prices go as low as $20. Depending on the service you choose, it may take even less.</p>
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
