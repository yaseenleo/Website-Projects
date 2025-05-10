<x-app-layout>

    <x-slot name="metadata">

        <x-frontend.seo-metadata
            title="#1 Wikipedia Page Writing Service USA | Guaranteed Approval"
            description="You no longer have to search 'how to start a Wikipedia page' as our skilled Wikipedia page creators are at your side. We write, publish & maintain for you."
            robots="true"
        />

        <link rel="stylesheet" href="{{ mix('assets/frontend/css/wikipedia-lp.css') }}" />
        <link rel="preload" as="image" href="{{ asset('assets/frontend/images/sample/path.webp') }}" />
        <link rel="preload" as="image" href="{{ asset('assets/frontend/images/icon/top-icon.webp') }}" />

    </x-slot>

    <section class="main-banner text-lg-start text-center">
        <div class="container">
            <div class="row m-t-20">
                <div class="col-12 col-lg-6">
                    <span class="h1">
                        <span class="font-red">Enjoy A Credible</span>
                        <h1>Online Presence With Our Wikipedia Page Creation Service</h1>
                    </span>
                    <h2 class="h5">Attract Audience to Your Wikipedia Profile from All Over the World</h2>
                    <p>American Book Writer is a Wikipedia page creation agency that has worked for several notable people and businesses in the USA. Our professionally crafted Wikipedia profile can open the door to your right recognition. We can be an all-in-one solution for all the Wikipedia services you need, from page creation to editing consultation and article management.</p>
                    <div class="p-b-10 m-b-10">
                        <a href="{{ route('pages', 'get-free-quote') }}">
                            <button type="button" class="btn-order">Create My Wikipedia</button>
                        </a>
                        <span class="or">OR</span>
                        <button role="button" type="button" onclick="openLiveChat();" class="btn-live">Connect with Us</button>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="form">
                        <div class="head">
                            <div class="text-box">
                                <span class="text">Check You Wikipedia Eligibility</span>
                                <span class="accent">For FREE</span>
                            </div>
                        </div>
                        <form action="/order-now" method="POST" accept-charset="utf-8">
                            <div class="form-group">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Who are you?</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" name="company" id="company" class="form-control" placeholder="Enter Company Name" required="" />
                            </div>
                            <div>
                                <button class="btn btn-md btn-order d-block btn-dual-shade w-100 m-t-10" data-bs-toggle="modal" data-bs-target="#popupForm">Check Your Eligibility Now
                                    <svg xmlns="http://www.w3.org/2000/svg" width="11.561" height="11.324" viewBox="0 0 11.561 11.324">
                                        <g transform="translate(10.811 10.574) rotate(180)" fill="#ffffff">
                                            <g transform="translate(0)">
                                                <path d="M0,10.574a.748.748,0,0,1-.539-.229A.75.75,0,0,1-.521,9.285c.073-.07,7.3-7.067,10.052-9.816a.75.75,0,0,1,1.061,0,.75.75,0,0,1,0,1.061C7.834,3.287.594,10.293.521,10.363A.748.748,0,0,1,0,10.574Z"/>
                                                <path d="M9.281,10.031H0a.75.75,0,0,1-.75-.75V0A.75.75,0,0,1,0-.75.75.75,0,0,1,.75,0V8.531H9.281a.75.75,0,0,1,0,1.5Z" transform="translate(0 0.543)"/>
                                            </g>
                                        </g>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <hr class="hr-line" />

    <x-frontend.brand />

    <hr class="hr-line" />
    <section class="book-writer text-center text-lg-start">
        <div class="container">
            <div class="row gy-4">
                <div class="col-12 col-lg-6 text-center">
                    <img data-src="{{ asset('assets/frontend/images/services/wikipedia-page-creation/wikipedia-banner.webp') }}" class="lazyload img-fluid" alt="Cover To Cover Creativity" title="Cover To Cover Creativity" loading="lazy" width="539" height="366" />
                    <p><span>Rated 4.9/5</span> across all the leading platforms!</p>
                </div>
                <div class="col-12 col-lg-6">
                    <h2 class="h2">Hire Our American Wikipedia Writers For <span class="font-red">Professional Branding</span></h2>
                    <p>If we talk about the most notable and reliable platform to present your profile or brand, then the first name that pops up will always be Wikipedia. Our professional Wikipedia writers understand the technical challenges of this platform and closely follow its dynamic content policies. Whether you want your profile to be created from scratch or need someone to maintain your existing Wikipedia page, we are the best option for you.</p>
                    <p>You can rely on our Wikipedia page writing services, as we are good at finding notable sources to extract authentic information and creating a profile that gets noticed easily. We have the right set of expertise to boost your online presence and make your profile the center of attention. Our Wikipedia page creators know how to present you in front of the world and increase your search engine exposure. Your profile will never go outdated.</p>
                    <div class="m-t-30 btn-box">
                        <a href="{{ route('pages', 'get-free-quote') }}">
                            <button type="button" class="btn-order">Hire A Wiki Expert</button>
                        </a>
                        <span class="or">OR</span>
                        <button role="button" type="button" onclick="openLiveChat();" class="btn-live">Free Consultation</button>
                    </div>
                    <span class="email">
                        <a href="mailto:{{ config('social-media.email') }}">

                            {{ config('social-media.email') }}

                        </a> |
                        <a href="tel:00{{ str_replace(['+', '-', '(', ')', ' '], '', config('social-media.phone.number')) }}">

                            {{ config('social-media.phone.number') }}

                        </a>
                    </span>
                </div>
            </div>
        </div>
    </section>
    <hr class="hr-line" />
    <section class="why-choose text-center text-lg-start">
        <div class="container">
            <div class="why-choose-heading row">
                <div class="col-12 col-lg-11 mx-auto">
                    <h2 class="h2">
                        Premium Wikipedia Writing Services For Americans Who Desire
                        <span class="font-red">Global Fame</span>
                    </h2>
                    <p>Creating your own Wikipedia page is not a piece of cake. There are several policies and guidelines that you cannot miss. Having knowledgeable experts like our Wiki page makers can simplify this whole process for you. We will efficiently handle all your page creation and further management work. If you are wondering what makes us a better choice than all other Wikipedia experts, then here are a few stand-out features of our services.</p>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="box">
                        <img data-src="{{ asset('assets/frontend/images/services/children-book/cover-to-cover-creativity.svg') }}" class="lazyload img-fluid" alt="Cover To Cover Creativity" title="Cover To Cover Creativity" loading="lazy" width="48" height="48" />
                        <span class="h6">Abiding All Local Wiki Policies</span>
                        <p>It might seem simple to have your own Wiki page, but you have to follow all the policies set by this platform. With our strategic Wikipedia profile creation, you can stay assured that your page will get approved in no time at all. Our Wikipedia agency will never fail to meet the notability criteria, as it is crucial to publishing your page.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="box">
                        <img data-src="{{ asset('assets/frontend/images/services/children-book/imaginative-illustrations.svg') }}" class="lazyload img-fluid" alt="Imaginative Illustrations" title="Imaginative Illustrations" loading="lazy" width="48" height="48" />
                        <span class="h6">Proper Citation & Referencing</span>
                        <p>Wiki is all about legitimate information, so to increase the credibility of your profile, we search for the most reliable references. Our Wiki writers only pick trustworthy sites like news articles, books, and other sources and cite them in a proper manner to enhance the authenticity of your content. Anyone can verify the links through the mentioned references.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="box">
                        <img data-src="{{ asset('assets/frontend/images/services/children-book/result-driven-publishing.svg') }}" class="lazyload img-fluid" alt="Result Driven Publishing" title="Result Driven Publishing" loading="lazy" width="48" height="48" />
                        <span class="h6">100% Approval Rate Of Wiki Pages</span>
                        <p>We are recognized as the premier Wikipedia page creation company that guarantees a 100% approval rate for the published profile. Our dedicated team creates engaging content to boost your online visibility and tries their level best to protect your page from getting rejected. None of our clients ever failed to acquire their desired results.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="approval-service text-center text-lg-start">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 align-self-center">
                    <div class="content-box">
                        <h2 class="h2">Let Our American Wikipedia Experts Build Your Reputation</h2>
                        <p>Personal branding or brand projection demands a strong digital existence, so you will need our top-rated Wikipedia publishing services. We closely follow the writing style, tone, and all other standards set by this platform. This type of content differs from the rest, so do not risk your chances of getting publicity by hiring our experts to build a Wikipedia page for you.</p>
                        <div class="m-t-30 btn-box">
                            <a href="{{ route('pages', 'get-free-quote') }}">
                                <button type="button" class="btn-order">Tell Us A Bit About Yourself</button>
                            </a>
                            <span class="text">OR</span>
                            <button role="button" type="button" onclick="openLiveChat();" class="btn-live">Get A Free Estimate</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <img data-src="{{ asset('assets/frontend/images/sample/highest-approval.webp') }}" class="lazyload img-fluid" alt="Highest Approval Ratio" title="Highest Approval Ratio" loading="lazy" width="533" height="494" />
                </div>
            </div>
        </div>
    </section>
    <section class="creative-service text-center text-lg-start">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 mx-auto text-center">
                    <h2 class="h2">
                        USA's Ultimate Hub of
                        <span class="font-red">Success-Driven</span>
                        Wikipedia Services
                    </h2>
                    <p>Breaking down all the phases included in building and managing a Wikipedia page.</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 col-lg-10 mx-auto">
                    <div class="row gx-5 content-box">
                        <div class="col-12 col-lg-6">
                            <div class="nav-lists">
                                <div class="nav nav-tab-list flex-column nav-pills me-lg-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <button class="nav-link active" id="v-pills-immaculate-research-and-writing-tab" data-bs-toggle="pill" data-bs-target="#v-pills-immaculate-research-and-writing" type="button" role="tab" aria-controls="v-pills-immaculate-research-and-writing" aria-selected="true">
                                        <img data-src="{{ asset('assets/frontend/images/icon/research-writing.svg') }}" class="lazyload img-fluid" alt="Immaculate Research & Writing" title="Immaculate Research & Writing" loading="lazy" width="28" height="28" />
                                        Immaculate Research & Writing
                                    </button>
                                    <button class="nav-link" id="v-pills-wikipedia-page-creation-tab" data-bs-toggle="pill" data-bs-target="#v-pills-wikipedia-page-creation" type="button" role="tab" aria-controls="v-pills-wikipedia-page-creation" aria-selected="false">
                                        <img data-src="{{ asset('assets/frontend/images/icon/card-page.svg') }}" class="lazyload img-fluid" alt="Wikipedia Page Creation" title="Wikipedia Page Creation" loading="lazy" width="28" height="28" />
                                        Wikipedia Page Creation
                                    </button>
                                    <button class="nav-link" id="v-pills-editing-and-management-tab" data-bs-toggle="pill" data-bs-target="#v-pills-editing-and-management" type="button" role="tab" aria-controls="v-pills-editing-and-management" aria-selected="false">
                                        <img data-src="{{ asset('assets/frontend/images/icon/editing.svg') }}" class="lazyload img-fluid" alt="Editing & Management" title="Editing & Management" loading="lazy" width="28" height="28" />
                                        Editing & Management
                                    </button>
                                    <button class="nav-link" id="v-pills-page-maintenance-tab" data-bs-toggle="pill" data-bs-target="#v-pills-page-maintenance" type="button" role="tab" aria-controls="v-pills-page-maintenance" aria-selected="false">
                                        <img data-src="{{ asset('assets/frontend/images/icon/page-refresh.svg') }}" class="lazyload img-fluid" alt="Page Maintenance" title="Page Maintenance" loading="lazy" width="28" height="28" />
                                        Page Maintenance
                                    </button>
                                    <button class="nav-link" id="v-pills-thorough-consultation-and-guidance-tab" data-bs-toggle="pill" data-bs-target="#v-pills-thorough-consultation-and-guidance" type="button" role="tab" aria-controls="v-pills-thorough-consultation-and-guidance" aria-selected="false">
                                        <img data-src="{{ asset('assets/frontend/images/icon/approve-badge.svg') }}" class="lazyload img-fluid" alt="Thorough Consultation & Guidance" title="Thorough Consultation & Guidance" loading="lazy" width="28" height="28" />
                                        Thorough Consultation & Guidance
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="tab-content nav-tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-immaculate-research-and-writing" role="tabpanel" aria-labelledby="v-pills-immaculate-research-and-writing-tab">
                                    <div class="service-details">
                                        <span>We Start Your Profile Creation With Proper Research</span>
                                        <p>We do not start directly with the creation of your Wikipedia profile. Our team conducts extensive research and analysis first to ensure that your page has credible information and ranks higher. We only gather verifiable sources considered legit per Wikipedia's requirements. Whether it is about yourself or your business, we target notable achievements so your online presence can have a solid foundation.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-wikipedia-page-creation" role="tabpanel" aria-labelledby="v-pills-wikipedia-page-creation-tab">
                                    <div class="service-details">
                                        <span>Building A Profile That Keeps You Trending</span>
                                        <p>Whether you want us to create a Wikipedia page for your company or set up your personal profile, our comprehensive services will fulfil all your needs. We deliver creative content that complies with all the Wikipedia guidelines and add value to your brand. From writing to publishing, everything is done from scratch while keeping the notability standards in mind. The content will be original, error-free, and verifiable.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-editing-and-management" role="tabpanel" aria-labelledby="v-pills-editing-and-management-tab">
                                    <div class="service-details">
                                        <span>Adding A Touch Of Precision To Your Profile</span>
                                        <p>We have a full-fledged team of hawk-eyed editors who scrutinize your page to make it flawless. From making any changes to your current page to editing it with new references, we are always here to update and upgrade your profile as quickly as possible. It is important to keep your content updated with the latest information, and we make sure that your Wikipedia page stays reliable and contains fresh details for better accuracy.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-page-maintenance" role="tabpanel" aria-labelledby="v-pills-page-maintenance-tab">
                                    <div class="service-details">
                                        <span>Keeping Your Profile In A Perfect Condition</span>
                                        <p>Our round-the-clock monitoring services ensure that there are no unwanted changes in your profile. We protect your information from being flagged as inaccurate or irrelevant by keeping it in its actual and authentic condition. The risk of vandalism is wiped out as the watchful eye of our experts is always there to avoid the deletion of your page. It is our promise that no issues will arise based on the information present on your online profile.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-thorough-consultation-and-guidance" role="tabpanel" aria-labelledby="v-pills-thorough-consultation-and-guidance-tab">
                                    <div class="service-details">
                                        <span>Notability Assessment, Page Translation & Expert Advice</span>
                                        <p>Before you think about how to start a Wikipedia page, it is crucial to analyze whether your profile even qualifies to have an official Wiki page or not. With our notability assessment, you will get a clear idea of your profile's potential to have a robust online presence. We stay in touch with our clients and offer dedicated guidance to handle all disputes and editorial challenges. We can even translate your page into different languages for an extended outreach.</p>
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
    <section class="how-we-work text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="h2">Publishing Quality Wikipedia Pages In Just 4 Steps</h2>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="how-box">
                        <img data-src="{{ asset('assets/frontend/images/icon/streamlining-your-ideas.webp') }}" class="lazyload img-fluid" alt="Propose Your Idea & Story" title="Propose Your Idea & Story" loading="lazy" width="53" height="52" />
                        <span class="number">01</span>
                        <span class="h6">Order Placement</span>
                        <p>We want you to share complete details about your Wikipedia page and your expectations.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="how-box">
                        <img data-src="{{ asset('assets/frontend/images/icon/preparing-the-draft.webp') }}" class="lazyload img-fluid" alt="We Do Our Written Magic" title="We Do Our Written Magic" loading="lazy" width="53" height="52" />
                        <span class="number">02</span>
                        <span class="h6">Content Creation</span>
                        <p>We look for credible sources to craft well-structured, informative, and neutral content.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="how-box">
                        <img data-src="{{ asset('assets/frontend/images/icon/your-valuable-approval.webp') }}" class="lazyload img-fluid" alt="Tell Us What You Think" title="Tell Us What You Think" loading="lazy" width="53" height="52" />
                        <span class="number">03</span>
                        <span class="h6">Client Approval</span>
                        <p>You can review the draft and make sure that all the information is accurate and authentic.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="how-box box1">
                        <img data-src="{{ asset('assets/frontend/images/icon/branding.webp') }}" class="lazyload img-fluid" alt="Editing, Publishing & More" title="Editing, Publishing & More" loading="lazy" width="53" height="52" />
                        <span class="number">04</span>
                        <span class="h6">Publishing The Page</span>
                        <p>The finalized content with perfect notability will be published on your Wikipedia page.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta cta1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 offset-md-2 text-center">
                    <h2 class="h3">American Wiki Writers That You Can Trust</h2>
                    <p>Stop wondering and get yourself recognized online with a finely crafted Wikipedia profile. We are more than ready to give you an edge over others and make it easier for everyone to search for you or your business.</p>
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
                                <button type="button" class="btn-live d-block p-0">Create My Wiki Page</button>
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
    <section class="we-solution">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 mx-auto text-center">
                    <h2 class="h2">USA's #1 Wikipedia Writing Agency For A Reason!</h2>
                    <p>If you want your Wikipedia page to be the talk of the town, our expert team can do the job for you. We make sure that your page is not only properly researched and well-written but also visually appealing and fully optimized. You can stay assured that our polished and professional content will be aligned with Wikipedia's standards and guidelines. We can give you countless reasons to hire us as your go-to Wiki writers.</p>
                </div>
            </div>
            <div class="row gy-4 marque-content mx-auto">
                <div class="col-12 col-lg-4">
                    <div class="choose-box">
                        <div class="row g-0">
                            <div class="col-md-2">
                                <img data-src="{{ asset('assets/frontend/images/icon/expert-wiki-writers.svg') }}" class="lazyload img-fluid mx-auto" alt="Expert Wiki Writers" title="Expert Wiki Writers" loading="lazy" width="31" height="24" />
                            </div>
                            <div class="col-md-10">
                                <span class="h5">Expert Wiki Writers</span>
                                <p>We have experienced writers and researchers who specialize in producing factual and engaging content.</p>
                            </div>
                        </div>
                    </div>
                    <hr class="hr-line1" />
                </div>
                <div class="col-12 col-lg-4">
                    <div class="choose-box box2">
                        <div class="row g-0">
                            <div class="col-md-2">
                                <img data-src="{{ asset('assets/frontend/images/icon/regular-monitoring.svg') }}" class="lazyload img-fluid mx-auto" alt="Regular Monitoring" title="Regular Monitoring" loading="lazy" width="36" height="30" />
                            </div>
                            <div class="col-md-10">
                                <span class="h5">Regular Monitoring</span>
                                <p>We offer ongoing monitoring services to keep your page up-to-date with current and latest information.</p>
                            </div>
                        </div>
                    </div>
                    <hr class="hr-line1" />
                </div>
                <div class="col-12 col-lg-4">
                    <div class="choose-box">
                        <div class="row g-0">
                            <div class="col-md-2">
                                <img data-src="{{ asset('assets/frontend/images/icon/seo-optimized-pages.svg') }}" class="lazyload img-fluid mx-auto" alt="SEO Optimized Pages" title="SEO Optimized Pages" loading="lazy" width="32" height="31" />
                            </div>
                            <div class="col-md-10">
                                <span class="h5">SEO Optimized Pages</span>
                                <p>You will get optimized page content with better visibility and improved ranking within Wikipedia for better reach.</p>
                            </div>
                        </div>
                    </div>
                    <hr class="hr-line1" />
                </div>
                <div class="col-12 col-lg-4">
                    <div class="choose-box">
                        <div class="row g-0">
                            <div class="col-md-2">
                                <img data-src="{{ asset('assets/frontend/images/icon/coverage-of-all-niches.svg') }}" class="lazyload img-fluid mx-auto" alt="Coverage Of All Niches" title="Coverage Of All Niches" loading="lazy" width="32" height="31" />
                            </div>
                            <div class="col-md-10">
                                <span class="h5">Coverage Of All Niches</span>
                                <p>From informative pages for companies to personal profiles for celebrities, our team has expertise across various subjects.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="choose-box box2">
                        <div class="row g-0">
                            <div class="col-md-2">
                                <img data-src="{{ asset('assets/frontend/images/icon/competitive-pricing.svg') }}" class="lazyload img-fluid mx-auto" alt="Competitive Pricing" title="Competitive Pricing" loading="lazy" width="32" height="25" />
                            </div>
                            <div class="col-md-10">
                                <span class="h5">Competitive Pricing</span>
                                <p>Our services are reasonably priced. You will get complete value for money from our Wikipedia services.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="choose-box">
                        <div class="row g-0">
                            <div class="col-md-2">
                                <img data-src="{{ asset('assets/frontend/images/icon/quick-turnaround.svg') }}" class="lazyload img-fluid mx-auto" alt="Quick Turnaround" title="Quick Turnaround" loading="lazy" width="29" height="33" />
                            </div>
                            <div class="col-md-10">
                                <span class="h5">Quick Turnaround</span>
                                <p>It won't take long for our Wikipedia specialists to create your page and get it published with quality content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="wiki-portfolio">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 mx-auto">
                    <h2 class="h3">An Impressive Portfolio of Our Wikipedia Profile Creation in USA</h2>
                    <p>Our professional Wikipedia writers and page creators have worked on hundreds of profiles. The client base contains some big names from different domains and industries. From authors to actors, politicians, and business persons, we have served quite a few notable people and prominent American entities.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="nav-lists">
                        <div class="nav nav-tab-list nav-pills justify-content-center me-lg-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <button class="nav-link active" id="individual-tab" data-bs-toggle="pill" data-bs-target="#individual" type="button" role="tab" aria-controls="individual" aria-selected="true">
                                Individual
                            </button>
                            <button class="nav-link" id="companies-tab" data-bs-toggle="pill" data-bs-target="#companies" type="button" role="tab" aria-controls="companies" aria-selected="false">
                                Companies
                            </button>
                        </div>
                    </div>
                    <div class="tab-content nav-tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="individual" role="tabpanel" aria-labelledby="individual-tab">
                            <div class="row gy-4 gy-lg-5">
                                <div class="col-12 col-md-6 col-lg-3">
                                    <div class="box" data-bs-toggle="modal" data-bs-target="#portfolioModal" onclick="openModal('{{ asset('assets/frontend/images/sample/portfolio/individual-1-xl.webp') }}', '1920', '4933')">
                                        <img data-src="{{ asset('assets/frontend/images/sample/portfolio/individual-1.webp') }}" width="244" height="247" alt="Wikipedia Samples" title="Wikipedia Samples" class="lazyload img-fluid d-block mx-auto" loading="lazy" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3">
                                    <div class="box" data-bs-toggle="modal" data-bs-target="#portfolioModal" onclick="openModal('{{ asset('assets/frontend/images/sample/portfolio/individual-2-xl.webp') }}', '1920', '6057')">
                                        <img data-src="{{ asset('assets/frontend/images/sample/portfolio/individual-2.webp') }}" width="244" height="247" alt="Wikipedia Samples" title="Wikipedia Samples" class="lazyload img-fluid d-block mx-auto" loading="lazy" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3">
                                    <div class="box" data-bs-toggle="modal" data-bs-target="#portfolioModal" onclick="openModal('{{ asset('assets/frontend/images/sample/portfolio/individual-3-xl.webp') }}', '1920', '7885')">
                                        <img data-src="{{ asset('assets/frontend/images/sample/portfolio/individual-3.webp') }}" width="244" height="247" alt="Wikipedia Samples" title="Wikipedia Samples" class="lazyload img-fluid d-block mx-auto" loading="lazy" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3">
                                    <div class="box" data-bs-toggle="modal" data-bs-target="#portfolioModal" onclick="openModal('{{ asset('assets/frontend/images/sample/portfolio/individual-4-xl.webp') }}', '1920', '3806')">
                                        <img data-src="{{ asset('assets/frontend/images/sample/portfolio/individual-4.webp') }}" width="244" height="247" alt="Wikipedia Samples" title="Wikipedia Samples" class="lazyload img-fluid d-block mx-auto" loading="lazy" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3">
                                    <div class="box" data-bs-toggle="modal" data-bs-target="#portfolioModal" onclick="openModal('{{ asset('assets/frontend/images/sample/portfolio/individual-5-xl.webp') }}', '1920', '3258')">
                                        <img data-src="{{ asset('assets/frontend/images/sample/portfolio/individual-5.webp') }}" width="244" height="247" alt="Wikipedia Samples" title="Wikipedia Samples" class="lazyload img-fluid d-block mx-auto" loading="lazy" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3">
                                    <div class="box" data-bs-toggle="modal" data-bs-target="#portfolioModal" onclick="openModal('{{ asset('assets/frontend/images/sample/portfolio/individual-6-xl.webp') }}', '1920', '4735')">
                                        <img data-src="{{ asset('assets/frontend/images/sample/portfolio/individual-6.webp') }}" width="244" height="247" alt="Wikipedia Samples" title="Wikipedia Samples" class="lazyload img-fluid d-block mx-auto" loading="lazy" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3">
                                    <div class="box" data-bs-toggle="modal" data-bs-target="#portfolioModal" onclick="openModal('{{ asset('assets/frontend/images/sample/portfolio/individual-7-xl.webp') }}', '1920', '6177')">
                                        <img data-src="{{ asset('assets/frontend/images/sample/portfolio/individual-7.webp') }}" width="244" height="247" alt="Wikipedia Samples" title="Wikipedia Samples" class="lazyload img-fluid d-block mx-auto" loading="lazy" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3">
                                    <div class="box" data-bs-toggle="modal" data-bs-target="#portfolioModal" onclick="openModal('{{ asset('assets/frontend/images/sample/portfolio/individual-8-xl.webp') }}', '1920', '4385')">
                                        <img data-src="{{ asset('assets/frontend/images/sample/portfolio/individual-8.webp') }}" width="244" height="247" alt="Wikipedia Samples" title="Wikipedia Samples" class="lazyload img-fluid d-block mx-auto" loading="lazy" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="companies" role="tabpanel" aria-labelledby="companies-tab">
                            <div class="row gy-3">
                                <div class="col-12 col-md-6 col-lg-3">
                                    <div class="box" data-bs-toggle="modal" data-bs-target="#portfolioModal" onclick="openModal('{{ asset('assets/frontend/images/sample/portfolio/companies-1-xl.webp') }}', '1920', '7681')">
                                        <img data-src="{{ asset('assets/frontend/images/sample/portfolio/companies-1.webp') }}" width="244" height="247" alt="Wikipedia Samples" title="Wikipedia Samples" class="lazyload img-fluid d-block mx-auto" loading="lazy" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3">
                                    <div class="box" data-bs-toggle="modal" data-bs-target="#portfolioModal" onclick="openModal('{{ asset('assets/frontend/images/sample/portfolio/companies-2-xl.webp') }}', '1920', '3693')">
                                        <img data-src="{{ asset('assets/frontend/images/sample/portfolio/companies-2.webp') }}" width="244" height="247" alt="Wikipedia Samples" title="Wikipedia Samples" class="lazyload img-fluid d-block mx-auto" loading="lazy" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3">
                                    <div class="box" data-bs-toggle="modal" data-bs-target="#portfolioModal" onclick="openModal('{{ asset('assets/frontend/images/sample/portfolio/companies-3-xl.webp') }}', '1920', '3256')">
                                        <img data-src="{{ asset('assets/frontend/images/sample/portfolio/companies-3.webp') }}" width="244" height="247" alt="Wikipedia Samples" title="Wikipedia Samples" class="lazyload img-fluid d-block mx-auto" loading="lazy" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3">
                                    <div class="box" data-bs-toggle="modal" data-bs-target="#portfolioModal" onclick="openModal('{{ asset('assets/frontend/images/sample/portfolio/companies-4-xl.webp') }}', '1920', '4894')">
                                        <img data-src="{{ asset('assets/frontend/images/sample/portfolio/companies-4.webp') }}" width="244" height="247" alt="Wikipedia Samples" title="Wikipedia Samples" class="lazyload img-fluid d-block mx-auto" loading="lazy" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3">
                                    <div class="box" data-bs-toggle="modal" data-bs-target="#portfolioModal" onclick="openModal('{{ asset('assets/frontend/images/sample/portfolio/companies-5-xl.webp') }}', '1920', '2836')">
                                        <img data-src="{{ asset('assets/frontend/images/sample/portfolio/companies-5.webp') }}" width="244" height="247" alt="Wikipedia Samples" title="Wikipedia Samples" class="lazyload img-fluid d-block mx-auto" loading="lazy" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3">
                                    <div class="box" data-bs-toggle="modal" data-bs-target="#portfolioModal" onclick="openModal('{{ asset('assets/frontend/images/sample/portfolio/companies-6-xl.webp') }}', '1920', '3453')">
                                        <img data-src="{{ asset('assets/frontend/images/sample/portfolio/companies-6.webp') }}" width="244" height="247" alt="Wikipedia Samples" title="Wikipedia Samples" class="lazyload img-fluid d-block mx-auto" loading="lazy" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3">
                                    <div class="box" data-bs-toggle="modal" data-bs-target="#portfolioModal" onclick="openModal('{{ asset('assets/frontend/images/sample/portfolio/companies-7-xl.webp') }}', '1920', '4179')">
                                        <img data-src="{{ asset('assets/frontend/images/sample/portfolio/companies-7.webp') }}" width="244" height="247" alt="Wikipedia Samples" title="Wikipedia Samples" class="lazyload img-fluid d-block mx-auto" loading="lazy" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3">
                                    <div class="box" data-bs-toggle="modal" data-bs-target="#portfolioModal" onclick="openModal('{{ asset('assets/frontend/images/sample/portfolio/companies-8-xl.webp') }}', '1920', '4634')">
                                        <img data-src="{{ asset('assets/frontend/images/sample/portfolio/companies-8.webp') }}" width="244" height="247" alt="Wikipedia Samples" title="Wikipedia Samples" class="lazyload img-fluid d-block mx-auto" loading="lazy" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="book-writer text-center text-lg-start">
        <div class="container">
            <div class="row gy-4">
                <div class="col-12 col-lg-6 my-auto">
                    <h2 class="h2">
                        Best-Rated Wikipedia Page Creation Services in USA for
                        <span class="font-red">Effective Promotion</span>
                    </h2>
                    <p>Pretending to be a jack of all trades just to save a few bucks won't be a wise decision. Even professional writers can sometimes make mistakes while trying to compose an error-free Wikipedia profile. Therefore, we have dedicated Wiki page creators who specialize in crafting pages that will never get rejected. "How to get a Wikipedia page approved?" You do not have to worry about finding the answer to this question when our experts are here to help you out.</p>
                    <p>We pay undivided attention to every client and do not go for generic content, as it can damage the credibility of your profile. Our Wikipedia page makers follow a strict no-plagiarism policy. You will always get the best solution from our team to meet all your Wikipedia content needs. Every profile is double-checked before publishing just to make sure it does not violate any rules and regulations. If you are low on budget, our services will still be within your budget's reach.</p>
                    <div class="m-t-30 btn-box">
                        <a href="{{ route('pages', 'get-free-quote') }}">
                            <button type="button" class="btn-order">Get A Quick Quote</button>
                        </a>
                        <span class="or">OR</span>
                        <button role="button" type="button" onclick="openLiveChat();" class="btn-live">Let's Have A Chat</button>
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
                    <img data-src="{{ asset('assets/frontend/images/sample/wikipedia-search.webp') }}" class="lazyload img-fluid" alt="Children Book Writing" title="Children Book Writing" loading="lazy" width="537" height="405" />
                </div>
            </div>
        </div>
    </section>
    <hr class="hr-line" />
    <section class="reviews">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 mx-auto text-center">
                    <h2 class="h2">
                        An American Wikipedia Agency That is
                        <span class="font-red">Rated Positively</span>
                        by Every Client
                    </h2>
                    <p>These reviews are for those individuals who are in two minds about the credibility of our Wikipedia writing, editing, and publishing services. This roaring response from our clients will convince you to hire us for your Wikipedia profile creation.</p>
                </div>
            </div>
            <div class="swiper review-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">I wanted a personal Wikipedia page for myself. Being an author with multiple successful publications, I was aiming to have an online presence that showcases my achievements. These experts did a great job in researching and found all the relevant links that should have been a part of my profile.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/wikipedia-page-creation/anthony-jackson.webp') }}" class="lazyload img-fluid" alt="Anthony Jackson" title="Anthony Jackson" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Anthony Jackson</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">I had no clue about how you can create a Wikipedia page for your company. My firm has partnered with some big names. Therefore, I hired these Wikipedia writers to work on our profile and enhance our branding efforts. They made sure that there were no hurdles in the approval of our Wiki page.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/wikipedia-page-creation/jamie-stevens.webp') }}" class="lazyload img-fluid" alt="Jamie Stevens" title="Jamie Stevens" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Jamie Stevens</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">My first question to their support staff was about who writes Wikipedia pages from your team. They gave a quick overview of their Wiki page makers, and I was convinced that they would get the job done. I got a request from them to review the content, and it was perfect. They charged nothing for the minor edits.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/wikipedia-page-creation/samantha-williams.webp') }}" class="lazyload img-fluid" alt="Samantha Williams" title="Samantha Williams" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Samantha Williams</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">After doing a lot of research and receiving several quotations, I came to the conclusion that this site offers the cheapest packages for Wiki page creation services. They value their customers and respect their financial limitations. The transparency was maintained throughout, and I got complete value for money.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/wikipedia-page-creation/otis-morrison.webp') }}" class="lazyload img-fluid" alt="Otis Morrison" title="Otis Morrison" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Otis Morrison</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">We contacted this agency to make a Wikipedia article for our brand. However, the deadline we gave them was a bit short. They handled everything with precision and delivered timely results. It was super impressive to see them operate at such a quick pace and maintain the highest quality standards.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/wikipedia-page-creation/fiona-blair.webp') }}" class="lazyload img-fluid" alt="Fiona Blair" title="Fiona Blair" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Fiona Blair</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">I am recommending this Wikipedia publishing service to everyone. This review is based on my personal experience with these professionals. I am totally satisfied with their services. They have an amazing team of consultants who clear all your doubts about the whole process and keep you updated about the progress.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/wikipedia-page-creation/brandon-harper.webp') }}" class="lazyload img-fluid" alt="Brandon Harper" title="Brandon Harper" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Brandon Harper</span>
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
    <section class="cta">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 mx-auto text-center">
                    <h2 class="h3">Connect Directly with USA's Best Wiki Writers and Publishers Right Now</h2>
                    <p>You are just one click away from hiring the most professional team of Wikipedia experts and taking your online visibility to the next level. Share your requirements with our team so we can give you a detailed quotation and kick start your project.</p>
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
                                <button type="button" class="btn-live d-block p-0">Collaborate With Us</button>
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
    <section class="content-section text-center text-lg-start">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <h2 class="h2 mx-auto text-center">
                        Wikipedia Writers in US Who Can Strengthen Your
                        <span class="font-red">Digital Footprint</span>
                    </h2>
                </div>
            </div>
            <div class="scrollbar" id="style-2">
                <div class="force-overflow">
                    <div class="row m-t-20">
                        <div class="col-12 col-lg-6">
                            <h2 class="h4">The Most Cherished Wikipedia Experts in Town</h2>
                            <p>Our Wiki page creators are well-versed in creating prolific profiles and managing pages for all. Whether you are a celebrity, an influencer or run a brand, we write content with a neutral perspective, just as the platform demands. Our team avoids the promotional tone, so the content should not sound biased. We have some of the most highly qualified writers who are certified in Wikipedia writing and will always provide you with eloquent page creation services. Their vast knowledge and detailed insights will never let you down.</p>
                        </div>
                        <div class="col-12 col-lg-6">
                            <h2 class="h4">Flawless Writing & Editing For Wikipedia Pages</h2>
                            <p>We are a one-stop shop for every Wikipedia service you need. Our team will never miss any significant aspect related to the topic. Your content will be presented in a balanced manner with organized sections and clear headings. There will be a logical flow and cohesion in the overall content. From the introduction to the history, career, achievements, and personal life, we cover everything. Most importantly, we will use appropriate Wikipedia markup language to format text and add links for references.</p>
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
                <div class="col-12 col-lg-10 mx-auto">
                    <span class="h2">Common Queries From Americans About Our Wiki Page Creation Agency</span>
                    <div class="accordion" id="faqs">
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">
                                    Why should I have a Wiki page, and how can you help me?
                                </button>
                            </h3>
                            <div id="collapse-1" class="accordion-collapse collapse" aria-labelledby="heading-1" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Online resources like Google and other search engines have become our go-to tools for research. Wikipedia is a platform that ranks at the top in terms of providing authentic information. People find it reliable and trustworthy, and we can help you establish a professional presence on this platform.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                    Can you make a Wikipedia profile for my company?
                                </button>
                            </h3>
                            <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Having a Wikipedia presence is crucial for businesses as it makes them look more legitimate in front of their customers. Moreover, it also helps you effectively market your business all over the globe. We can create a Wikipedia page for your company as we have dedicated experts who can do the job.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                    How can your Wikipedia page creation service benefit me?
                                </button>
                            </h3>
                            <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>For public figures and influential people, their online presence matters a lot. You can give your notability a kick through our Wikipedia publishing services. We emphasize quality content that perfectly describes your personality and offers people the right information they are searching for about you.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                    What will the cost of hiring your Wikipedia profile makers be?
                                </button>
                            </h3>
                            <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>We offer several services, and the final quotation depends on the assistance you require. From writing to editing, translation, maintenance, and consultation, we offer them all in a bundle to our customers. Our pricing plans are tailored to meet your budget requirements, and you can stay assured that there will be no hidden charges at all.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                                    What if I am not satisfied with the delivered content for my page?
                                </button>
                            </h3>
                            <div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Revision is never a problem at our Wikipedia agency. We keep our clients involved throughout the writing process and take their feedback seriously. You can get as many edits as you want. There are no exclusive charges for any revision. However, if your edit contains any advertising or promotional content, it will be removed, as Wikipedia does not allow such things.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade portfolio-modal" id="portfolioModal" tabindex="-1" aria-labelledby="portfolioModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                    <div>
                        <img id="modalImage" alt="Wikipedia" alt="Wikipedia" class="img-fluid zoom" width="0" height="0" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade popupForm" id="popupForm" tabindex="-1" aria-labelledby="popupFormLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div id="progressContainer" class="progress d-none" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                <div id="progressBar" class="progress-bar progress-bar-striped progress-bar-animated" style="width:75%"></div>
            </div>

            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                    <div class="text-box">
                        <span class="text">Fill Out This Brief Form To Get Your</span>
                        <span class="accent">Discount Reserved</span>
                    </div>
                    <div id="wikipedia-form"></div>
                </div>
            </div>
        </div>
      </div>

    <x-slot name="script">

        <x-frontend.service-script />

        <script defer src="{{ mix('assets/frontend/js/modal.js') }}"></script>
        <script defer src="{{ mix('assets/frontend/js/wikipedia-form.js') }}"></script>

        <script>
            function openModal(imageUrl, width = "1920", height = "4542") {
                let modalImage = document.getElementById('modalImage');
                    modalImage.src = imageUrl;
                    modalImage.width = width;
                    modalImage.height = height;
            }

            document.addEventListener('DOMContentLoaded', function() {
                let img = document.getElementById('modalImage');
                let isZoomedIn = false;
                img.style.cursor = 'zoom-in';

                img.addEventListener('click', function(event) {
                    if (isZoomedIn) {
                        img.style.transform = 'scale(1)';
                        img.style.cursor = 'zoom-in';
                        isZoomedIn = false;
                    } else {
                        img.style.transform = 'scale(1.5) translate(0px, 16%)';
                        img.style.cursor = 'zoom-out';
                        isZoomedIn = true;
                    }
                });
            });
        </script>

    </x-slot>

</x-app-layout>
