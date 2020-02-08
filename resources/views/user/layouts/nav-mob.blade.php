<div class="mobileMenu">
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
                    <a href="{{ url('/design-style') }}"
                       title="Phong cách thiết kế">
                        Phong cách thiết kế </a>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-123">
                    <a href="{{ url('/leader') }}"
                       title="Giới thiệu ban lãnh đạo">
                        Giới thiệu ban lãnh đạo </a>
                </li>
                {{--<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-123">--}}
                {{--<a href="{{ url('/') }}"--}}
                {{--title="Các đối tác chiến lược">--}}
                {{--Các đối tác chiến lược </a>--}}
                {{--</li>--}}
                {{--<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-123">--}}
                {{--<a href="{{ url('/') }}"--}}
                {{--title="Các bằng khen, giải thưởng">--}}
                {{--Các bằng khen, giải thưởng </a>--}}
                {{--</li>--}}
            </ul>
        </li>
        <li class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-home menu-item-72">
            <a href="{{ url('/product') }}" title="Sản phẩm">Sản phẩm</a>
            <ul class="sub-menu">
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-123">
                    <a href="{{ url('/product/complete') }}" title="Đã hoàn thành">
                        Đã hoàn thành </a>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-123">
                    <a href="{{ url('/product/incomplete') }}" title="Chưa hoàn thành">
                        Chưa hoàn thành </a>
                </li>
                {{--<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-123">--}}
                {{--<a href="{{ url('/') }}" title="Video">--}}
                {{--Video </a>--}}
                {{--</li>--}}
            </ul>
        </li>
        <li class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-home menu-item-72">
            <a href="{{ url('/service') }}" title="Dịch vụ">Dịch vụ</a>
        </li>
        <li class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-home menu-item-72">
            <a href="{{ url('/blog') }}" title="Blog">Blog</a>
        </li>
        <li class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-home menu-item-72">
            <a href="{{ url('/career') }}" title="Tuyển dụng">Tuyển dụng</a>
        </li>
        <li class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-home menu-item-72">
            <a href="{{ url('/contact') }}" title="Liên hệ">Liên hệ</a>
        </li>
    </ul>
</div>