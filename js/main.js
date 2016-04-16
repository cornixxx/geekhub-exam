jQuery(document).ready(function() {
    jQuery('.toggle-nav').click(function(e) {
        jQuery(this).toggleClass('active');
        jQuery('.menu ul').toggleClass('active');

        e.preventDefault();
    });
});

jQuery(window).load(function() {
    jQuery('.flexslider').flexslider({
        animation: "slide"
    });
});
