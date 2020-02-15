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
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-112389681-1');
</script>
<div class="home page-template page-template-templ-home page-template-templ-home-php home">
    @include('user/layouts/nav-web')
    {{--banner--}}
    <div id="wrapper" class="width-float ">

        <div class="banner-slider-index">
            <div class="tp-banner-container">
                <div class="tp-banner">

                    <ul>    <!-- SLIDE  -->
                        <li
                            data-transition="fade"
                            data-slotamount="7" data-masterspeed="1500">
                            <!-- MAIN IMAGE -->
                            <img src="{{ asset('assets/image/page/banner1.jpg') }}" alt="slide 1" data-bgfit="cover"
                                 data-bgposition="center center" data-bgrepeat="no-repeat">
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption customout"
                                 data-x="left" data-hoffset="0"
                                 data-y="top" data-voffset="170"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="500"
                                 data-start="500"
                                 data-easing="Back.easeOut"
                                 data-endspeed="500"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on"
                                 style="z-index: 21">
                            </div>
                        </li>
                        <li
                            data-transition="fade"
                            data-slotamount="7" data-masterspeed="1500">
                            <!-- MAIN IMAGE -->
                            <img src="{{ asset('assets/image/page/banner2.jpg') }}" alt="background 2"
                                 data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption customout"
                                 data-x="left" data-hoffset="0"
                                 data-y="top" data-voffset="170"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="500"
                                 data-start="500"
                                 data-easing="Back.easeOut"
                                 data-endspeed="500"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on"
                                 style="z-index: 21"></div>
                        </li>
                    </ul>


                    <script type="text/javascript">
                        $(document).ready(function () {
                            $('.tp-banner').revolution({
                                delay: 9000,
                                startwidth: 1920,
                                startheight: 600,
                                hideThumbs: 10,
                                fullScreen: "on",
                                fullScreenOffsetContainer: "on"
                            });

                        });
                    </script>
                </div>
            </div>
        </div>
        <div class="ourServiceBlock">
            <div class="homeBlockTitle">Dịch vụ của chúng tôi</div>
            <div class="ourServiceWrap clear">
                <div class="ourServiceItem">
                    <div class="ourServiceItem-img">
                        <a>
                            <img
                                src="{{ asset('assets/image/page/default.png') }}"
                                data-original="{{ asset('assets/image/page/dv-chungcu.jpg') }}"
                                class="img-responsive imglazyload" alt="THIẾT KẾ NỘI THẤT CHUNG CƯ">
                        </a>
                    </div>
                    <a class="overlay"></a>
                    <div class="ourServiceItemContent" style="top: 146px;">
                        <span>0<spam class="number_sell">1</spam></span>
                        <h4><a title="THIẾT KẾ NHÀ Ở">THIẾT KẾ NỘI THẤT CHUNG CƯ</a></h4>
                        <p style="word-wrap: break-word;">KLEVER HOUSE đồng hành cùng Khách hàng, chủ đầu tư tạo ra những không
                            gian sống mang dấu ấn của mình và mang tính thẩm mỹ cao cùng chất lượng vượt trội.
                        </p>
                    </div>
                </div>
                <div class="ourServiceItem">
                    <div class="ourServiceItem-img">
                        <a>
                            <img
                                src="{{ asset('assets/image/page/default.png') }}"
                                data-original="{{ asset('assets/image/page/dv-biethu.jpg') }}"
                                class="img-responsive imglazyload" alt="THIẾT KẾ NỘI THẤT BIỆT THỰ">
                        </a>
                    </div>
                    <a class="overlay"></a>
                    <div class="ourServiceItemContent" style="top: 146px;">
                        <span>0<spam class="number_sell">1</spam></span>
                        <h4><a
                                title="THIẾT KẾ KIẾN TRÚC CẢNH QUAN">THIẾT KẾ NỘI THẤT BIỆT THỰ</a></h4>
                        <p style="word-wrap: break-word;">KLEVER HOUSE cung cấp dịch vụ thiết kế nội thất như: cảnh
                            quan sân vườn, nội thất các phòng,... giúp hoàn thiện và nâng cao thẩm mỹ cho dự án.
                        </p>
                    </div>
                </div>
                <div class="ourServiceItem">
                    <div class="ourServiceItem-img">
                        <a>
                            <img
                                src="{{ asset('assets/image/page/default.png') }}"
                                data-original="{{ asset('assets/image/page/dv-nhapho.jpg') }}"
                                class="img-responsive imglazyload" alt="THIẾT KẾ NỘI THẤT NHÀ PHỐ">
                        </a>
                    </div>
                    <a class="overlay"></a>
                    <div class="ourServiceItemContent" style="top: 146px;">
                        <span>0<spam class="number_sell">1</spam></span>
                        <h4><a
                                title="THIẾT KẾ CÔNG TRÌNH THƯƠNG MẠI">THIẾT KẾ NỘI THẤT NHÀ PHỐ</a></h4>
                        <p style="word-wrap: break-word;">KLEVER HOUSE cung cấp dịch vụ thiết kế nội thất với những công trình nhà ống, nhà liền kề, nhà song lập, nhà cấp 4 với phong cách Tân Cổ, Á Đông, hiện đại, ...
                        </p>
                    </div>
                </div>
                <div class="ourServiceItem">
                    <div class="ourServiceItem-img">
                        <a>
                            <img
                                src="{{ asset('assets/image/page/default.png') }}"
                                data-original="{{ asset('assets/image/page/dv-vanphong.jpg') }}"
                                class="img-responsive imglazyload" alt="THIẾT KẾ NỘI THẤT VĂN PHÒNG">
                        </a>
                    </div>
                    <a class="overlay"></a>
                    <div class="ourServiceItemContent" style="top: 146px;">
                        <span>0<spam class="number_sell">1</spam></span>
                        <h4><a title="HỢP TÁC THIẾT KẾ">THIẾT KẾ NỘI THẤT VĂN PHÒNG</a></h4>
                        <p style="word-wrap: break-word;">KLEVER HOUSE đã và đang hợp tác với một số đơn vị thiết kế trong và
                            ngoài nước để triển khai các tòa nhà văn phòng có quy mô lớn và tiến độ nhanh.
                        </p>
                    </div>
                </div>
                <div class="ourServiceItem">
                    <div class="ourServiceItem-img">
                        <a>
                            <img
                                src="{{ asset('assets/image/page/default.png') }}"
                                data-original="{{ asset('assets/image/page/dv-spa.png') }}"
                                class="img-responsive imglazyload" alt="THIẾT KẾ NỘI THẤT SPA, SHOP">
                        </a>
                    </div>
                    <a class="overlay"></a>
                    <div class="ourServiceItemContent" style="top: 146px;">
                        <span>0<spam class="number_sell">1</spam></span>
                        <h4><a title="SẢN XUẤT THI CÔNG">THIẾT KẾ NỘI THẤT SPA, SHOP QUẦN ÁO, QUÁN CAFE</a></h4>
                        <p style="word-wrap: break-word;">KLEVER HOUSE cung cấp dịch vụ thiết kế nội thất như nhà hàng, quán cafe, spa đem lại không gian xanh nhưng vẫn đảm bảo công năng và giá trị sử dụng.
                        </p>
                    </div>
                </div>
                <div class="ourServiceItem">
                    <div class="ourServiceItem-img">
                        <a>
                            <img
                                src="{{ asset('assets/image/page/default.png') }}"
                                data-original="{{ asset('assets/image/page/trang-tri-noi-that.png') }}"
                                class="img-responsive imglazyload" alt="THIẾT KẾ NỘI THẤT BÁN LẺ">
                        </a>
                    </div>
                    <a class="overlay"></a>
                    <div class="ourServiceItemContent" style="top: 146px;">
                        <span>0<spam class="number_sell">1</spam></span>
                        <h4><a title="TRANG TRÍ NỘI THẤT">THIẾT KẾ NỘI THẤT BÁN LẺ</a></h4>
                        <p style="word-wrap: break-word;">KLEVER HOUSE cung cấp dịch vụ &amp; sản phẩm trang trí nội thất với
                            mong muốn tạo ra những góc nhìn hoàn chỉnh tô đậm thêm cho phong cách của từng dự án.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $('.number_sell').each(function (index, element) {
                $(this).html(index + 1);
            });
        </script>    <!-- Testimonical -->
        <div class="testimonialsBlock">
            <div class="homeBlockTitle">CẢM NHẬN CỦA KHÁCH HÀNG</div>
            <div class="testimonialsWrap">
                <div class="testimonial-style-1">
                    <div class="container">
                        <div class="owl-testimonial-single">
                            <div class="item-testimonial">
                                <div class="item-testimonial-author">
                                    <img
                                        src="{{ asset('assets/image/page/customer1.png') }}"
                                        class="attachment-full"/>
                                </div>
                                <div class="item-testimonial-quote">
                                    <div class="testimonialAuthor">
                                        <strong>Mrs Yan My</strong>
                                        <p style="word-wrap: break-word;">Á Hậu</p></div>
                                    <p style="word-wrap: break-word;">
                                    <p>KLEVER HOUSE luôn đồng hành cùng Khách hàng, chủ đầu tư tạo ra những không gian sống, tối ưu công năng kết hợp với đồ thông minh mang đậm
                                        dấu ấn của mình và mang tính thẩm mỹ cao cùng chất lượng vượt trội. Tôi rất hài
                                        lòng.</p>
                                    </p>
                                </div>
                            </div>
                            <div class="item-testimonial">
                                <div class="item-testimonial-author">
                                    <img
                                        src="{{ asset('assets/image/page/customer2.png') }}"
                                        class="attachment-full"/>
                                </div>
                                <div class="item-testimonial-quote">
                                    <div class="testimonialAuthor">
                                        <strong>Mrs Hải</strong>
                                        <p style="word-wrap: break-word;">Giám đốc</p></div>
                                    <p style="word-wrap: break-word;">
                                    <p>KLEVER HOURSE luôn đồng hành cùng Khách hàng, đem lại cho tôi căn hộ mang phong cách tân cổ điển và sang trọng. Tôi rất hài
                                        lòng.</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <script type="text/javascript">
                $(document).ready(function () {
                    $(".owl-testimonial-single").owlCarousel({
                        items: 1,
                        slideSpeed: 300,
                        autoPlay: 6000,
                        pagination: true,
                        navigation: true,
                        transitionStyle: "fade",
                        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                        lazyLoad: true,
                        itemsDesktop: [900, 1],
                        itemsDesktopSmall: [600, 1],
                        itemsTablet: [560, 1]
                    });
                });
            </script>
        </div>

        <!-- Doi tac -->
        <div class="ourClientsBlock">
            <div class="homeBlockTitle">ĐỐI TÁC</div>
            <div class="container">
                <div class="ourClientsWrap clear">
                    <div class="ourClientItem">
                        <a href="#" title="Đối tác 1" target="_blank">
                            <img
                                src="{{ asset('assets/image/page/doitac1.jpg') }}"
                                alt="Đối tác 1"/>
                        </a>
                    </div>
                    <div class="ourClientItem">
                        <a href="#" title="Đối tác 2" target="_blank">
                            <img
                                src="{{ asset('assets/image/page/doitac2.jpg') }}"
                                alt="Đối tác 2"/>
                        </a>
                    </div>
                    <div class="ourClientItem">
                        <a href="#" title="Đối tác 3" target="_blank">
                            <img
                                src="{{ asset('assets/image/page/doitac3.jpg') }}"
                                alt="Đối tác 3"/>
                        </a>
                    </div>
                    <div class="ourClientItem">
                        <a href="#" title="Đối tác 4" target="_blank">
                            <img
                                src="{{ asset('assets/image/page/doitac4.jpg') }}"
                                alt="Đối tác 4"/>
                        </a>
                    </div>
                    <div class="ourClientItem">
                        <a href="#" title="Đối tác 5" target="_blank">
                            <img
                                src="{{ asset('assets/image/page/doitac5.jpg') }}"
                                alt="Đối tác 5"/>
                        </a>
                    </div>
                    <div class="ourClientItem">
                        <a href="#" title="Đối tác 6" target="_blank">
                            <img
                                src="{{ asset('assets/image/page/doitac6.jpg') }}"
                                alt="Đối tác 5"/>
                        </a>
                    </div>
                </div>
            </div>
            <script>
                $(document).ready(function () {
                    $(".ourClientsWrap").owlCarousel({
                        items: 4,
                        slideSpeed: 300,
                        autoPlay: 6000,
                        pagination: false,
                        navigation: true,
                        transitionStyle: "fade",
                        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                        lazyLoad: true,
                        itemsDesktop: [992, 3],
                        itemsDesktopSmall: [767, 2],
                        itemsTablet: [460, 1]
                    });
                });
            </script>
        </div>
        <!-- contact footer -->
        <div class="homeContactBlock clear">
            <div class="homeOurLocation">
                <iframe
                        {{--https://embedgooglemaps.com/en/--}}
                        src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=XQ49%2BJM%20Ph%C3%BA%20La%2C%20H%C3%A0%20%C4%90%C3%B4ng%2C%20Hanoi%2C%20Vietnam+(Title)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed"
                        width="100%"
                    height="300"
                    frameborder="0"
                    style="border:0"
                    allowfullscreen>
                </iframe>
            </div>
            <div class="homeContactInfo"
                 style="background-image: url({{ asset('assets/image/page/contact.jpg') }});">
                <div class="homeContactInfoWrap">
                    <h3>LIÊN HỆ</h3>
                    <div class="contactInfo clear">
                        <div class="contactItem"><i class="iconLocation"></i>
                            <h4>Địa chỉ</h4>

                            <p id="js-uni-address">Văn phòng: V6-B20 Khu đô thị Văn Phú, Hà Đông
                                <br>
                                <br>
                                Xưởng sản xuất: Số 6: làng nghề Chàng Sơn, Thạch Thất</p>
                        </div>

                        <div class="contactItem"><i class="iconPhone"></i>

                            <h4>Phone</h4>

                            <p id="js-uni-phone">0976 420 322
                                <br>
                                <br>
                                <br>
                                <br>
                                0984 032 996</p>
                        </div>

                        <div class="contactItem"><i class="iconEmail"></i>

                            <h4>E-mail</h4>

                            <p id="js-uni-email">kimtung.neu@gmail.com
                                <br>
                                <br>
                                <br>
                                <br>
                                phuanhduckts@gmail.com</p>
                        </div>
                    </div>

                    <p><a class="sendEmailLink" href="mailto:youremail@bauhaus.com" id="js-uni-email-send-link">Gửi
                            Email</a></p>
                </div>
            </div>
        </div>
    </div>

    {{--mobile menu--}}
    @include('user/layouts/nav-mob')
</div>
{{--footer--}}
@include('user/layouts/footer-line')
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
