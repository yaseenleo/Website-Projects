<x-app-layout>

    <x-slot name="metadata">

        <x-frontend.seo-metadata
            title="Award-Winning Book Writing & Editing Services in USA"
            description="American Book Writer is a California-based Authors’ favorite website to get your book written and published smoothly. *Rated 5-Star *100% Royalties"
            robots="true"
        />

        <link rel="stylesheet" href="{{ mix('assets/frontend/css/home.css') }}" />
        <link rel="preload" as="image" href="{{ asset('assets/frontend/images/sample/path.webp') }}" />

    </x-slot>

    <section class="main-banner">
        <div class="container">
            <div class="row m-t-20">
                <div class="col-12 col-lg-12 text-center">
                    <span class="d-block">
                        <h1 class="h1">Book Writing Services Simplified for You!</h1>
                        <h2 class="h2">
                            Get Your
                            <i>Manuscript</i>
                            Written By American
                            <span class="font-red">Best-Selling</span>
                            Book Authors.
                        </h2>
                    </span>
                    <span class="h5">From Writing, Proofreading To Publication - We Take Charge Of Everything.</span>
                    <p>We are the USA's top-rated book writing company that brings your untold story out and dumps your literary woes by providing affordable ghostwriting and publishing services - all under one roof. Get ready to become a successful author!</p>
                </div>
            </div>
            <div class="row criclerow">
                <div class="sliderCircle">
                    <div class="circle">
                        <ul>
                            <li>
                                <img data-src="{{ asset('assets/frontend/images/sample/the-ruse.webp') }}" class="lazyload img-fluid" alt="The Ruse" title="The Ruse" loading="eager" width="199" height="271" />
                            </li>
                            <li>
                                <img data-src="{{ asset('assets/frontend/images/sample/the-final-six.webp') }}" class="lazyload img-fluid" alt="The Final Six" title="The Final Six" loading="eager" width="199" height="271" />
                            </li>
                            <li>
                                <img data-src="{{ asset('assets/frontend/images/sample/point-of-control.webp') }}" class="lazyload img-fluid" alt="Point Of Control" title="Point Of Control" loading="eager" width="199" height="271" />
                            </li>
                            <li>
                                <img data-src="{{ asset('assets/frontend/images/sample/va-nessa-s-valentines.webp') }}" class="lazyload img-fluid" alt="Va Nessa's Valentines" title="Va Nessa's Valentines" loading="eager" width="199" height="271" />
                            </li>
                            <li>
                                <img data-src="{{ asset('assets/frontend/images/sample/monsters-of-men.webp') }}" class="lazyload img-fluid" alt="Monsters Of Men" title="Monsters Of Men" loading="eager" width="199" height="271" />
                            </li>
                            <li>
                                <img data-src="{{ asset('assets/frontend/images/sample/stolen-valor.webp') }}" class="lazyload img-fluid" alt="Stolen Valor" title="Stolen Valor" loading="eager" width="199" height="271" />
                            </li>
                            <li>
                                <img data-src="{{ asset('assets/frontend/images/sample/the-sun-will-come-out.webp') }}" class="lazyload img-fluid" alt="The Sun Will Come Out" title="The Sun Will Come Out" loading="eager" width="199" height="271" />
                            </li>
                            <li>
                                <img data-src="{{ asset('assets/frontend/images/sample/the-light-years.webp') }}" class="lazyload img-fluid" alt="The Light Years" title="The Light Years" loading="eager" width="199" height="271" />
                            </li>
                            <li>
                                <img data-src="{{ asset('assets/frontend/images/sample/the-truth-lies-here.webp') }}" class="lazyload img-fluid" alt="The Truth Lies Here" title="The Truth Lies Here" loading="eager" width="199" height="271" />
                            </li>
                            <li>
                                <img data-src="{{ asset('assets/frontend/images/sample/the-subway.webp') }}" class="lazyload img-fluid" alt="The Subway" title="The Subway" loading="eager" width="199" height="271" />
                            </li>
                            <li>
                                <img data-src="{{ asset('assets/frontend/images/sample/the-adventure-ends.webp') }}" class="lazyload img-fluid" alt="The Adventure Ends" title="The Adventure Ends" loading="eager" width="199" height="271" />
                            </li>
                            <li>
                                <img data-src="{{ asset('assets/frontend/images/sample/the-bass-rock.webp') }}" class="lazyload img-fluid" alt="The Bass Rock" title="The Bass Rock" loading="eager" width="199" height="271" />
                            </li>
                            <li>
                                <img data-src="{{ asset('assets/frontend/images/sample/meet-me-here.webp') }}" class="lazyload img-fluid" alt="Meet Me Here" title="Meet Me Here" loading="eager" width="199" height="271" />
                            </li>
                            <li>
                                <img data-src="{{ asset('assets/frontend/images/sample/going-geek.webp') }}" class="lazyload img-fluid" alt="Going Geek" title="Going Geek" loading="eager" width="199" height="271" />
                            </li>
                            <li>
                                <img data-src="{{ asset('assets/frontend/images/sample/and-then-there-were-none.webp') }}" class="lazyload img-fluid" alt="And Then There Were None" title="And Then There Were None" loading="eager" width="199" height="271" />
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="BookTitle">
                    <div class="text">
                        <span class="typed-text"></span>
                        <span class="cursor blink">&nbsp;</span>
                    </div>
                    <div class="aboutCta">
                        <button type="button" class="btn-live open_popup" data-bs-toggle="modal" data-bs-target="#popupModal">
                            Request Free Consultation
                            <svg xmlns="http://www.w3.org/2000/svg" width="11.833" height="11.833" viewBox="0 0 11.833 11.833">
                                <path id="arrow-up-right" d="M9.117,6.75V7.933h7.449L6.75,17.749l.834.834L17.4,8.767v7.449h1.183V6.75Z" transform="translate(-6.75 -6.75)" fill="#1e4454"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="hr-line" />

    <x-frontend.brand />

    <hr class="hr-line" />
    <section class="main-about">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="form">
                        <span class="h3 text-center">
                            <span class="red">Unlock Exclusive Discount</span>
                        </span>
                        <div id="query_form"></div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <h2 class="h2 mt-4">
                        USA's #1
                        <i>Ghostwriting</i>
                        Agency - Taking Books To The
                        <span class="font-red">Best Seller's</span>
                        Aisle
                    </h2>
                    <p class="p-t-10">Being a newbie author, going down the road of writing, editing, marketing and self-publishing a book is no less than diving into a pool full of rocks. That's where AmericanBookWriter comes into play. Our book writing service skips you to the best part and places you on the best seller's shelf.</p>
                    <p class="p-t-10">Our professional ghostwriting services take your unheard story to the world by transforming it into a polished masterpiece that hits right at the hearts of bibliophiles. We can offer the helping hand that you need to draft and publish your next bestseller. The readers will surely fall in love with your story.</p>
                    <div class="box">
                        <span class="number">500</span>
                        <span class="plus">+</span>
                        <span class="e-text">Become A Bestselling Author</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="hr-line" />
    <section class="we-solution">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="h2">
                        Hire <i>American Ghostwriters</i> At Your Desired Rates And Get Complete
                        <span class="font-red">Value For Money!</span>
                    </h2>
                </div>
            </div>
            <div class="row m-t-30">
                <div class="col-12 col-lg-10 offset-md-1">
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <div class="choose-box">
                                <div class="row g-0">
                                    <div class="col-md-2">
                                        <img data-src="{{ asset('assets/frontend/images/icon/dedicated-book-expert.svg') }}" class="lazyload img-fluid mx-auto" alt="Dedicated Book Expert" title="Dedicated Book Expert" loading="lazy" width="31" height="24" />
                                    </div>
                                    <div class="col-md-10">
                                        <span class="h5">Dedicated Book Expert</span>
                                        <p>With a dedicated ebook writer and publisher, we give birth to a literary masterpiece.</p>
                                    </div>
                                </div>
                            </div>
                            <hr class="hr-line1" />
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="choose-box box2">
                                <div class="row g-0">
                                    <div class="col-md-2">
                                        <img data-src="{{ asset('assets/frontend/images/icon/no-limit-to-the-genre.svg') }}" class="lazyload img-fluid mx-auto" alt="No Limit To The Genre" title="No Limit To The Genre" loading="lazy" width="36" height="30" />
                                    </div>
                                    <div class="col-md-10">
                                        <span class="h5">No Limit To The Genre</span>
                                        <p>No matter what genre you choose, we take the challenge and bring the best to the table.</p>
                                    </div>
                                </div>
                            </div>
                            <hr class="hr-line1" />
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="choose-box">
                                <div class="row g-0">
                                    <div class="col-md-2">
                                        <img data-src="{{ asset('assets/frontend/images/icon/everything-is-customized.svg') }}" class="lazyload img-fluid mx-auto" alt="Everything Is Customized" title="Everything Is Customized" loading="lazy" width="32" height="31" />
                                    </div>
                                    <div class="col-md-10">
                                        <span class="h5">Everything is Customized</span>
                                        <p>We transform your idea into a 100% unique book - everything customized from start to end.</p>
                                    </div>
                                </div>
                            </div>
                            <hr class="hr-line1" />
                        </div>
                    </div>
                    <div class="row m-t-20">
                        <div class="col-12 col-lg-4">
                            <div class="choose-box">
                                <div class="row g-0">
                                    <div class="col-md-2">
                                        <img data-src="{{ asset('assets/frontend/images/icon/affordable-price.svg') }}" class="lazyload img-fluid mx-auto" alt="Affordable Price" title="Affordable Price" loading="lazy" width="32" height="31" />
                                    </div>
                                    <div class="col-md-10">
                                        <span class="h5">Affordable Price Tag</span>
                                        <p>Our prices won't dig a hole in your pocket - our book writer services save you a big chunk.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="choose-box box2">
                                <div class="row g-0">
                                    <div class="col-md-2">
                                        <img data-src="{{ asset('assets/frontend/images/icon/fastest-turnaround.svg') }}" class="lazyload img-fluid mx-auto" alt="Fastest Turnaround" title="Fastest Turnaround" loading="lazy" width="32" height="25" />
                                    </div>
                                    <div class="col-md-10">
                                        <span class="h5">Fastest Turnaround</span>
                                        <p>We don't believe in delaying your dreams. Instead, you get the quickest delivery in USA.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="choose-box">
                                <div class="row g-0">
                                    <div class="col-md-2">
                                        <img data-src="{{ asset('assets/frontend/images/icon/customized.svg') }}" class="lazyload img-fluid mx-auto" alt="100% Book Ownership" title="100% Book Ownership" loading="lazy" width="29" height="33" />
                                    </div>
                                    <div class="col-md-10">
                                        <span class="h5">100% Book Ownership</span>
                                        <p>We promise confidentiality and the writer's anonymity. You will retain the authorship rights.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center m-t-40">
                <a href="{{ route('pages', 'get-free-quote') }}">
                    <button type="button" class="btn-order">Request Free Consultation</button>
                </a>
            </div>
        </div>
    </section>
    <section class="book-writer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-7 my-auto">
                    <h2 class="h2">Hire Our Professional Book Writers If It Seems Impossible To Reach The Last Page On Your Own!</h2>
                    <p class="p-t-10">Writing or printing your own book is a tough nut to crack. However, our book writing services in USA enter the scene like a miracle and turn your story’s fate around. We transform your idea into a well-written masterpiece with captivating narration that compels your readers to pick your book and start reading.</p>
                    <div class="m-t-40">
                        <a href="{{ route('pages', 'get-free-quote') }}">
                            <button type="button" class="btn-order">I Want My Book Done</button>
                        </a>
                        <span class="or">OR</span>
                        <button role="button" type="button" onclick="openLiveChat();" class="btn-live">Start A Quick Chat</button>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-5 text-center">
                    <img data-src="{{ asset('assets/frontend/images/gif/book-writing-service.gif') }}" class="lazyload img-fluid" alt="Ebook Writing Service" title="Ebook Writing Service" loading="lazy" width="248" height="350" />
                </div>
            </div>
        </div>
    </section>
    <section class="how-we-work">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="h2">
                        That's How Our Book Writers In USA Take You <i>One Stop Closer</i> To
                        <span class="font-red">Literary Greatness!</span>
                    </h2>
                    <p class="m-t-20">Taking your story to the world in the form of a book takes a lot of work. You might just be done after a few chapters and have no clue how to finish it. That's where you might start looking for ghostwriters near me. Stop searching as we can craft, edit, print, and bring your book under the spotlight. Here's how we do it:</p>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-12 col-lg-3">
                    <div class="how-box">
                        <img data-src="{{ asset('assets/frontend/images/icon/streamlining-your-ideas.webp') }}" class="lazyload img-fluid" alt="Propose Your Idea & Story" title="Propose Your Idea & Story" loading="lazy" width="53" height="52" />
                        <span class="number">01</span>
                        <span class="h6">Propose Your Idea & Story</span>
                        <p>Tell us everything about your publication and its genre so we can understand what you need.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="how-box">
                        <img data-src="{{ asset('assets/frontend/images/icon/preparing-the-draft.webp') }}" class="lazyload img-fluid" alt="We Do Our Written Magic" title="We Do Our Written Magic" loading="lazy" width="53" height="52" />
                        <span class="number">02</span>
                        <span class="h6">We Do Our Written Magic</span>
                        <p>Now, we roll up our sleeves and give impactful words to your ideas, plots, and stories.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="how-box">
                        <img data-src="{{ asset('assets/frontend/images/icon/your-valuable-approval.webp') }}" class="lazyload img-fluid" alt="Tell Us What You Think" title="Tell Us What You Think" loading="lazy" width="53" height="52" />
                        <span class="number">03</span>
                        <span class="h6">Tell Us What You Think</span>
                        <p>We ask our customers for feedback and, with precise implementation, refine the draft.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="how-box box1">
                        <img data-src="{{ asset('assets/frontend/images/icon/branding.webp') }}" class="lazyload img-fluid" alt="Editing, Publishing & More" title="Editing, Publishing & More" loading="lazy" width="53" height="52" />
                        <span class="number">04</span>
                        <span class="h6">
                            Editing, Publishing
                            <br />
                            & More
                        </span>
                        <p>We aren't limited to ebook writing services. Our customers get full-fledged assistance!</p>
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
                        Some Of The <i>Successful Publications</i> By Our Expert
                        <span class="font-red">Book Writers In US!</span>
                    </h2>
                    <p>From editing support to publishing assistance, our cheap ebook writing service covers all your needs and will never let you down. You can check out some of our recent works to get a better idea of our ghostwriting excellence.</p>
                </div>
            </div>
            <div class="row m-t-40">
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/sample/cradles-will-fall.webp') }}" class="lazyload img-fluid" alt="Cradles Will Fall" title="Cradles Will Fall" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/sample/spearhead.webp') }}" class="lazyload img-fluid" alt="Spearhead" title="Spearhead" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/sample/the-crossing-point.webp') }}" class="lazyload img-fluid" alt="The Crossing Point" title="The Crossing Point" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/sample/the-fourth-prophecy.webp') }}" class="lazyload img-fluid" alt="The Fourth Prophecy" title="The Fourth Prophecy" loading="lazy" width="260" height="391" />
                </div>
            </div>
            <div class="row m-t-20">
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/sample/the-paris-plot.webp') }}" class="lazyload img-fluid" alt="The Paris Plot" title="The Paris Plot" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/sample/perhaps-i-will.webp') }}" class="lazyload img-fluid" alt="Perhaps I Will" title="Perhaps I Will" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/sample/divine-feminine.webp') }}" class="lazyload img-fluid" alt="Divine Feminine" title="Divine Feminine" loading="lazy" width="260" height="391" />
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/sample/glass-half-full-of-wine.webp') }}" class="lazyload img-fluid" alt="Glass Half Full of Wine" title="Glass Half Full of Wine" loading="lazy" width="260" height="391" />
                </div>
            </div>
        </div>
    </section>
    <section class="cta">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7 my-auto">
                    <span class="h2">Attention! You Can Be The Next JK Rowling!</span>
                    <p>Our expert ebook writers for hire have the secret recipe to make your publication a massive success. Get our top-notch book ghostwriting and publishing services to witness literary glory as an American author.</p>
                    <div class="row m-t-30">
                        <div class="col-md-4 my-auto">
                            <a href="{{ route('pages', 'get-free-quote') }}">
                                <button type="button" class="btn-live d-block p-0">Avail Free Consultation</button>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <div class="row g-0">
                                <div class="col-md-2 my-auto">
                                    <img data-src="{{ asset('assets/frontend/images/icon/live-chat.webp') }}" class="img-fluid lazyload mx-auto" alt="Live Chat" title="Live Chat" loading="lazy" width="38" height="33" />
                                </div>
                                <div class="col-md-10 text-start">
                                    <span class="phone">
                                        <button role="button" type="button" onclick="openLiveChat();" class="text-light">Start A Live Chat</button>
                                    </span>
                                    <span class="e-text">and become a success story</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <img data-src="{{ asset('assets/frontend/images/sample/last-stand-of-the-legion-rift.webp') }}" class="lazyload img-fluid book" alt="Last Stand Of The Legion Rift" title="Last Stand Of The Legion Rift" loading="lazy" width="378" height="300" />
                </div>
            </div>
        </div>
    </section>
    <section class="why-choose">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="row g-3">
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="box">
                                <img data-src="{{ asset('assets/frontend/images/icon/intriguing-story.webp') }}" class="lazyload img-fluid" alt="Intriguing Story" title="Intriguing Story" loading="lazy" width="48" height="54" />
                                <span class="h6">Story That Intrigues People</span>
                                <p>We make your story so engaging that readers are forced to sweep every copy from the shelf.</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="box">
                                <img data-src="{{ asset('assets/frontend/images/icon/around-the-clock.webp') }}" class="lazyload img-fluid" alt="Around the Clock" title="Around the Clock" loading="lazy" width="48" height="54" />
                                <span class="h6">Around The Clock Support</span>
                                <p>Until you get what you want - we're going nowhere. Hire book writers and get 24/7 assistance.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="box">
                                <img data-src="{{ asset('assets/frontend/images/icon/no-hidden-charges.webp') }}" class="lazyload img-fluid" alt="No Hidden Charges" title="No Hidden Charges" loading="lazy" width="78" height="53" />
                                <span class="h6">No Hidden Charges Involved</span>
                                <p>Our cheap and low-priced services are the author's Holy Grail - we don't charge extra.</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="box">
                                <img data-src="{{ asset('assets/frontend/images/icon/unlimited-revisions.webp') }}" class="lazyload img-fluid" alt="Unlimited Free Revisions" title="Unlimited Free Revisions" loading="lazy" width="52" height="53" />
                                <span class="h6">Unlimited Free Revisions</span>
                                <p>Book writing company that makes all the changes without asking for any extra amount.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 my-auto">
                    <h2 class="h2">
                        Specialist <i>Ebook Writers</i> For
                        <span class="font-red">Every Genre</span>
                    </h2>
                    <p class="p-t-10">Are you torturing search engines with your ghostwriters or book writers near me query? Let's put your fingers to rest. You've landed in the right place. No matter what genre you have, romance or thriller, fiction or non-fiction or even academic ghostwriting, we ensure you get top-of-the-line services at the most affordable prices.</p>
                    <p class="p-t-10">With Houston's talented minds on the team, we give your story the perfect words that it deserves. Our top-notch book writers and publishers never miss out on quality content and services that drive more eyeballs to your title and bring more footfall towards your publication. Whether you want a book writing service for a single draft or for a complete series, we are here to make all your authorship dreams a reality.</p>
                    <div class="m-t-40">
                        <a href="{{ route('pages', 'get-free-quote') }}">
                            <button type="button" class="btn-order">Get Free Quote</button>
                        </a>
                        <button role="button" type="button" onclick="openLiveChat();" class="btn-live">Take Expert Advice</button>
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
    <section class="award-banner">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7 my-auto">
                    <span class="h2">
                        "I Never Knew Their Services Could Help Me Sell A Whopping 20K+ Copies In Just 15 Days!"
                        <span class="light">Said One Client.</span>
                    </span>
                    <div class="m-t-20">
                        <a href="{{ route('pages', 'get-free-quote') }}">
                            <button type="button" class="btn-order">Let's Get Started</button>
                        </a>
                        <span class="or">OR</span>
                        <button role="button" type="button" onclick="openLiveChat();" class="btn-live">Take Free Consultation</button>
                    </div>
                    <p>Rated 9 out of 10 based on 3,543 satisfied customers.</p>
                    <div class="m-t-10">
                        <img data-src="{{ asset('assets/frontend/images/icon/trustpilot.svg') }}" class="lazyload img-fluid" alt="TrustPilot" title="TrustPilot" loading="lazy" width="150" height="30" />
                        <a href="https://arrivala.com/https-www-americanbookwriter-com-431/reviews/">
                            <img data-src="{{ asset('assets/frontend/images/icon/arriwala.svg') }}" class="lazyload img-fluid m-l-20" alt="Arriwala" title="Arriwala" loading="lazy" width="150" height="30" />
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <img data-src="{{ asset('assets/frontend/images/sample/hardcover-book.webp') }}" class="lazyload img-fluid d-block mx-auto" alt="Hardcover Book" title="Hardcover Book" loading="lazy" width="367" height="401" />
                </div>
            </div>
        </div>
    </section>
    <section class="reviews">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12 text-center">
                    <h2 class="h2">
                        Feedback From <i>Authors</i> Who Hired Our
                        <span class="font-red">Book Writers In US</span>
                    </h2>
                    <p>Our customers can't stop praising us for our ghostwriting and publishing services. Their cheerful words keep us motivated to outperform all the book writing companies in USA.</p>
                </div>
            </div>
            <div class="swiper review-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">I have worked with many self-publishing companies in the past they all were money-sucking machines. My luck changed when I learned about this firms’ cheap ebook writing service. They understood my requirements well and brought my story to the world at the best price.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/icon/mellisa-parker.webp') }}" class="lazyload img-fluid" alt="Mellisa Parker" title="Mellisa Parker" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Mellisa Parker</span>
                                        <span class="e-text">Los Angeles</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">I searched 'best book writers near me' and that's how I discovered them. My manuscript was stuck somewhere in between and I wanted to get it completed ASAP. They took the challenge and leave no chance to impress me. Their fast-paced services at wholesale prices captured my heart. I vouch for this company!</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/icon/beth-palmer.webp') }}" class="lazyload img-fluid" alt="Beth Palmer" title="Beth Palmer" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Beth Palmer</span>
                                        <span class="e-text">San Diego</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">Since my requirement list was pretty detailed, many companies failed to bring my expectations to life. Only their work caught my attention. I wanted the art, children and coloring book writing and printing done within a specific time. Trust me, the final result was beyond perfection.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/icon/ron-willis.webp') }}" class="lazyload img-fluid" alt="Ron Willis" title="Ron Willis" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Ron Willis</span>
                                        <span class="e-text">San Francisco</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">It was my third time taking their book review and custom report writing services to make my title a masterpiece. They have always been a great help in crafting a book that intrigues you and makes it a living gem. Their experts always help me out with free consultations and revisions. Good work!</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/icon/margie-torres.webp') }}" class="lazyload img-fluid" alt="Margie Torres" title="Margie Torres" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Margie Torres</span>
                                        <span class="e-text">Dallas</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">Ever since I took their hardcover book printing service, my publication got the revamp it needed. The sturdy book cover gave it a luxurious look and the hand feel just skyrocketed. My book is finally out now and I see the result right away. I must say this book writing company is a perfect all rounder.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/icon/ellen-guzman.webp') }}" class="lazyload img-fluid" alt="Ellen Guzman" title="Ellen Guzman" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Ellen Guzman</span>
                                        <span class="e-text">Seattle</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">The writer's block hit me hard and I was unable to finish my book after 4th chapter. But fortunately, I found them. I explained to their writing experts how I wanted things to turn out. They noted everything and exceeded my expectations with their quality content. The final manuscript was a masterpiece!</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/icon/james-henry.webp') }}" class="lazyload img-fluid" alt="James Henry" title="James Henry" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">James Henry</span>
                                        <span class="e-text">Chicago</span>
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
                    <h3 class="h2">Ready To Make Your Book This Season's Biggie?</h3>
                    <p>Our book writer services are equally effective for new and seasoned authors alike. We can turn you into the season’s most hot-selling writer. Hire American ghostwriters from our site to break all the sales records.</p>
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
                                <button type="button" class="btn-live d-block p-0">Let's Make It Big</button>
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
                        Leading <i>Book Writing Company</i> In USA
                        <span class="font-red">Since 2012!</span>
                    </h2>
                </div>
            </div>
            <div class="scrollbar" id="style-2">
                <div class="force-overflow">
                    <div class="row m-t-20">
                        <div class="col-12 col-lg-6">
                            <h2 class="h4">
                                Ghostwriters Who Are Pro
                                <span class="font-red">Wordsmiths</span>
                            </h2>
                            <p>Are you stuck midway and cannot find any way out to finish off your story? Our book writing services in USA are here to the rescue. Our ghostwriting services from pro book writers can make your story more intriguing for your readers. With writing wizards on board, we instantly make your story steal the show. Whether you have a half-cooked story or want us to start from scratch, we take the challenge of bringing your name to New York's bestseller list!</p>
                        </div>
                        <div class="col-12 col-lg-6">
                            <h2 class="h4">
                                Ebook Writers Delivering
                                <span class="font-red">Perfection</span>
                            </h2>
                            <p>Let us paint a picture. You're reading a book with a great story and exciting plot, but it is packed with typos. Is this the experience you want to give to your readers? Obviously no! Our professional book writing services include proper proofreading. The experts we have can detect every single error. The draft is not delivered until our QA team double-checks it. The delivery is completed once your manuscript gets approval.</p>
                        </div>
                        <div class="col-12 col-lg-6">
                            <h2 class="h4">
                                Editing That Makes Words
                                <span class="font-red">Impactful</span>
                            </h2>
                            <p>Being a newbie author, you face many challenges in giving your thoughts the words. Even if you pass that stage, most of the context is wrong, or perhaps the readability needs some work. That's where we step in and help you turn it into perfection. We find out the parts that need more clarity or have more potential to stand out. Our top editors get to work and turn it into a full-fledged book with proper formatting.</p>
                        </div>
                        <div class="col-12 col-lg-6">
                            <h2 class="h4">
                                <span class="font-red">Printing Books</span>
                                In US With Precision
                            </h2>
                            <p>Now that our book writers have done their job, it's time to print it out. Going for unreliable companies can make you end up with a compromised quality book. Worst paper quality, poor binding, and blurred cover can simply destroy your readers' experience. That's any author's worst nightmare. Hiring us to fulfill your printing needs could be a game-changer. No need to order hundreds when you need ten - we print your books on demand.</p>
                        </div>
                        <div class="col-12 col-lg-6">
                            <h2 class="h4">
                                <span class="font-red">Publishing A Book</span>
                                Is No More A Stress
                            </h2>
                            <p>Are you the one scratching your head because you have no clue how to complete your draft and get it published? Well, you're not alone. Most of the authors can relate to your story because their manuscript is also rotting in their home, covered in dust. Not anymore! We happily take the publishing stress from your shoulders. You can choose your desired platform, cover, and binding - we customize and bring your book to the world.</p>
                        </div>
                        <div class="col-12 col-lg-6">
                            <h2 class="h4">
                                <span class="font-red">Enchanting Book</span>
                                Covers That Sell Itself
                            </h2>
                            <p>Do you think people pass by your book without giving it a glance? Let's face it - your book cover attracts people towards it and entice them to pick it up. But if it's ugly, there's no doubt you'll lose the battle. But with our dream team, you can uplift the visual appeal of your draft. Our experts ensure you get the best cover packed with great graphics and illustrations that incite people's interest without giving out the plot.</p>
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
                    <span class="h2">
                        Get Answers To All Your
                        <span class="font-red">Queries!</span>
                    </span>
                    <div class="accordion" id="faqs">
                        <div class="accordion-item">
                            <h2 class="accordion-header h3" id="heading-1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">
                                    How much do you charge for book writing services?
                                </button>
                            </h2>
                            <div id="collapse-1" class="accordion-collapse collapse" aria-labelledby="heading-1" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Our book writing services are highly competitive and pretty affordable to your pocket. The prices start at $850. However, it can vary depending on the genre, requirement, no. of pages, and your requirements. For the exact price, call us today!</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header h3" id="heading-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                    Can your book writers complete a half-done book?
                                </button>
                            </h2>
                            <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Absolutely! We don't just write your book from scratch but also complete a half-done story. You can share your requirements in the brief form and provide all the relevant details about your book. It will help our ebook writers understand your expectations.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header h3" id="heading-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                    How long do you take to edit any eBook in USA?
                                </button>
                            </h2>
                            <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>The editing time may vary since every book is different in terms of pages and genre. However, our usual editing and formatting time is around 4-6 working days. You can choose our fast delivery option if you want to rush it up.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header h3" id="heading-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                    Is your book writer competent to write my book?
                                </button>
                            </h2>
                            <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Each ghostwriter in our team is vetted and selected on merit. They are New Jersey's best book writers with years of prior experience. They aren't just normal individuals, they are word wizards who know how to make any story a creative masterpiece.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header h3" id="heading-5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                                    Are your book writing services confidential in USA?
                                </button>
                            </h2>
                            <div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Totally! Our ghostwriting services are 100% confidential so you don't have to worry about privacy. Since it's ghostwriting, we always keep our writers and clients anonymous. Once you make the payment for the services, the book is now your intellectual property.</p>
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

    <x-frontend.modal />
    <x-frontend.whats-app />

    <x-slot name="script">

        <script>
            let contact = true;
            let contactScript = "{{ asset('assets/frontend/js/service-form.js') }}";

            let reCaptchaPublicKey = "{{ config('services.google-re-captcha.public') }}";

            let reviewSlider = true;
            let reviewSliderScript = "{{ asset('assets/frontend/js/review-slider.js') }}";

            let typeEffect = true;
            let typeEffectScript = "{{ asset('assets/frontend/js/type-effect.js') }}";

            <x-frontend.lazy-script />

            document.getElementsByClassName('reviews')[0].addEventListener('mouseover', function() {
                if (reviewSlider) {
                    loadScript(reviewSliderScript);
                }

                reviewSlider = false;
            });

            const elements = document.querySelectorAll('.main-about, .faqs');

            function handleMouseover(event) {
                if (contact) {
                    loadScript(contactScript);
                }

                contact = false;
            }

            elements.forEach(element => {
                element.addEventListener('mouseover', handleMouseover);
            });

            document.getElementsByClassName('main-banner')[0].addEventListener('mouseover', function() {
                if (typeEffect) {
                    loadScript(typeEffectScript);
                }

                typeEffect = false;
            });

            setTimeout(function() {
                if (reviewSlider) {
                    loadScript(reviewSliderScript);

                    reviewSlider = false;
                }

                if (contact) {
                    loadScript(contactScript);

                    contact = false;
                }

                if (typeEffect) {
                    loadScript(typeEffectScript);

                    typeEffect = false;
                }
            }, 5000);
        </script>

        <x-frontend.modal-script />

    </x-slot>

</x-app-layout>
