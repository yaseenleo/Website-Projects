const mix = require('laravel-mix');
const purgecss = require('@fullhuman/postcss-purgecss');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/modal.js', 'public/assets/frontend/js/')
    .js('resources/js/bootstrap.js', 'public/assets/frontend/js/')
    .js('resources/js/template/tab.js', 'public/assets/frontend/js/')
    .js('resources/js/template/modal.js', 'public/assets/frontend/js/')
    .js('resources/js/template/type-effect.js', 'public/assets/frontend/js/')
    .js('resources/js/template/review-slider.js', 'public/assets/frontend/js/')
    .js('resources/js/template/contact.js', 'public/assets/frontend/js/').react()
    .js('resources/js/template/get-quote.js', 'public/assets/frontend/js/').vue()
    .js('resources/js/template/popup-query.js', 'public/assets/frontend/js/').react()
    .js('resources/js/template/service-form.js', 'public/assets/frontend/js/').react()
    .js('resources/js/template/wikipedia-form.js', 'public/assets/frontend/js/').react()
    .js('resources/js/template/book-consultation.js', 'public/assets/frontend/js/').vue();

mix.sass('resources/sass/frontend/home.scss', 'public/assets/frontend/css/', {}, [
    purgecss({
        fontFace: true,
        keyframes: true,
        variables: true,
        content: [
            './resources/js/template/popup-query.js',
            './resources/views/frontend/pages/home.blade.php',
            './resources/views/frontend/layouts/app.blade.php',
            './resources/views/components/frontend/brand.blade.php',
            './resources/views/components/frontend/modal.blade.php',
            './resources/views/components/frontend/whats-app.blade.php'
        ],
        safelist: [
            'p',
            'h1',
            'h2',
            'h6',
            'h3',
            'ul',
            'li',
            'img',
            'faqs',
            'form',
            'show',
            'fade',
            'typed',
            'modal',
            'circle',
            'swiper',
            'reviews',
            'fa-phone',
            'fa-solid',
            'fa-brands',
            'fixed-top',
            'criclerow',
            'BookTitle',
            'modal-body',
            'why-choose',
            'form-select',
            'fa-instagram',
            'modal-dialog',
            'active-popup',
            'onload-popup',
            'swiper-slide',
            'form-control',
            'fa-facebook-f',
            'modal-content',
            'review-slider',
            'modal-backdrop',
            'spinner-border',
            'content-section',
            'swiper-navigation',
            'swiper-pagination',
            'typed-cursor--blink',
            'swiper-slide-active',
            'swiper-pagination-bullet',
            'swiper-pagination-bullets,',
            'swiper-pagination-clickable,',
            'swiper-pagination-horizontal',
            'swiper-pagination-bullet-active'
        ]
    })
]);

mix.sass('resources/sass/frontend/about-us.scss', 'public/assets/frontend/css/', {}, [
    purgecss({
        fontFace: true,
        keyframes: true,
        variables: true,
        content: [
            './resources/views/frontend/layouts/app.blade.php',
            './resources/views/frontend/pages/about-us.blade.php',
            './resources/views/components/frontend/brand.blade.php',
            './resources/views/components/frontend/whats-app.blade.php'
        ],
        safelist: [
            'p',
            'h1',
            'h2',
            'h6',
            'h3',
            'ul',
            'li',
            'img',
            'mb-5',
            'faqs',
            'form',
            'show',
            'fade',
            'typed',
            'modal',
            'circle',
            'swiper',
            'reviews',
            'fa-phone',
            'fa-solid',
            'fa-brands',
            'fixed-top',
            'fa-circle',
            'criclerow',
            'BookTitle',
            'modal-body',
            'why-choose',
            'form-select',
            'fa-instagram',
            'modal-dialog',
            'active-popup',
            'onload-popup',
            'swiper-slide',
            'form-control',
            'fa-facebook-f',
            'modal-content',
            'review-slider',
            'modal-backdrop',
            'spinner-border',
            'content-section',
            'swiper-navigation',
            'swiper-pagination',
            'typed-cursor--blink',
            'swiper-slide-active',
            'swiper-pagination-bullet',
            'swiper-pagination-bullets,',
            'swiper-pagination-clickable,',
            'swiper-pagination-horizontal',
            'swiper-pagination-bullet-active'
        ]
    })
]);

mix.sass('resources/sass/frontend/pricing.scss', 'public/assets/frontend/css/', {}, [
    purgecss({
        fontFace: true,
        keyframes: true,
        variables: true,
        content: [
            './resources/views/frontend/layouts/app.blade.php',
            './resources/views/frontend/pages/pricing.blade.php',
            './resources/views/components/frontend/brand.blade.php',
            './resources/views/components/frontend/whats-app.blade.php'
        ],
        safelist: [
            'p',
            'h1',
            'h2',
            'h6',
            'h3',
            'ul',
            'li',
            'img',
            'mb-5',
            'fixed-top',
            'criclerow',
            'BookTitle',
            'modal-body',
            'why-choose',
            'form-select',
            'modal-dialog',
            'active-popup',
            'onload-popup',
            'swiper-slide',
            'form-control',
            'modal-content',
            'review-slider',
            'modal-backdrop',
            'spinner-border',
            'content-section',
            'swiper-navigation',
            'swiper-pagination',
            'typed-cursor--blink',
            'swiper-slide-active',
            'swiper-pagination-bullet',
            'swiper-pagination-bullets,',
            'swiper-pagination-clickable,',
            'swiper-pagination-horizontal',
            'swiper-pagination-bullet-active'
        ]
    })
]);

mix.sass('resources/sass/frontend/service.scss', 'public/assets/frontend/css/', {}, [
    purgecss({
        fontFace: true,
        keyframes: true,
        variables: true,
        content: [
            './resources/views/frontend/layouts/app.blade.php',
            './resources/views/components/frontend/brand.blade.php',
            './resources/views/frontend/pages/fiction-book.blade.php',
            './resources/views/frontend/pages/book-editing.blade.php',
            './resources/views/frontend/pages/book-printing.blade.php',
            './resources/views/frontend/pages/novel-writing.blade.php',
            './resources/views/frontend/pages/ebook-writing.blade.php',
            './resources/views/frontend/pages/children-book.blade.php',
            './resources/views/components/frontend/whats-app.blade.php',
            './resources/views/frontend/pages/book-marketing.blade.php',
            './resources/views/frontend/pages/memoir-writing.blade.php',
            './resources/views/frontend/pages/book-publishing.blade.php',
            './resources/views/frontend/pages/narrative-writing.blade.php',
            './resources/views/frontend/pages/biography-writing.blade.php',
            './resources/views/frontend/pages/book-cover-design.blade.php',
            './resources/views/frontend/pages/book-design-and-illustration.blade.php'
        ],
        safelist: [
            'p',
            'h1',
            'h2',
            'h6',
            'h3',
            'ul',
            'li',
            'img',
            'faqs',
            'form',
            'show',
            'fade',
            'typed',
            'modal',
            'circle',
            'swiper',
            'active',
            'reviews',
            'fa-phone',
            'fa-solid',
            'nav-link',
            'fa-brands',
            'fixed-top',
            'criclerow',
            'BookTitle',
            'modal-body',
            'why-choose',
            'form-select',
            'fa-instagram',
            'modal-dialog',
            'active-popup',
            'onload-popup',
            'swiper-slide',
            'form-control',
            'fa-facebook-f',
            'modal-content',
            'review-slider',
            'modal-backdrop',
            'spinner-border',
            'content-section',
            'nav-pills-custom',
            'swiper-navigation',
            'swiper-pagination',
            'typed-cursor--blink',
            'swiper-slide-active',
            'swiper-pagination-bullet',
            'swiper-pagination-bullets,',
            'swiper-pagination-clickable,',
            'swiper-pagination-horizontal',
            'swiper-pagination-bullet-active'
        ]
    })
]);

mix.sass('resources/sass/frontend/wikipedia-lp.scss', 'public/assets/frontend/css/', {}, [
    purgecss({
        fontFace: true,
        keyframes: true,
        variables: true,
        content: [
            './resources/js/template/wikipedia-form.js',
            './resources/views/frontend/layouts/app.blade.php',
            './resources/views/components/frontend/brand.blade.php',
            './resources/views/frontend/pages/fiction-book.blade.php',
            './resources/views/frontend/pages/book-editing.blade.php',
            './resources/views/frontend/pages/book-printing.blade.php',
            './resources/views/frontend/pages/novel-writing.blade.php',
            './resources/views/frontend/pages/ebook-writing.blade.php',
            './resources/views/frontend/pages/children-book.blade.php',
            './resources/views/components/frontend/whats-app.blade.php',
            './resources/views/frontend/pages/book-marketing.blade.php',
            './resources/views/frontend/pages/memoir-writing.blade.php',
            './resources/views/frontend/pages/book-publishing.blade.php',
            './resources/views/frontend/pages/narrative-writing.blade.php',
            './resources/views/frontend/pages/biography-writing.blade.php',
            './resources/views/frontend/pages/book-cover-design.blade.php',
            './resources/views/frontend/pages/wikipedia-page-creation.blade.php.php',
            './resources/views/frontend/pages/book-design-and-illustration.blade.php'
        ],
        safelist: [
            'p',
            'h1',
            'h2',
            'h6',
            'h3',
            'ul',
            'li',
            'img',
            'g-3',
            'g-0',
            'faqs',
            'form',
            'show',
            'fade',
            'head',
            'gy-4',
            'gy-3',
            "text",
            'gx-5',
            'box1',
            'box2',
            'typed',
            'modal',
            'circle',
            'swiper',
            'active',
            "accent",
            'number',
            'reviews',
            'gy-lg-5',
            'btn-box',
            'how-box',
            'me-lg-3',
            'fa-phone',
            'fa-solid',
            'nav-link',
            'modal-xl',
            "text-box",
            'col-lg-6',
            'hr-line1',
            'col-md-2',
            'fa-solid',
            'fa-xmark',
            'fa-brands',
            'fixed-top',
            'criclerow',
            'BookTitle',
            'col-lg-11',
            'col-lg-10',
            'col-md-10',
            'btn-close',
            'modal-body',
            'why-choose',
            'choose-box',
            'modal-body',
            'form-select',
            'content-box',
            'how-we-work',
            'we-solution',
            'offset-md-1',
            'fa-instagram',
            'modal-dialog',
            'active-popup',
            'onload-popup',
            'swiper-slide',
            'form-control',
            'modal-header',
            'fa-facebook-f',
            'modal-content',
            'review-slider',
            'text-lg-start',
            'modal-backdrop',
            'spinner-border',
            'marque-content',
            'wiki-portfolio',
            'content-section',
            'image-container',
            'portfolio-modal',
            'nav-pills-custom',
            'approval-service',
            'swiper-navigation',
            'swiper-pagination',
            'align-self-center',
            'typed-cursor--blink',
            'swiper-slide-active',
            'modal-dialog-centered',
            'justify-content-center',
            'swiper-pagination-bullet',
            'swiper-pagination-bullets,',
            'swiper-pagination-clickable,',
            'swiper-pagination-horizontal',
            'swiper-pagination-bullet-active',
            'popupForm',
            'modal-open',
            'progressContainer',
            'progressBar',
            'progress',
            'progress-bar', 
            'progress-bar-striped', 
            'progress-bar-animated'
        ]
    })
]);

mix.sass('resources/sass/frontend/review.scss', 'public/assets/frontend/css/', {}, [
    purgecss({
        fontFace: true,
        keyframes: true,
        variables: true,
        content: [
            './resources/views/frontend/layouts/app.blade.php',
            './resources/views/frontend/pages/review.blade.php',
            './resources/views/components/frontend/brand.blade.php',
            './resources/views/components/frontend/whats-app.blade.php'
        ],
        safelist: [
            'p',
            'h1',
            'h2',
            'h6',
            'h3',
            'ul',
            'li',
            'img',
            'mb-5',
            'fa-phone',
            'fa-solid',
            'fa-brands',
            'fixed-top',
            'criclerow',
            'BookTitle',
            'modal-body',
            'why-choose',
            'form-select',
            'fa-instagram',
            'modal-dialog',
            'active-popup',
            'onload-popup',
            'swiper-slide',
            'form-control',
            'modal-content',
            'fa-facebook-f'
        ]
    })
]);

mix.sass('resources/sass/frontend/contact.scss', 'public/assets/frontend/css/', {}, [
    purgecss({
        fontFace: true,
        keyframes: true,
        variables: true,
        content: [
            './resources/js/template/contact.js',
            './resources/views/frontend/layouts/app.blade.php',
            './resources/views/frontend/pages/contact-us.blade.php',
            './resources/views/components/frontend/brand.blade.php',
            './resources/views/components/frontend/whats-app.blade.php'
        ],
        safelist: [
            'p',
            'h1',
            'h2',
            'h6',
            'h3',
            'ul',
            'li',
            'img',
            'mb-5',
            'fa-phone',
            'fa-solid',
            'fa-brands',
            'fixed-top',
            'criclerow',
            'BookTitle',
            'fa-spinner',
            'modal-body',
            'why-choose',
            'form-select',
            'contact-form',
            'fa-instagram',
            'modal-dialog',
            'active-popup',
            'onload-popup',
            'swiper-slide',
            'form-control',
            'fa-facebook-f',
            'modal-content',
            'spinner-border'
        ]
    })
]);

mix.sass('resources/sass/frontend/faq.scss', 'public/assets/frontend/css/', {}, [
    purgecss({
        fontFace: true,
        keyframes: true,
        variables: true,
        content: [
            './resources/views/frontend/pages/faq.blade.php',
            './resources/views/frontend/layouts/app.blade.php',
            './resources/views/components/frontend/brand.blade.php',
            './resources/views/components/frontend/whats-app.blade.php'
        ],
        safelist: [
            'p',
            'h1',
            'h2',
            'h6',
            'h3',
            'ul',
            'li',
            'img',
            'mb-5',
            'fa-phone',
            'fa-solid',
            'fa-brands',
            'fixed-top',
            'criclerow',
            'BookTitle',
            'modal-body',
            'why-choose',
            'form-select',
            'fa-instagram',
            'modal-dialog',
            'active-popup',
            'onload-popup',
            'swiper-slide',
            'form-control',
            'modal-content',
            'fa-facebook-f'
        ]
    })
]);

mix.sass('resources/sass/frontend/sitemap.scss', 'public/assets/frontend/css/', {}, [
    purgecss({
        fontFace: true,
        keyframes: true,
        variables: true,
        content: [
            './resources/views/frontend/layouts/app.blade.php',
            './resources/views/frontend/pages/sitemap.blade.php'
        ],
        safelist: [
            'fa-phone',
            'fa-solid',
            'fixed-top',
            'fa-brands',
            'fa-instagram',
            'fa-facebook-f'
        ]
    })
]);

mix.sass('resources/sass/frontend/free-quote.scss', 'public/assets/frontend/css/', {}, [
    purgecss({
        fontFace: true,
        keyframes: true,
        variables: true,
        content: [
            './resources/views/frontend/layouts/app.blade.php',
            './resources/views/frontend/pages/get-free-quote.blade.php'
        ],
        safelist: [
            'fa-phone',
            'fa-solid',
            'fa-brands',
            'fa-instagram',
            'fa-facebook-f'
        ]
    })
]);

mix.sass('resources/sass/frontend/book-consultant.scss', 'public/assets/frontend/css/', {}, [
    purgecss({
        fontFace: false,
        keyframes: true,
        variables: true,
        content: [
            './resources/views/frontend/layouts/app.blade.php',
            './resources/views/components/frontend/metadata.blade.php',
            './resources/views/frontend/pages/book-consultant.blade.php'
        ],
        safelist: [
            'cell',
            'col-sm-6',
            'disabled',
            'selected',
            'vuejs3-datepicker__calendar',
            'vuejs3-datepicker__calendar-topbar'
        ]
    })
]);

mix.sass('resources/sass/frontend/thankyou.scss', 'public/assets/frontend/css/', {}, [
    purgecss({
        fontFace: true,
        keyframes: true,
        variables: true,
        content: [
            './resources/views/frontend/thankyou.blade.php',
            './resources/views/frontend/layouts/app.blade.php'
        ],
        safelist: [
            'fa-solid',
            'fa-phone',
            'fa-brands',
            'fa-instagram',
            'fa-facebook-f'
        ]
    })
]);

mix.sass('resources/sass/frontend/error.scss', 'public/assets/frontend/css/', {}, [
    purgecss({
        fontFace: true,
        keyframes: true,
        variables: true,
        content: [
            './resources/views/errors/403.blade.php',
            './resources/views/errors/404.blade.php',
            './resources/views/errors/500.blade.php',
            './resources/views/frontend/layouts/app.blade.php'
        ],
        safelist: [
            'fa-phone',
            'fa-solid',
            'fixed-top',
            'fa-brands',
            'fa-instagram',
            'fa-facebook-f'
        ]
    })
]);

mix.sass('resources/sass/frontend/bp-lp.scss', 'public/assets/frontend/css/', {}, [
    purgecss({
        fontFace: true,
        keyframes: true,
        variables: true,
        content: [
            './resources/js/template/popup-query.js',
            './resources/views/frontend/layouts/app.blade.php',
            './resources/views/components/frontend/brand.blade.php',
            './resources/views/components/frontend/modal.blade.php',
            './resources/views/components/frontend/whats-app.blade.php',
            './resources/views/frontend/pages/book-publishing-lp.blade.php'
        ],
        safelist: [
            'p',
            'h1',
            'h2',
            'h6',
            'h3',
            'ul',
            'li',
            'img',
            'faqs',
            'form',
            'mt-3',
            'mt-2',
            'show',
            'fade',
            'typed',
            'modal',
            'circle',
            'swiper',
            'reviews',
            'fa-phone',
            'fa-solid',
            'fa-brands',
            'fixed-top',
            'criclerow',
            'BookTitle',
            'modal-body',
            'why-choose',
            'form-select',
            'onload-popup',
            'active-popup',
            'fa-instagram',
            'modal-dialog',
            'swiper-slide',
            'form-control',
            'fa-facebook-f',
            'modal-content',
            'review-slider',
            'modal-backdrop',
            'spinner-border',
            'content-section',
            'swiper-navigation',
            'swiper-pagination',
            'typed-cursor--blink',
            'swiper-slide-active',
            'swiper-pagination-bullet',
            'swiper-pagination-bullets,',
            'swiper-pagination-clickable,',
            'swiper-pagination-horizontal',
            'swiper-pagination-bullet-active'
        ]
    })
]);

if (mix.inProduction()) {
    mix.options({
        cssNano: {
            discardComments: { removeAll: true }
        },
        optimization: {
            usedExports: true
        }
    });

    mix.version();
}
