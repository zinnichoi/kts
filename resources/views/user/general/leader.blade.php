@include('user/layouts/header')
<body>
<div class="home page-template page-template-templ-home page-template-templ-home-php blog page-template-templ-portfolio-one-php">
    @include('user/layouts/nav-web')
    <div id="wrapper" class="width-float ">
        <section class="container">
            <div class="testimonialsBlock">
                <div class="homeBlockTitle">GIỚI THIỆU BAN LÃNH ĐẠO</div>
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
                                            <strong>Mr Trần Kim Tùng</strong>
                                            <p style="word-wrap: break-word;">Giám Đốc</p></div>
                                        <p style="word-wrap: break-word; color: #FFFFFF;">
                                            <p>Phone: 0976 420 322</p>
                                            <p>Email: kimtung.neu@gmail.com</p>

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
                                            <strong>Mr Phú Anh Đức</strong>
                                            <p style="word-wrap: break-word;">Phó Giám Đốc</p></div>
                                        <p style="word-wrap: break-word; color: #FFFFFF;">
                                            <p>Phone: 0984 032 996</p>
                                            <p>Email: phuanhduckts@gmail.com</p>
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
                                            <strong>Mr Lê Ngọc Sơn</strong>
                                            <p style="word-wrap: break-word;">Chuyên Viên Kĩ Thuật</p></div>
                                        <p style="word-wrap: break-word; color: #FFFFFF;">
                                            <p>Phone: 0334 259 108</p>
                                            <p>Email: lengocson1502@gmail.com</p>
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
</body>
</html>
@include('user/layouts/footer')
