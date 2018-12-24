var NO_PAYMENT_PARAM = 'nopayment=1';

function tooltips() {
    $('.tooltip').mouseover(function (e) {
        var htmlTooltip = '';
        htmlTooltip += '<div class="tooltip_table" style="top: ' + (e.clientY - 50) + 'px; left: ' + (e.clientX + 10) + 'px">';
        htmlTooltip += $(this).attr('title');
        htmlTooltip += '</div>';
        $(this).append(htmlTooltip);
    }).mouseout(function () {
        $(this).find('.tooltip_table').remove();
    }).mousemove(function (e) {
        $('.tooltip_table').css('top', (e.clientY - 50) + 'px');
        $('.tooltip_table').css('left', (e.clientX + 10) + 'px');
    });

}

function switcher() {
    $(document).ready(function () {
        $('.switcher input').change(function () {
            $(this).closest('.switcher').find('.lever').toggleClass('active');
        });

        $('.switcher').each(function () {
            if ($(this).find('input').is(':checked')) {
                $(this).find('.lever').addClass('active');
            }
        });

        $('.radio').each(function () {
            if ($(this).find('input[type="radio"]').is(':checked')) {
                $(this).addClass('active');
            }
        });
        $('.radio input[type="radio"]').change(function () {
            $('.radio').each(function () {
                if ($(this).find('input[type="radio"]').is(':checked')) {
                    $(this).addClass('active');
                } else {
                    $(this).removeClass('active');
                }
            });
        });

    });

}

function previewFile() {
    var preview = document.querySelector('.product_image'); //selects the query named img
    var file = document.querySelector('input[type=file]').files[0]; //sames as here
    var reader = new FileReader();

    reader.onloadend = function () {
        preview.src = reader.result;
    }

    if (file) {
        reader.readAsDataURL(file); //reads the data as a URL
    } else {
        preview.src = "";
    }
}

$(document).ready(function () {
    $('.header_logo_block').off('click').click(function () {
        location.href = '/';
    });

    $('.add_product').off('click').click(function () {
        $('.add_product_form').slideDown(300);
    });

    $('.delete_product i').off('click').click(function () {
       console.log($(this).parent().parent().data('id'));
    });

    tooltips();

    $('.lang_select').change(function () {
        var lang = $(this).val();
        /*$.cookie('lang', lang, {expires: 350});
        location.reload();*/
        var url = window.location.pathname.substr(1);
        if (LANG != DEFAULT_LANG) {
            url = url.replace(new RegExp(LANG + '/?'), '');
        }
        window.location.href = '/' + (lang != DEFAULT_LANG ? lang + '/' : '') + url;
    });

    $('.message_scan .close_msg').click(function () {
        $(this).closest('.message_scan').fadeOut();
    });

    $('.comments_block .switchers .switcher_bt').click(function () {
        var count_blocks = $('.comments_block .post_review').length;
        var index_block = $('.comments_block .post_review.active').index();
        if ($(this).hasClass('left_bt')) {
            if (index_block > 0) {
                index_block--;
                $('.comments_block .post_review.active').removeClass('active');
                $('.comments_block .post_review:eq(' + index_block + ')').addClass('active');
            }
        } else {
            if (index_block < count_blocks - 1) {
                index_block++;
                $('.comments_block .post_review.active').removeClass('active');
                $('.comments_block .post_review:eq(' + index_block + ')').addClass('active');
            }
        }
    });

    $('.burger_menu').click(function () {
        $('.burger_menu').toggleClass('opened');
        $('.container .header_menu_block').toggleClass('opened');
        $('.back_hide').toggleClass('show');
    });

    $('.back_hide').click(function () {
        $('.burger_menu').removeClass('opened');
        $('.container .header_menu_block').removeClass('opened');
        $('.back_hide').removeClass('show');
        $('.popup').remove();
    });

    $('.header_avatar_block .user_info_header').click(function () {
        $(this).closest('.header_avatar_block').find('.header_user_menu').show();
    });

    $('.switch').click(function () {
        $(this).toggleClass('active');
    });


    $(document).click(function (e) {
        docClick(e);
    });


    // $('.item_menu').hover(function () {
    //     $(this).find('.item_category').slideDown();
    // }, function () {
    //     $(this).find('.item_category').slideUp();
    // });


});

function docClick(e) {
    var element = $(e.target);
    if (element.parents('.header_user_menu_block').length < 1) {
        $('.header_avatar_block .header_user_menu').hide();
    }
}
