jQuery(document).ready(function ($) {
    $('#contact').click(function () {
        $('#modalContact').modal('show');
    });
	
	$('a[title=contact-modal]').click(function () {
        $('#modalContact').modal('show');
    });

    $('.lazy').lazy({
        effect: "fadeIn",
        effectTime: 2000,
        threshold: 0
    });

    if ($(window).width() > 768) {
        $("li.dropdown").hover(
            function () {
                $(this).addClass('open')
            },
            function () {
                $(this).removeClass('open')
            }
        );
    }

    $("li.dropdown").click(
        function () {
            $(this).addClass('open');
            $(this).siblings().removeClass('open');
        }
    );

    $('li.dropdown > a').append('<span class="caret" style="margin-left: 5px"></span>');
    $('li.dropdown > a').attr('href', '#').attr('title', '');

    var btn = $('#button');

    $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });

    btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop:0}, '300');
    });

    var sidebar = $('.right-sidebar');
//     var top = sidebar.offset().top - parseFloat(sidebar.css('margin-top'));

//     $(window).scroll(function (event) {
//         var y = $(this).scrollTop();
//         if (y >= top) {
//             sidebar.addClass('fixed');
//         } else {
//             sidebar.removeClass('fixed');
//         }
//     });
    
    $(".fancybox").fancybox({
          'autoScale': false,
          'overlayShow': true,
          'transitionIn': 'elastic',
          'transitionOut': 'elastic'
         });
});