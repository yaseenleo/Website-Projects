<script>
    let contact = true;
    let contactScript = "{{ asset('assets/frontend/js/service-form.js') }}";

    let reCaptchaPublicKey = "{{ config('services.google-re-captcha.public') }}";

    let tab = true;
    let tabScript = "{{ mix('assets/frontend/js/tab.js') }}";

    let reviewSlider = true;
    let reviewSliderScript = "{{ asset('assets/frontend/js/review-slider.js') }}";

    <x-frontend.lazy-script />

    document.getElementsByClassName('reviews')[0].addEventListener('mouseover', function() {
        if (reviewSlider) {
            loadScript(reviewSliderScript);
        }

        reviewSlider = false;
    });

    document.getElementsByClassName('creative-service')[0].addEventListener('mouseover', function() {
        if (tab) {
            loadScript(tabScript);
        }

        tab = false;
    });

    const elements = document.querySelectorAll('.main-banner, .faqs');

    function handleMouseover(event) {
        if (contact) {
            loadScript(contactScript);
        }

        contact = false;
    }

    elements.forEach(element => {
        element.addEventListener('mouseover', handleMouseover);
    });

    setTimeout(function() {
        if (reviewSlider) {
            loadScript(reviewSliderScript);

            reviewSlider = false;
        }

        if (tab) {
            loadScript(tabScript);

            tab = false;
        }

        if (contact) {
            loadScript(contactScript);

            contact = false;
        }
    }, 5000);
</script>
