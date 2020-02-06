@include('user/layouts/header')
<body>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-9881028-7', 'auto');
    ga('send', 'pageview');

</script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MD6GV2F');</script>
<!-- End Google Tag Manager -->
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MD6GV2F"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-112389681-1');
</script>
<div class="home page-template page-template-templ-home page-template-templ-home-php home">
    <header class="header2 clear background--dark">
        <a class="logo" href="http://w3ni601.nanoweb.com.vn/" title="Web Kiến trúc TOAM">
            <img alt="Về trang chủ" class="img-responsive" src="http://w3ni601.nanoweb.com.vn/mediacenter/media/images/718/logo/brand-1512443407.png"/>
        </a>

        <a href="javascript:void(0);" title="Menu" class="showMobileMenu">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </a>
        <div class="mainmenu clear">
            <ul id="menu-menu-1" class=" clear">
                <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-72">
                    <a  href="{{ url('home') }}" title="Trang chủ" >Trang chủ</a>
                </li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-home menu-item-72">
                    <a  href="javascript:void(0)" title="Giới thiệu" >Giới thiệu</a>
                    <ul class="sub-menu">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-123">
                            <a href="http://w3ni601.nanoweb.com.vn/gioi-thieu.html" title="Giới thiệu chung">
                                Giới thiệu chung                     </a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-123">
                            <a href="http://w3ni601.nanoweb.com.vn/phong-cach-thiet-ke-pde2275.html" title="Phong cách thiết kế">
                                Phong cách thiết kế                     </a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-123">
                            <a href="http://w3ni601.nanoweb.com.vn/gioi-thieu-ban-lanh-dao-pde2263.html" title="Giới thiệu ban lãnh đạo">
                                Giới thiệu ban lãnh đạo                     </a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-123">
                            <a href="http://w3ni601.nanoweb.com.vn/cac-doi-tac-chien-luoc-pde2264.html" title="Các đối tác chiến lược">
                                Các đối tác chiến lược                     </a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-123">
                            <a href="http://w3ni601.nanoweb.com.vn/cac-bang-khen-giai-thuong-pde2265.htmltype 2" title="Các bằng khen, giải thưởng">
                                Các bằng khen, giải thưởng                     </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-home menu-item-72">
                    <a  href="{{ url('product') }}" title="Sản phẩm" >Sản phẩm</a>
                    <ul class="sub-menu">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-123">
                            <a href="http://w3ni601.nanoweb.com.vn/da-hoan-thanh-nc3204.html" title="Đã hoàn thành">
                                Đã hoàn thành                     </a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-123">
                            <a href="http://w3ni601.nanoweb.com.vn/chua-hoan-thanh-nc3205.html" title="Chưa hoàn thành">
                                Chưa hoàn thành                     </a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-123">
                            <a href="http://w3ni601.nanoweb.com.vn/video.html" title="Video">
                                Video                     </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-home menu-item-72">
                    <a  href="http://w3ni601.nanoweb.com.vn/du-an-nc3209.html" title="Dịch vụ" >Dịch vụ</a>
                </li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-home menu-item-72">
                    <a  href="http://w3ni601.nanoweb.com.vn/tin-tuc-nc3202.html" title="Blog" >Blog</a>
                </li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-home menu-item-72">
                    <a  href="http://w3ni601.nanoweb.com.vn/tuyen-dung.html" title="Tuyển dụng" >Tuyển dụng</a>
                </li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-home menu-item-72">
                    <a  href="http://w3ni601.nanoweb.com.vn/lien-he.html" title="Liên hệ" >Liên hệ</a>
                </li>
            </ul>

        </div>
    </header>    <div id="wrapper" class="width-float ">

        <img src="http://w3ni601.nanoweb.com.vn/thong-ke.jpg" width="0" height="0" style="width: 0; height: 0; display: none;" rel="nofollow" alt="Thong ke"/>    <div class="banner-slider-index">
            <div class="tp-banner-container">
                <div class="tp-banner" >

                    <ul>    <!-- SLIDE  -->
                        <li
                                data-transition="fade"
                                data-slotamount="7" data-masterspeed="1500">
                            <!-- MAIN IMAGE -->
                            <img src="http://w3ni601.nanoweb.com.vn/mediacenter/media/files/718/banners/164_1512399888_9195a25641056953.jpg"   alt="slide 1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
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
                                <div class="homeScreenDesc">
                                    <span>Architecture studio est. 1991</span>
                                    <h2>Good design is as little  design as possible</h2>
                                    <a class="seeMoreLink" href="#">SEE MORE</a>
                                </div>        </div>
                        </li>
                        <li
                                data-transition="fade"
                                data-slotamount="7" data-masterspeed="1500">
                            <!-- MAIN IMAGE -->
                            <img src="http://w3ni601.nanoweb.com.vn/mediacenter/media/files/718/banners/858_1512622303_4735a28c8df7db79.jpg"   alt="background 2"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
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
                                 style="z-index: 21">        </div>
                        </li>
                    </ul>



                    <script type="text/javascript">
                        $(document).ready(function() {
                            $('.tp-banner').revolution({
                                delay:9000,
                                startwidth:1920,
                                startheight:600,
                                hideThumbs:10,
                                fullScreen:"on",
                                fullScreenOffsetContainer: "on"
                            });

                        });
                    </script>
                </div>
            </div>
        </div>
        <div class="aboutUsBlock clear">

            <!-- ve chung toi -->
            <div class="aboutUsDesc">
                <h3>Tổng quan về TOAM STUDIO</h3>
                <p> Với xu hướng phát triển kinh tế hiện nay, mức sống người dân ngày càng cao thì nhu cầu&nbsp;làm đẹp không gian sống&nbsp;và&nbsp;không gian nơi làm việc&nbsp;ngày càng được chú trọng. Nhưng để có một&nbsp;không gian đẹp, đòi hỏi phải hội đủ nhiều yếu tố, từ việc sắp xếp vị trí của&nbsp;đồ dùng nội thất, cũng như hình dáng - kích thước của từng sản phẩm, đến cách phối màu, phối ánh sáng ...&nbsp; sao cho hài hòa, hợp lý theo từng không gian nhất định.

                    Xem thêm
                </p>
                <a class="learnMoreLink" href="http://w3ni601.nanoweb.com.vn/gioi-thieu">Xem thêm<i></i></a>
            </div>    </div>
        <!-- Du an hot -->
        <div class="portfolioBlock clear">
            <div class="item-portfolio">
                <div class="img-item-portfolio">
                    <a href="http://w3ni601.nanoweb.com.vn/thiet-ke-noi-that-chung-cu-cao-cap-times-city-nd6122.html">
                        <img src="http://w3ni601.nanoweb.com.vn/mediacenter/media/images/default/s800_800/lzpngsquare.png" data-original="http://w3ni601.nanoweb.com.vn/mediacenter/media/images/718/news/ava/s800_800/chon-noi-that-phu-hop-cho-nha-dep-03-1512634059.jpg" class="img-responsive imglazyload" alt="Thiết kế nội thất chung cư cao cấp Times City">
                    </a>
                </div>
                <div class="title-item-portfolio">
                    <h2>
                        <a href="http://w3ni601.nanoweb.com.vn/thiet-ke-noi-that-chung-cu-cao-cap-times-city-nd6122.html" title="Thiết kế nội thất chung cư cao cấp Times City">Thiết kế nội thất chung cư cao cấp Times City</a>
                    </h2>
                    <div class="des-news-incate">
                        <p style="display: block;">
                            Dự án: Vẻ đẹp sang trọng, lịch lãm căn hộ nhà Anh Long - Time City
                            Chủ đầu tư: Anh Long
                            Căn hộ: Chung cư Times City
                            Thiết...                </p>
                    </div>
                    <a href="http://w3ni601.nanoweb.com.vn/thiet-ke-noi-that-chung-cu-cao-cap-times-city-nd6122.html" class="view-more"><span>Xem thêm <i></i></span></a>
                </div>
                <div class="portfolioItemOverlay"></div>
            </div>
            <div class="item-portfolio">
                <div class="img-item-portfolio">
                    <a href="http://w3ni601.nanoweb.com.vn/thiet-ke-noi-that-chung-cu-cao-cap-times-city-nd6137.html">
                        <img src="http://w3ni601.nanoweb.com.vn/mediacenter/media/images/default/s800_800/lzpngsquare.png" data-original="http://w3ni601.nanoweb.com.vn/mediacenter/media/images/718/news/ava/s800_800/11-1512405901.jpg" class="img-responsive imglazyload" alt="Thiết kế nội thất chung cư cao cấp Times City">
                    </a>
                </div>
                <div class="title-item-portfolio">
                    <h2>
                        <a href="http://w3ni601.nanoweb.com.vn/thiet-ke-noi-that-chung-cu-cao-cap-times-city-nd6137.html" title="Thiết kế nội thất chung cư cao cấp Times City">Thiết kế nội thất chung cư cao cấp Times City</a>
                    </h2>
                    <div class="des-news-incate">
                        <p style="display: block;">
                            Dự án: Vẻ đẹp sang trọng, lịch lãm căn hộ nhà Anh Long - Time City
                            Chủ đầu tư: Anh Long
                            Căn hộ: Chung cư Times City
                            Thiết...                </p>
                    </div>
                    <a href="http://w3ni601.nanoweb.com.vn/thiet-ke-noi-that-chung-cu-cao-cap-times-city-nd6137.html" class="view-more"><span>Xem thêm <i></i></span></a>
                </div>
                <div class="portfolioItemOverlay"></div>
            </div>
            <div class="item-portfolio">
                <div class="img-item-portfolio">
                    <a href="http://w3ni601.nanoweb.com.vn/thiet-ke-noi-that-chung-cu-cao-cap-park-hill-nd6138.html">
                        <img src="http://w3ni601.nanoweb.com.vn/mediacenter/media/images/default/s800_800/lzpngsquare.png" data-original="http://w3ni601.nanoweb.com.vn/mediacenter/media/images/718/news/ava/s800_800/item5-480x480-1512405885.png" class="img-responsive imglazyload" alt="Thiết kế nội thất chung cư cao cấp Park Hill ">
                    </a>
                </div>
                <div class="title-item-portfolio">
                    <h2>
                        <a href="http://w3ni601.nanoweb.com.vn/thiet-ke-noi-that-chung-cu-cao-cap-park-hill-nd6138.html" title="Thiết kế nội thất chung cư cao cấp Park Hill ">Thiết kế nội thất chung cư cao cấp Park Hill </a>
                    </h2>
                    <div class="des-news-incate">
                        <p style="display: block;">
                            Dự án: Vẻ đẹp sang trọng, lịch lãm căn hộ nhà Anh Long - Chung cư cao cấp Park Hill&nbsp;
                            Chủ đầu tư: Anh Long
                            Căn hộ:...                </p>
                    </div>
                    <a href="http://w3ni601.nanoweb.com.vn/thiet-ke-noi-that-chung-cu-cao-cap-park-hill-nd6138.html" class="view-more"><span>Xem thêm <i></i></span></a>
                </div>
                <div class="portfolioItemOverlay"></div>
            </div>
            <div class="item-portfolio">
                <div class="img-item-portfolio">
                    <a href="http://w3ni601.nanoweb.com.vn/thiet-ke-noi-that-chung-cu-cao-cap-times-city-nd6139.html">
                        <img src="http://w3ni601.nanoweb.com.vn/mediacenter/media/images/default/s800_800/lzpngsquare.png" data-original="http://w3ni601.nanoweb.com.vn/mediacenter/media/images/718/news/ava/s800_800/grid4-960x960-1512405860.png" class="img-responsive imglazyload" alt="Thiết kế nội thất chung cư cao cấp Times City">
                    </a>
                </div>
                <div class="title-item-portfolio">
                    <h2>
                        <a href="http://w3ni601.nanoweb.com.vn/thiet-ke-noi-that-chung-cu-cao-cap-times-city-nd6139.html" title="Thiết kế nội thất chung cư cao cấp Times City">Thiết kế nội thất chung cư cao cấp Times City</a>
                    </h2>
                    <div class="des-news-incate">
                        <p style="display: block;">
                            Dự án: Vẻ đẹp sang trọng, lịch lãm căn hộ nhà Anh Long - Time City
                            Chủ đầu tư: Anh Long
                            Căn hộ: Chung cư Times City
                            Thiết...                </p>
                    </div>
                    <a href="http://w3ni601.nanoweb.com.vn/thiet-ke-noi-that-chung-cu-cao-cap-times-city-nd6139.html" class="view-more"><span>Xem thêm <i></i></span></a>
                </div>
                <div class="portfolioItemOverlay"></div>
            </div>
            <div class="item-portfolio">
                <div class="img-item-portfolio">
                    <a href="http://w3ni601.nanoweb.com.vn/thiet-ke-noi-that-chung-cu-cao-cap-times-city-nd6140.html">
                        <img src="http://w3ni601.nanoweb.com.vn/mediacenter/media/images/default/s800_800/lzpngsquare.png" data-original="http://w3ni601.nanoweb.com.vn/mediacenter/media/images/718/news/ava/s800_800/grid2-960x960-1512405831.png" class="img-responsive imglazyload" alt="Thiết kế nội thất chung cư cao cấp Times City">
                    </a>
                </div>
                <div class="title-item-portfolio">
                    <h2>
                        <a href="http://w3ni601.nanoweb.com.vn/thiet-ke-noi-that-chung-cu-cao-cap-times-city-nd6140.html" title="Thiết kế nội thất chung cư cao cấp Times City">Thiết kế nội thất chung cư cao cấp Times City</a>
                    </h2>
                    <div class="des-news-incate">
                        <p style="display: block;">
                            Dự án: Vẻ đẹp sang trọng, lịch lãm căn hộ nhà Anh Long - Time City
                            Chủ đầu tư: Anh Long
                            Căn hộ: Chung cư Times City
                            Thiết...                </p>
                    </div>
                    <a href="http://w3ni601.nanoweb.com.vn/thiet-ke-noi-that-chung-cu-cao-cap-times-city-nd6140.html" class="view-more"><span>Xem thêm <i></i></span></a>
                </div>
                <div class="portfolioItemOverlay"></div>
            </div>
            <div class="item-portfolio">
                <div class="img-item-portfolio">
                    <a href="http://w3ni601.nanoweb.com.vn/thiet-ke-noi-that-chung-cu-cao-cap-times-city-nd6143.html">
                        <img src="http://w3ni601.nanoweb.com.vn/mediacenter/media/images/default/s800_800/lzpngsquare.png" data-original="http://w3ni601.nanoweb.com.vn/mediacenter/media/images/710/news/ava/s800_800/du-lich-1-1-1511771006.jpg" class="img-responsive imglazyload" alt="Thiết kế nội thất chung cư cao cấp Times City">
                    </a>
                </div>
                <div class="title-item-portfolio">
                    <h2>
                        <a href="http://w3ni601.nanoweb.com.vn/thiet-ke-noi-that-chung-cu-cao-cap-times-city-nd6143.html" title="Thiết kế nội thất chung cư cao cấp Times City">Thiết kế nội thất chung cư cao cấp Times City</a>
                    </h2>
                    <div class="des-news-incate">
                        <p style="display: block;">
                            Dự án: Vẻ đẹp sang trọng, lịch lãm căn hộ nhà Anh Long - Time City
                            Chủ đầu tư: Anh Long
                            Căn hộ: Chung cư Times City
                            Thiết...                </p>
                    </div>
                    <a href="http://w3ni601.nanoweb.com.vn/thiet-ke-noi-that-chung-cu-cao-cap-times-city-nd6143.html" class="view-more"><span>Xem thêm <i></i></span></a>
                </div>
                <div class="portfolioItemOverlay"></div>
            </div>
        </div>    <!-- dich vu -->
        <div class="ourServiceBlock">
            <div class="homeBlockTitle">Dịch vụ của chúng tôi</div>
            <div class="ourServiceWrap clear">
                <div class="ourServiceItem">
                    <div class="ourServiceItem-img">
                        <a href="http://w3ni601.nanoweb.com.vn/du-an-nc10676.html">
                            <img src="http://w3ni601.nanoweb.com.vn/mediacenter/media/images/default/s400_0/lzpngrectangle1.png" data-original="http://w3ni601.nanoweb.com.vn/mediacenter/media/images/718/news/ava/s400_0/thiet-ke-nha-dep-2016-copy-1512640136.jpg" class="img-responsive imglazyload" alt="THIẾT KẾ NHÀ Ở">
                        </a>
                    </div>
                    <a href="http://w3ni601.nanoweb.com.vn/du-an-nc10676.html" class="overlay"></a>
                    <div class="ourServiceItemContent" style="top: 146px;">
                        <span>0<spam class="number_sell">1</spam></span>
                        <h4> <a href="http://w3ni601.nanoweb.com.vn/du-an-nc10676.html" title="THIẾT KẾ NHÀ Ở">THIẾT KẾ NHÀ Ở</a></h4>
                        <p style="word-wrap: break-word;">TOAM đồng hành cùng Khách hàng, chủ đầu tư tạo ra những không gian sống mang dấu ấn của mình và mang tính thẩm mỹ cao cùng chất lượng vượt trội
                        </p>
                    </div>
                </div>
                <div class="ourServiceItem">
                    <div class="ourServiceItem-img">
                        <a href="http://w3ni601.nanoweb.com.vn/du-an-nc10676.html">
                            <img src="http://w3ni601.nanoweb.com.vn/mediacenter/media/images/default/s400_0/lzpngrectangle1.png" data-original="http://w3ni601.nanoweb.com.vn/mediacenter/media/images/718/news/ava/s400_0/about-us-1512439756.jpg" class="img-responsive imglazyload" alt="THIẾT KẾ KIẾN TRÚC CẢNH QUAN">
                        </a>
                    </div>
                    <a href="http://w3ni601.nanoweb.com.vn/du-an-nc10676.html" class="overlay"></a>
                    <div class="ourServiceItemContent" style="top: 146px;">
                        <span>0<spam class="number_sell">1</spam></span>
                        <h4> <a href="http://w3ni601.nanoweb.com.vn/du-an-nc10676.html" title="THIẾT KẾ KIẾN TRÚC CẢNH QUAN">THIẾT KẾ KIẾN TRÚC CẢNH QUAN</a></h4>
                        <p style="word-wrap: break-word;">TOAM cung cấp dịch vụ thiết kế kiến trúc cảnh quan như: cảnh quan khu đô thị, cảnh quan sân vườn, nhà ở... giúp hoàn thiện và nâng cao thẩm mỹ cho dự án
                        </p>
                    </div>
                </div>
                <div class="ourServiceItem">
                    <div class="ourServiceItem-img">
                        <a href="http://w3ni601.nanoweb.com.vn/du-an-nc10676.html">
                            <img src="http://w3ni601.nanoweb.com.vn/mediacenter/media/images/default/s400_0/lzpngrectangle1.png" data-original="http://w3ni601.nanoweb.com.vn/mediacenter/media/images/718/news/ava/s400_0/gridimg4-1512439862.jpg" class="img-responsive imglazyload" alt="THIẾT KẾ CÔNG TRÌNH THƯƠNG MẠI">
                        </a>
                    </div>
                    <a href="http://w3ni601.nanoweb.com.vn/du-an-nc10676.html" class="overlay"></a>
                    <div class="ourServiceItemContent" style="top: 146px;">
                        <span>0<spam class="number_sell">1</spam></span>
                        <h4> <a href="http://w3ni601.nanoweb.com.vn/du-an-nc10676.html" title="THIẾT KẾ CÔNG TRÌNH THƯƠNG MẠI">THIẾT KẾ CÔNG TRÌNH THƯƠNG MẠI</a></h4>
                        <p style="word-wrap: break-word;">TOAM cung cấp dịch vụ thiết kế với những công trình thương mại như: nhà hàng, khách sạn, cafe với phong cách kiến trúc đa dạng, thẻ hiện rõ nét văn hoá của từng vùng miền
                        </p>
                    </div>
                </div>
                <div class="ourServiceItem">
                    <div class="ourServiceItem-img">
                        <a href="http://w3ni601.nanoweb.com.vn/du-an-nc10676.html">
                            <img src="http://w3ni601.nanoweb.com.vn/mediacenter/media/images/default/s400_0/lzpngrectangle1.png" data-original="http://w3ni601.nanoweb.com.vn/mediacenter/media/images/718/news/ava/s400_0/img-5-1512439907.jpg" class="img-responsive imglazyload" alt="HỢP TÁC THIẾT KẾ">
                        </a>
                    </div>
                    <a href="http://w3ni601.nanoweb.com.vn/du-an-nc10676.html" class="overlay"></a>
                    <div class="ourServiceItemContent" style="top: 146px;">
                        <span>0<spam class="number_sell">1</spam></span>
                        <h4> <a href="http://w3ni601.nanoweb.com.vn/du-an-nc10676.html" title="HỢP TÁC THIẾT KẾ">HỢP TÁC THIẾT KẾ</a></h4>
                        <p style="word-wrap: break-word;">TOAM đã và đang hợp tác với một số đơn vị thiết kế trong và ngoài nước để triển khai các dự án có quy mô lớn và tính chuyên môn cao
                        </p>
                    </div>
                </div>
                <div class="ourServiceItem">
                    <div class="ourServiceItem-img">
                        <a href="http://w3ni601.nanoweb.com.vn/du-an-nc10676.html">
                            <img src="http://w3ni601.nanoweb.com.vn/mediacenter/media/images/default/s400_0/lzpngrectangle1.png" data-original="http://w3ni601.nanoweb.com.vn/mediacenter/media/images/718/news/ava/s400_0/img-2-1512439937.jpg" class="img-responsive imglazyload" alt="SẢN XUẤT THI CÔNG">
                        </a>
                    </div>
                    <a href="http://w3ni601.nanoweb.com.vn/du-an-nc10676.html" class="overlay"></a>
                    <div class="ourServiceItemContent" style="top: 146px;">
                        <span>0<spam class="number_sell">1</spam></span>
                        <h4> <a href="http://w3ni601.nanoweb.com.vn/du-an-nc10676.html" title="SẢN XUẤT THI CÔNG">SẢN XUẤT THI CÔNG</a></h4>
                        <p style="word-wrap: break-word;">TOAM cung cấp dịch vụ thiết kế kiến trúc cảnh quan như: cảnh quan khu đô thị, cảnh quan sân vườn, nhà ở... giúp hoàn thiện và nâng cao thẩm mỹ cho dự án
                        </p>
                    </div>
                </div>
                <div class="ourServiceItem">
                    <div class="ourServiceItem-img">
                        <a href="http://w3ni601.nanoweb.com.vn/du-an-nc10676.html">
                            <img src="http://w3ni601.nanoweb.com.vn/mediacenter/media/images/default/s400_0/lzpngrectangle1.png" data-original="http://w3ni601.nanoweb.com.vn/mediacenter/media/images/718/news/ava/s400_0/img-item1-1512439973.png" class="img-responsive imglazyload" alt="TRANG TRÍ NỘI THẤT">
                        </a>
                    </div>
                    <a href="http://w3ni601.nanoweb.com.vn/du-an-nc10676.html" class="overlay"></a>
                    <div class="ourServiceItemContent" style="top: 146px;">
                        <span>0<spam class="number_sell">1</spam></span>
                        <h4> <a href="http://w3ni601.nanoweb.com.vn/du-an-nc10676.html" title="TRANG TRÍ NỘI THẤT">TRANG TRÍ NỘI THẤT</a></h4>
                        <p style="word-wrap: break-word;">TOAM cung cấp dịch vụ &amp; sản phẩm trang trí nội thất với mong muốn tạo ra những góc nhìn hoàn chỉnh tô đậm thêm cho phong cách của từng dự án



                            &nbsp;
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $('.number_sell').each(function(index, element) {
                $(this).html(index+1);
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
                                    <img src="http://w3ni601.nanoweb.com.vn/mediacenter/media/files/718/banners/102_1512643328_1645a291b006441a.png" class="attachment-full" />
                                </div>
                                <div class="item-testimonial-quote">
                                    <div class="testimonialAuthor">
                                        <strong>Ms Hồng Nhung</strong><p style="word-wrap: break-word;">Giám đốc</p>                            </div>
                                    <p style="word-wrap: break-word;"><p>TOAM luôn đồng hành cùng Khách hàng, chủ đầu tư tạo ra những không gian sống mang dấu ấn của mình và mang tính thẩm mỹ cao cùng chất lượng vượt trội. Tôi rất hài lòng</p>
                                    </p>
                                </div>
                            </div>
                            <div class="item-testimonial">
                                <div class="item-testimonial-author">
                                    <img src="http://w3ni601.nanoweb.com.vn/mediacenter/media/files/718/banners/99_1512411445_7045a259135bf6d7.png" class="attachment-full" />
                                </div>
                                <div class="item-testimonial-quote">
                                    <div class="testimonialAuthor">
                                        <strong>Eric Williams</strong><p style="word-wrap: break-word;">Giám đốc KD</p>                            </div>
                                    <p style="word-wrap: break-word;"><p>TOAM luôn đồng hành cùng Khách hàng, chủ đầu tư tạo ra những không gian sống mang dấu ấn của mình và mang tính thẩm mỹ cao cùng chất lượng vượt trội. Tôi rất hài lòng</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>        <script type="text/javascript">
                $(document).ready(function() {
                    $(".owl-testimonial-single").owlCarousel({
                        items : 1,
                        slideSpeed : 300,
                        autoPlay:6000,
                        pagination: true,
                        navigation:true,
                        transitionStyle : "fade",
                        navigationText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
                        lazyLoad : true,
                        itemsDesktop  :  [900,1],
                        itemsDesktopSmall :  [600,1],
                        itemsTablet :  [560,1]
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
                            <img src="http://w3ni601.nanoweb.com.vn/mediacenter/media/files/718/banners/67_1512432459_415a25e34bac272.png" alt="Đối tác 1" />
                        </a>
                    </div>
                    <div class="ourClientItem">
                        <a href="#" title="Đối tác 2" target="_blank">
                            <img src="http://w3ni601.nanoweb.com.vn/mediacenter/media/files/718/banners/616_1512432471_3365a25e35747866.png" alt="Đối tác 2" />
                        </a>
                    </div>
                    <div class="ourClientItem">
                        <a href="#" title="Đối tác 3" target="_blank">
                            <img src="http://w3ni601.nanoweb.com.vn/mediacenter/media/files/718/banners/271_1512432485_6205a25e3650962a.png" alt="Đối tác 3" />
                        </a>
                    </div>
                    <div class="ourClientItem">
                        <a href="#" title="Đối tác 4" target="_blank">
                            <img src="http://w3ni601.nanoweb.com.vn/mediacenter/media/files/718/banners/912_1512432497_5025a25e3712b46d.png" alt="Đối tác 4" />
                        </a>
                    </div>
                    <div class="ourClientItem">
                        <a href="#" title="Đối tác 5" target="_blank">
                            <img src="http://w3ni601.nanoweb.com.vn/mediacenter/media/files/718/banners/181_1512432509_8185a25e37d91541.png" alt="Đối tác 5" />
                        </a>
                    </div>
                    <div class="ourClientItem">
                        <a href="#" title="Đối tác 6" target="_blank">
                            <img src="http://w3ni601.nanoweb.com.vn/mediacenter/media/files/718/banners/430_1512432524_3645a25e38c4cba0.png" alt="Đối tác 6" />
                        </a>
                    </div>
                    <div class="ourClientItem">
                        <a href="#" title="Đối tác 7" target="_blank">
                            <img src="http://w3ni601.nanoweb.com.vn/mediacenter/media/files/718/banners/822_1512432538_3665a25e39a0f380.png" alt="Đối tác 7" />
                        </a>
                    </div>
                    <div class="ourClientItem">
                        <a href="http://w3ni591.web3nhat.net/" title="Đối tác 8" target="_blank">
                            <img src="http://w3ni601.nanoweb.com.vn/mediacenter/media/files/718/banners/972_1512432551_4555a25e3a74cac0.png" alt="Đối tác 8" />
                        </a>
                    </div>
                </div>
            </div>
            <script>
                $(document).ready(function() {
                    $(".ourClientsWrap").owlCarousel({
                        items : 4,
                        slideSpeed : 300,
                        autoPlay:6000,
                        pagination: false,
                        navigation:true,
                        transitionStyle : "fade",
                        navigationText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
                        lazyLoad : true,
                        itemsDesktop  :  [992,3],
                        itemsDesktopSmall :  [767,2],
                        itemsTablet :  [460,1]
                    });
                });
            </script>
        </div>
        <!-- contact footer -->
        <div class="homeContactBlock clear">
            <div class="homeOurLocation">
                <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.7093318945804!2d105.81810731493292!3d21.044313285989933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab0f77ec33c1%3A0x2a35ac2a7293dd13!2zMTQzIE5ndXnhu4VuIMSQw6xuaCBUaGksIFRo4buleSBLaHXDqiwgVMOieSBI4buTLCBIw6AgTuG7mWk!5e0!3m2!1svi!2s!4v1512640997965"
                        width="100%"
                        height="300"
                        frameborder="0"
                        style="border:0"
                        allowfullscreen>
                </iframe>        </div>
            <div class="homeContactInfo" style="background-image: url(http://w3ni601.nanoweb.com.vn/mediacenter/media/files/718/banners/600_1512441421_9245a26064d36f43.jpg);">
                <div class="homeContactInfoWrap">
                    <h3>LIÊN HỆ</h3>
                    <div class="contactInfo clear">
                        <div class="contactItem"><i class="iconLocation"></i>
                            <h4>Địa chỉ</h4>

                            <p id="js-uni-address">143 Nguyễn Đình Thi, Tây Hồ, Hà Nội.</p>
                        </div>

                        <div class="contactItem"><i class="iconPhone"></i>

                            <h4>Phone</h4>

                            <p id="js-uni-phone">0243 2838555</p>
                        </div>

                        <div class="contactItem"><i class="iconEmail"></i>

                            <h4>E-mail</h4>

                            <p id="js-uni-email">info@toam.com</p>
                        </div>
                    </div>

                    <p><a class="sendEmailLink" href="mailto:youremail@bauhaus.com" id="js-uni-email-send-link">Gửi Email</a></p>
                </div>
            </div>
        </div>
    </div>
    <footer class="clear">
        <div class="copyright">© Copyright 2017 TOAM</div>
        <div class="footer-social clear">

            <a href="https://www.facebook.com/toamstudio" target="_blank" rel="nofollow" class="support"><i class="fa fa-facebook"></i></a>				<a href="http://w3ni601.nanoweb.com.vn/info@toam.com" target="_blank" rel="nofollow" class="support"><i class="fa fa-google-plus"></i></a>				<a href="http://w3ni601.nanoweb.com.vn/youtube.com" target="_blank" rel="nofollow" class="support"><i class="fa fa-youtube-play"></i></a>	    </div>
    </footer>    <div class="mobileMenu">
        <ul id="menu-menu-1" class=" clear">
            <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-72">
                <a  href="http://w3ni601.nanoweb.com.vn/" title="Trang chủ" >Trang chủ</a>
            </li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-home menu-item-72">
                <a  href="javascript:void(0)" title="Giới thiệu" >Giới thiệu</a>
                <ul class="sub-menu">
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-123">
                        <a href="http://w3ni601.nanoweb.com.vn/gioi-thieu.html" title="Giới thiệu chung">
                            Giới thiệu chung                     </a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-123">
                        <a href="http://w3ni601.nanoweb.com.vn/phong-cach-thiet-ke-pde2275.html" title="Phong cách thiết kế">
                            Phong cách thiết kế                     </a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-123">
                        <a href="http://w3ni601.nanoweb.com.vn/gioi-thieu-ban-lanh-dao-pde2263.html" title="Giới thiệu ban lãnh đạo">
                            Giới thiệu ban lãnh đạo                     </a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-123">
                        <a href="http://w3ni601.nanoweb.com.vn/cac-doi-tac-chien-luoc-pde2264.html" title="Các đối tác chiến lược">
                            Các đối tác chiến lược                     </a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-123">
                        <a href="http://w3ni601.nanoweb.com.vn/cac-bang-khen-giai-thuong-pde2265.htmltype 2" title="Các bằng khen, giải thưởng">
                            Các bằng khen, giải thưởng                     </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-home menu-item-72">
                <a  href="http://w3ni601.nanoweb.com.vn/san-pham-nc3203.html" title="Sản phẩm" >Sản phẩm</a>
                <ul class="sub-menu">
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-123">
                        <a href="http://w3ni601.nanoweb.com.vn/da-hoan-thanh-nc3204.html" title="Đã hoàn thành">
                            Đã hoàn thành                     </a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-123">
                        <a href="http://w3ni601.nanoweb.com.vn/chua-hoan-thanh-nc3205.html" title="Chưa hoàn thành">
                            Chưa hoàn thành                     </a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-123">
                        <a href="http://w3ni601.nanoweb.com.vn/video.html" title="Video">
                            Video                     </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-home menu-item-72">
                <a  href="http://w3ni601.nanoweb.com.vn/du-an-nc3209.html" title="Dịch vụ" >Dịch vụ</a>
            </li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-home menu-item-72">
                <a  href="http://w3ni601.nanoweb.com.vn/tin-tuc-nc3202.html" title="Blog" >Blog</a>
            </li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-home menu-item-72">
                <a  href="http://w3ni601.nanoweb.com.vn/tuyen-dung.html" title="Tuyển dụng" >Tuyển dụng</a>
            </li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-home menu-item-72">
                <a  href="http://w3ni601.nanoweb.com.vn/lien-he.html" title="Liên hệ" >Liên hệ</a>
            </li>
        </ul>
    </div>    </div>
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
        $(".btn-close").click(function(){
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

<!-- Mirrored from w3ni601.nanoweb.com.vn/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Feb 2020 12:12:28 GMT -->
</html>
@include('user/layouts/footer')