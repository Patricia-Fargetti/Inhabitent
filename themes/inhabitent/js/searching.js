(function ($) {
    // jQuery no conflict mode

    $(".site-header .icon-search").click(function (event) {
        event.preventDefault();
        $(".site-header .search-field").show().focus();
    });

    $(".site-header .search-field").blur(function () {
        $(".site-header .search-field").hide();
    });

})(jQuery);


