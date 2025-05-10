<x-app-layout>

    <x-slot name="metadata">

        <x-frontend.seo-metadata
            title="Get a Free Guide | Be The Best-Seller"
            description="Working with us is simple! Place your order in 3 easy and simple steps. Don't like filling up forms? Reach out our customer service & we'll place your order."
            robots="true"
        />

        <link rel="stylesheet" href="{{ mix('assets/frontend/css/free-quote.css') }}" />
        <link rel="preload" as="image" href="{{ asset('assets/frontend/images/bg/order-bg.webp') }}" />

    </x-slot>

    <section class="order-form" id="app">
        <div class="container">
            <form @submit.prevent="submit();" ref="form_data">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="bg-white">
                            <h1 class="h1">Expert American Book Writer Awaits Your Call</h1>
                            <hr />
                            <div class="row">
                                <div class="col-12">
                                    <div class="row gy-1">
                                        <div class="col-12">
                                            <span class="h6">Select Services* :</span>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="form-check">
                                                <input type="checkbox" autocomplete="off" class="form-check-input" id="book-printing" aria-label="Book Printing" v-model="service" value="Book Printing" />
                                                <label class="form-check-label" for="book-printing">Book Printing</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="form-check">
                                                <input type="checkbox" autocomplete="off" class="form-check-input" id="book-marketing" aria-label="Book Marketing" v-model="service" value="Book Marketing" />
                                                <label class="form-check-label" for="book-marketing">Book Marketing</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="form-check">
                                                <input type="checkbox" autocomplete="off" class="form-check-input" id="book-publishing" aria-label="Book Publishing" v-model="service" value="Book Publishing" />
                                                <label class="form-check-label" for="book-publishing">Book Publishing</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="form-check">
                                                <input type="checkbox" autocomplete="off" class="form-check-input" id="book-editing" aria-label="Book Editing" v-model="service" value="Book Editing" />
                                                <label class="form-check-label" for="book-editing">Book Editing</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="form-check">
                                                <input type="checkbox" autocomplete="off" class="form-check-input" id="novel-writing" aria-label="Novel Writing" v-model="service" value="Novel Writing" />
                                                <label class="form-check-label" for="novel-writing">Novel Writing</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="form-check">
                                                <input type="checkbox" autocomplete="off" class="form-check-input" id="ebook-writing" aria-label="Ebook Writing" v-model="service" value="Ebook Writing" />
                                                <label class="form-check-label" for="ebook-writing">Ebook Writing</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="form-check">
                                                <input type="checkbox" autocomplete="off" class="form-check-input" id="memoir-writing" aria-label="Memoir Writing" v-model="service" value="Memoir Writing" />
                                                <label class="form-check-label" for="memoir-writing">Memoir Writing</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="form-check">
                                                <input type="checkbox" autocomplete="off" class="form-check-input" id="narrative-writing" aria-label="Narrative Writing" v-model="service" value="Narrative Writing" />
                                                <label class="form-check-label" for="narrative-writing">Narrative Writing</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="form-check">
                                                <input type="checkbox" autocomplete="off" class="form-check-input" id="biography-writing" aria-label="Biography Writing" v-model="service" value="Biography Writing" />
                                                <label class="form-check-label" for="biography-writing">Biography Writing</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="form-check">
                                                <input type="checkbox" autocomplete="off" class="form-check-input" id="fiction-book" aria-label="Fiction Book" v-model="service" value="Fiction Book" />
                                                <label class="form-check-label" for="fiction-book">Fiction Book</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="form-check">
                                                <input type="checkbox" autocomplete="off" class="form-check-input" id="children-book" aria-label="Children Book" v-model="service" value="Children Book" />
                                                <label class="form-check-label" for="children-book">Children Book</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="form-check">
                                                <input type="checkbox" autocomplete="off" class="form-check-input" id="book-cover-design" aria-label="Book Cover Design" v-model="service" value="Book Cover Design" />
                                                <label class="form-check-label" for="book-cover-design">Book Cover Design</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="form-check">
                                                <input type="checkbox" autocomplete="off" class="form-check-input" id="book-design-and-illustration" aria-label="Book Design and Illustration" v-model="service" value="Book Design and Illustration" />
                                                <label class="form-check-label" for="book-design-and-illustration">Book Design and Illustration</label>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <span class="h6">Please Attach Relevant Details & Files:</span>
                                        </div>
                                        <div class="col-md-12 type">
                                            <label for="filesToUpload" class="label-file">
                                                <span class="file-text">
                                                    <i class="fas fa-cloud-upload-alt"></i>
                                                    Drop Your Files or Click To Upload
                                                </span>
                                                <input type="file" class="form-control d-none" ref="files" id="filesToUpload" aria-label="Select File" @change="handleFileUpload();"  multiple />
                                            </label>
                                            <p>You can use ctrl (key) to select multiple files</p>
                                            <ul class="list-unstyled mb-0 mt-1" v-if="files.length > 0">
                                                <li v-for="(file, index) in files" class="text-light" :key="index">
                                                    <i class="fas fa-check text-success"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea class="form-control" placeholder="Write Your Project Details" v-model.string="message" rows="5" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <span class="h6">Personal Details* :</span>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" v-model.string="name" :class="{ 'is-invalid': errors.name }" aria-label="Full Name" placeholder="Enter Your Full Name" required />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" v-model.string="email" :class="{ 'is-invalid': errors.email }" aria-label="Email" placeholder="Enter Your Email" required />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <input type="number" class="form-control" v-model.string="phone_no" :class="{ 'is-invalid': errors.phone_no }" aria-label="Phone No." placeholder="Enter Your Phone No." required />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <select class="form-control" id="country" v-model.string="country" aria-label="Select Country" required>
                                                    <option v-for="(country, value, index) in countries" :value="value" :key="index">

                                                        @{{ country }}

                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-md-end text-center">
                                            <button type="submit" :disabled="isSubmitting" class="btn-order">
                                                <div class="spinner-border text-danger" role="status" v-if="isSubmitting">
                                                    <span class="visually-hidden">Loading...</span>
                                                </div>

                                                @{{ text }}

                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <vue-re-captcha
                    ref="recaptcha"
                    @verify="onCaptchaVerified"
                    @expired="onCaptchaExpired"
                    size="invisible"
                    sitekey="{{ config('services.google-re-captcha.public') }}"
                    theme="dark"
                ></vue-re-captcha>

            </form>
        </div>
    </section>

    <x-slot name="script">

        <script>
            let countries = @json(get_country_list());
        </script>

        <script defer src="{{ mix('assets/frontend/js/get-quote.js') }}"></script>

    </x-slot>

</x-app-layout>
