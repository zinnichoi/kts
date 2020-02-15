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
        <div class="container box-main" style="background: #fff;    min-height: Calc(100vh - 100px);">
            <div class="heading-box">
                <h1 class="title-on-page">Tuyển dụng</h1>
            </div>
            <div class="all-project-box">

{{--                <div class="item-news-2">--}}
{{--                    <div class="all-post">--}}
{{--                        <div class="image-post">--}}
{{--                            <a href="{{ url('career/1') }}">--}}
{{--                                <img class="img-responsive" src="{{ asset('assets/image/page/career-l1.jpg') }}" alt="Nhân viên kinh doanh bất động sản">--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="content-post">--}}
{{--                            <h4 class="all-title">--}}
{{--                                <a href="{{ url('career/1') }}">Nhân viên kinh doanh bất động sản</a>--}}
{{--                            </h4>--}}
{{--                            <div class="text-note-padding">--}}
{{--                                <p class="note-text width-100 block"><i class="fa fa-map-marker"></i>Điện Biên</p>--}}
{{--                                <p class="note-text width-100 block"><i class="fa fa-money"></i>5.000.000 - 15.000.000--}}
{{--                                </p>--}}
{{--                                <p class="note-text width-100 block"><i class="fa fa-calendar-check-o"></i>30-12-2017--}}
{{--                                </p>--}}

{{--                            </div>--}}

{{--                            <div class="button-text inline-block">--}}
{{--                                <a href="{{ url('career/1') }}">Xem chi tiết</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="item-news-2">--}}
{{--                    <div class="all-post">--}}
{{--                        <div class="image-post">--}}
{{--                            <a href="{{ url('career/1') }}">--}}
{{--                                <img class="img-responsive"--}}
{{--                                     src="{{ asset('assets/image/page/career-l2.jpg') }}"--}}
{{--                                     alt="Chuyên Viên Kinh Doanh Bất Động Sản">--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="content-post">--}}
{{--                            <h4 class="all-title">--}}
{{--                                <a href="{{ url('career/1') }}">Chuyên Viên Kinh Doanh Bất Động Sản</a>--}}
{{--                            </h4>--}}
{{--                            <div class="text-note-padding">--}}
{{--                                <p class="note-text width-100 block"><i class="fa fa-map-marker"></i>Hà Nội</p>--}}
{{--                                <p class="note-text width-100 block"><i class="fa fa-money"></i>Cạnh tranh</p>--}}
{{--                                <p class="note-text width-100 block"><i class="fa fa-calendar-check-o"></i>30-09-2015--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                            <div class="button-text inline-block">--}}
{{--                                <a href="{{ url('career/1') }}">Xem chi tiết</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

            </div>
            <div class="center">
            </div>
        </div>
    </div>
    @include('user/layouts/nav-mob')
    @include('user/layouts/footer-line')
</div>
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
