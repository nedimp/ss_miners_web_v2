$(document).ready(function() {
    function rotateLogos() {
        var $sponsorRotator = $('.sponsor-rotator');
        var $sponsorLogos = $sponsorRotator.find('.sponsor-logos');

        var $firstLogo = $sponsorLogos.children().first();
        $sponsorLogos.append($firstLogo.clone()); // Move first logo to the end
        $firstLogo.remove(); // Remove the first logo from its original position

        $sponsorLogos.css('transform', 'translateX(-' + $firstLogo.outerWidth(true) + 'px)'); // Shift logos left
        $sponsorLogos.animate({ 'transform': 'translateX(0px)' }, 500); // Animate transition
    }

    setInterval(rotateLogos, 10000); // Rotate every 10 seconds
});
