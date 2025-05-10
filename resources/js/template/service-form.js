import axios from 'axios';
import Swal from 'sweetalert2';
import React, { Component } from 'react';
import { createRoot } from 'react-dom/client';
import ReCAPTCHA from 'react-google-recaptcha';

window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

const recaptchaRef = React.createRef();

class Contact extends Component {
    constructor(props) {
        super(props);

        this.state = {
            name: '',
            email: '',
            phone_no: '',
            service: [],
            message: '',
            reCaptchaPublicKey: reCaptchaPublicKey,
            isSubmitting: false,
        };

        this.handleSubmit = this.handleSubmit.bind(this);
        this.onChangeHandler = this.onChangeHandler.bind(this);
    }

    onChangeHandler(e) {
        this.setState({
            [e.target.name]: e.target.value
        });
    };

    async handleSubmit(e) {
        var current = this;

        this.setState({
            isSubmitting: true
        });

        e.preventDefault();

        const recaptchaValue = await recaptchaRef.current.executeAsync();

        await axios.post('/quote', {
            name: this.state.name,
            email: this.state.email,
            phone_no: this.state.phone_no,
            service: [this.state.service],
            message: this.state.message,
            'g-recaptcha-response': recaptchaValue
        }).then(function (response) {

            recaptchaRef.current.reset();

            e.target.reset();

            current.setState({
                name: '',
                email: '',
                phone_no: '',
                service: '',
                message: '',
                isSubmitting: false,
            });

            Swal.fire('Success', response.data.message, 'success').then(() => {
                window.location.href = response.data.url
            });
        }).catch(function (error) {
            current.setState({
                isSubmitting: false,
            });

            if (error.response.data.errors['name']) {
                Swal.fire({
                    icon: 'error',
                    title: 'Validation Failed !',
                    text: error.response.data.errors['name'],
                });
            }

            if (error.response.data.errors['email']) {
                Swal.fire({
                    icon: 'error',
                    title: 'Validation Failed !',
                    text: error.response.data.errors['email'],
                });
            }

            if (error.response.data.errors['phone_no']) {
                Swal.fire({
                    icon: 'error',
                    title: 'Validation Failed !',
                    text: error.response.data.errors['phone_no'],
                });
            }

            if (error.response.data.errors['service']) {
                Swal.fire({
                    icon: 'error',
                    title: 'Validation Failed !',
                    text: error.response.data.errors['service'],
                });
            }

            if (error.response.data.re_captcha) {
                Swal.fire(
                    'Validation Failed !',
                    error.response.data.re_captcha,
                    'error'
                );
            }

            recaptchaRef.current.reset();
        });
    }

    render() {
        return (
            <form onSubmit={this.handleSubmit}>
                <div className="row">
                    <div className="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <input
                            type="text"
                            className="form-control"
                            aria-label="Name"
                            name="name"
                            placeholder="Name"
                            onChange={this.onChangeHandler}
                            required
                        />
                    </div>
                    <div className="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <input
                            type="email"
                            className="form-control"
                            aria-label="Email"
                            name="email"
                            placeholder="Email"
                            onChange={this.onChangeHandler}
                            required
                        />
                    </div>
                    <div className="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <input
                            type="number"
                            className="form-control"
                            aria-label="Phone (Contact Information)"
                            name="phone_no"
                            placeholder="Phone"
                            onChange={this.onChangeHandler}
                            required
                        />
                    </div>
                    <div className="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <select className="form-control form-select" name="service" aria-label="Select Service" onChange={this.onChangeHandler} value={this.state.service} required>
                            <option value="">Select Service</option>
                            <option value="Book/Ebook writing">Book/Ebook writing</option>
                            <option value="Ebook Publishing">Ebook Publishing</option>
                            <option value="Book/Ebook Marketing">Book/Ebook Marketing</option>
                            <option value="Book Printing">Book Printing</option>
                            <option value="Ghostwriting">Ghostwriting</option>
                            <option value="Manuscript Proofreading">Manuscript Proofreading</option>
                            <option value="Manuscript Editing">Manuscript Editing</option>
                            <option value="Book & Cover Design">Book & Cover Design</option>
                        </select>
                    </div>
                    <div className="col-12">
                        <textarea
                            className="form-control crt1"
                            aria-label="Your Message"
                            placeholder="Message"
                            name="message"
                            rows="5"
                            cols="50"
                            onChange={this.onChangeHandler}
                            required
                        ></textarea>
                    </div>

                    <ReCAPTCHA
                        ref={recaptchaRef}
                        sitekey={reCaptchaPublicKey}
                        size="invisible"
                        theme="dark"
                        onExpired={() => {
                            recaptchaRef.current.reset();
                        }}
                    />

                    <div>
                        <button type="submit" className="btn-order d-block" disabled={this.isSubmitting && true}>
                            {
                                this.state.isSubmitting ?
                                    <div className="spinner-border" role="status">
                                        <i className="fa-solid fa-spinner fa-pulse"></i>
                                    </div>
                                    :
                                    'Submit'
                            }
                        </button>
                    </div>
                </div>
            </form>
        )
    }
}

export default Contact;

if (document.getElementById('service_form')) {
    createRoot(
        document.getElementById('service_form')
    ).render(
        <Contact />
    );
}

if (document.getElementById('query_form')) {
    createRoot(
        document.getElementById('query_form')
    ).render(
        <Contact />
    );
}
