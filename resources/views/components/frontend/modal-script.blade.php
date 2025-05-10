<script>
    var uniqueModal = true;
    var close_btn = document.querySelector(".btn-close");
    var modal_btn = document.querySelectorAll(".open_popup");

    function loadModalScript() {
        const lazyScript = document.createElement('script');
            lazyScript.setAttribute('src', '{{ asset("assets/frontend/js/popup-query.js") }}');
            lazyScript.setAttribute('defer', true);

        document.body.appendChild(lazyScript);
        uniqueModal = false;
    }

    function toggleModal() {
        loadModalScript();

        var modal = document.querySelector(".onload-popup");
            modal.classList.toggle("active-popup");
    }

    Array.from(modal_btn).forEach(link => {
        link.addEventListener('click', toggleModal);
    });

    close_btn.addEventListener("click", toggleModal);

    setTimeout(function() {
        if (uniqueModal) {
            loadModalScript();
        }
    }, 5000);
</script>
