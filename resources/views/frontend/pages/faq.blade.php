<x-app-layout>

    <x-slot name="metadata">

        <x-frontend.seo-metadata
            title="Time To Clear Doubts | American Book Writer - FAQs"
            description="Having queries is justified! Skim through the FAQs that round up everything you need to know about us. But if there's still a doubt, we're a click away."
            robots="true"
        />

        <link rel="stylesheet" href="{{ mix('assets/frontend/css/faq.css') }}" />
        <link rel="preload" as="image" href="{{ asset('assets/frontend/images/sample/path.webp') }}" />

    </x-slot>

    <section class="main-banner">
        <div class="container">
            <div class="row m-t-20">
                <div class="col-12 col-lg-12 text-center">
                    <h1>
                        <span class="h1">
                            Frequently Ask
                            <span class="font-red">
                                Questions
                            </span>
                        </span>
                    </h1>
                    <h2 class="h5">Disapprove Wrong Assumptions Racing In Your Mind.</h2>
                    <p class="m-t-30">Give a rest to your racing thoughts and skim through the queries to know the right answers to your doubts. If your queries remain unresolved, consider us a click away and we'll help you.</p>
                    <div class="m-t-40 mb-5">
                        <a href="{{ route('pages', 'get-free-quote') }}">
                            <button type="button" class="btn-order">Request a Quote</button>
                        </a>
                        <span class="or">OR</span>
                        <button role="button" type="button" onclick="openLiveChat();" class="btn-live">Chat With Us</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="hr-line" />

    <x-frontend.brand />

    <hr class="hr-line" />
    <section class="faqs">
        <div class="container">
            <div class="row g-0">
                <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="accordion" id="faqs">
                        <div class="accordion-item">
                            <span class="accordion-header h3" id="heading-1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">
                                    What makes your book writing company the best in USA?
                                </button>
                            </span>
                            <div id="collapse-1" class="accordion-collapse collapse" aria-labelledby="heading-1" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Firstly, we know this field by rote as we have contributed to this market for a good ten years. Secondly, no matter what your requirements are, we'll deal with them. Thirdly, we offer top-tier and fastest customer service, making us the best option in the USA.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <span class="accordion-header h3" id="heading-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                    Do you offer any guarantee on your book writing service?
                                </button>
                            </span>
                            <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Yes, we offer 100% customer satisfaction guarantee for our clients. If you are unhappy with the service or the book content delivered to you, we will make the necessary changes absolutely free of cost. The revision can be availed unlimited times.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <span class="accordion-header h3" id="heading-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                    Can I get my money back if I am not happy with your services?
                                </button>
                            </span>
                            <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>As USA's leading book writing company, our ultimate focus always revolves around satisfying customers through our services. If there's anything that needs to be fixed, we will offer free revisions until the customer is fully happy and satisfied.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <span class="accordion-header h3" id="heading-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                    Will I have to owe you some royalties if you write or publish my book?
                                </button>
                            </span>
                            <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Never! We only charge for our services, be it writing, editing, designing, printing, or publishing. There are no hidden charges, nor do we claim any royalties later on, no matter how many copies you might have sold.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <span class="accordion-header h3" id="heading-5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                                    How can I be sure that you will not steal my book's concept?
                                </button>
                            </span>
                            <div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>We have been working in this market for over a decade and are among the USA's top most trusted book writers. We have strong policies that protect the rights of the customers. Hence, you can feel safe and secure while working with us.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <span class="accordion-header h3" id="heading-6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="true" aria-controls="collapse-6">
                                    How much does it cost to hire a book ghostwriter in America?
                                </button>
                            </span>
                            <div id="collapse-6" class="accordion-collapse collapse" aria-labelledby="heading-6" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>The prices depend upon several factors. Although our prices start from $ XXX, but this can vary depending upon the client's requirements. The requirements can include factors like the number of pages, concept, complexity of the idea, delivery date, and more.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <span class="accordion-header h3" id="heading-7">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7" aria-expanded="true" aria-controls="collapse-7">
                                    How long does it take to write a book?
                                </button>
                            </span>
                            <div id="collapse-7" class="accordion-collapse collapse" aria-labelledby="heading-7" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>After the outline approval, it can take approximately 2 to 3 weeks to complete a book. However, the mentioned time may vary depending upon other factors like the number of pages, research required, genre, client's deadline requirements, and more.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <span class="accordion-header h3" id="heading-8">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-8" aria-expanded="true" aria-controls="collapse-8">
                                    Can you publish my book if I want you to do so?
                                </button>
                            </span>
                            <div id="collapse-8" class="accordion-collapse collapse" aria-labelledby="heading-8" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Of course, we offer end-to-end book writing and publishing solutions, and we highly recommend clients opt for complete service that includes book writing, editing, formatting, publishing, and printing, too! We can do everything that's related to book writing.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <span class="accordion-header h3" id="heading-9">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-9" aria-expanded="true" aria-controls="collapse-9">
                                    Are your book writers experienced and Native Americans?
                                </button>
                            </span>
                            <div id="collapse-9" class="accordion-collapse collapse" aria-labelledby="heading-9" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>Yes. We have roped in experienced and creative bookwriters who understand this field by rote. Their vocabulary, field knowledge, writing expertise, and everything else are just unmatchable. You can confidently rely on our professional book writers.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <span class="accordion-header h3" id="heading-10">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-10" aria-expanded="true" aria-controls="collapse-10">
                                    What other services do you offer, along with book writing?
                                </button>
                            </span>
                            <div id="collapse-10" class="accordion-collapse collapse" aria-labelledby="heading-10" data-bs-parent="#faqs">
                                <div class="accordion-body">
                                    <p>We cover everything that's related to the book. You can expect everything from us, including book writing, editing, layout formatting, cover designing, publishing, and printing. Let us know what you are looking for, and we will make it possible for you.</p>
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
