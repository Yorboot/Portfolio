var btn = $('#button');

$(window).scroll(function () {
    if ($(window).scrollTop() > 10) {
        btn.addClass('show');
    } else {
        btn.removeClass('show');
    }
});