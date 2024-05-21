<header class="header header-transparent">
    <div class="header-middle sticky-header">
        <div class="container">
            <div class="header-left">
                <button class="mobile-menu-toggler" type="button">
                    <i class="fas fa-bars"></i>
                </button>
                <a href="{{route('home.index')}}" class="logo">
                    <img src="assets/images/shoeshine.png" alt=" Logo">
                </a>
                <nav class="main-nav font2">
                    <ul class="menu">
                        <li class="active">
                            <a href="{{route('home.index')}}">TRANG CHỦ</a>
                        </li>
                        <li>
                            <a href="{{route('shop.shop')}}">SẢN PHẨM</a>
                            <div class="megamenu megamenu-fixed-width megamenu-3cols">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <a href="#" class="nolink">Dành Cho Nam</a>
                                        <ul class="submenu">
                                            <li><a href="product.html">GIÀY CHẠY BỘ</a></li>
                                            <li><a href="product-variable.html">GIÀY ĐÁ BANH</a></li>
                                            <li><a href="product.html">GIÀY TENNIS</a></li>
                                            <li><a href="product.html">GIÀY BÓNG RỔ</a></li>
                                            <li><a href="product-custom-tab.html">SANDAL</a></li>
                                        </ul>
                                    </div><!-- End .col-lg-4 -->
                                    <div class="col-lg-4">
                                        <a href="#" class="nolink">DÀNH CHO NỮ</a>
                                        <ul class="submenu">
                                            <li><a href="product-extended-layout.html">Giày chạy trail nữ</a></li>
                                            <li><a href="product-grid-layout.html">Giày Yoga và Pilates</a></li>
                                            <li><a href="product-full-width.html">Giày Điện Tử Đa Năng</a></li>
                                            <li><a href="product-sticky-info.html">Giày Thể Thao Phong Cách</a></li>
                                            <li><a href="product-sticky-both.html">Giày Thể Thao Cao Cấp</a></li>

                                        </ul>
                                    </div><!-- End .col-lg-4 -->
                                    <div class="col-lg-4 p-0">
                                        <div class="menu-banner menu-banner-2">


                                            <div class="banner-content">
                                                <h4>
                                                    <span class="">SALE UP TO</span><br />
                                                    <b class="">50%</b>
                                                </h4>
                                            </div>
                                            <a href="###" class="btn btn-sm btn-dark">MUA NGAY</a>
                                        </div>
                                    </div><!-- End .col-lg-4 -->
                                </div><!-- End .row -->
                            </div><!-- End .megamenu -->
                        </li>
                        <li>
                            <a href="#">PHỤ KIỆN</a>
                            <ul>
                                <li><a href="##">Dây Giày</a></li>
                                <li><a href="##">Tất và Lót Giày</a></li>
                                <li><a href="##">Túi và Hộp Đựng Giày</a></li>
                                <li><a href="##">Keo dán giày</a></li>
                                <li><a href="##">Insoles và lót đệm</a></li>
                                <li><a href="#">Sản Phẩm Phục Hồi và Sửa Chữa</a>
                                    <ul>
                                        <li><a href="#">Đế giày và mũi giày thay thế</a></li>
                                        <li><a href="#">Dây kéo và phụ kiện sửa chữa</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <li><a href="{{route('blog.blog')}}">Tin Tức</a></li>
                        <li><a href="{{route('contact.contact')}}">Liên Hệ</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="header-right">
                <div class="header-search header-search-popup header-search-category d-none d-sm-block">
                    <a href="#" class="search-toggle" role="button"><i class="icon-magnifier"></i></a>
                    <form action="#" method="get">
                        <div class="header-search-wrapper">
                            <input type="search" class="form-control" name="q" id="q"
                                placeholder="Bạn muốn tìm gì ?" required="">
                            <div class="select-custom">
                                <select id="cat" name="cat">
                                    <option value="">Danh mục</option>
                                    <option value="4">Giày Running</option>
                                    <option value="5">Giày Thể Thao</option>
                                    <option value="11">Giày Cổ Điển</option>
                                </select>
                            </div><!-- End .select-custom -->
                            <button class="btn text-dark icon-magnifier" type="submit"></button>
                        </div><!-- End .header-search-wrapper -->
                    </form>
                </div>
                <a href="{{ route('dashboard.index') }}" class="header-icon header-icon-user" title="Login"><i
                        class="icon-user-2"></i></a>
                <a href="wishlist.html" class="header-icon header-icon-wishlist" title="Wishlist"><i
                        class="icon-wishlist-2"></i></a>
                <div class="dropdown cart-dropdown">
                    {{-- <a href="{{ route('cart.cart') }}" class="dropdown-toggle  cart-toggle" role=""
                        data-toggle="dropdown" aria-haspopup="false" aria-expanded="false" data-display="static">
                        <i class="icon-cart-thick"></i>
                        <span class="cart-count badge-circle">3</span>
                    </a> --}}
                    <a href="{{ route('cart.cart') }}" class="dropdown-toggle  cart-toggle" title="Wishlist"> <i
                            class="icon-cart-thick"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</header>
