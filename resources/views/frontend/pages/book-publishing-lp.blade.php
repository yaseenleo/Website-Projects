<x-app-layout>

    <x-slot name="metadata">

        <x-frontend.seo-metadata
            title=""
            description=""
            robots="false"
        />

        <meta name="googlebot" content="noindex, nofollow" />
        <meta name="robots" content="noindex, nofollow, noarchive" />
        <link rel="stylesheet" href="{{ mix('assets/frontend/css/bp-lp.css') }}" />
        <link rel="preload" as="image" href="{{ asset('assets/frontend/images/bp-lp/simple/book-publishing-lp-bg.webp') }}" />
        <link rel="preload" as="image" href="{{ asset('assets/frontend/images/bp-lp/simple/successful-publications.webp') }}" />
        <link rel="preload" as="image" href="{{ asset('assets/frontend/images/bp-lp/simple/self-publishing-own-book.webp') }}" />

    </x-slot>

    <section class="main-banner text-center">
        <div class="container">
            <div class="row m-t-20">
                <div class="col-lg-6 col-md-9 mx-auto">
                    <h1 class="h1">Self-Publishing Your Own Book Is No Longer A Hassle!</h1>
                    <span class="h5">Book Publishers Supporting The Dreams Of American Authors.</span>
                    <p class="m-t-30">We are here to make the process of self-publishing a book a walk in the park for our clients. Publishers of several New York Times bestsellers are ready to serve you.</p>
                </div>
                <div class="col-12 col-lg-12 text-center">
                    <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/self-publishing-own-book.webp') }}" class="lazyload d-none mb-4 img-fluid mx-auto d-sm-block d-md-block d-lg-block" alt="Self Publishing Own Book" title="Self Publishing Own Book" loading="eager" width="753" height="362" />
                    <button type="button" class="btn-order open_popup" data-bs-toggle="modal" data-bs-target="#popupModal">GET MY FREE SELF-PUBLISHING GUIDE</button>
                    <small>Over 330K+ Successful Publications</small>
                    <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/successful-publications.webp') }}" class="img-fixed-size lazyload img-fluid mx-auto d-block" alt="Successful Publications" title="Successful Publications" loading="eager" width="275" height="72" />
                </div>
            </div>
        </div>
    </section>
    <section class="brand">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 d-flex">
                    <img data-src="{{ asset('assets/frontend/images/sample/abe-books.svg') }}" class="lazyload img-fluid" alt="Abe Books" title="Abe Books" loading="lazy" width="142" height="54" />
                    <img data-src="{{ asset('assets/frontend/images/sample/alibris.svg') }}" class="lazyload img-fluid" alt="Alibris" title="Alibris" loading="lazy" width="134" height="54" />
                    <img data-src="{{ asset('assets/frontend/images/sample/barnes-noble.svg') }}" class="lazyload img-fluid" alt="Barnes & Noble" title="Barnes & Noble" loading="lazy" width="163" height="54" />
                    <img data-src="{{ asset('assets/frontend/images/sample/create-space.svg') }}" class="lazyload img-fluid" alt="Create Space" title="Create Space" loading="lazy" width="108" height="54" />
                    <img data-src="{{ asset('assets/frontend/images/sample/hachette-book-group.svg') }}" class="lazyload img-fluid" alt="Hachette Book Group" title="Hachette Book Group" loading="lazy" width="135" height="54" />
                    <img data-src="{{ asset('assets/frontend/images/sample/harper-collins.svg') }}" class="lazyload img-fluid" alt="Harper Collins" title="Harper Collins" loading="lazy" width="199" height="54" />
                </div>
            </div>
        </div>
    </section>
    <section class="main-about text-lg-start text-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-9 mx-auto mb-4 text-center">
                    <span class="g-star">
                        <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/google-stars.webp') }}" class="lazyload img-fluid" alt="Google Star" title="Google Star" loading="eager" width="128" height="24" />
                        4.9 Stars 156 Reviews
                    </span>
                    <h2 class="h2">Amazon Publishing Partner Who Can Turn You Into The Next Writing Sensation In USA</h2>
                    <p>You can join the ranks of elite authors in USA by getting the most reliable publishing team on board. We work on your story like our own.</p>
                </div>
                <div class="col-lg-4 offset-lg-2">
                    <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/top-american-authors.webp') }}" class="lazyload img-fluid mx-auto d-block" alt="Top American Authors" title="Top American Authors" loading="eager" width="366" height="507" />
                </div>
                <div class="col-lg-5">
                    <h2 class="h2 mt-4">The Top Choice of American Authors for Self-Publishing a Book</h2>
                    <p class="p-t-10">Welcome to America’s leading book publishing platform, where we simplify the authorship journey of independent writers. This is your chance to consult with the country’s best book publishers and step closer to your literary dreams.</p>
                    <p class="p-t-10">There is no point in keeping your masterpiece hidden from readers who are eager to read some good books. Contact us for trouble-free publishing on Amazon, Kindle, Kobo, Blurb, Lulu, or any other platform of your choice.</p>
                    <div class="box">
                        <span class="number">100</span>
                        <span class="plus">%</span>
                        <span class="e-text">Satisfaction For Authors</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="we-solution text-lg-start text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto text-center">
                    <span class="sub-title">EXCLUSIVE PERKS JUST FOR YOU</span>
                    <h2 class="h2">Features That Give Us An Edge Over Other Book Publishing Houses</h2>
                </div>
            </div>
            <div class="row m-t-30">
                <div class="col-12 col-lg-10 mx-auto">
                    <div class="row gy-5 mb-5">
                        <div class="col-12 col-lg-4">
                            <div class="choose-box">
                                <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/expert-editorial-support.webp') }}" class="lazyload img-fluid mx-auto" alt="Expert Editorial Support" title="Expert Editorial Support" loading="lazy" width="42" height="38" />
                                <span class="h5">Expert Editorial Support</span>
                                <p>You will get full-fledged editorial support, including manuscript evaluation, developmental editing, copyediting, and proofreading. We ensure that every book reaches its highest potential.</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="choose-box">
                                <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/design-formatting-help.webp') }}" class="lazyload img-fluid mx-auto" alt="Design & Formatting Help" title="Design & Formatting Help" loading="lazy" width="48" height="42" />
                                <span class="h5">Design & Formatting Help</span>
                                <p>Our professional designers will create stunning cover designs and interior layouts that captivate readers while reflecting your story’s true essence. We are always ready to unleash our creative side.</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="choose-box">
                                <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/no-share-in-royalties.webp') }}" class="lazyload img-fluid mx-auto" alt="No Share in Royalties" title="No Share in Royalties" loading="lazy" width="40" height="40" />
                                <span class="h5">No Share in Royalties</span>
                                <p>We believe in transparent pricing with no hidden fees or surprises. Authors receive royalties with no cuts, ensuring they reap the rewards of their hard work and creativity.</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="choose-box">
                                <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/author-retention-of-rights.webp') }}" class="lazyload img-fluid mx-auto" alt="Author Retention of Rights" title="Author Retention of Rights" loading="lazy" width="40" height="51" />
                                <span class="h5">Author Retention of Rights</span>
                                <p>Unlike traditional publishing models, we believe authors should retain ownership of their work. Our publishing agreements prioritize author rights, ensuring the book remains your intellectual property.</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="choose-box">
                                <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/flexible-publishing-timelines.webp') }}" class="lazyload img-fluid mx-auto" alt="Flexible Publishing Timelines" title="Flexible Publishing Timelines" loading="lazy" width="40" height="40" />
                                <span class="h5">Flexible Publishing Timelines</span>
                                <p>We understand that every author has different timelines and goals for their book. Our flexible publishing schedules allow authors to set their own pace. We promise no delays from our side.</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="choose-box">
                                <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/proven-track-record-of-success.webp') }}" class="lazyload img-fluid mx-auto" alt="Proven Track Record of Success" title="Proven Track Record of Success" loading="lazy" width="40" height="40" />
                                <span class="h5">Proven Track Record of Success</span>
                                <p>Our track record speaks for itself. We have successfully published and promoted numerous bestsellers across various genres. When you choose us, you’re partnering with the industry leaders.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <button type="button" class="btn-order open_popup" data-bs-toggle="modal" data-bs-target="#popupModal">
                        UPLOAD YOUR MANUSCRIPT
                    </button>
                    <small>If Your Draft Is Ready, Share It with Us</small>
                    <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/successful-publications.webp') }}" class="img-fixed-size lazyload img-fluid mx-auto d-block" alt="Successful Publications" title="Successful Publications" loading="eager" width="275" height="72" />
                </div>
            </div>
        </div>
    </section>
    <section class="cta text-lg-start text-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 my-auto">
                    <span class="h2">Excited To Become A Self-Published Author And Get Your Dream Book To Life?</span>
                    <p>We are eager to discuss everything about your manuscript. Just give us a call, and we will together come up with a perfect plan to publish your book and get it the attention it deserves.</p>
                    <div class="m-t-30">
                        <a class="btn-order" href="{{ route('pages', 'get-free-quote') }}">
                            Get My Free Self-Publishing Strategy
                        </a>
                        <span class="phone">
                            <a href="tel:00{{ str_replace(['+', '-', '(', ')', ' '], '', config('social-media.phone.number')) }}">
                                <i class="fa-solid fa-phone"></i>
                                <div class="call">
                                    <span>Call us today:</span>

                                    {{ config('social-media.phone.number') }}

                                </div>
                            </a>
                        </span>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/self-published-author.webp') }}" class="lazyload img-fluid mx-auto d-block" alt="Last Stand Of The Legion Rift" title="Last Stand Of The Legion Rift" loading="lazy" width="550" height="229" />
                </div>
            </div>
        </div>
    </section>
    <section class="icons-box text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <span class="sub-title">One-Stop Publishing Solution</span>
                    <h2 class="h2">We Offer Comprehensive Self-Publishing Support To Our Clients</h2>
                    <div class="row g-4 m-t-30">
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="box">
                                <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/editing.webp') }}" class="lazyload img-fluid" alt="Editing" title="Editing" loading="lazy" width="60" height="60" />
                                <span>Editing</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="box">
                                <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/illustration.webp') }}" class="lazyload img-fluid" alt="Illustration" title="Illustration" loading="lazy" width="60" height="60" />
                                <span>Illustration</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="box">
                                <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/proofreading.webp') }}" class="lazyload img-fluid" alt="Proofreading" title="Proofreading" loading="lazy" width="60" height="60" />
                                <span>Proofreading</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="box">
                                <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/graphic-creation.webp') }}" class="lazyload img-fluid" alt="Graphic Creation" title="Graphic Creation" loading="lazy" width="60" height="60" />
                                <span>Graphic Creation</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="box">
                                <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/cover-design.webp') }}" class="lazyload img-fluid" alt="Cover Design" title="Cover Design" loading="lazy" width="60" height="60" />
                                <span>Cover Design</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="box">
                                <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/marketing-distributions.webp') }}" class="lazyload img-fluid" alt="Marketing & Distributions" title="Marketing & Distributions" loading="lazy" width="60" height="60" />
                                <span>Marketing & Distributions</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="box">
                                <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/paperback-layout.webp') }}" class="lazyload img-fluid" alt="Paperback Layout" title="Paperback Layout" loading="lazy" width="60" height="60" />
                                <span>Paperback Layout</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="box">
                                <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/isbns-brcodes.webp') }}" class="lazyload img-fluid" alt="ISBNs, Barcodes" title="ISBNs, Barcodes" loading="lazy" width="60" height="60" />
                                <span>ISBNs, Barcodes</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="box">
                                <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/hardcover-layout.webp') }}" class="lazyload img-fluid" alt="Hardcover Layout" title="Hardcover Layout" loading="lazy" width="60" height="60" />
                                <span>Hardcover Layout</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="box">
                                <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/lccn-registration.webp') }}" class="lazyload img-fluid" alt="LCCN Registration" title="LCCN Registration" loading="lazy" width="60" height="60" />
                                <span>LCCN Registration</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="box">
                                <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/ebook-creation.webp') }}" class="lazyload img-fluid" alt="Book Creation" title="Book Creation" loading="lazy" width="60" height="60" />
                                <span>Book Creation</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="box">
                                <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/metadata-optimization.webp') }}" class="lazyload img-fluid" alt="Metadata Optimization" title="Metadata Optimization" loading="lazy" width="60" height="60" />
                                <span>Metadata Optimization</span>
                            </div>
                        </div>
                        <div class="col-12 m-t-50">
                            <p>Your job is done once the writing part is over. Now, let our experts handle everything on your behalf. We offer more just than self-publishing services; we offer all-in-one publication packages.</p>
                            <button type="button" class="btn-order open_popup" data-bs-toggle="modal" data-bs-target="#popupModal">GET MY FREE SELF-PUBLISHING SESSION</button>
                            <small>If Your Draft Is Ready, Share It with Us</small>
                            <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/successful-publications.webp') }}" class="img-fixed-size lazyload img-fluid mx-auto d-block" alt="Successful Publications" title="Successful Publications" loading="eager" width="275" height="72" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="portfolio text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <span class="sub-title">OUR LITERARY CLASSICS</span>
                    <h2 class="h2">The Recent Bestsellers Published By Our American Experts Team</h2>
                    <p>These publications will clear those few doubts that you might have in your mind about AmericanBookWriter.com and its self-publishing services. We are proud to partner with some chart-topping authors in US. You could be the next one whose publication will make it to this mind-blowing portfolio.</p>
                </div>
            </div>
            <div class="row g-3 m-t-30">
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/sample-1.webp') }}" class="lazyload img-fluid mx-auto d-block" alt="Sample" title="Sample" loading="lazy" width="176" height="275" />
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/sample-2.webp') }}" class="lazyload img-fluid mx-auto d-block" alt="Sample" title="Sample" loading="lazy" width="176" height="275" />
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/sample-3.webp') }}" class="lazyload img-fluid mx-auto d-block" alt="Sample" title="Sample" loading="lazy" width="176" height="275" />
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/sample-4.webp') }}" class="lazyload img-fluid mx-auto d-block" alt="Sample" title="Sample" loading="lazy" width="176" height="275" />
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/sample-5.webp') }}" class="lazyload img-fluid mx-auto d-block" alt="Sample" title="Sample" loading="lazy" width="176" height="275" />
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/sample-6.webp') }}" class="lazyload img-fluid mx-auto d-block" alt="Sample" title="Sample" loading="lazy" width="176" height="275" />
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/sample-7.webp') }}" class="lazyload img-fluid mx-auto d-block" alt="Sample" title="Sample" loading="lazy" width="176" height="275" />
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/sample-8.webp') }}" class="lazyload img-fluid mx-auto d-block" alt="Sample" title="Sample" loading="lazy" width="176" height="275" />
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/sample-9.webp') }}" class="lazyload img-fluid mx-auto d-block" alt="Sample" title="Sample" loading="lazy" width="176" height="275" />
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/sample-10.webp') }}" class="lazyload img-fluid mx-auto d-block" alt="Sample" title="Sample" loading="lazy" width="176" height="275" />
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/sample-11.webp') }}" class="lazyload img-fluid mx-auto d-block" alt="Sample" title="Sample" loading="lazy" width="176" height="275" />
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/sample-12.webp') }}" class="lazyload img-fluid mx-auto d-block" alt="Sample" title="Sample" loading="lazy" width="176" height="275" />
                </div>
            </div>
        </div>
    </section>
    <section class="how-we-work">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto text-center">
                    <span class="sub-title">PROCESS TO START PUBLISHING</span>
                    <h2 class="h2">Our Streamlined Process That Takes Stress Out of Self-Publishing</h2>
                    <p class="m-t-20">We know that you are eager to share your story with the world. Unlike other book publishers in Los Angeles, we won’t make you wait. Your book will be published online in four simple steps.</p>
                </div>
            </div>
            <div class="row m-t-10 gy-3 gx-5 text-lg-start text-center">
                <div class="col-12 col-lg-3">
                    <div class="how-box">
                        <span class="number">01</span>
                        <span class="h6">Initial Discussion Is Crucial</span>
                        <p>We do not proceed with any project until our team is fully aware of the customer’s expectations.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="how-box">
                        <span class="number">02</span>
                        <span class="h6">Preparations for Publication</span>
                        <p>Getting a cover design is as important as fixing the book’s layout, formatting, and other errors.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="how-box">
                        <span class="number">03</span>
                        <span class="h6">Your Book Will Be Live Online</span>
                        <p>Once the draft is approved, you will see your book published on your desired platform instantly.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="how-box box1">
                        <span class="number">04</span>
                        <span class="h6">Market It for Better Visibility</span>
                        <p>We do not stop there; we offer marketing services so your book can break all the sales records.</p>
                    </div>
                </div>
                <div class="col-12 m-t-50 text-center">
                    <button type="button" class="btn-order open_popup" data-bs-toggle="modal" data-bs-target="#popupModal">GET A FREE SELF-PUBLISHING GUIDE</button>
                    <small>Publishing House with A 100% Success Ratio!</small>
                    <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/successful-publications.webp') }}" class="img-fixed-size lazyload img-fluid mx-auto d-block" alt="Successful Publications" title="Successful Publications" loading="eager" width="275" height="72" />
                </div>
            </div>
        </div>
    </section>
    <section class="book-industry text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <span class="sub-title">UNREAL DIVERSITY</span>
                    <h2 class="h2">Book Publisher with Unmatched Expertise In All Genres</h2>
                    <p class="m-t-20">Name any genre that you can think of, and our experts will already have worked on it. From autobiographies to children’s book publishing, we have dedicated specialists for every niche.</p>
                </div>
            </div>
            <div class="row gy-2 gx-3 m-t-40">
                <div class="col">
                    <div class="img-box">
                        <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/fantasy.webp') }}" class="lazyload img-fluid mx-auto d-block" alt="Fantasy" title="Fantasy" loading="lazy" width="171" height="94" />
                        <span>Fantasy</span>
                    </div>
                </div>
                <div class="col">
                    <div class="img-box">
                        <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/crime.webp') }}" class="lazyload img-fluid mx-auto d-block" alt="Crime" title="Crime" loading="lazy" width="171" height="94" />
                        <span>Crime</span>
                    </div>
                </div>
                <div class="col">
                    <div class="img-box">
                        <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/kids-book.webp') }}" class="lazyload img-fluid mx-auto d-block" alt="Kids Book" title="Kids Book" loading="lazy" width="171" height="94" />
                        <span>Kids Book</span>
                    </div>
                </div>
                <div class="col">
                    <div class="img-box">
                        <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/non-fiction.webp') }}" class="lazyload img-fluid mx-auto d-block" alt="Non-Fiction" title="Non-Fiction" loading="lazy" width="171" height="94" />
                        <span>Non-Fiction</span>
                    </div>
                </div>
                <div class="col">
                    <div class="img-box">
                        <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/mystery.webp') }}" class="lazyload img-fluid mx-auto d-block" alt="Mystery" title="Mystery" loading="lazy" width="171" height="94" />
                        <span>Mystery</span>
                    </div>
                </div>
                <div class="col-12"></div>
                <div class="col">
                    <div class="img-box">
                        <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/science-fiction.webp') }}" class="lazyload img-fluid mx-auto d-block" alt="Science Fiction" title="Science Fiction" loading="lazy" width="171" height="94" />
                        <span>Science Fiction</span>
                    </div>
                </div>
                <div class="col">
                    <div class="img-box">
                        <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/adventure.webp') }}" class="lazyload img-fluid mx-auto d-block" alt="Adventure" title="Adventure" loading="lazy" width="171" height="94" />
                        <span>Adventure</span>
                    </div>
                </div>
                <div class="col">
                    <div class="img-box">
                        <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/horror.webp') }}" class="lazyload img-fluid mx-auto d-block" alt="Horror" title="Horror" loading="lazy" width="171" height="94" />
                        <span>Horror</span>
                    </div>
                </div>
                <div class="col">
                    <div class="img-box">
                        <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/thriller.webp') }}" class="lazyload img-fluid mx-auto d-block" alt="Thriller" title="Thriller" loading="lazy" width="171" height="94" />
                        <span>Thriller</span>
                    </div>
                </div>
                <div class="col">
                    <div class="img-box">
                        <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/historical.webp') }}" class="lazyload img-fluid mx-auto d-block" alt="Historical" title="Historical" loading="lazy" width="171" height="94" />
                        <span>historical</span>
                    </div>
                </div>
                <div class="col-12"></div>
                <div class="col">
                    <div class="img-box">
                        <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/romance.webp') }}" class="lazyload img-fluid mx-auto d-block" alt="Romance" title="Romance" loading="lazy" width="171" height="94" />
                        <span>Romance</span>
                    </div>
                </div>
                <div class="col">
                    <div class="img-box">
                        <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/lgbtq.webp') }}" class="lazyload img-fluid mx-auto d-block" alt="LGBTQ+" title="LGBTQ+" loading="lazy" width="171" height="94" />
                        <span>LGBTQ+</span>
                    </div>
                </div>
                <div class="col">
                    <div class="img-box">
                        <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/graphic-novels.webp') }}" class="lazyload img-fluid mx-auto d-block" alt="Graphic Novels" title="Graphic Novels" loading="lazy" width="171" height="94" />
                        <span>Graphic Novels</span>
                    </div>
                </div>
                <div class="col">
                    <div class="img-box">
                        <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/young-adult.webp') }}" class="lazyload img-fluid mx-auto d-block" alt="Young Adult" title="Young Adult" loading="lazy" width="171" height="94" />
                        <span>Young Adult</span>
                    </div>
                </div>
                <div class="col">
                    <div class="img-box">
                        <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/short-story.webp') }}" class="lazyload img-fluid mx-auto d-block" alt="Short Story" title="Short Story" loading="lazy" width="171" height="94" />
                        <span>Short Story</span>
                    </div>
                </div>
                <div class="col-12"></div>
                <div class="col">
                    <div class="img-box">
                        <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/memoir.webp') }}" class="lazyload img-fluid mx-auto d-block" alt="Memoir" title="Memoir" loading="lazy" width="171" height="94" />
                        <span>Memoir</span>
                    </div>
                </div>
                <div class="col">
                    <div class="img-box">
                        <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/poetry.webp') }}" class="lazyload img-fluid mx-auto d-block" alt="Poetry" title="Poetry" loading="lazy" width="171" height="94" />
                        <span>Poetry</span>
                    </div>
                </div>
                <div class="col">
                    <div class="img-box">
                        <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/business.webp') }}" class="lazyload img-fluid mx-auto d-block" alt="Business" title="Business" loading="lazy" width="171" height="94" />
                        <span>Business</span>
                    </div>
                </div>
                <div class="col">
                    <div class="img-box">
                        <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/medical.webp') }}" class="lazyload img-fluid mx-auto d-block" alt="Medical" title="Medical" loading="lazy" width="171" height="94" />
                        <span>Medical</span>
                    </div>
                </div>
                <div class="col">
                    <div class="img-box">
                        <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/self-help.webp') }}" class="lazyload img-fluid mx-auto d-block" alt="Self Help" title="Self Help" loading="lazy" width="171" height="94" />
                        <span>Self-Help</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="award-banner text-lg-start text-center">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-12 col-lg-6 my-auto">
                    <h2 class="h2">We Prepare Your EBooks For Publishing So They Can Earn Big Bucks</h2>
                    <p>The goal is not just to make your book available online but to ensure that it enjoys worldwide exposure and unprecedented sales. Let’s join hands to publish your masterpiece.</p>
                    <div class="m-t-20 mb-4">
                        <a class="btn-order" href="{{ route('pages', 'get-free-quote') }}">
                            IT’S PUBLISHING TIME
                        </a>
                        <span class="or"></span>
                        <button role="button" type="button" onclick="openLiveChat();" class="btn-live">GET EXPERT HELP</button>
                    </div>
                    <p>
                        Rated 9 out of 10 based on
                        <span>3,543</span>
                        satisfied customers.
                    </p>
                    <div class="m-t-10">
                        <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/trustpilot.webp') }}" class="lazyload img-fluid" alt="TrustPilot" title="TrustPilot" loading="lazy" width="143" height="67" />
                        <a href="https://arrivala.com/https-www-americanbookwriter-com-431/reviews/">
                            <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/arrivala.webp') }}" class="lazyload img-fluid m-l-20" alt="Arriwala" title="Arriwala" loading="lazy" width="178" height="38" />
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-5 offset-lg-1">
                    <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/ebooks-for-publishing.webp') }}" class="lazyload img-fluid d-block mx-auto" alt="Hardcover Book" title="Hardcover Book" loading="lazy" width="493" height="438" />
                </div>
            </div>
        </div>
    </section>
    <section class="reviews">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-10 mx-auto text-center">
                    <span class="sub-title">REVIEWS THAT SAY IT ALL</span>
                    <h2 class="h2">A Client Base That Is Filled With Satisfied American Authors</h2>
                    <p>We have brought a smile on the gloomy faces of thousands of writers in USA who were about to give up on their dreams. This isn’t just feedback for us but the success stories that we are proud of.</p>
                </div>
            </div>
            <div class="swiper review-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="review-box">
                            <div class="cards-footer">
                                <div class="row mb-3 gy-3 gx-4 align-items-center">
                                    <div class="col-12">
                                        <span class="e-text">A Weeks Ago</span>
                                    </div>
                                    <div class="col-3">
                                        <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/anthony-garcia.webp') }}" class="lazyload img-fluid" alt="Anthony Garcia" title="Anthony Garcia" loading="lazy" width="75" height="75" />
                                    </div>
                                    <div class="col-9">
                                        <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/half-stars.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="117" height="21" />
                                    </div>
                                </div>
                            </div>
                            <div class="cards-body">
                                <span class="h5">Anthony Garcia</span>
                                <p class="m-t-10">I had no idea about the process of self-publishing a book on Amazon. These experts offered thorough guidance and kept me involved at every step.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <div class="cards-footer">
                                <div class="row mb-3 gy-3 gx-4 align-items-center">
                                    <div class="col-12">
                                        <span class="e-text">Four Days Ago</span>
                                    </div>
                                    <div class="col-3">
                                        <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/richard-dawson.webp') }}" class="lazyload img-fluid" alt="Richard Dawson" title="Richard Dawson" loading="lazy" width="75" height="75" />
                                    </div>
                                    <div class="col-9">
                                        <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/full-stars.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="117" height="21" />
                                    </div>
                                </div>
                            </div>
                            <div class="cards-body">
                                <span class="h5">Richard Dawson</span>
                                <p class="m-t-10">They are the best children’s book publishers in USA. Their clients get complete authority over the publication process. Moreover, their distribution strategies are a game-changer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <div class="cards-footer">
                                <div class="row mb-3 gy-3 gx-4 align-items-center">
                                    <div class="col-12">
                                        <span class="e-text">Three Weeks Ago</span>
                                    </div>
                                    <div class="col-3">
                                        <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/nathan-harper.webp') }}" class="lazyload img-fluid" alt="Nathan Harper" title="Nathan Harper" loading="lazy" width="75" height="75" />
                                    </div>
                                    <div class="col-9">
                                        <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/full-stars.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="117" height="21" />
                                    </div>
                                </div>
                            </div>
                            <div class="cards-body">
                                <span class="h5">Nathan Harper</span>
                                <p class="m-t-10">I was worried about the cost of publishing a book because of my limited budget. The assistance from these experts somehow got my book published without breaking the bank.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <div class="cards-footer">
                                <div class="row mb-3 gy-3 gx-4 align-items-center">
                                    <div class="col-12">
                                        <span class="e-text">A Weeks Ago</span>
                                    </div>
                                    <div class="col-3">
                                        <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/kate-rogers.webp') }}" class="lazyload img-fluid" alt="Kate Rogers" title="Kate Rogers" loading="lazy" width="75" height="75" />
                                    </div>
                                    <div class="col-9">
                                        <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/full-stars.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="117" height="21" />
                                    </div>
                                </div>
                            </div>
                            <div class="cards-body">
                                <span class="h5">Kate Rogers</span>
                                <p class="m-t-10">My plan was to release my novel on several eBook publishing platforms. The expertise of these publication agents came in very handy as they were familiar with every site.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <div class="cards-footer">
                                <div class="row mb-3 gy-3 gx-4 align-items-center">
                                    <div class="col-12">
                                        <span class="e-text">One Month Ago</span>
                                    </div>
                                    <div class="col-3">
                                        <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/brittany-jackson.webp') }}" class="lazyload img-fluid" alt="Brittany Jackson" title="Brittany Jackson" loading="lazy" width="75" height="75" />
                                    </div>
                                    <div class="col-9">
                                        <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/four-stars.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="117" height="21" />
                                    </div>
                                </div>
                            </div>
                            <div class="cards-body">
                                <span class="h5">Brittany Jackson</span>
                                <p class="m-t-10">These are my favorite book publishers in Los Angeles because there is nothing fishy about their services. From transparent pricing to 0% royalty share, they cover everything.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <div class="cards-footer">
                                <div class="row mb-3 gy-3 gx-4 align-items-center">
                                    <div class="col-12">
                                        <span class="e-text">One Month Ago</span>
                                    </div>
                                    <div class="col-3">
                                        <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/paul-rodney.webp') }}" class="lazyload img-fluid" alt="Paul Rodney" title="Paul Rodney" loading="lazy" width="75" height="75" />
                                    </div>
                                    <div class="col-9">
                                        <img data-src="{{ asset('assets/frontend/images/bp-lp/simple/half-stars.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="117" height="21" />
                                    </div>
                                </div>
                            </div>
                            <div class="cards-body">
                                <span class="h5">Paul Rodney</span>
                                <p class="m-t-10">My book was constantly rejected, and things were getting depressing for me. I am glad that these experts were there to rescue me with their Kindle Direct publishing services.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <section class="bg-cta-area text-lg-start text-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <span class="h2">Get Ready To Make Your Next Release On Amazon A Smash Hit!</span>
                    <p>One of the biggest self-publishing houses in America is offering you a helping hand that you need to overcome the last few hurdles that are stopping your book from getting published.</p>
                    <div class="m-t-20">
                        <button type="button" class="btn-live open_popup" data-bs-toggle="modal" data-bs-target="#popupModal">UPLOAD YOUR MANUSCRIPT</button>
                        <span></span>
                        <a class="btn-order" href="tel:00{{ str_replace(['+', '-', '(', ')', ' '], '', config('social-media.phone.number')) }}">
                            <i class="fa-solid fa-phone"></i>
                            <div class="call">
                                <span>Call us today:</span>

                                {{ config('social-media.phone.number') }}

                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-frontend.modal />

    <x-slot name="script">

        <script>
            let reviewSlider = true;
            let reviewSliderScript = "{{ asset('assets/frontend/js/review-slider.js') }}";

            let reCaptchaPublicKey = "{{ config('services.google-re-captcha.public') }}";

            <x-frontend.lazy-script />

            document.getElementsByClassName('reviews')[0].addEventListener('mouseover', function() {
                if (reviewSlider) {
                    loadScript(reviewSliderScript);
                }

                reviewSlider = false;
            });

            setTimeout(function() {
                if (reviewSlider) {
                    loadScript(reviewSliderScript);

                    reviewSlider = false;
                }
            }, 5000);
        </script>

        <x-frontend.modal-script />

    </x-slot>

</x-app-layout>
