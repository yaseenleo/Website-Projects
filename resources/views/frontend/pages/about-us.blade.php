<x-app-layout>

	<x-slot name="metadata">

		<x-frontend.seo-metadata
			title="About American Book Writer | Book Writing and Self-Publishing"
			description="Interested in working with us? We've 10 years of experience in book writing, formatting, publishing & printing, with the highest client retention!"
			robots="true"
		/>

        <link rel="stylesheet" href="{{ mix('assets/frontend/css/about-us.css') }}" />
        <link rel="preload" as="image" href="{{ asset('assets/frontend/images/sample/path.webp') }}" />
        <link rel="preload" as="image" href="{{ asset('assets/frontend/images/icon/top-icon.webp') }}" />

	</x-slot>

    <section class="main-banner">
        <div class="container">
            <div class="row m-t-20">
                <div class="col-12 col-lg-12 text-center">
                    <h1>
                        <span class="h1">
                            <span class="font-red">
                                About
                            </span>
                            American Book Writer
                        </span>
                    </h1>
                    <h2 class="h5">A Company Where Best-Seller Books Are Written, Edited, Designed, Published & Printed!</h2>
                    <p class="m-t-30">American Book Writer is a professional book writing company in the USA that empowers business owners, celebrities, and authors to share their unique stories and wisdom with the world. We turn ideas into publish-ready books, within 7 days, for $ 799 only.</p>
                    <div class="m-t-40 mb-5">
                        <a href="{{ route('pages', 'get-free-quote') }}">
                            <button type="button" class="btn-order">Get A Quote</button>
                        </a>
                        <span class="or">OR</span>
                        <button role="button" type="button" onclick="openLiveChat();" class="btn-live">Write My Book</button>
                    </div>
                    <div class="m-t-40 mb-5">
                        <img data-src="{{ asset('assets/frontend/images/icon/top-icon.webp') }}" class="lazyload img-fluid" alt="Rating" title="Rating" loading="lazy" width="395" height="92" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="hr-line" />

    <x-frontend.brand />

    <hr class="hr-line" />
    <section class="lead">
        <div class="container">
			<div class="row">
				<div class="col-12 col-lg-6 col-md-12 col-sm-12">
					<div class="lead-image">
						<img data-src="{{ asset('assets/frontend/images/icon/lead.webp') }}" class="lazyload img-fluid" alt="Innovative Ideas" title="Innovative Ideas" loading="lazy" width="518" height="533" />
					</div>
				</div>
                <div class="col-12 col-lg-6 col-md-12 col-sm-12">
					<div class="lead-details">
                        <h2 class="h2">
                            Shaping Innovative Ideas Into
                            <br />
                            Era's
                            <span class="font-red">
                                Best-Sellers
                            </span>
                        </h2>
                        <p>American Book Writer brings the finest book writing services for individuals who have ideas in their heads but find it hard to express them on paper. We know how to shape innovative concepts into a write-up that no one can stop from ranking. Not only are we creative, expert book writers, but we also know how to design, format, and publish books to turn the written masterpiece into a massive hit.</p>
                        <p>Our award-winning book designing service guarantees to come up with an enticing design that catches your audience's eyes within a second. If you have ever dreamed of having your name listed under New York's best-selling authors, then we'll help you get there. We are the true face behind uncountable best sellers of the town, who trusted us with our expertise. Hire us today, and we'll get started!</p>
                        <span class="h5">What Makes Us Exclusive?</span>
                        <p>Wondering why you should trust us with your book-related stuff? Because of course, the market is packed with unlimited options. But several factors make us exclusive in the industry. Here are some of them:</p>
                        <ul>
                            <li>
                                We have 10 years of experience
                            </li>
                            <li>
                                Our customer service is really quick
                            </li>
                            <li>
                                This is a one-stop for all book-related needs
                            </li>
                        </ul>
                    </div>
				</div>
			</div>
		</div>
    </section>
    <section class="stats">
        <div class="container">
			<div class="row">
				<div class="col-12 col-lg-3 col-md-6 col-sm-12">
					<div class="stats-details">
                        <span class="h4">80,000+</span>
                        <p>Projects Completed</p>
					</div>
				</div>
                <div class="col-12 col-lg-3 col-md-6 col-sm-12">
					<div class="stats-details">
                        <span class="h4">98%</span>
                        <p>Returning Authors</p>
					</div>
				</div>
                <div class="col-12 col-lg-3 col-md-6 col-sm-12">
					<div class="stats-details">
                        <span class="h4">70+</span>
                        <p>Genres Offered</p>
					</div>
				</div>
                <div class="col-12 col-lg-3 col-md-6 col-sm-12">
					<div class="stats-details">
                        <span class="h4">100%</span>
                        <p>Satisfaction Guaranteed</p>
					</div>
				</div>
			</div>
		</div>
    </section>
    <section class="refining">
        <div class="container">
			<div class="row">
                <div class="col-12 col-lg-6 col-md-12 col-sm-12">
                    <div class="refining-details">
                        <h2 class="h2">
                            Book Writing Process That Depends
                            <span class="font-red">
                                Upon Passion & Strategic Implementation
                            </span>
                        </h2>
                        <p>Working with us is an easy and quick process. The order begins with the basic consultation, during which the customer reveals their requirements, like the genre, story, concept, and other expectations. Once we have received the requirements, we begin the process after the basic consultation. We curate the outline and share it with the customer.</p>
                        <p>We connect the dots between the outline and transform the rough draft into a custom-written, engaging story. Meanwhile, we keep the customer in the loop so they can easily track the order. As per the client's feedback, we can make the amendments too. By the end, when the book is ready, we get to the next most important step i.e. proofreading.</p>
                        <p>The proofreading begins. The QA team and editors use their strong observation powers to fish out any issues in the content. They ensure the book is exactly what the customer has expected from us. By the end, when the order is completed, it is delivered to the client. They can review the submission and request changes if they want to.</p>
                    </div>
				</div>
				<div class="col-12 col-lg-6 col-md-12 col-sm-12">
					<div class="refining-image">
						<img data-src="{{ asset('assets/frontend/images/icon/refining.webp') }}" class="lazyload img-fluid" alt="Strategic Implementation" title="Strategic Implementation" loading="lazy" width="475" height="500" />
					</div>
				</div>
			</div>
		</div>
    </section>
    <hr class="hr-line" />
    <section class="why-choose">
        <div class="container">
            <div class="why-choose-heading">
                <h2 class="h2">
                    American Book Writer - A Stairway
                    <br />
                    Towards
                    <span class="font-red">
                        Literary Success
                    </span>
                    !
                </h2>
                <p>We have the highest client retention rate in the USA - and that's not because of luck - instead, we have worked hardest to retain our clients. And here's how we do it:</p>
            </div>
            <div class="row">
                <div class="col-12 col-lg-3 col-md-6 col-sm-12">
                    <div class="box">
                        <img data-src="{{ asset('assets/frontend/images/icon/quickest-delivery.svg') }}" class="lazyload img-fluid" alt="Quickest & On-Time Delivery" title="Quickest & On-Time Delivery" loading="lazy" width="48" height="48" />
                        <span class="h6">Quickest & On-Time Delivery</span>
                        <p>Everyone loves on-time delivery, and so do our customers. We make sure to deliver on time or preferably, beforehand the real deadline. Plus, our turnaround is the fastest in the marketplace, so you will never have to wait months and months just to get your hands on your dream book.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-6 col-sm-12">
                    <div class="box">
                        <img data-src="{{ asset('assets/frontend/images/icon/confidentiality.svg') }}" class="lazyload img-fluid" alt="100% Confidentiality" title="100% Confidentiality" loading="lazy" width="48" height="48" />
                        <span class="h6">100% Confidentiality</span>
                        <p>While empowering the author's journey through writing services, we take full guarantee of protecting your book, its concept, and your personal data. No one will ever find out that you hired us for the writing. We have ghostwritten uncountable best-sellers and never leaked the client's information.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-6 col-sm-12">
                    <div class="box">
                        <img data-src="{{ asset('assets/frontend/images/icon/best-book-writers.svg') }}" class="lazyload img-fluid" alt="USA's Best Book Writers" title="USA's Best Book Writers" loading="lazy" width="48" height="48" />
                        <span class="h6">USA's Best Book Writers</span>
                        <p>Among the bunch of good writers, the best ones are those who know how to adapt their writing style as per the genre or client's requirements. We are proud to be one of those who can easily tailor their approach to ensure the client's success. Hence, you can rely on us to hire the best-in-class writers.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-6 col-sm-12">
                    <div class="box">
                        <img data-src="{{ asset('assets/frontend/images/icon/satisfaction-guaranteed.svg') }}" class="lazyload img-fluid" alt="Satisfaction Guaranteed" title="Satisfaction Guaranteed" loading="lazy" width="48" height="48" />
                        <span class="h6">Satisfaction Guaranteed</span>
                        <p>Although, throughout the process, you will have our professionals at your side, pouring in their suggestions and mastery. But the final call will always be yours. Even after the final delivery, if you believe there's something that needs to be fixed, we'll do it for you at no additional price.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta cta1">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-8 offset-md-2 text-center">
					<span class="h2">What's Stopping You To Become The Renowned Author?</span>
					<p>Are you too shy to clear your doubts? Don't worry; we have a friendly team of customer support that will get you through this super easily.</p>
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
                                <button type="button" class="btn-live d-block p-0">Let's Get Started</button>
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
    <section class="our-team">
        <div class="container">
            <div class="our-team-heading">
                <h2 class="h2">
                    Meet The Expert Book Writers, Who
                    <span class="font-red">
                        Hears The
                        <br />
                        Story & Turn It Into A Book
                    </span>
                </h2>
                <p>Navigate the profiles of the experts working with us, who confidently hear your story and turn them into a market-ready book that easily creates a buzz worldwide.</p>
            </div>
            <div class="our-teams-box">
                <div class="our-team-box">
                    <img data-src="{{ asset('assets/frontend/images/icon/team-1.svg') }}" class="lazyload img-fluid" alt="Benjamin Jacob" title="Benjamin Jacob" loading="lazy" width="180" height="180" />
                    <span class="h6">Benjamin Jacob</span>
                    <p>Writing Expert</p>
                </div>
                <div class="our-team-box">
                    <img data-src="{{ asset('assets/frontend/images/icon/team-2.svg') }}" class="lazyload img-fluid" alt="Anthony Hunter" title="Anthony Hunter" loading="lazy" width="180" height="180" />
                    <span class="h6">Anthony Hunter</span>
                    <p>Expert Publisher</p>
                </div>
                    <div class="our-team-box">
                    <img data-src="{{ asset('assets/frontend/images/icon/team-3.svg') }}" class="lazyload img-fluid" alt="Austin Ryan" title="Austin Ryan" loading="lazy" width="180" height="180" />
                    <span class="h6">Austin Ryan</span>
                    <p>Book Editor</p>
                </div>
                    <div class="our-team-box">
                    <img data-src="{{ asset('assets/frontend/images/icon/team-4.svg') }}" class="lazyload img-fluid" alt="Matthew Tyler" title="Matthew Tyler" loading="lazy" width="180" height="180" />
                    <span class="h6">Matthew Tyler</span>
                    <p>Book Designer</p>
                </div>
                    <div class="our-team-box">
                    <img data-src="{{ asset('assets/frontend/images/icon/team-5.svg') }}" class="lazyload img-fluid" alt="Riley Gray" title="Riley Gray" loading="lazy" width="180" height="180" />
                    <span class="h6">Riley Gray</span>
                    <p>Junior Writer</p>
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
                        American Authors Are
                        <span class="font-red">
                            Super Pleased
                        </span>
                        With Us!
                    </h2>
                    <p>We've been the town's first choice throughout the span of 10 years, and that's what makes us the best option in the USA. Don't trust us? The client's following words say a lot about us:</p>
                </div>
            </div>
            <div class="swiper review-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">Such expert book writers! I have never worked with such a professional company before. My fiction book was well-written, with accurate themes and vocabulary. The delivery was fast, and they offered me a discount as well.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/icon/emily-scarlett.webp') }}" class="lazyload img-fluid" alt="Emily Scarlett" title="Emily Scarlett" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Emily Scarlett</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">Outstanding experience!! You guys did a great job with narrative autobiography. Every sentence is so well-written and is so much creative. I really enjoyed their service and would surely recommend them to other people as well.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
										<img data-src="{{ asset('assets/frontend/images/icon/sophia-mia.webp') }}" class="lazyload img-fluid" alt="Sophia Mia" title="Sophia Mia" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Sophia Mia</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">I wrote the book myself, but then my publisher told me that it was a disaster. I hired this book writing service upon a friend's suggestion, and I can confidently say that it was the best decision of my life. I would surely re-hire them.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
                                        <img data-src="{{ asset('assets/frontend/images/icon/isabella-victoria.webp') }}" class="lazyload img-fluid" alt="Isabella Victoria" title="Isabella Victoria" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Isabella Victoria</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">I have been using their services for a decade now, and they never disappoint - and I mean it. From quality to customer service and everything else, it's always on point. If you need an affordable service, please do let me know.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
										<img data-src="{{ asset('assets/frontend/images/icon/sofia-aria.webp') }}" class="lazyload img-fluid" alt="Sofia Aria" title="Sofia Aria" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Sofia Aria</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">A solid professional and responsive book writing company it is. I was a little confused at the start, but they guided me so nicely that I was satisfied in the first consultation session. And of course, the quality of the book is just top-notch.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
										<img data-src="{{ asset('assets/frontend/images/icon/lucas-jacob.webp') }}" class="lazyload img-fluid" alt="Lucas Jacob" title="Lucas Jacob" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Lucas Jacob</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                            <div class="cards-body">
                                <p class="m-t-10">Working with American Book Writer was a very rewarding experience. I have hired a few book writing experts before but never experienced this level of customer service. The quality of the book was just ten on ten. Loved every bit of it.</p>
                            </div>
                            <div class="cards-footer">
                                <div class="row g-0">
                                    <div class="col-2">
										<img data-src="{{ asset('assets/frontend/images/icon/morgan-finley.webp') }}" class="lazyload img-fluid" alt="Morgan Finley" title="Morgan Finley" loading="lazy" width="49" height="47" />
                                    </div>
                                    <div class="col-10">
                                        <span class="h5">Morgan Finley</span>
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
					<span class="h2">Hop On The Journey Of Best-Selling Author</span>
					<p>We are set to help you embark on the journey of best-seller. Just drop us your idea, and we'll pick up threads from there!</p>
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
                                <button type="button" class="btn-live d-block p-0">Hop On, Today</button>
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
    <section class="faqs">
        <div class="container">
            <div class="row g-0">
                <div class="col-12 col-lg-6">
                    <span class="h2">
                        Stop Pressing Questions! We've
                        <span class="font-red">
                            Answered
                        </span>
                        Them All
                    </span>
                    <div class="accordion" id="faqs">
                        <div class="accordion-item">
                            <span class="accordion-header h3" id="heading-1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">
                                    Is it important to hire a book writing service?
                                </button>
                            </span>
                            <div id="collapse-1" class="accordion-collapse collapse" aria-labelledby="heading-1" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Yes, hiring a book writing service is important because not everyone can write a book. Writing a book requires writing experience, creative vocabulary, and perfect grammar. That's why it's important to hire a book writing service.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <span class="accordion-header h3" id="heading-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                    Is my book and its concept safe with you?
                                </button>
                            </span>
                            <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Of course, it is 100% safe with us. We never leak the client's book before it is actually launched for the public. We protect client's data to all heights and ensure no one accesses it. Hence, you can feel safe and confident while working with us.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <span class="accordion-header h3" id="heading-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                    Do you work with in-house writers or freelancers?
                                </button>
                            </span>
                            <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>No, we work with in-house, USA-based book writing experts. We never outsource orders to freelancers or local writers because, in that case, controlling quality becomes a hassle. Therefore, we have a team of in-house experts who deal with the orders.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <span class="accordion-header h3" id="heading-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                    Can you write on every genre?
                                </button>
                            </span>
                            <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Of course, we can deal in every genre. We have ten years of experience in this field, and throughout this span, we have worked with countless clients belonging to various genres. You can come with any genre requirements, and we'll deal with them.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <span class="accordion-header h3" id="heading-5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                                    Will you transfer the book rights to me?
                                </button>
                            </span>
                            <div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Yes, we will transfer you 100% ownership and rights of the book. This means you will be the only owner of the book, and any profit you earn through the book will be only yours. We charge no royalties from the customers and never let anyone know that we wrote a certain book.</p>
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

		<script>
            let contact = true;
            let contactScript = "{{ asset('assets/frontend/js/service-form.js') }}";

            let reCaptchaPublicKey = "{{ config('services.google-re-captcha.public') }}";

            let reviewSlider = true;
            let reviewSliderScript = "{{ asset('assets/frontend/js/review-slider.js') }}";

            <x-frontend.lazy-script />

            document.getElementsByClassName('reviews')[0].addEventListener('mouseover', function() {
                if (reviewSlider) {
                    loadScript(reviewSliderScript);
                }

                reviewSlider = false;
            });

            document.getElementsByClassName('faqs')[0].addEventListener('mouseover', function() {
                if (contact) {
                    loadScript(contactScript);
                }

                contact = false;
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
            }, 5000);
        </script>

	</x-slot>

</x-app-layout>
