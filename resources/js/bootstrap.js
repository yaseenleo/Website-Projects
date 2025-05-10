import 'lazysizes';
require('bootstrap/js/dist/collapse.js');

window.addEventListener('scroll', function () {

    let scrollControl = document.getElementById("scroll-control");

    if (window.scrollY > 50) {
        scrollControl.classList.add("fixed-top");
    } else {
        scrollControl.classList.remove("fixed-top");
    }

});
