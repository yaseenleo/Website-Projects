function loadScript(script) {
    const lazyScript = document.createElement('script');
        lazyScript.setAttribute('src', script);
        lazyScript.setAttribute('defer', true);

    document.body.appendChild(lazyScript);
}
