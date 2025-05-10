<x-app-layout>

    <x-slot name="metadata">

        <x-frontend.seo-metadata
            title="Sitemap | American Book Writer"
            description="Navigate american book writer page where you will find the best services of your need."
            robots="true"
        />

        <link rel="stylesheet" href="{{ mix('assets/frontend/css/sitemap.css') }}" />
        <link rel="preload" as="image" href="{{ asset('assets/frontend/images/logo/american-book-writer.svg') }}" />

    </x-slot>

    <section class="sitemap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="h1 p-b-30">SITEMAP</h1>
                    <span class="h2">OUR COMPANY</span>
                </div>
                <div class="col-12">
                    <ul>
                        <li>
                            <a href="{{ route('home') }}">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('pages', 'about-us') }}">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('pages', 'review') }}">
                                Review's
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('pages', 'contact-us') }}">
                                Contact Us
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('pages', 'faq') }}">
                                Faq's
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('pages', 'sitemap') }}">
                                Sitemap
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('pages', 'get-free-quote') }}">
                                Get Free Quote
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('pages', 'wikipedia-page-creation') }}">
                                Wikipedia Page Creation
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 mt-4">
                    <span class="h2">OUR SERVICES</span>
                </div>
                <div class="col-12">
                    <ul>
                        <li>
                            <a href="{{ route('pages', 'book-printing') }}">
                                Book Printing
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('pages', 'book-marketing') }}">
                                Book Marketing
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('pages', 'book-publishing') }}">
                                Book Publishing
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('pages', 'book-editing') }}">
                                Book Editing
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('pages', 'novel-writing') }}">
                                Novel Writing
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('pages', 'ebook-writing') }}">
                                Ebook Writing
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('pages', 'memoir-writing') }}">
                                Memoir Writing
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('pages', 'narrative-writing') }}">
                                Narrative Writing
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('pages', 'biography-writing') }}">
                                Biography Writing
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('pages', 'fiction-book') }}">
                                Fiction Book
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('pages', 'children-book') }}">
                                Children's Book
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('pages', 'book-cover-design') }}">
                                Book Cover Design
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('pages', 'book-design-and-illustration') }}">
                                Book Design and Illustration
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>
