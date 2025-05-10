<x-app-layout>

    <x-slot name="metadata">

        <x-frontend.seo-metadata
            title="Genuine Trusted Reviews | American Book Writer - Certified Seller"
            description="We are rated 4.9/5, across several platforms for our high-quality book writing service and top-notch customer service. Check reviews & you’ll be amazed."
            robots="true"
        />

        <link rel="stylesheet" href="{{ mix('assets/frontend/css/review.css') }}" />
        <link rel="preload" as="image" href="{{ asset('assets/frontend/images/sample/path.webp') }}" />
        <link rel="preload" as="image" href="{{ asset('assets/frontend/images/logo/american-book-writer.svg') }}" />

    </x-slot>

    <section class="main-banner">
        <div class="container">
            <div class="row m-t-20">
                <div class="col-12 col-lg-12 text-center">
                    <h1>
                        <span class="h1">
                            Reviews Says It All About
                            <span class="font-red">
                                ABW
                            </span>
                        </span>
                    </h1>
                    <h2 class="h5">Authors Sharing Their Experiences!</h2>
                    <p class="m-t-30">Need some more assurance about the service? We knew, this was coming. Following are the words by customers, about our book writing service! Have a look into what they think about us:</p>
                </div>
            </div>
        </div>
    </section>
    <hr class="hr-line" />

    <x-frontend.brand />

    <hr class="hr-line" />
    <section class="reviews">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="review-box">
                        <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                        <div class="cards-body">
                            <p class="m-t-10">I would like to present my science appreciation to the American Book Writer team that helped me get my book written and published on Amazon. Since my book was based on fiction, not all writers accepted my order; they only did!</p>
                        </div>
                        <div class="cards-footer">
                            <div class="row g-0">
                                <div class="col-2">
                                    <img data-src="{{ asset('assets/frontend/images/icon/morgan.webp') }}" class="lazyload img-fluid" alt="Morgan" title="Morgan" loading="lazy" width="49" height="47" />
                                </div>
                                <div class="col-10">
                                    <span class="h5">Morgan</span>
                                    <span class="e-text">Book Writer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="review-box">
                        <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                        <div class="cards-body">
                            <p class="m-t-10">Today, I received my first chapter of the horror genre, and I must say, from the first paragraph to the last word of the first chapter, I was amazed and smiled! The integration of characters and how they introduced everything was professionally written.</p>
                        </div>
                        <div class="cards-footer">
                            <div class="row g-0">
                                <div class="col-2">
                                    <img data-src="{{ asset('assets/frontend/images/icon/oliver.webp') }}" class="lazyload img-fluid" alt="Oliver" title="Oliver" loading="lazy" width="49" height="47" />
                                </div>
                                <div class="col-10">
                                    <span class="h5">Oliver</span>
                                    <span class="e-text">Book Writer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="review-box">
                        <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                        <div class="cards-body">
                            <p class="m-t-10">My children's book order is still in process, and I have approved 7 chapters! But I really wanted to appreciate the team for their exceptional quality work. They have kicked off the process perfectly, and it is indeed an excellent start. Bravo, guys!</p>
                        </div>
                        <div class="cards-footer">
                            <div class="row g-0">
                                <div class="col-2">
                                    <img data-src="{{ asset('assets/frontend/images/icon/carter.webp') }}" class="lazyload img-fluid" alt="Carter" title="Carter" loading="lazy" width="49" height="47" />
                                </div>
                                <div class="col-10">
                                    <span class="h5">Carter</span>
                                    <span class="e-text">Book Writer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="review-box">
                        <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                        <div class="cards-body">
                            <p class="m-t-10">The book writing expert team is highly knowledgeable, experienced, and professional. The support team helped me pick the right package and explained everything. I enjoyed working with them as the process was smooth and transparent.</p>
                        </div>
                        <div class="cards-footer">
                            <div class="row g-0">
                                <div class="col-2">
                                    <img data-src="{{ asset('assets/frontend/images/icon/jayden.webp') }}" class="lazyload img-fluid" alt="Jayden" title="Jayden" loading="lazy" width="49" height="47" />
                                </div>
                                <div class="col-10">
                                    <span class="h5">Jayden</span>
                                    <span class="e-text">Book Writer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="review-box">
                        <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                        <div class="cards-body">
                            <p class="m-t-10">These talented book writers have done a superlative job. I am 92 years old and wanted someone to write a memoir for me. Their memoir writers have done the best job. It sums up my 92 years of life just perfectly. I will gift it to my grandchildren.</p>
                        </div>
                        <div class="cards-footer">
                            <div class="row g-0">
                                <div class="col-2">
                                    <img data-src="{{ asset('assets/frontend/images/icon/alessia.webp') }}" class="lazyload img-fluid" alt="Alessia" title="Alessia" loading="lazy" width="49" height="47" />
                                </div>
                                <div class="col-10">
                                    <span class="h5">Alessia</span>
                                    <span class="e-text">Book Writer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="review-box">
                        <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                        <div class="cards-body">
                            <p class="m-t-10">In my opinion, the American Book Writer is a truly extraordinary company that should receive more recognition. As I was hiring them for the first time, I had many questions, but they patiently answered all of my questions and delivered the highest quality book.</p>
                        </div>
                        <div class="cards-footer">
                            <div class="row g-0">
                                <div class="col-2">
                                    <img data-src="{{ asset('assets/frontend/images/icon/benji.webp') }}" class="lazyload img-fluid" alt="Benji" title="Benji" loading="lazy" width="49" height="47" />
                                </div>
                                <div class="col-10">
                                    <span class="h5">Benji</span>
                                    <span class="e-text">Book Writer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="review-box">
                        <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                        <div class="cards-body">
                            <p class="m-t-10">I am a first-time author, unknown to every aspect that's related to book writing. This agency helped me so much and guided me really well. They assisted with book cover design and book publishing, too. Indeed, it was the best experience with them.</p>
                        </div>
                        <div class="cards-footer">
                            <div class="row g-0">
                                <div class="col-2">
                                    <img data-src="{{ asset('assets/frontend/images/icon/sarai.webp') }}" class="lazyload img-fluid" alt="Sarai" title="Sarai" loading="lazy" width="49" height="47" />
                                </div>
                                <div class="col-10">
                                    <span class="h5">Sarai</span>
                                    <span class="e-text">Book Writer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="review-box">
                        <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                        <div class="cards-body">
                            <p class="m-t-10">Book publishing isn't like a piece of cake! It has its own complexities. Though it is not included in its book writing, of course, it is essential. I hired this book publishing service, and they uploaded my book on Amazon, Kobo, Lulu, and all the other platforms I wanted!</p>
                        </div>
                        <div class="cards-footer">
                            <div class="row g-0">
                                <div class="col-2">
                                    <img data-src="{{ asset('assets/frontend/images/icon/nayeli.webp') }}" class="lazyload img-fluid" alt="Nayeli" title="Nayeli" loading="lazy" width="49" height="47" />
                                </div>
                                <div class="col-10">
                                    <span class="h5">Nayeli</span>
                                    <span class="e-text">Book Writer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="review-box">
                        <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                        <div class="cards-body">
                            <p class="m-t-10">Exceptional book publishing service! Navigated me through the entire process seamlessly. My book is now a reality, thanks to their dedication and expertise. Also, the prices were really low, which is a major plus point of their book writing service.</p>
                        </div>
                        <div class="cards-footer">
                            <div class="row g-0">
                                <div class="col-2">
                                    <img data-src="{{ asset('assets/frontend/images/icon/makai.webp') }}" class="lazyload img-fluid" alt="Makai" title="Makai" loading="lazy" width="49" height="47" />
                                </div>
                                <div class="col-10">
                                    <span class="h5">Makai</span>
                                    <span class="e-text">Book Writer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="review-box">
                        <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                        <div class="cards-body">
                            <p class="m-t-10">I have written almost 12+ books and have hired many book writers, editors, and publishers, but never had experienced professionalism of this level. Everything about them was just on point. I am genuinely satisfied with this book writing agency in USA.</p>
                        </div>
                        <div class="cards-footer">
                            <div class="row g-0">
                                <div class="col-2">
                                    <img data-src="{{ asset('assets/frontend/images/icon/cade.webp') }}" class="lazyload img-fluid" alt="Cade" title="Cade" loading="lazy" width="49" height="47" />
                                </div>
                                <div class="col-10">
                                    <span class="h5">Cade</span>
                                    <span class="e-text">Book Writer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="review-box">
                        <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                        <div class="cards-body">
                            <p class="m-t-10">Thanks to your team from the bottom of my heart! I never knew that a journey from book writing to publishing would be so smooth. They literally took care of everything and charged peanuts! Highly recommended service for sure.</p>
                        </div>
                        <div class="cards-footer">
                            <div class="row g-0">
                                <div class="col-2">
                                    <img data-src="{{ asset('assets/frontend/images/icon/blake.webp') }}" class="lazyload img-fluid" alt="Blake" title="Blake" loading="lazy" width="49" height="47" />
                                </div>
                                <div class="col-10">
                                    <span class="h5">Blake</span>
                                    <span class="e-text">Book Writer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="review-box">
                        <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                        <div class="cards-body">
                            <p class="m-t-10">Hiring this book writing agency was an experience of a lifetime, for sure. They assisted me really nicely and helped me with the process. They kept sharing drafts with me, and I made the changes according to their feedback. True professionals.</p>
                        </div>
                        <div class="cards-footer">
                            <div class="row g-0">
                                <div class="col-2">
                                    <img data-src="{{ asset('assets/frontend/images/icon/sam.webp') }}" class="lazyload img-fluid" alt="Sam" title="Sam" loading="lazy" width="49" height="47" />
                                </div>
                                <div class="col-10">
                                    <span class="h5">Sam</span>
                                    <span class="e-text">Book Writer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="review-box">
                        <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                        <div class="cards-body">
                            <p class="m-t-10">The communication with this book writer service was very smooth. Initially, I had concerns, but later, they helped me understand the whole process and delivered a magical fiction story. The quality of their work was just top-notch. Best service, for sure.</p>
                        </div>
                        <div class="cards-footer">
                            <div class="row g-0">
                                <div class="col-2">
                                    <img data-src="{{ asset('assets/frontend/images/icon/harper.webp') }}" class="lazyload img-fluid" alt="Harper" title="Harper" loading="lazy" width="49" height="47" />
                                </div>
                                <div class="col-10">
                                    <span class="h5">Harper</span>
                                    <span class="e-text">Book Writer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="review-box">
                        <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                        <div class="cards-body">
                            <p class="m-t-10">I contacted them multiple times to clear my queries, and they were kind enough to help me with the process. This is surely a dream come true service that's affordable and ensures that everything is on point. A must-hire book writing service, for sure.</p>
                        </div>
                        <div class="cards-footer">
                            <div class="row g-0">
                                <div class="col-2">
                                    <img data-src="{{ asset('assets/frontend/images/icon/camila.webp') }}" class="lazyload img-fluid" alt="Camila" title="Camila" loading="lazy" width="49" height="47" />
                                </div>
                                <div class="col-10">
                                    <span class="h5">Camila</span>
                                    <span class="e-text">Book Writer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                    <div class="review-box">
                        <img data-src="{{ asset('assets/frontend/images/icon/star.webp') }}" class="lazyload img-fluid" alt="Satisfied Customer - Five Star Rating" title="Satisfied Customer - Five Star Rating" loading="lazy" width="91" height="15" />
                        <div class="cards-body">
                            <p class="m-t-10">Such an astonishing book editing service! Transformed my manuscript into a polished gem. Impeccable book editing service! The editor's insights were invaluable. I am overwhelmed with the perfectly edited results. A top-notch editing team in America.</p>
                        </div>
                        <div class="cards-footer">
                            <div class="row g-0">
                                <div class="col-2">
                                    <img data-src="{{ asset('assets/frontend/images/icon/matthew.webp') }}" class="lazyload img-fluid" alt="Matthew" title="Matthew" loading="lazy" width="49" height="47" />
                                </div>
                                <div class="col-10">
                                    <span class="h5">Matthew</span>
                                    <span class="e-text">Book Writer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-frontend.whats-app />

</x-app-layout>
