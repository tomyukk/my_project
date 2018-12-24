$(document).ready(function () {
    $('.buy').off('click').click(function () {
        $('.count_prod').text(parseInt($('.count_prod').text()) + 1);
    });




});

