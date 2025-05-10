<x-app-layout>

    <x-slot name="metadata">

        <x-frontend.seo-metadata
            title="USA Book Consultants: Get Your Book Deal Now"
            description="American book consultants can help publish your book online. Get expert guidance on writing, editing, self-publishing, & marketing your book for success."
            robots="true"
        />

        <link rel="stylesheet" href="{{ mix('assets/frontend/css/book-consultant.css') }}" />

    </x-slot>

    <section class="booking-form" id="book-consultation">
        <div class="container">
            <div class="form-box">
                <div class="row gx-0 gy-4">
                    <div class="col-lg-4">
                        <div class="box-image">
                            <img data-src="{{ asset('assets/frontend/images/logo/american-book-writer.svg') }}" class="img-fluid lazyload" alt="American Book Writer" title="American Book Writer" loading="eager" width="204" height="57" />
                        </div>
                        <h1 class="h5">Free Consultation</h1>
                        <span class="time">30 Min</span>
                        <p>Thank you for booking time for our free initial consultation meeting.</p>
                        <div class="schedules">
                            <span>
                                <i class="fa-regular fa-clock"></i>
                                Standard Time
                            </span>
                            <span v-show="step === 2">
                                <i class="fa-solid fa-calendar-days"></i>
                                @{{ formattedTime }}, @{{ formattedDate }}
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="detail-box">
                            <form @submit.prevent="submit();" ref="form_data">
                                <span class="h3" v-show="step === 1">Select a Date & Time</span>
                                <transition name="slide-fade">
                                    <div class="calender-area" v-show="step === 1">
                                        <datepicker class="date-picker" v-model="selectedDate" :value="defaultDate" :inline="true" :disabled-dates="disabledDates" :minimum-view="'day'" :maximum-view="'day'"></datepicker>
                                        <div class="select-date" v-if="selectedDate">
                                            <span class="h3">@{{ formattedDate }}</span>
                                            <div class="confirm-date" v-for="slot in timeSlots" :key="slot">
                                                <button role="button" type="button" class="btn-order btn-md" @click.prevent="selectTime(slot)" :class="{ 'selected': selectedTime === slot, 'disabled': isPastTime(slot) }" :disabled="isPastTime(slot)">
                                                    @{{ slot }}
                                                </button>
                                                <button role="button" type="button" class="btn-order btn-md send confirm" v-if="selectedTime === slot && !isPastTime(slot)" @click.prevent="next()">Confirm</button>
                                            </div>
                                        </div>
                                    </div>
                                </transition>
                                <transition name="slide-fade">
                                    <div v-show="step === 2">
                                        <button role="button" type="button" class="back border-0 bg-transparent" @click.prevent="prev()">
                                            <i class="fa-solid fa-arrow-left"></i>
                                        </button>
                                        <span class="heading">Enter Details</span>
                                        <div class="row">
                                            <div class="mb-2 col-sm-6">
                                                <label for="name" class="form-label">Name:</label>
                                                <input type="text" id="name" class="form-control" v-model.string="name" :class="{ 'is-invalid': errors.name }" aria-label="Full Name" placeholder="Enter your full name" />
                                            </div>
                                            <div class="mb-2 col-sm-6">
                                                <label for="email" class="form-label">Email Address:</label>
                                                <input type="email" id="email" class="form-control" v-model.string="email" :class="{ 'is-invalid': errors.email }" aria-label="Email" placeholder="Enter Email Address" />
                                            </div>
                                            <div class="mb-2 col-sm-6">
                                                <label for="phone_no" class="form-label">Phone #: </label>
                                                <input type="number" id="phone_no" class="form-control" v-model.string="phone_no" :class="{ 'is-invalid': errors.phone_no }" aria-label="Phone No." placeholder="Enter Phone Number" />
                                            </div>
                                            <div class="col-sm-6 mb-2">
                                                <label for="country" class="form-label">Select Country:</label>
                                                <select class="form-control form-select" id="country" v-model.string="country" aria-label="Select Country" required>
                                                    <option v-for="(country, value, index) in countries" :value="value" :key="index">

                                                        @{{ country }}

                                                    </option>
                                                </select>
                                            </div>
                                            <div class="mb-2 col-12">
                                                <label for="details" class="form-label">Please describe the business challenge you would like to discuss*</label>
                                                <textarea class="form-control" id="details" aria-label="Your Message" rows="4" cols="50" maxlength="1500" placeholder="Enter Your Details" v-model.string="details" ></textarea>
                                            </div>
                                            <div class="mb-2 col-12">
                                                <label class="form-label" aria-labelledby="Your preffered mode of meeting*">Your preffered mode of meeting*</label>
                                            </div>
                                            <div class="form-check col-12">
                                                <input class="form-check-input" type="radio" id="zoom" aria-label="Select Meeting Mode" v-model.string="mode_of_meeting" value="Zoom" />
                                                <label class="form-check-label" for="zoom">
                                                    <i class="fa-solid fa-video"></i>
                                                    Zoom
                                                </label>
                                            </div>
                                            <div class="form-check col-12">
                                                <input class="form-check-input" type="radio" id="phone_call" aria-label="Select Meeting Mode" v-model.string="mode_of_meeting" value="Phone Call" />
                                                <label class="form-check-label" for="phone_call">
                                                    <i class="fa-solid fa-phone"></i>
                                                    Phone call
                                                </label>
                                            </div>
                                            <div class="col-12">

                                                <vue-re-captcha
                                                    ref="recaptcha"
                                                    @verify="onCaptchaVerified"
                                                    @expired="onCaptchaExpired"
                                                    size="invisible"
                                                    sitekey="{{ config('services.google-re-captcha.public') }}"
                                                    theme="dark"
                                                ></vue-re-captcha>

                                                <button type="submit" :disabled="isSubmitting" class="btn-live">
                                                    <div class="spinner-border text-danger" role="status" v-if="isSubmitting">
                                                        <span class="visually-hidden">Loading...</span>
                                                    </div>

                                                    @{{ text }}

                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </transition>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-slot name="script">

        <script>
            let countries = @json(get_country_list());
        </script>

        <script defer src="{{ mix('assets/frontend/js/book-consultation.js') }}"></script>

    </x-slot>

</x-app-layout>
