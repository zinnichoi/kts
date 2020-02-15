@include('user/layouts/header')
<body>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-9881028-7', 'auto');
    ga('send', 'pageview');

</script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-112389681-1');
</script>
<!-- Google Tag Manager -->
<script>(function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start':
                new Date().getTime(), event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-MD6GV2F');</script>
<!-- End Google Tag Manager -->
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MD6GV2F"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<div
    class="home page-template page-template-templ-home page-template-templ-home-php blog page-template-templ-portfolio-one-php">
    @include('user/layouts/nav-web')
    <div id="wrapper" class="width-float ">
        <div class="map-contact">
            <iframe
                src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=XQ49%2BJM%20Ph%C3%BA%20La%2C%20H%C3%A0%20%C4%90%C3%B4ng%2C%20Hanoi%2C%20Vietnam+(Title)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed"
                width="100%"
                height="300"
                frameborder="0"
                style="border:0"
                allowfullscreen>
            </iframe>
        </div>
        <div class="wrapper contactWrap">
            <div class="contact-info">
                <div class="contactInfo clear">
                    <div class="contactItem"><i class="iconLocation"></i>
                        <h4>Địa chỉ</h4>

                        <p>
                            Văn phòng: V6-B20 Khu đô thị Văn Phú, Hà Đông
                            <br>
                            <br>
                            Xưởng sản xuất: Số 6: làng nghề Chàng Sơn, Thạch Thất
                        </p>
                    </div>

                    <div class="contactItem"><i class="iconPhone"></i>

                        <h4>Phone</h4>

                        <p>0976 420 322
                            <br>
                            <br>
                            <br>
                            <br>
                            0984 032 996
                        </p>
                    </div>

                    <div class="contactItem"><i class="iconEmail"></i>

                        <h4>E-mail</h4>

                        <p>
                            kimtung.neu@gmail.com
                            <br>
                            <br>
                            <br>
                            <br>
                            phuanhduckts@gmail.com
                        </p>
                    </div>
                </div>
            </div>
            <!-- Form 41 -->
            <div class="contactForm">
                <h3 class="blockTitle">Form liên hệ</h3>
                <form enctype="multipart/form-data" class="w3f-form uni_form clear" role="form" id="w3n-submit-form"
                      action="" method="post">
                    <div class="formInputBox userNameBox clear">
                        <input class="formInput userName" placeholder="Họ và tên" type="text" value=""
                               name="W3NF[3280][c21]" id="W3NF_3280_c21"/>
                        <div class="errorMessage" id="AutoForm_c21_em_" style="display:none"></div>
                    </div>
                    <div class="formInputBox userEmailBox clear">
                        <input class="formInput userEmail" placeholder="Email" type="text" value=""
                               name="W3NF[3281][c92]" id="W3NF_3281_c92"/>
                        <div class="errorMessage" id="AutoForm_c92_em_" style="display:none"></div>
                    </div>
                    <div class="formInputBox userNameBox clear">
                        <input class="formInput userName" placeholder="Số điện thoại" type="text" value=""
                               name="W3NF[3282][c123]" id="W3NF_3282_c123"/>
                        <div class="errorMessage" id="AutoForm_c123_em_" style="display:none"></div>
                    </div>
                    <div class="formInputBox userEmailBox clear">
                        <input class="formInput userEmail" placeholder="Tiêu đề" type="text" value=""
                               name="W3NF[3283][c154]" id="W3NF_3283_c154"/>
                        <div class="errorMessage" id="AutoForm_c154_em_" style="display:none"></div>
                    </div>
                    <div class="formInputBox clear">
                        <textarea class="formTextarea" placeholder="Nội dung" name="W3NF[3284][c185]"
                                  id="W3NF_3284_c185"></textarea>
                        <div class="errorMessage" id="AutoForm_c185_em_" style="display:none"></div>
                    </div>
                    <input id="submit" class="thm-btnSubmit uni_input_submit" type="submit" name="yt0"
                           value="Gửi yêu cầu"/></form>
            </div>
        </div>
        <style>
            .home {
                background: #fff;
            }
        </style>
    </div>
    @include('user/layouts/nav-mob')
    @include('user/layouts/footer-line')
</div>
<script>
    function setCookie(key, value) {
        var expires = new Date();
        expires.setTime(expires.getTime() + (30 * 60 * 1000));
        document.cookie = key + '=' + value + ';expires=' + expires.toUTCString();
    }

    function getCookie(key) {
        var keyValue = document.cookie.match('(^|;) ?' + key + '=([^;]*)(;|$)');
        return keyValue ? keyValue[2] : null;
    }

    $('document').ready(function () {
        var has_cookie_popup = getCookie('popup');
        if (has_cookie_popup) {
            $(".home").removeClass('home-index-show');
        } else {
            setCookie('popup', 1);
            $(".home").addClass('home-index-show');
        }
        $(".btn-close").click(function () {
            $(".home").removeClass('home-index-show');
        });
    });
</script>
<script type="text/javascript">
    (function ($) {
        $.fn.clickToggle = function (func1, func2) {
            var funcs = [func1, func2];
            this.data('toggleclicked', 0);
            this.click(function () {
                var data = $(this).data();
                var tc = data.toggleclicked;
                $.proxy(funcs[tc], this)();
                data.toggleclicked = (tc + 1) % 2;
            });
            return this;
        };
    }(jQuery));
    $(document).ready(function () {
        $('.dropdown-toggle').clickToggle(function () {
            $(this).next().css('display', 'block');
        }, function () {
            $(this).next().css('display', 'none');
        });

    });
</script>
</body>
</html>
@include('user/layouts/footer')
