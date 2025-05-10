<x-app-layout>

	<x-slot name="metadata">

		<x-frontend.seo-metadata
			title="Children Book Design & Illustration | Book Cover Illustrators USA"
			description="Get your book illustrations from creative book cover illustrators in USA to enhance the impact of the story. Our book design services meet every budget."
			robots="true"
		/>

		<link rel="stylesheet" href="{{ mix('assets/frontend/css/service.css') }}" />
        <link rel="preload" as="image" href="{{ asset('assets/frontend/images/sample/path.webp') }}" />
        <link rel="preload" as="image" href="{{ asset('assets/frontend/images/icon/top-icon.webp') }}" />

	</x-slot>

    <section class="main-banner illustration-service text-lg-start text-center">
        <div class="container">
            <div class="row m-t-20">
                <div class="col-12 col-lg-7 col-md-12">
                    <h1>
                        <span class="h2">
                            <span class="back-green">
                                USA's
                            </span>
                            Most Trusted Book
                        </span>
                        <span class="h1">
                            Illustration
                            <span class="font-red">
                                Company
                            </span>
                        </span>
                    </h1>
                    <h2 class="h5">We Deliver Head Turning Book Designs & Illustrations</h2>
                    <p>Americanbookwriter provides custom book design and illustration services in USA for a magnitude of niches like novels, text books, comic books, business books, and more! Our book cover illustrators for hire will make your manuscript come to life with a seamless fusion of unique ideas and pictures, engaging readers of all ages.</p>
                    <div class="p-b-10 m-b-10">
                        <a href="{{ route('pages', 'get-free-quote') }}">
                            <button type="button" class="btn-order" style="width: 240px;">Make My Book Come To Life</button>
                        </a>
                        <span class="or">OR</span>
                        <button role="button" type="button" onclick="openLiveChat();" class="btn-live">Chat Now</button>
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
                    <img data-src="{{ asset('assets/frontend/images/services/book-design-and-illustration/book-illustration-service.webp') }}" class="lazyload img-fluid" alt="Book Illustration Service" title="Book Illustration Service" loading="lazy" width="536" height="405" />
                </div>
                <div class="col-12 col-lg-6 my-auto">
                    <h2 class="h2">
                        Book Illustration Service In USA That
                        <span class="font-red">
                            Fuses Creativity & Imagination
                        </span>
                    </h2>
                    <p>A great book cannot be completed without professional illustrations and formatting. And – not every graphic designer can actually deal with book illustrations, as designing for books is a little more critical. Here's when we, a leading book illustration company in America, appear on the scene. We use our creativity, designing expertise, and strong imagination to come up with a unique book design and illustration that matches your genre and shows a hint of what's inside. Get your book illustrations from us today and pair your manuscript with top-notch, intriguing images.</p>
                    <div class="m-t-30">
                        <a href="{{ route('pages', 'get-free-quote') }}">
                            <button type="button" class="btn-order">Illustrate Books For Me</button>
                        </a>
                        <button role="button" type="button" onclick="openLiveChat();" class="btn-live">Speak To A Specialist</button>
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
                    <span class="font-red">
                        Ranked #1
                    </span>
                    Among All USA's Book Illustration Companies!
                </h2>
                <p>We are the best American illustrators, committed to delivering unmatched customer experience and service to the authors out there! Be it authors who have just started their careers or Amazon's published authors with orange badges, we are recommended by many. Here's why:</p>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="box">
                        <img data-src="{{ asset('assets/frontend/images/services/book-design-and-illustration/professional-experience.svg') }}" class="lazyload img-fluid" alt="Professional Experience" title="Professional Experience" loading="lazy" width="48" height="48" />
                        <span class="h6">Professional Experience</span>
                        <p>Several authors have hired our top-tier book design company throughout the decade. This means we have real-time experience in designing books that would never get rejected on the basis of their outlook. We take pride in having professional experience, which most book illustration companies lack.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="box">
                        <img data-src="{{ asset('assets/frontend/images/services/book-design-and-illustration/unique-designs-every-time.svg') }}" class="lazyload img-fluid" alt="Unique Designs, Every Time" title="Unique Designs, Every Time" loading="lazy" width="48" height="48" />
                        <span class="h6">Unique Designs, Every Time</span>
                        <p>Despite being a veteran of this industry, we can confidently say that our talented book illustrators have never copied or re-used any concept! Even if you'd hired us for book illustration a million times, we'd still come to you with unique, custom, and creative ideas for your book design, everytime.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="box">
                        <img data-src="{{ asset('assets/frontend/images/services/book-design-and-illustration/limitless-edits-in-design.svg') }}" class="lazyload img-fluid" alt="Limitless Edits In Design" title="Limitless Edits In Design" loading="lazy" width="48" height="48" />
                        <span class="h6">Limitless Edits In Design</span>
                        <p>We encourage creative suggestions. You'd never find us being annoyed with queries or edit requests. Our book illustration company allows unlimited edits in every design until the customer is 100% satisfied. We charge nothing extra for edits, because we believe – it's the customer's right!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta cta1">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-8 offset-md-2 text-center">
					<h2 class="h2">Award-Winning Book Illustration In USA Is Our Forte!</h2>
					<p>We are the experts of book illustration committed to deliver top-notch and creative illustrations in no time.</p>
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
                                <button type="button" class="btn-live d-block p-0">Hire Us, Today</button>
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
                        Custom Illustrated Books By Our USA's
                        <span class="font-red">
                            Creative Designers Costs $699
                        </span>
                        & Cover Everything!
                    </h2>
                    <p>We believe in delivering complete solutions to the customers. Our book illustration pricing covers everything, from basic conceptions to final book illustrations. Here's what you can expect while working with us:</p>
                </div>
                <div class="row mt-5">
                    <div class="col-12 col-lg-12 col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="nav-lists">
                                    <div class="nav nav-tab-list flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <button class="nav-link active" id="v-pills-conception-tab" data-bs-toggle="pill" data-bs-target="#v-pills-conception" type="button" role="tab" aria-controls="v-pills-conception" aria-selected="true">
                                            Conception
                                        </button>
                                        <button class="nav-link" id="v-pills-character-illustrations-tab" data-bs-toggle="pill" data-bs-target="#v-pills-character-illustrations" type="button" role="tab" aria-controls="v-pills-character-illustrations" aria-selected="false">
                                            Character Illustrations
                                        </button>
                                        <button class="nav-link" id="v-pills-scene-illustrations-tab" data-bs-toggle="pill" data-bs-target="#v-pills-scene-illustrations" type="button" role="tab" aria-controls="v-pills-scene-illustrations" aria-selected="false">
                                            Scene Illustrations
                                        </button>
                                        <button class="nav-link" id="v-pills-cover-art-design-tab" data-bs-toggle="pill" data-bs-target="#v-pills-cover-art-design" type="button" role="tab" aria-controls="v-pills-cover-art-design" aria-selected="false">
                                            Cover Art Design
                                        </button>
                                        <button class="nav-link" id="v-pills-free-edits-tab" data-bs-toggle="pill" data-bs-target="#v-pills-free-edits" type="button" role="tab" aria-controls="v-pills-free-edits" aria-selected="false">
                                            Free Edits
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="tab-content nav-tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-conception" role="tabpanel" aria-labelledby="v-pills-conception-tab">
                                        <div class="service-details">
                                            <span>Conception</span>
                                            <p>Have something in your mind? You share your idea in any way you are comfortable with; you can simply send us a pencil-drawn draft & we'll breathe life into it. But if you are clueless about the design, you can leave it to our professionals.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-character-illustrations" role="tabpanel" aria-labelledby="v-pills-character-illustrations-tab">
                                        <div class="service-details">
                                            <span>Character Illustrations</span>
                                            <p>Fortify the power of your story by incorporating the right character illustrations into it! We'll help you portray their personalities so readers feel more connected with your story. Be it a villainous figure or something for kids, we can do it all!</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-scene-illustrations" role="tabpanel" aria-labelledby="v-pills-scene-illustrations-tab">
                                        <div class="service-details">
                                            <span>Scene Illustrations</span>
                                            <p>Let your readers resonate with your story more and more through creative scene illustrations by us. Our visual artists transport your readers through vivid setting illustrations so your readers will be immersed in your story's captivating scenes.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-cover-art-design" role="tabpanel" aria-labelledby="v-pills-cover-art-design-tab">
                                        <div class="service-details">
                                            <span>Cover Art Design</span>
                                            <p>Who said don't judge a book by its cover? The cover is the first thing that allures a reader to it. Our book design services will encapsulate the essence of your book using compelling visuals and typography to convey your story's theme perfectly.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-free-edits" role="tabpanel" aria-labelledby="v-pills-free-edits-tab">
                                        <div class="service-details">
                                            <span>Free Edits</span>
                                            <p>Free edits are included in the book illustration pricing we charge. This means we won't simply disconnect after delivering the design. Rather, we'd stay by your side and edit the design, change the color, and move the objects until you are happy.</p>
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
                        Stunning Online Books Designed By Our
                        <span class="font-red">
                            Artistic Illustrators
                        </span>
                    </h2>
                    <p>Looking around for the best book designers for hire? We have the largest pool of talented book cover illustrators who have delivered plenty of covers, formatted thousands of books, and illustrated uncountable characters. Here are some of their top-rated masterpieces.</p>
                </div>
            </div>
			<div class="row m-t-40">
				<div class="col-12 col-md-6 col-lg-3">
					<img data-src="{{ asset('assets/frontend/images/services/book-design-and-illustration/book-1.webp') }}" class="lazyload img-fluid" alt="Dubliners" title="Dubliners" loading="lazy" width="260" height="391" />
				</div>
				<div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/book-design-and-illustration/book-2.webp') }}" class="lazyload img-fluid" alt="Little Stickers Bunnies" title="Little Stickers Bunnies" loading="lazy" width="260" height="391" />
				</div>
				<div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/book-design-and-illustration/book-3.webp') }}" class="lazyload img-fluid" alt="The Book Of Bera" title="The Book Of Bera" loading="lazy" width="260" height="391" />
				</div>
				<div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/book-design-and-illustration/book-4.webp') }}" class="lazyload img-fluid" alt="Plain & Precious" title="Plain & Precious" loading="lazy" width="260" height="391" />
				</div>
			</div>
			<div class="row m-t-20">
				<div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/book-design-and-illustration/book-5.webp') }}" class="lazyload img-fluid" alt="Bells Of Shangrila" title="Bells Of Shangrila" loading="lazy" width="260" height="391" />
				</div>
				<div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/book-design-and-illustration/book-6.webp') }}" class="lazyload img-fluid" alt="The Ghost Of Ivy Barn" title="The Ghost Of Ivy Barn" loading="lazy" width="260" height="391" />
				</div>
				<div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/book-design-and-illustration/book-7.webp') }}" class="lazyload img-fluid" alt="The Wicked King" title="The Wicked King" loading="lazy" width="260" height="391" />
				</div>
				<div class="col-12 col-md-6 col-lg-3">
                    <img data-src="{{ asset('assets/frontend/images/services/book-design-and-illustration/book-8.webp') }}" class="lazyload img-fluid" alt="The Wicked Deep" title="The Wicked Deep" loading="lazy" width="260" height="391" />
				</div>
			</div>
        </div>
    </section>
    <section class="cta cta1">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-8 offset-md-2 text-center">
					<h2 class="h2">Wield The Power Of Our Professional Book Illustration Company In USA</h2>
					<p>The pro book illustrators for hire here will turn your ideas into an appealing illustrated book so you can easily capture your audience at first glance.</p>
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
                                <button type="button" class="btn-live d-block p-0">Wield The Power Today</button>
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
                        Complete Your Book With
                        <span class="font-red">
                            Publish-Ready
                        </span>
                        Illustrations
                    </h2>
                    <p>Make your book publish-ready by working with USA's top book formatting and designing service that will help you with unique and creative illustrations that capture your attention at a glance. To offer best-in-class book formatting services, we begin the process by getting to know more about you. We understand the genre of your book and its vision and turn it into a reality. Plus, throughout the whole process, the decision strongly stays yours. You can get your illustration customized in any way you want.</p>
                    <div class="m-t-30">
                        <a href="{{ route('pages', 'get-free-quote') }}">
                            <button type="button" class="btn-order">Complete My Book</button>
                        </a>
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
                    <img data-src="{{ asset('assets/frontend/images/services/book-design-and-illustration/publish-ready-illustrations.webp') }}" class="lazyload img-fluid" alt="Publish Ready Illustrations" title="Publish Ready Illustrations" loading="lazy" width="536" height="405" />
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
                        Authors Love Our Book Formatting Services In
                        <span class="font-red">
                            USA
                        </span>
                    </h2>
                    <p>We have the honor of working with a multitude of authors coming from diversified genres. Here's what they say about us:</p>
                </div>
            </div>
            <div class="swiper review-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">I am a maestro of writing, but when it comes to book designing, I am a big fail. I hired this book designer for my book's formatting, and it turned out to be a great decision. I am 100% satisfied with them and would highly recommend this site to others.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/book-design-and-illustration/azalea-winston.webp') }}" class="lazyload img-fluid" alt="Azalea Winston" title="Azalea Winston" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Azalea Winston</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">Working with this professional book illustrator was a very pleasant experience. From the start till the order delivery and even after that, they guys helped me a lot. I requested them a few revisions, which catered to me, free of cost.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
										<img data-src="{{ asset('assets/frontend/images/services/book-design-and-illustration/mabel-alma.webp') }}" class="lazyload img-fluid" alt="Mabel Alma" title="Mabel Alma" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Mabel Alma</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">A very close friend of mine recommended this site for book design and illustration. I really admired the designs of his book, and since I was so satisfied, I hired this service. And I feel I made the right decision. I am 100% satisfied with them.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/services/book-design-and-illustration/homer-camille.webp') }}" class="lazyload img-fluid" alt="Homer Camille" title="Homer Camille" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Homer Camille</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">It is a very affordable and professional book designing agency in the USA. The service was very quick, and the designs they showed me were so much creative and unique. I never thought that my book could be designed in this way. Loved working with them.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
										<img data-src="{{ asset('assets/frontend/images/services/book-design-and-illustration/birch-alfred.webp') }}" class="lazyload img-fluid" alt="Birch Alfred" title="Birch Alfred" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Birch Alfred</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">I am highly satisfied with this expert book design service in America that makes the most aesthetic and crispy book illustrations for all genres. I was too specific about what I wanted, but they helped me well and delivered on time.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
										<img data-src="{{ asset('assets/frontend/images/services/book-design-and-illustration/posey-kit.webp') }}" class="lazyload img-fluid" alt="Posey Kit" title="Posey Kit" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Posey Kit</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">If you need the most professional but affordable book designing and illustration service in the USA, I would confidently recommend you to head to this site. I am very happy that I trusted them with the service. Do try them out at least once</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
										<img data-src="{{ asset('assets/frontend/images/services/book-design-and-illustration/alberic-avery.webp') }}" class="lazyload img-fluid" alt="Alberic Avery" title="Alberic Avery" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Alberic Avery</span>
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
					<span class="h2">Cover Your USA's Best-Seller With An Appealing Book Cover Design</span>
					<p>Book success boils down to creativity, be it in terms of writing or designing! We'll help you make a memorable first impression on your audience.</p>
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
                                <button type="button" class="btn-live d-block p-0">Illustrate Book Cover Design</button>
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
                        Our
                        <span class="font-red">
                            Artistic Book Cover Illustrators
                        </span>
                        Turn Concepts Into An
                        <br />
                        Artwork That Sells
                    </h2>
                </div>
            </div>
            <div class="scrollbar" id="style-2">
                <div class="force-overflow">
                    <div class="row m-t-20">
                        <div class="col-12 col-lg-6">
                            <h2 class="h4">USA's Talented Book Designers Covering All Types Of Illustrations</h2>
                            <p>There's a large range of illustration options. For many, just 'vectorization' could be the only limit in illustration. But for professionals like us, vectorization is the start line, followed by unlimited creative possibilities. Depending upon the design, we can offer many types of illustrations like water colour, sketches, line drawings, and photographs. We have formed a team of innovative book illustrators who have perfect knowledge of which illustration type would work best in which situation.</p>
                        </div>
                        <div class="col-12 col-lg-6">
                            <h2 class="h4">Book Illustrators With Widest Footprint</h2>
                            <p>Have you been looking around for the best book illustrators near me? If yes, then let us break the good news to you. Our professional book design service can be approached from any part of the world. Not just that, but we are among the rare book design companies in USA that serve as a one-stop solution for everything, like KDP formatting, book illustration, book interior designing, and much more! Hence, whether you need someone for manuscript formatting or book designing, our company can be your best call.</p>
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
                    <span class="h2">Your Queries Are Welcome!</span>
                    <div class="accordion" id="faqs">
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">
                                    Will you deliver custom illustrations to me?
                                </button>
                            </h3>
                            <div id="collapse-1" class="accordion-collapse collapse" aria-labelledby="heading-1" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>For sure! You'll be getting 100% customized book illustrations, defining your book's genre and communicating its essence. We have access to premium sources, so we get images from there, too. Hence, you will never experience repetition of design.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                    Can you design or illustrate books for any genre?
                                </button>
                            </h3>
                            <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Of course. Our book designing and illustration company works for all genres and designs. Whether it's thriller, mystery, crime, romance, comic book, or anything else, you can always expect us to design books for you. We'll do that masterfully.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                    What if my publisher refuses a book on the basis of design?
                                </button>
                            </h3>
                            <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Firstly, such scenarios are very rare to happen because we design brilliant and magical illustrations for our customers. But, if such a situation has occurred in rare cases, you can always show us professional feedback, and we'll cater to your requirements.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                    What makes us the best among all book illustration companies?
                                </button>
                            </h3>
                            <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Our creative imagination makes us the best among all book illustration companies. We are known for coming up with top-notch, unique, and compelling designs that attract the reader. Our fast and efficient customer service is like a cherry on top.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                                    Can you show me a draft of the book illustration before finalizing it?
                                </button>
                            </h3>
                            <div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Our customers stay in the loop throughout the whole process. This means you'll be getting drafts from time to time. So you never have to worry about receiving unpleasant surprises in the end. The transparency would be 100% smooth and process throughout.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header h3" id="heading-6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
                                    What if I need some changes in the illustrated book design?
                                </button>
                            </h3>
                            <div id="collapse-6" class="accordion-collapse collapse" aria-labelledby="heading-6" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>It's totally your call! We cater to the changes or edits for free. If you need some changes in the design because you were expecting something else, we'll look into it and make the edits. Working with us is all about customer satisfaction and happiness.</p>
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
