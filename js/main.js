
$(function(){
    $(".js-navButton").on( "click", function(){
        $(this).toggleClass("is-open");
        $(".p-sidebar").toggleClass("is-open");
        $("body").toggleClass("is-open");
    });
});