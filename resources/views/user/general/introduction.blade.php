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

<div class="home page-template page-template-templ-home page-template-templ-home-php blog page-template-templ-portfolio-one-php">
    @include('user/layouts/nav-web')
    <div id="wrapper" class="width-float ">
        <section>
            <div class="screen1" style="background-image: url({{ asset('assets/image/page/intro-background.png') }});">
            </div>
            <div class="ourStory">
                <div class="wrapper">
                    <div class="storyWrap clear">
                        <div class="btgrid">
                            <div class="row row-1">
                                <div class="col col-md-4">
                                    <div class="content">
                                        <p><img alt="" height="400"
                                                src="{{ asset('assets/image/page/intro-avatar.jpg') }}"
                                                width="400"/>
                                        </p>
                                    </div>
                                </div>

                                <div class="col col-md-8">
                                    <div class="content">
                                        <p><strong>KLEVER STUDIO&nbsp;gửi lời chào và cảm ơn chân thành đến quý khách
                                                hàng đã quan tâm và sử dụng các dịch vụ và sản phẩm chất lượng cao của
                                                công ty chúng tôi trong thời gian qua.</strong></p>

                                        <p>Với xu hướng phát triển kinh tế hiện nay, mức sống người dân ngày càng cao
                                            thì nhu cầu&nbsp;<strong>làm đẹp không gian
                                                sống</strong>&nbsp;và&nbsp;<strong>không gian nơi làm việc</strong>&nbsp;ngày
                                            càng được chú trọng. Nhưng để có một&nbsp;<em>không gian đẹp</em>, đòi hỏi
                                            phải hội đủ nhiều yếu tố, từ việc sắp xếp vị trí của&nbsp;<strong>đồ dùng
                                                nội thất</strong>, cũng như hình dáng - kích thước của từng sản phẩm,
                                            đến cách phối màu, phối ánh sáng ...&nbsp; sao cho hài hòa, hợp lý theo từng
                                            không gian nhất định. Cộng với máy móc công nghệ hiện đại và bàn tay khéo
                                            léo, cùng khối óc sáng tạo của những người thợ yêu nghề, sẽ cho ra những sản
                                            phẩm như ý, làm hài lòng khách hàng.</p>

                                        <p>Nhằm đem lại những sản phẩm nội thất giá trị nhất cho quý khách
                                            hàng,&nbsp;<strong>KLEVER STUDIO</strong>là một trong những đối tác mà quý
                                            khách hàng có thể tin tưởng để lựa chọn.&nbsp;<strong>Nội thất
                                                BigHome</strong>&nbsp;chuyên hoạt động trong lĩnh vực thiết kế và thi
                                            công nội thất đã nhiều năm, đảm nhận thi công từ A - Z.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p><strong>Lịch sử hình thành</strong></p>

                        <p><strong>Không chỉ là nghệ thuật kiến trúc…</strong>&nbsp;…Mà đó sự hòa quyện giữa nghệ thuật
                            trang trí, nghệ thuật thị giác, văn học và âm nhạc… các nhà thiết kế thiết kế nội thất
                            Bighome đã tạo ra một xu hướng hoàn toàn mới trong việc bài trí không gian sống hiện đại,
                            sang trọng…Là đơn vị tiên phong trong lĩnh vực sản xuất thiết kế và thi công nội thất. Hơn
                            15 năm tạo dấu ấn với các công trình độc đáo mang phong cách riêng…</p>

                        <p><strong>Tổ ấm là nơi mỗi chốn tìm về……</strong>&nbsp;Nơi thưởng thức, tận hưởng và hòa mình
                            vào những sở thích riêng có của tâm hồn… Nơi tràn ngập tiếng cười, ấm êm tình thân và những
                            khoảng lặng yên bình trong cuộc sống</p>

                        <p><strong>Với sứ mệnh của mình</strong>&nbsp;Bighome luôn hướng tới sáng tạo các không gian
                            sống tiện nghi, sang trọng và độc đáo. Những không gian sống mang đậm nét cá tính của chủ
                            nhân - nơi thăng hoa được tiếp sức sau giấc ngủ yên lành…</p>

                        <p><strong>Năm 2004 …</strong>&nbsp;Năm đánh dấu sự khởi đầu Bighome tại Việt Nam…Những thiết kế
                            thời kỳ đầu đã tạo được sự khác biệt với không gian phóng khoáng trong cách trang trí và
                            phối đồ mạng đậm hơi thở của cuộc sống hiện đại…</p>

                        <p><strong>Hành trình tiếp nối…</strong></p>

                        <p><strong>Những năm 2008</strong>, thời kỳ thị trường Bất động sản cực kỳ sôi động. Các thiết
                            kế kết hợp giữa hiện đại và tân cổ điển của Bighome ngày càng được ưa chuộng…Công trình nối
                            tiếp công trình… những tác phẩm nghệ thuật được các kiến trúc sư tài năng hoàn thành không
                            chỉ mang đến những không gian nội thất ấn tượng mà còn là sự khởi đầu của những trào lưu
                            trang trí nội thất tại Việt Nam… Hiện tại và tương lai… Những không gian nội thất đem đến
                            cảm giác thoải mái, không quá cầu kỳ, tạo cảm giác gần gũi, thân thuộc mà vẫn giữ được nét
                            sang trọng và lịch lãm…</p>

                        <p><strong>Bước vào một căn phòng cũng là mở ra một thế giới…</strong>&nbsp;Dẫn đầu trào lưu nội
                            thất tại Việt Nam Những mẫu thiết kế của Bighome như một một bản giao hưởng nhẹ nhàng, sâu
                            sắc luôn được tiếp nối trong hành trình kiến tạo không gian sống cho từng ngôi nhà… Đội ngũ
                            thiết kế chuyên nghiệp Kế thừa tài sản cực kỳ quý giá là những mẫu thiết kế kinh điển của
                            trường phái nội thất Châu Âu phối hợp giữa hiện đại và truyền thống và gu thẩm mỹ thời
                            thượng, các nhà thiết kế nội thất Bighome đã và đang phát huy tới mức cao nhất các tác phẩm
                            nghệ thuật của mình… Kinh nghiệm thiết kế Trải nghiệm qua hàng ngàn công trình lớn nhỏ tại
                            Việt Nam… như: Ecopark, Vinhome (Vinhomes Riverside), Vinhome Thăng Long…</p>

                        <p><strong>Nghệ thuật chế tác mang hơi thở của cuộc sống hiện đại</strong></p>

                        <p><strong>Tính đồng bộ:</strong>&nbsp;Được thể hiện từ những chi tiết nhỏ nhất như góc cạnh,
                            đường nét, hoa văn cho tới các vật dụng nội thất trong ngôi nhà. Với đội ngũ chuyên gia hơn
                            14 năm kinh nghiệm đồng hành cùng các mẫu thiết kế tinh xảo, các sản phẩm của Bighome luôn
                            mang trong mình giá trị của một tác phẩm nghệ thuật… Công nghệ sản xuất hiện đại: Với quy mô
                            nhà máy hơn 3.000m2… Các sản phẩm được sản xuất trên dây chuyền, máy móc tiên tiến, hiện
                            đại.</p>

                        <p><strong>Vật liệu:</strong>&nbsp;Các sản phẩm gỗ như Sồi đỏ, sồi trắng, óc chó…được nhập hoàn
                            toàn từ các nhà máy tại Mỹ…Với điều kiện khí hậu, thổ nhưỡng nhiệt đới đặc thù của Nam Mỹ,
                            các nguyên liệu gỗ này rất phù hợp với khí hậu Việt Nam.<span
                                style="font-family:Times New Roman,Times,serif;"><span
                                    style="font-size:16px;"></span></span></p>

                        <p style="text-align:center"><img alt="" height="462" src="{{ asset('assets/image/page/intro-canhonho.jpg') }}" width="770"/></p>

                        <p>&nbsp;</p>
                    </div>
                </div>
            </div>

            <div class="ourTeam">
                <!-- our team -->
            </div>
            <!-- Doi tac -->
            <div class="ourPartners" style="float: left;width: 100%;    padding: 45px 0 70px 0;">
                <div class="ourClientsBlock">
                </div>
            </div>
            <style>
                .ourClientsBlock .homeBlockTitle:after {
                    display: none;
                }
            </style>
        </section>
        <style>
            .home {
                background-color: #fff;
            }
        </style>
    </div>
    @include('user/layouts/nav-mob')
</div>
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
