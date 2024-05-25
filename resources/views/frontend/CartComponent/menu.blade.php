<header class="header">
    <div class="header-middle sticky-header" data-sticky-options="{'mobile': true}">
        <div class="container">
            <div class="header-left col-lg-2 w-auto pl-0">
                <button class="mobile-menu-toggler text-primary mr-2" type="button">
                    <i class="fas fa-bars"></i>
                </button>
                <a href="{{ route('home.index') }}" class="logo">
                    <img src="{{ asset('assets') }}/images/shoeshine.png" width="111" height="44"
                        alt="Porto Logo">
                </a>
            </div>
            <div class="header-right w-lg-max">
                <div
                    class="header-icon header-search header-search-inline header-search-category w-lg-max text-right mt-0">
                    <a href="#" class="search-toggle" role="button"><i class="icon-search-3"></i></a>
                    <form action="#" method="get">
                        <div class="header-search-wrapper">
                            <input type="search" class="form-control" name="q" id="q"
                                placeholder="Search..." required>

                            <button class="btn icon-magnifier p-0" type="submit"></button>
                        </div><!-- End .header-search-wrapper -->
                    </form>
                </div>



                <a href="login.html" class="header-icon" title="login"><i class="icon-user-2"></i></a>

                <a href="wishlist.html" class="header-icon" title="wishlist"><i class="icon-wishlist-2"></i></a>

                <div class="dropdown cart-dropdown">
                    <a href="#" title="Cart" class="dropdown-toggle cart-toggle" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                        <i class="minicart-icon"></i>
                        {{-- <span class="cart-count badge-circle">3</span> --}}
                    </a>

                    <div class="cart-overlay"></div>
                </div><!-- End .dropdown -->
            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-middle -->

    <div class="header-middle sticky-header">
        <div class="container">
            <div class="header-left">
                <button class="mobile-menu-toggler" type="button">
                    <i class="fas fa-bars"></i>
                </button>
                {{-- <a href="demo3.html" class="logo">
                    <img src="assets/images/shoeshine.png" alt=" Logo">
                </a> --}}
                <nav class="main-nav font2">
                    <ul class="menu">
                        <li class="active">
                            <a href="{{ route('home.index') }}">TRANG CHỦ</a>
                        </li>
                        <li>
                            @if (isset($product ))
                               
                                    <a href="{{ route('product.productsdetail', ['id' => $product->id]) }}">SẢN PHẨM</a>
                              
                            @endif
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
                                            <a href="#" class="btn btn-sm btn-dark">MUA NGAY</a>
                                        </div>
                                    </div><!-- End .col-lg-4 -->
                                </div><!-- End .row -->
                            </div><!-- End .megamenu -->
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
                        <li><a href="{{route('blog.blog')}}">Tin Tức</a></li>
                        <li><a href="#">Liên Hệ</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    </div>
</header>
