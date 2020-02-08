@include('user/layouts/header')
<body>
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

<div class="home page-template page-template-templ-home page-template-templ-home-php blog page-template-templ-portfolio-one-php">
    @include('user/layouts/nav-web')
    <div id="wrapper" class="width-float ">

        <div class="singleProjectWrap clear">
            <div class="singleProjectGallery">
                <a class="backToPortfolio"></a>
                <a href="javascript:void(0);" class="fullScreen"></a>
                <a href="javascript:void(0);" class="smallScreen"></a>
                <div class="owl-gallery-wrap">
                    <div class="item-img-gallery">
                        <img src="{{ asset('assets/image/product/product6/detail6-logo.jpg') }}"
                             class="img-responsive" alt="">
                    </div>
                    <div class="item-img-gallery">
                        <img src="{{ asset('assets/image/product/product6/detail2.jpg') }}"
                             class="img-responsive" alt="">
                    </div>
                    <div class="item-img-gallery">
                        <img src="{{ asset('assets/image/product/product6/detail3.jpg') }}"
                             class="img-responsive" alt="">
                    </div>
                    <div class="item-img-gallery">
                        <img src="{{ asset('assets/image/product/product6/detail4.jpg') }}"
                             class="img-responsive" alt="">
                    </div>
                    <div class="item-img-gallery">
                        <img src="{{ asset('assets/image/product/product6/detail5.jpg') }}"
                             class="img-responsive" alt="">
                    </div>
                </div>
                <div class="cover-thumbs">
                    <div class="cover-thumbs-2">
                        <div class="owl-gallery-thumb">
                            <div class="item-img-thumb active" data-pos="1">
                                <img src="{{ asset('assets/image/product/product6/detail6-logo.jpg') }}"
                                     class="img-responsive" alt="">
                            </div>
                            <div class="item-img-thumb " data-pos="2">
                                <img src="{{ asset('assets/image/product/product6/detail2.jpg') }}"
                                     class="img-responsive" alt="">
                            </div>
                            <div class="item-img-thumb " data-pos="3">
                                <img src="{{ asset('assets/image/product/product6/detail3.jpg') }}"
                                     class="img-responsive" alt="">
                            </div>
                            <div class="item-img-thumb " data-pos="4">
                                <img src="{{ asset('assets/image/product/product6/detail4.jpg') }}"
                                     class="img-responsive" alt="">
                            </div>
                            <div class="item-img-thumb " data-pos="5">
                                <img src="{{ asset('assets/image/product/product6/detail5.jpg') }}"
                                     class="img-responsive" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="singleProjectDesc">
                <h1>Thiết kế nội thất cao cấp cửa hàng quần áo Luxury Vũ Tuấn Nguyễn</h1>
                <div class="singleProjectDescWrap clear">
                    <div class="singleProjectDescItem"><i class="iconArea"></i><br/>
                        <p>50 m2</p><br/>
                    </div>
                    <br/>
                    <br/>
                    <div class="singleProjectDescItem"><i class="iconLocation"></i><br/>
                        <br/>
                        <p>Hà Nội</p><br/>
                    </div>
                    <br/>
                    <br/>
                    <div class="singleProjectDescItem"><i class="iconDate"></i><br/>
                        <br/>
                        <p>2019</p><br/>
                    </div>
                    <br/>
                </div>
                <div class="singleProjectDescText jspScrollable" tabindex="0">
                    <p>
                    <p><span style="font-size:16px;"><span style="font-family:Times New Roman,Times,serif;">Dự án: Thiết kế nội thất cao cấp cửa hàng quần áo Luxury Vũ Tuấn Nguyễn</span></span>
                    </p>

                    <p><span style="font-size:16px;"><span style="font-family:Times New Roman,Times,serif;">Chủ đầu tư: anh Tuấn</span></span>
                    </p>

                    <p><span style="font-size:16px;"><span style="font-family:Times New Roman,Times,serif;">386 Trần Khát Trân</span></span>
                    </p>

                    <p><span style="font-size:16px;"><span style="font-family:Times New Roman,Times,serif;">Thiết kế: KTS nội thất KLEVER HOUSE</span></span>
                    </p>

                    <p><span style="font-size:16px;"><span style="font-family:Times New Roman,Times,serif;">Không ngừng phát triển để mang đến nhiều không gian luxyry đẳng cấp, vs inox vàng kết hợp vs màu đen tạo ra sự sang trong nhất định, phào chỉ họa tiết điểm nhấn cho sự hoàng gia&nbsp;<span
                                        style="font-size:16px;"><span style="font-family:Times New Roman,Times,serif;">KLEVER HOUSE</span></span> mang lại.</span></span>
                    </p>
                    </p>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function () {
                $(".owl-gallery-wrap").owlCarousel({
                    items: 1,
                    slideSpeed: 300,
                    // autoPlay:6000,
                    pagination: true,
                    navigation: true,
                    transitionStyle: "fade",
                    navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                    lazyLoad: true,
                    itemsDesktop: [992, 1],
                    itemsDesktopSmall: [767, 1],
                    itemsTablet: [500, 1],
                    itemsScaleUp: false,
                    center: true,
                    slideBy: 1,

                    //Basic Speeds
                    paginationSpeed: 800,
                    rewindSpeed: 1000,

                    //Autoplay

                    stopOnHover: false,

                    // Navigation

                    rewindNav: true,
                    scrollPerPage: false,

                    //Pagination

                    // Responsive
                    responsive: true,
                    responsiveRefreshRate: 200,
                    responsiveBaseWidth: $('.owl-gallery-wrap'),
                });

                $(".owl-gallery-thumb").owlCarousel({
                    items: 6,
                    slideSpeed: 300,
                    autoPlay: false,
                    pagination: true,
                    navigation: false,
                    itemsDesktop: [992, 3],
                    itemsDesktopSmall: [767, 3],
                    itemsTablet: [500, 2],
                    itemsScaleUp: false,
                });
                $('.item-img-thumb').on('click', function (e) {
                    e.preventDefault();
                    var pos = $(this).data('pos');
                    if ($(this).hasClass('active')) {

                    } else {
                        $('.item-img-thumb').removeClass('active');
                        $(this).addClass('active');
                    }
                    $('.owl-gallery-wrap').trigger('owl.goTo', pos - 1);
                })
                $(".fullScreen").click(function () {
                    $(".singleProjectGallery").addClass("singleActive");
                    $(".singleProjectDesc").hide(500);
                    // $(".owl-gallery-wrap").onResize();
                });
                $(".smallScreen").click(function () {
                    $(".singleProjectGallery").removeClass("singleActive");
                    $(".singleProjectDesc").show(500);
                });
            })
        </script>
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
<script type="text/javascript">
    /*<![CDATA[*/
    jQuery(function ($) {
        jQuery(document).ready(function () {
            setTimeout(function () {
                $("body").append("<img style=\"display: none; with: 0px; height: 0px;\" rel=\"noindex,nofollow\"  />");
            }, 300);
        })
    });
    /*]]>*/
</script>
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
</body>
</html>
@include('user/layouts/footer')
