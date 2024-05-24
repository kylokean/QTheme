(function($){
// code wrapper to use jQuery '$' variable in Wordpress

$(document).ready(function() {
    $('#primary-menu_mobile .sub-menu').hide();

    $('.sub-menu').parent().click(function(event) {
        event.stopPropagation();
        $('> ul', this).toggle();
        $(this).toggleClass("active");

    });
});

})(jQuery);