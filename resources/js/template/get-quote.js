import axios from 'axios';
import Swal from 'sweetalert2';
import { createApp } from 'vue';
import { VueRecaptcha } from 'vue-recaptcha';

window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

createApp({

    components: {
        'vue-re-captcha': VueRecaptcha
    },

    data() {
        return {
            name            : '',
            email           : '',
            phone_no        : '',
            service         : [],
            message         : '',
            countries       : countries,
            country         : 'US',
            files           : '',
            isSubmitting    : false,
            text            : 'Submit',
            errors          : [],
        }
    },

    methods: {
        submit() {
            this.text = '';
            this.isSubmitting = true;
            this.$refs.recaptcha.execute();
        },

        async onCaptchaVerified(reCaptchaToken) {
            this.text = '';
            this.isSubmitting = true;

            const self = this;
                self.$refs.recaptcha.reset();

            let form = document.querySelector('form');

            let formData = new FormData(form);

            for (var i = 0; i < this.service.length; i++) {
                let service = this.service[i];
                formData.append('service[]', service);
            }

            for (var j = 0; j < this.files.length; j++) {
                let file = this.files[j];
                formData.append('files[]', file);
            }

            formData.append('name', this.name);
            formData.append('email', this.email);
            formData.append('phone_no', this.phone_no);
            formData.append('country', this.country);
            formData.append('message', this.message);
            formData.append('g-recaptcha-response', reCaptchaToken);

            await axios.post('/quote', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data',
                    'Accept': 'application/json'
                }
            }).then(response => {

                this.name = '';
                this.email = '';
                this.phone_no = '';
                this.country = '';
                this.service = '';
                this.message = '';
                this.files = '';

                this.text = "Submit";
                this.isSubmitting = false;
                this.errors = [];

                Swal.fire('Success', response.data.message, 'success').then(() => {
                    window.location.href = response.data.url
                });
            }).catch(error => {
                this.errors = [];

                if (error.response.data.errors) {
                    this.errors = error.response.data.errors;
                }

                if (this.errors['name']) {
                    Swal.fire(
                        'Validation Failed !',
                        this.errors['name'][0],
                        'error'
                    );

                    this.errors = [];
                } else if (this.errors['email']) {
                    Swal.fire(
                        'Validation Failed !',
                        this.errors['email'][0],
                        'error'
                    );

                    this.errors = [];
                } else if (this.errors['phone_no']) {
                    Swal.fire(
                        'Validation Failed !',
                        this.errors['phone_no'][0],
                        'error'
                    );

                    this.errors = [];
                } else if (this.errors['country']) {
                    Swal.fire(
                        'Validation Failed !',
                        this.errors['country'][0],
                        'error'
                    );

                    this.errors = [];
                } else if (this.errors['service']) {
                    Swal.fire(
                        'Validation Failed !',
                        this.errors['service'][0],
                        'error'
                    );

                    this.errors = [];
                } else if (this.errors['message']) {
                    Swal.fire(
                        'Validation Failed !',
                        this.errors['message'][0],
                        'error'
                    );

                    this.errors = [];
                } else if (this.errors['files.0']) {
                    Swal.fire(
                        'Validation Failed !',
                        this.errors['files.0'][0],
                        'error'
                    );

                    this.errors = [];
                } else if (error.response.data.re_captcha) {
                    Swal.fire(
                        'Validation Failed !',
                        error.response.data.re_captcha,
                        'error'
                    );

                    this.errors = [];
                }
            });

            this.text = "Submit";
            this.isSubmitting = false;
        },

        handleFileUpload() {
            this.files = this.$refs.files.files;
        },

        onCaptchaExpired() {
            this.$refs.recaptcha.reset();
        }
    }
}).mount('#app');
