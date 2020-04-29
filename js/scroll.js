$(function () {
    const mq = window.matchMedia("(min-width: 1200px)");
    var SCROLL_TIME = 1000;

    if (window.location.href.search('login') == -1 && window.location.href.search('admin-content') == -1 && window.location.href.search('admin-login') == -1 && window.location.href.search('myData') == -1 && window.location.href.search('/user/') == -1) {
        $(".scroll").click(menuClick);
    }

    function menuClick(event) {
        event.preventDefault();
        var id = '#' + $(this).attr("href").replace(/\.\/#/, '');
        if (mq.matches) {
            $("html, body").animate({
                "scrollTop": $(id).offset().top - 380
            }, SCROLL_TIME);
        } else {
            $("html, body").animate({
                "scrollTop": $(id).offset().top - 400
            }, SCROLL_TIME);
        }

    }
});