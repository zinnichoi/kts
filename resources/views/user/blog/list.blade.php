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
        <div class="inpage-blog">
            <section class="container">
                <div class="portfolio-v1">
                    <div class="wrapper">
                        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/component.css') }}"/>
                        <script type="text/javascript" src="{{ asset('assets/js/masonry.pkgd.min.js') }}"></script>
                        <script type="text/javascript" src="{{ asset('assets/js/imagesloaded.js') }}"></script>
                        <div class="list-album">
                            <div class="container" data-js="filtering-demo">
                                <div class="filter-button-group button-group js-radio-button-group">
                                    <a href="javascript:void(0)" class="button is-checked" data-filter="*">Tin tức</a>

                                    <a href="#" class="button " data-filter=".item-3221s">Tin tức chung</a>

                                    <a href="#" class="button " data-filter=".item-3222s">Mẹo trang trí</a>

                                    <a href="#" class="button " data-filter=".item-3223s">Phong thủy</a>
                                </div>
                                <div class="row">
                                    <ul class="grid effect-2" id="grid" data-masonry='{ "itemSelector": ".grid-item"}'>
                                        <li class="item-news-blog grid-item item-3221s" data-category="item-3221s">
                                            <a href="" rel="group-1" class="fancybox">
                                                <img src="{{ asset('assets/image/page/blog-l1.jpg') }}"
                                                     alt="20 điều cần biết để tránh khi thiết kế và thi công nội thất"/>
                                            </a>
                                            <h2>
                                                <a href="">20 điều cần biết để tránh khi thiết kế và thi công nội
                                                    thất</a>
                                                <p class="date-news">
                                                    <i class="fa fa-calendar"></i> 07/12/2017
                                                </p>
                                            </h2>
                                        </li>
                                        <li class="item-news-blog grid-item item-3221s" data-category="item-3221s">
                                            <a href="" rel="group-1" class="fancybox">
                                                <img src="{{ asset('assets/image/page/blog-l2.jpg') }}"
                                                     alt="20 điều cần biết để tránh khi thiết kế và thi công nội thất"/>
                                            </a>
                                            <h2>
                                                <a href="">20 điều cần biết để tránh khi thiết kế và thi công nội
                                                    thất</a>
                                                <p class="date-news">
                                                    <i class="fa fa-calendar"></i> 07/12/2017 </p>
                                            </h2>
                                        </li>
                                        <li class="item-news-blog grid-item item-3221s" data-category="item-3221s">
                                            <a href="" rel="group-1" class="fancybox">
                                                <img src="{{ asset('assets/image/page/blog-l3.jpg') }}"
                                                     alt="20 điều cần biết để tránh khi thiết kế và thi công nội thất"/>
                                            </a>
                                            <h2>
                                                <a href="">20 điều cần biết để tránh khi thiết kế và thi công nội
                                                    thất</a>
                                                <p class="date-news">
                                                    <i class="fa fa-calendar"></i> 07/12/2017 </p>
                                            </h2>
                                        </li>
                                        <li class="item-news-blog grid-item item-3221s" data-category="item-3221s">
                                            <a href="" rel="group-1" class="fancybox">
                                                <img src="{{ asset('assets/image/page/blog-l4.jpg') }}"
                                                     alt="20 điều cần biết để tránh khi thiết kế và thi công nội thất"/>
                                            </a>
                                            <h2>
                                                <a href="">20 điều cần biết để tránh khi thiết kế và thi công nội
                                                    thất</a>
                                                <p class="date-news">
                                                    <i class="fa fa-calendar"></i> 07/12/2017 </p>
                                            </h2>
                                        </li>
                                        <li class="item-news-blog grid-item item-3221s" data-category="item-3221s">
                                            <a href="" rel="group-1" class="fancybox">
                                                <img src="{{ asset('assets/image/page/blog-l5.jpg') }}"
                                                     alt="20 điều cần biết để tránh khi thiết kế và thi công nội thất"/>
                                            </a>
                                            <h2>
                                                <a href="">20 điều cần biết để tránh khi thiết kế và thi công nội
                                                    thất</a>
                                                <p class="date-news">
                                                    <i class="fa fa-calendar"></i> 07/12/2017 </p>
                                            </h2>
                                        </li>
                                        <li class="item-news-blog grid-item item-3221s" data-category="item-3221s">
                                            <a href="" rel="group-1" class="fancybox">
                                                <img src="{{ asset('assets/image/page/blog-l6.jpg') }}"
                                                     alt="20 điều cần biết để tránh khi thiết kế và thi công nội thất"/>
                                            </a>
                                            <h2>
                                                <a href="">20 điều cần biết để tránh khi thiết kế và thi công nội
                                                    thất</a>
                                                <p class="date-news">
                                                    <i class="fa fa-calendar"></i> 07/12/2017 </p>
                                            </h2>
                                        </li>
                                        <li class="item-news-blog grid-item item-3221s" data-category="item-3221s">
                                            <a href="" rel="group-1" class="fancybox">
                                                <img src="{{ asset('assets/image/page/blog-l7.png') }}"
                                                     alt="20 điều cần biết để tránh khi thiết kế và thi công nội thất"/>
                                            </a>
                                            <h2>
                                                <a href="">20 điều cần biết để tránh khi thiết kế và thi công nội
                                                    thất</a>
                                                <p class="date-news">
                                                    <i class="fa fa-calendar"></i> 07/12/2017 </p>
                                            </h2>
                                        </li>
                                        <li class="item-news-blog grid-item item-3221s" data-category="item-3221s">
                                            <a href="" rel="group-1" class="fancybox">
                                                <img src="{{ asset('assets/image/page/blog-l8.jpg') }}"
                                                     alt="First Home Premium Bình Dương giới thiệu sản phẩm và tri ân khách hàng_copy"/>
                                            </a>
                                            <h2>
                                                <a href="">First Home Premium Bình Dương giới thiệu sản phẩm và tri ân
                                                    khách hàng_copy</a>
                                                <p class="date-news">
                                                    <i class="fa fa-calendar"></i> 07/12/2017 </p>
                                            </h2>
                                        </li>
                                        <li class="item-news-blog grid-item item-3221s" data-category="item-3221s">
                                            <a href="" rel="group-1" class="fancybox">
                                                <img src="{{ asset('assets/image/page/blog-l9.png') }}"
                                                     alt="FDI vào bất đọng sản tăng gần 60%"/>
                                            </a>
                                            <h2>
                                                <a href="">FDI vào bất đọng sản tăng gần 60%</a>
                                                <p class="date-news">
                                                    <i class="fa fa-calendar"></i> 07/12/2017 </p>
                                            </h2>
                                        </li>
                                        <li class="item-news-blog grid-item item-3221s" data-category="item-3221s">
                                            <a href="" rel="group-1" class="fancybox">
                                                <img src="{{ asset('assets/image/page/blog-l10.jpg') }}"
                                                     alt="20 điều cần biết để tránh khi thiết kế và thi công nội thất"/>
                                            </a>
                                            <h2>
                                                <a href="">20 điều cần biết để tránh khi thiết kế và thi công nội
                                                    thất</a>
                                                <p class="date-news">
                                                    <i class="fa fa-calendar"></i> 04/12/2017 </p>
                                            </h2>
                                        </li>
                                        <li class="item-news-blog grid-item item-3221s" data-category="item-3221s">
                                            <a href="" rel="group-1" class="fancybox">
                                                <img src="{{ asset('assets/image/page/blog-l11.jpg') }}"
                                                     alt="20 điều cần biết để tránh khi thiết kế và thi công nội thất"/>
                                            </a>
                                            <h2>
                                                <a href="">20 điều cần biết để tránh khi thiết kế và thi công nội
                                                    thất</a>
                                                <p class="date-news">
                                                    <i class="fa fa-calendar"></i> 04/12/2017 </p>
                                            </h2>
                                        </li>
                                        <li class="item-news-blog grid-item item-3221s" data-category="item-3221s">
                                            <a href="" rel="group-1" class="fancybox">
                                                <img src="{{ asset('assets/image/page/blog-l12.jpg') }}"
                                                     alt="20 điều cần biết để tránh khi thiết kế và thi công nội thất"/>
                                            </a>
                                            <h2>
                                                <a href="">20 điều cần biết để tránh khi thiết kế và thi công nội
                                                    thất</a>
                                                <p class="date-news">
                                                    <i class="fa fa-calendar"></i> 04/12/2017 </p>
                                            </h2>
                                        </li>
                                    </ul>
                                </div>
                                <script>
                                    window.onload = function () {
                                        var $grid = $('.grid').imagesLoaded(function () {
                                            // init Masonry after all images have loaded
                                            $grid.masonry({
                                                itemSelector: '.grid-item',
                                                percentPosition: true,
                                            });
                                        });
                                    };
                                </script>
                                <style>
                                    .home {
                                        background: #fff;
                                    }

                                    .grid li {
                                        opacity: 1;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div> <!-- End content page -->
    </div>
    @include('user/layouts/nav-mob')
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
</div>
</body>
</html>
@include('user/layouts/footer')
