<header class="header2 clear background--dark">
    <a class="logo" href="{{ url('/') }}" title="Web Kiến trúc KLEVER">
        <img alt="Về trang chủ" class="img-responsive" src="{{ asset('assets/image/page/logo.png') }}"/>
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
                <a href="{{ url('/') }}" title="Trang chủ">Trang chủ</a>
            </li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-home menu-item-72">
                <a href="javascript:void(0)" title="Giới thiệu">Giới thiệu</a>
                <ul class="sub-menu">
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-123">
                        <a href="{{ url('/introduction') }}" title="Giới thiệu chung">
                            Giới thiệu chung </a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-123">
                        <a href="{{ url('/design-style') }}" title="Phong cách thiết kế">
                            Phong cách thiết kế </a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-123">
                        <a href="{{ url('/leader') }}" title="Giới thiệu ban lãnh đạo">
                            Giới thiệu ban lãnh đạo </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-home menu-item-72">
                <a href="{{ url('product/list') }}" title="Sản phẩm">Sản phẩm</a>
                <ul class="sub-menu">
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-123">
                        <a href="{{ url('/product/list/complete') }}" title="Đã hoàn thành">
                            Đã hoàn thành </a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-123">
                        <a href="{{ url('/product/list/incomplete') }}" title="Chưa hoàn thành">
                            Chưa hoàn thành </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-home menu-item-72">
                <a href="{{ url('/service') }}" title="Dịch vụ">Dịch vụ</a>
            </li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-home menu-item-72">
                <a href="{{ url('/blog') }}" title="Blog">Tin tức</a>
            </li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-home menu-item-72">
                <a href="{{ url('/career') }}" title="Tuyển dụng">Tuyển dụng</a>
            </li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-home menu-item-72">
                <a href="{{ url('/contact') }}" title="Liên hệ">Liên hệ</a>
            </li>
        </ul>
    </div>
</header>
