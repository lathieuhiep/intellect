<div id="register">
    <div class="container text-center">
        <span>Đừng bao giờ bỏ lỡ những tin tức mới về thiết kế từ chúng tôi. Hãy đăng ký mail tại đây</span>
        <a href="javascript:void(0);" id="register" class="register-btn">Đăng ký</a>
    </div>
</div>

<div id="footer">
    <div class="container">
        <div class="footer-left" style="float: left">
            <p>© Copyright 2018 <a href="https://www.facebook.com/huonguiux
" target="_blank"><span>Sarah Nguyen</span></a>. All rights reserved</p>
        </div>
        <div class="footer-right" style="float: right">
            <ul>
                <li><a href="<?php echo home_url('/gioi-thieu') ?>">Giới thiệu</a></li>
                <li><a href="<?php echo home_url('/san-pham-hoc-vien') ?>">Sản phẩm học viên</a></li>
                <li><a href="javascript:void(0);" id="contact">Liên hệ</a></li>
                <li><a href="">Hotline: <em>0911.321.300</em></a></li>
            </ul>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modalContact" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Liên hệ với chúng tôi</h4>
                </div>
                <div class="modal-body">
                    <p>Các bạn có thể liên hệ với chúng tôi theo thông tin bên dưới:</p>

                    <p><strong>Hotline</strong>: 0911.321.300</p>
                    <p><strong>Địa chỉ</strong>: Số 22, Ngõ 102 Khuất Duy Tiến, Thanh Xuân, Hà Nội</p>
                    <p><strong>Email</strong>: huongwebdesign@gmail.com</p>
                    <p><span>Face</span>: <a href="https://www.facebook.com/huonguiux">https://www.facebook.com/huonguiux</a>
                    </p>
                    <p><span>Fanpage</span>: <a href="https://www.facebook.com/huonguxui/">https://www.facebook.com/huonguxui/</a>
                    </p>
                </div>
            </div>

        </div>
    </div>
    
    
    <!-- Modal Register -->
    <div class="modal fade" id="modalRegister" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <h4 class="modal-title text-center">Đăng ký mail nhận tin chia sẽ kiến thức</h4>
                    <div id="mc_embed_signup">
                        <form action="https://thebisoft.us19.list-manage.com/subscribe/post?u=91c449016641a5ef42b82d70b&id=67c7d91b3b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                            <div id="mc_embed_signup_scroll">
                                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Nhập địa chỉ email của bạn" required>
                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                <div style="position: absolute; left: -5000px;">
                                    <input type="text" name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="">
                                </div>
                                <button type="submit" value="Đăng ký" name="subscribe" id="mc-embedded-subscribe" class="button">Đăng ký</button>
                                <div class="info"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#mc_embed_signup').find('form').ajaxChimp();
    });
    </script>
					<script>
						(function ($) {
    'use strict';

    $.ajaxChimp = {
        responses: {
        },
        translations: {
            'en': null
        },
        init: function (selector, options) {
            $(selector).ajaxChimp(options);
        }
    };

    $.fn.ajaxChimp = function (options) {
        $(this).each(function(i, elem) {
            var form = $(elem);
            var email = form.find('input[type=email]');
            var label = form.find('.info');

            var settings = $.extend({
                'url': form.attr('action'),
                'language': 'vn'
            }, options);

            var url = settings.url.replace('/post?', '/post-json?').concat('&c=?');

            form.attr('novalidate', 'true');
            email.attr('name', 'EMAIL');

            form.submit(function () {
                var msg;
                function successCallback(resp) {
                    if (resp.result === 'success') {
						console.log(resp);
                        msg = 'Cảm ơn bạn đã đăng ký nhận tin !!!';
                        label.removeClass('error').addClass('valid');
                        email.removeClass('error').addClass('valid');
                    } else {
						console.log(resp);
                        email.removeClass('valid').addClass('error');
                        label.removeClass('valid').addClass('error');
                        var index = -1;
                        try {
                            var parts = resp.msg.split(' - ', 2);
                            if (parts[1] === undefined) {
                                msg = resp.msg;
                            } else {
                                var i = parseInt(parts[0], 10);
                                if (i.toString() === parts[0]) {
                                    index = parts[0];
                                    msg = parts[1];
                                } else {
                                    index = -1;
                                    msg = resp.msg;
                                }
                            }
                        }
                        catch (e) {
                            index = -1;
                            msg = resp.msg;
                        }
                    }

                    // Translate and display message
                    if (
                        settings.language !== 'en'
                        && $.ajaxChimp.responses[msg] !== undefined
                        && $.ajaxChimp.translations
                        && $.ajaxChimp.translations[settings.language]
                        && $.ajaxChimp.translations[settings.language][$.ajaxChimp.responses[msg]]
                    ) {
                        msg = $.ajaxChimp.translations[settings.language][$.ajaxChimp.responses[msg]];
                    }
                    label.html(msg);

                    label.show(2000);
                    if (settings.callback) {
                        settings.callback(resp);
                    }
                }

                var data = {};
                var dataArray = form.serializeArray();
                $.each(dataArray, function (index, item) {
                    data[item.name] = item.value;
                });

                $.ajax({
                    url: url,
                    data: data,
                    success: successCallback,
                    dataType: 'jsonp',
                    error: function (resp, text) {
                        console.log('mailchimp ajax submit error: ' + text);
                    }
                });

                // Translate and display submit message
                var submitMsg = 'Submitting...';
                if(
                    settings.language !== 'en'
                    && $.ajaxChimp.translations
                    && $.ajaxChimp.translations[settings.language]
                    && $.ajaxChimp.translations[settings.language]['submit']
                ) {
                    submitMsg = $.ajaxChimp.translations[settings.language]['submit'];
                }
                label.html(submitMsg).show(2000);

                return false;
            });
        });
        return this;
    };
})(jQuery);
					</script>
        </div>
    </div>
</div>
<a id="button"></a>
<?php wp_footer() ?>
</body>
</html>