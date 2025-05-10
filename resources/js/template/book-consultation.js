import axios from 'axios';
import Swal from 'sweetalert2';
import { createApp } from 'vue';
import { format } from 'date-fns';
import Datepicker from 'vuejs3-datepicker';
import { VueRecaptcha } from 'vue-recaptcha';

window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

createApp({

    components: {
        'vue-re-captcha': VueRecaptcha,
        'datepicker': Datepicker
    },

    data() {
        return {
            step            : 1,
            name            : '',
            email           : '',
            phone_no        : '',
            countries       : countries,
            country         : 'US',
            details         : '',
            selectedDate    : null,
            selectedTime    : null,
            defaultDate     : new Date(Date.now()),
            timeSlots       : ['10:00 AM', '11:00 AM', '12:00 PM', '1:00 PM', '2:00 PM', '3:00 PM', '4:00 PM', '5:00 PM', '6:00 PM', '7:00 PM', '8:00 PM'],
            mode_of_meeting : 'Zoom',
            disabledDates   : {to: new Date(Date.now() - 8640000)},
            isSubmitting    : false,
            text            : 'Book An Appointment',
            errors          : [],
        }
    },

    methods: {
        submit() {
            this.text = '';
            this.isSubmitting = true;
            this.$refs.recaptcha.execute();
        },

        selectTime(time) {
            this.selectedTime = time;
        },

        prev() {
            this.step--;
        },

        next() {
            this.step++;
        },

        async onCaptchaVerified(reCaptchaToken) {
            this.text = '';
            this.isSubmitting = true;

            const self = this;
            self.$refs.recaptcha.reset();

            let form = document.querySelector('form');

            let formData = new FormData(form);

            if (this.selectedDate) {
                const formattedDate = format(new Date(this.selectedDate), 'dd-MM-yy');
                formData.append('date', formattedDate);
            }

            formData.append('name', this.name);
            formData.append('email', this.email);
            formData.append('phone_no', this.phone_no);
            formData.append('country', this.country);
            formData.append('details', this.details);
            formData.append('mode_of_meeting', this.mode_of_meeting);
            formData.append('slot', this.selectedTime);
            formData.append('g-recaptcha-response', reCaptchaToken);

            await axios.post('/consultation', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data',
                    'Accept': 'application/json'
                }
            }).then(response => {
                this.name = '';
                this.email = '';
                this.phone_no = '';
                this.details = '';
                this.selectedDate = null;
                this.selectedTime = null;
                this.defaultDate = new Date(Date.now());

                this.text = "Book An Appointment";
                this.isSubmitting = false;
                this.errors = [];

                Swal.fire('Success', response.data.message, 'success').then(() => {
                    this.prev();
                });
            }).catch(error => {

                this.errors = [];

                if (error.response.data.errors) {
                    this.errors = error.response.data.errors;
                }

                if (this.errors['name']) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Validation Failed !',
                        text: error.response.data.errors['name'],
                    });
                } else if (this.errors['email']) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Validation Failed !',
                        text: error.response.data.errors['email'],
                    });
                } else if (this.errors['phone_no']) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Validation Failed !',
                        text: error.response.data.errors['phone_no'],
                    });
                } else if (this.errors['country']) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Validation Failed !',
                        text: error.response.data.errors['country'],
                    });
                } else if (this.errors['details']) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Validation Failed !',
                        text: error.response.data.errors['details'],
                    });
                } else if (this.errors['mode_of_meeting']) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Validation Failed !',
                        text: error.response.data.errors['mode_of_meeting'],
                    });
                }

                if (error.response.data.re_captcha) {
                    Swal.fire(
                        'Validation Failed !',
                        error.response.data.re_captcha,
                        'error'
                    );

                    this.errors = [];
                }
            });

            this.text = "Book An Appointment";
            this.isSubmitting = false;
        },

        onCaptchaExpired() {
            this.$refs.recaptcha.reset();
        },

        isPastTime(slot) {
            const [slotTime, slotPeriod] = slot.split(' ');
            const [slotHour, slotMinute] = slotTime.split(':').map(part => parseInt(part));

            const currentTime = new Date();
            const selected_date = this.selectedDate;
            const currentHour = currentTime.getHours();
            const currentMinute = currentTime.getMinutes();

            let slotHour24 = slotHour;

            if (slotPeriod === 'PM' && slotHour !== 12) {
                slotHour24 += 12;
            }

            if (selected_date <= currentTime) {
                if (currentHour > slotHour24 || (currentHour === slotHour24 && currentMinute >= slotMinute)) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }
    },

    computed: {
        formattedDate() {
            return this.selectedDate ? new Date(this.selectedDate).toLocaleDateString('en-US', {
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            }).replace(',', '') : '';
        },

        formattedTime() {
            if (!this.selectedTime) return '';

            const [hour, minute, period] = this.selectedTime.match(/(\d+):(\d+) (\w+)/).slice(1);
            const startHour = (parseInt(hour) + (period.toUpperCase() === 'PM' && hour !== '12' ? 12 : 0)) % 24;
            const endHour = (startHour + Math.floor((parseInt(minute) + 45) / 60)) % 24;
            const endMinute = (parseInt(minute) + 30) % 60;

            return `${startHour.toString().padStart(2, '0')}:${minute.padStart(2, '0')} - ${endHour.toString().padStart(2, '0')}:${endMinute.toString().padStart(2, '0')}`;
        }
    }
}).mount('#book-consultation');
