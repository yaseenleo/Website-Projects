/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************************!*\
  !*** ./resources/js/template/type-effect.js ***!
  \**********************************************/
var typedText = document.querySelector(".typed-text");
var cursor = document.querySelector(".cursor");
var textArray = ["Ghostwriting", "Editing", "Marketing", "Publishing"];
var textArrayIndex = 0;
var charIndex = 0;
var erase = function erase() {
  if (charIndex > 0) {
    cursor.classList.remove('blink');
    typedText.textContent = textArray[textArrayIndex].slice(0, charIndex - 1);
    charIndex--;
    setTimeout(erase, 80);
  } else {
    cursor.classList.add('blink');
    textArrayIndex++;
    if (textArrayIndex > textArray.length - 1) {
      textArrayIndex = 0;
    }
    setTimeout(type, 10);
  }
};
var type = function type() {
  if (charIndex <= textArray[textArrayIndex].length - 1) {
    cursor.classList.remove('blink');
    typedText.textContent += textArray[textArrayIndex].charAt(charIndex);
    charIndex++;
    setTimeout(type, 120);
  } else {
    cursor.classList.add('blink');
    setTimeout(erase, 10);
  }
};
type();
/******/ })()
;