@include('user/layouts/header')
<body>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-112389681-1');
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
    <input type="hidden" id="status" value="{{ $status }}">
    <div id="wrapper" class="width-float ">
        <div class="inpage-blog">
            <section class="container">
                <div class="portfolio-v1">
                    <div class="wrapper">
                        <script src="{{ asset('assets/js/isotope-docs.min.js') }}"
                                type="text/javascript" charset="utf-8"></script>
                        <div class="big-demo go-wide" data-js="filtering-demo">
                            <div class="filter-button-group button-group js-radio-button-group">
                                <button class="button is-checked" data-filter="*">Tất cả</button>

                                <button id="complete-button" class="button" data-filter=".item-3204s">Đã hoàn thành</button>

                                <button id="incomplete-button" class="button" data-filter=".item-3205s">Chưa hoàn thành</button>
                            </div>
                            <div class="row">
                                <div class="grid effect-2">

                                    <div class="element-item item-3204s" data-category="item-3204s">
                                        <div class="img-product img-hover img-full height-34">
                                            <a href="{{ url('product/1') }}">
                                                <img src="{{ asset('assets/image/product/product1/detail1-logo.JPG') }}"
                                                     class="img-responsive"
                                                     alt="THIẾT KẾ NỘI THẤT CAO CẤP CHUNG CƯ SKY LAKE NHÀ ANH ĐỨC">
                                            </a>
                                        </div>
                                        <div class="caption-product">
                                            <h4>
                                                <a href="{{ url('product/1') }}">THIẾT KẾ NỘI THẤT CAO CẤP CHUNG CƯ SKY LAKE NHÀ ANH ĐỨC</a></h4>
                                        </div>
                                    </div>

                                    <div class="element-item item-3204s" data-category="item-3204s">
                                        <div class="img-product img-hover img-full height-34">
                                            <a href="{{ url('product/2') }}">
                                                <img src="{{ asset('assets/image/product/product2/detail2-logo.jpg') }}"
                                                     class="img-responsive"
                                                     alt="THIẾT KẾ NỘI THẤT CAO CẤP CHUNG CƯ IMPERIA NHÀ CHỊ HẠNH (Á HẬU)">
                                            </a>
                                        </div>
                                        <div class="caption-product">
                                            <h4>
                                                <a href="{{ url('product/2') }}">THIẾT KẾ NỘI THẤT CAO CẤP CHUNG CƯ IMPERIA NHÀ CHỊ HẠNH (Á HẬU)</a></h4>
                                        </div>
                                    </div>

                                    <div class="element-item item-3204s" data-category="item-3204s">
                                        <div class="img-product img-hover img-full height-34">
                                            <a href="{{ url('product/3') }}">
                                                <img src="{{ asset('assets/image/product/product3/detail3-logo.jpg') }}"
                                                     class="img-responsive"
                                                     alt="THIẾT KẾ NỘI THẤT CAO CẤP CHUNG CƯ GARDENIA ANH HƯNG">
                                            </a>
                                        </div>
                                        <div class="caption-product">
                                            <h4>
                                                <a href="{{ url('product/3') }}">THIẾT KẾ NỘI THẤT CAO CẤP CHUNG CƯ GARDENIA ANH HƯNG</a></h4>
                                        </div>
                                    </div>

                                    <div class="element-item item-3204s" data-category="item-3204s">
                                        <div class="img-product img-hover img-full height-34">
                                            <a href="{{ url('product/4') }}">
                                                <img src="{{ asset('assets/image/product/product4/detail4-logo.jpg') }}"
                                                     class="img-responsive"
                                                     alt="THIẾT KẾ NỘI THẤT CAO CẤP CHUNG CƯ SUNSHINE ANH TÙNG">
                                            </a>
                                        </div>
                                        <div class="caption-product">
                                            <h4>
                                                <a href="{{ url('product/4') }}">THIẾT KẾ NỘI THẤT CAO CẤP CHUNG CƯ SUNSHINE ANH TÙNG</a></h4>
                                        </div>
                                    </div>

                                    <div class="element-item item-3204s" data-category="item-3204s">
                                        <div class="img-product img-hover img-full height-34">
                                            <a href="{{ url('product/5') }}">
                                                <img src="{{ asset('assets/image/product/product5/detail5-logo.jpg') }}"
                                                     class="img-responsive"
                                                     alt="THIẾT KẾ NỘI THẤT CAO CẤP CHUNG CƯ IMPERIA CHỊ TRANG">
                                            </a>
                                        </div>
                                        <div class="caption-product">
                                            <h4>
                                                <a href="{{ url('product/5') }}">THIẾT KẾ NỘI THẤT CAO CẤP CHUNG CƯ IMPERIA CHỊ TRANG</a></h4>
                                        </div>
                                    </div>

                                    <div class="element-item item-3204s" data-category="item-3204s">
                                        <div class="img-product img-hover img-full height-34">
                                            <a href="{{ url('product/6') }}">
                                                <img src="{{ asset('assets/image/product/product6/detail6-logo.jpg') }}"
                                                     class="img-responsive"
                                                     alt="THIẾT KẾ NỘI THẤT CAO CẤP CỬA HÀNG QUẦN ÁO LUXURY VŨ TUẤN NGUYỄN">
                                            </a>
                                        </div>
                                        <div class="caption-product">
                                            <h4>
                                                <a href="{{ url('product/6') }}">THIẾT KẾ NỘI THẤT CAO CẤP CỬA HÀNG QUẦN ÁO LUXURY VŨ TUẤN NGUYỄN</a></h4>
                                        </div>
                                    </div>

                                    <div class="element-item item-3204s" data-category="item-3204s">
                                        <div class="img-product img-hover img-full height-34">
                                            <a href="{{ url('product/7') }}">
                                                <img src="{{ asset('assets/image/product/product7/detail7-logo.jpg') }}"
                                                     class="img-responsive"
                                                     alt="THIẾT KẾ NỘI THẤT CAO CẤP CHUNG CƯ GREEN BAY ANH PHONG">
                                            </a>
                                        </div>
                                        <div class="caption-product">
                                            <h4>
                                                <a href="{{ url('product/7') }}">THIẾT KẾ NỘI THẤT CAO CẤP CHUNG CƯ GREEN BAY ANH PHONG</a></h4>
                                        </div>
                                    </div>

                                    <div class="element-item item-3204s" data-category="item-3204s">
                                        <div class="img-product img-hover img-full height-34">
                                            <a href="{{ url('product/8') }}">
                                                <img src="{{ asset('assets/image/product/product8/detail8-logo.jpg') }}"
                                                     class="img-responsive"
                                                     alt="THIẾT KẾ NỘI THẤT CAO CẤP CHUNG CƯ FLC2 ANH ĐƯƠNG">
                                            </a>
                                        </div>
                                        <div class="caption-product">
                                            <h4>
                                                <a href="{{ url('product/8') }}">THIẾT KẾ NỘI THẤT CAO CẤP CHUNG CƯ FLC2 ANH ĐƯƠNG</a></h4>
                                        </div>
                                    </div>

                                    <div class="element-item item-3204s" data-category="item-3204s">
                                        <div class="img-product img-hover img-full height-34">
                                            <a href="{{ url('product/9') }}">
                                                <img src="{{ asset('assets/image/product/product9/detail9-logo.jpg') }}"
                                                     class="img-responsive"
                                                     alt="THIẾT KẾ NỘI THẤT CAO CẤP CHUNG CƯ ANH ĐỨC HÀO NAM">
                                            </a>
                                        </div>
                                        <div class="caption-product">
                                            <h4>
                                                <a href="{{ url('product/9') }}">THIẾT KẾ NỘI THẤT CAO CẤP CHUNG CƯ ANH ĐỨC HÀO NAM</a></h4>
                                        </div>
                                    </div>

                                    <div class="element-item item-3204s" data-category="item-3204s">
                                        <div class="img-product img-hover img-full height-34">
                                            <a href="{{ url('product/10') }}">
                                                <img src="{{ asset('assets/image/product/product10/detail10-logo.jpg') }}"
                                                     class="img-responsive"
                                                     alt="THIẾT KẾ NỘI THẤT CAO CẤP CHUNG CƯ FLC CHỊ HẠNH">
                                            </a>
                                        </div>
                                        <div class="caption-product">
                                            <h4>
                                                <a href="{{ url('product/10') }}">THIẾT KẾ NỘI THẤT CAO CẤP CHUNG CƯ FLC CHỊ HẠNH</a></h4>
                                        </div>
                                    </div>

                                    <div class="element-item item-3204s" data-category="item-3204s">
                                        <div class="img-product img-hover img-full height-34">
                                            <a href="{{ url('product/11') }}">
                                                <img src="{{ asset('assets/image/product/product11/detail11-logo.jpg') }}"
                                                     class="img-responsive"
                                                     alt="THIẾT KẾ QUÁN CAFE VĂN QUÁN">
                                            </a>
                                        </div>
                                        <div class="caption-product">
                                            <h4>
                                                <a href="{{ url('product/11') }}">THIẾT KẾ QUÁN CAFE VĂN QUÁN</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="paginate-page">
                                </div>
                            </div>
                        </div>

                        <script>
                            window.onload = function () {
                                // init Isotope
                                var $grid = $('.grid').isotope({
                                    // options
                                });
                                // filter items on button click
                                $('.filter-button-group').on('click', 'button', function () {
                                    if ($(this).hasClass('is-checked')) {

                                    } else {
                                        $('.filter-button-group button').removeClass('is-checked');
                                        $(this).addClass('is-checked');
                                    }
                                    var filterValue = $(this).attr('data-filter');
                                    $grid.isotope({filter: filterValue});
                                });

                                if ($('#status').val() === 'complete') {
                                    $( "#complete-button" ).trigger( "click" );
                                }
                                if ($('#status').val() === 'incomplete') {
                                    $( "#incomplete-button" ).trigger( "click" );
                                }

                            };
                        </script>
                    </div>
                </div>
            </section>
        </div> <!-- End content page -->
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

<!-- Mirrored from w3ni601.nanoweb.com.vn/san-pham-nc3203.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 14:36:29 GMT -->
</html>
@include('user/layouts/footer')
