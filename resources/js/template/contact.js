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

        await axios.post('/contact', {
            name: this.state.name,
            email: this.state.email,
            phone_no: this.state.phone_no,
            message: this.state.message,
            'g-recaptcha-response': recaptchaValue
        }).then(function (response) {

            recaptchaRef.current.reset();

            e.target.reset();

            current.setState({
                name: '',
                email: '',
                phone_no: '',
                message: '',
                isSubmitting: false,
            });

            setTimeout(function () {
                window.location.href = response.data.url;
            }, 100);
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

            if (error.response.data.errors['message']) {
                Swal.fire({
                    icon: 'error',
                    title: 'Validation Failed !',
                    text: error.response.data.errors['message'],
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
                <div className="col-12 col-lg-10 col-md-12 col-sm-12 offset-lg-1">
                    <div className="row">
                        <div className="col-12 col-lg-6 col-md-6 col-sm-12">
                            <input
                                type="text"
                                className="input-field form-control"
                                aria-label="Name"
                                name="name"
                                placeholder="Full Name"
                                onChange={this.onChangeHandler}
                                required
                            />
                            <input
                                type="email"
                                className="input-field form-control"
                                aria-label="Email"
                                name="email"
                                placeholder="Email"
                                onChange={this.onChangeHandler}
                                required
                            />
                            <input
                                type="number"
                                className="input-field form-control"
                                aria-label="Phone (Contact Information)"
                                name="phone_no"
                                placeholder="Phone"
                                onChange={this.onChangeHandler}
                                required
                            />
                        </div>
                        <div className="col-12 col-lg-6 col-md-6 col-sm-12">
                            <textarea
                                className="input-message form-control"
                                aria-label="Your Message"
                                placeholder="Project Description"
                                name="message"
                                rows="5"
                                cols="50"
                                maxLength="1500"
                                onChange={this.onChangeHandler}
                                required
                            ></textarea>
                        </div>
                        <div className="col-12 col-lg-12 col-md-12 col-sm-12 text-end">
                            <button type="submit" className="btn-live bg-blue" disabled={this.isSubmitting && true}>
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

            </form>
        )
    }
}

export default Contact;

if (document.getElementById('contact_form')) {
    createRoot(
        document.getElementById('contact_form')
    ).render(
        <Contact />
    );
}
