<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="demo3.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Men</a></li>
                <li class="breadcrumb-item active" aria-current="page">Accessories</li>
            </ol>
        </div><!-- End .container -->
    </nav>
    <div class="container mb-3">
        <div class="row">
            <div class="col-lg-9 main-content">
                <nav class="toolbox sticky-header" data-sticky-options="{'mobile': true}">
                    <div class="toolbox-left">
                        <div class="toolbox-item toolbox-sort">
                            <label>Sort By:</label>
                            <div class="select-custom">
                                <select name="orderby" class="form-control">
                                    <option value="menu_order" selected="selected">Default sorting</option>
                                    <option value="popularity">Sort by popularity</option>
                                    <option value="rating">Sort by average rating</option>
                                    <option value="date">Sort by newness</option>
                                    <option value="price">Sort by price: low to high</option>
                                    <option value="price-desc">Sort by price: high to low</option>
                                </select>
                            </div><!-- End .select-custom -->
                        </div><!-- End .toolbox-item -->
                    </div><!-- End .toolbox-left -->

                    <div class="toolbox-right">
                        <div class="toolbox-item toolbox-show">
                            <label>Show:</label>

                            <div class="select-custom">
                                <select name="count" class="form-control">
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="40">40</option>
                                    <option value="50">50</option>
                                </select>
                            </div><!-- End .select-custom -->
                        </div><!-- End .toolbox-item -->
                    </div><!-- End .toolbox-right -->
                </nav>
                <div class="row">
                    @if (isset($products))
                        @foreach ($products as $product)
                            <div class="col-6 col-sm-4 col-md-3 col-xl-5col">
                                <div class="product-default inner-quickview inner-icon">
                                    <figure>
                                        <a href="demo3-product.html">
                                            <img src="{{ asset($product->images) }}" />
                                        </a>
                                        <div class="label-group">
                                            <div class="product-label label-hot">HOT</div>
                                            <div class="product-label label-sale">-20%</div>
                                        </div>
                                        <div class="btn-icon-group">
                                            <a href="{{route('cart.index')}}" class="btn-icon btn-add-cart product-type-simple"><i
                                                    class="icon-shopping-cart"></i></a>
                                        </div>
                                     
                                            <a href="{{ route('product.productsdetail', ['id' => $product->id]) }}" class='btn-quickview'>Xem Ngay</a>

                                    </figure>
                                    <div class="product-details">
                                        <div class="category-wrap">
                                            <div class="category-list">
                                            </div>
                                        </div>
                                        <h3 class="product-title">
                                            <a href="demo3-product.html">{{$product->name}}</a>
                                        </h3>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <div class="price-box">
                                         
                                            <span class="product-price">{{$product->price ? number_Format($product->price) .'VNĐ':''}}</span>
                                        </div><!-- End .price-box -->
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                        {{ $products->links() }}
                </div>
                
            </div>
            <aside class="sidebar-shop col-lg-3 order-lg-first mobile-sidebar">
                <div class="sidebar-wrapper">
                    <div class="widget">
                        <h3 class="widget-title">
                            <a data-toggle="collapse" href="#widget-body-2" role="button" aria-expanded="true"
                                aria-controls="widget-body-2">Categories</a>
                        </h3>
                        <div class="collapse show" id="widget-body-2">
                            <div class="widget-body">
                                <ul class="cat-list">
                                    <li>
                                        <a href="#widget-category-1" class="collapsed" data-toggle="collapse"
                                            role="button" aria-expanded="false" aria-controls="widget-category-1">
                                            Accessories<span class="products-count">(3)</span>
                                            <span class="toggle"></span>
                                        </a>
                                        <div class="collapse" id="widget-category-1">
                                            <ul class="cat-sublist">
                                                <li>Caps<span class="products-count">(1)</span></li>
                                                <li>Watches<span class="products-count">(2)</span></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#widget-category-2" class="collapsed" data-toggle="collapse"
                                            role="button" aria-expanded="false" aria-controls="widget-category-2">
                                            Electronics<span class="products-count">(4)</span>
                                            <span class="toggle"></span>
                                        </a>
                                        <div class="collapse" id="widget-category-2">
                                            <ul class="cat-sublist">
                                                <li>Shoes<span class="products-count">(4)</span></li>
                                                <li>Bag<span class="products-count">(2)</span></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#widget-category-3" class="collapsed" data-toggle="collapse"
                                            role="button" aria-expanded="false" aria-controls="widget-category-3">
                                            Fashion<span class="products-count">(2)</span>
                                            <span class="toggle"></span>
                                        </a>
                                        <div class="collapse" id="widget-category-3">
                                            <ul class="cat-sublist">
                                                <li>Shoes<span class="products-count">(4)</span></li>
                                                <li>Bag<span class="products-count">(2)</span></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- End .widget-body -->
                        </div><!-- End .collapse -->
                    </div><!-- End .widget -->



                    <div class="widget widget-color">
                        <h3 class="widget-title">
                            <a data-toggle="collapse" href="#widget-body-6" role="button" aria-expanded="true"
                                aria-controls="widget-body-6">Color</a>
                        </h3>

                        <div class="collapse show" id="widget-body-6">
                            <div class="widget-body">
                                <ul class="config-swatch-list flex-column">
                                    <li class="active">
                                        <a href="#" style="background-color: #dda756;"></a>
                                        <span>Brown</span>
                                    </li>
                                    <li>
                                        <a href="#" style="background-color: #7bbad1;"></a>
                                        <span>Light-Blue</span>
                                    </li>
                                    <li>
                                        <a href="#" style="background-color: #81d742;"></a>
                                        <span>Green</span>
                                    </li>
                                    <li>
                                        <a href="#" style="background-color: #6085a5;"></a>
                                        <span>Indego</span>
                                    </li>
                                    <li>
                                        <a href="#" style="background-color: #333;"></a>
                                        <span>Black</span>
                                    </li>
                                    <li>
                                        <a href="#" style="background-color: #0188cc;"></a>
                                        <span>Blue</span>
                                    </li>
                                    <li>
                                        <a href="#" style="background-color: #ab6e6e;"></a>
                                        <span>Red</span>
                                    </li>
                                </ul>
                            </div><!-- End .widget-body -->
                        </div><!-- End .collapse -->
                    </div><!-- End .widget -->
                    <div class="widget widget-brand">
                        <h3 class="widget-title">
                            <a data-toggle="collapse" href="#widget-body-7" role="button" aria-expanded="true"
                                aria-controls="widget-body-7">Brand</a>
                        </h3>

                        <div class="collapse show" id="widget-body-7">
                            <div class="widget-body pb-0">
                                <ul class="cat-list">
                                    <li><a href="#">Adidas</a></li>
                                </ul>
                            </div><!-- End .widget-body -->
                        </div><!-- End .collapse -->
                    </div><!-- End .widget -->
                </div><!-- End .sidebar-wrapper -->
            </aside><!-- End .col-lg-3 -->
        </div><!-- End .row -->
    </div><!-- End .container -->
</main>
