document.addEventListener("DOMContentLoaded", function() {
    function rotateLogos() {
        var sponsorRotator = document.querySelector('.sponsor-rotator');
        var sponsorLogos = sponsorRotator.querySelector('.sponsor-logos');
        var firstLogo = sponsorLogos.firstElementChild;

        var clone = firstLogo.cloneNode(true);
        sponsorLogos.appendChild(clone); // Move first logo to the end
        sponsorLogos.removeChild(firstLogo); // Remove the first logo from its original position

        sponsorLogos.style.transform = 'translateX(-' + firstLogo.offsetWidth + 'px)'; // Shift logos left
        setTimeout(function() {
            sponsorLogos.style.transition = 'transform 0.5s ease';
            sponsorLogos.style.transform = 'translateX(0px)'; // Animate transition
        }, 10);
    }

    setInterval(rotateLogos, 10000); // Rotate every 10 seconds
});
