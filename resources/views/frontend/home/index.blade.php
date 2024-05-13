<body class="full-screen-slider">
    <div class="page-wrapper">
        <main class="main">
            <section class="container pb-3 mb-1">
                <h2 class="section-title ls-n-15 text-center pb-2 m-b-4">SẢN PHẨM NỔI BẬT</h2>
                <div class="row py-4">
                    @if (isset($products))
                    @foreach ($products as $product)
                    <div class="col-6 col-sm-4 col-md-3 col-xl-2 appear-animate" data-animation-name="fadeIn"
                        data-animation-delay="300" data-animation-duration="1000">
                        <div class="product-default inner-quickview inner-icon">
                                    <figure>
                                        <a href="{{route('product.productsdetail', ['id' => $product->id])}}">
                                            <img src="{{ $product->images }}"alt="">
                                        </a>
                                        <div class="label-group">
                                            <div class="product-label label-hot">HOT</div>
                                            <div class="product-label label-sale">-20%</div>
                                        </div>
                                        <div class="btn-icon-group">
                                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                    class="icon-shopping-cart"></i></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="category-wrap">
                                            <div class="category-list">
                                                <a href="demo3-shop.html" class="product-category">category</a>
                                            </div>
                                        </div>
                                        <h3 class="product-title">
                                            <a href="">{{ $product->name }}</a>
                                        </h3>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                        </div>
                                        <div class="price-box">
                                            <a href="">{{ $product->price }}</a>
                                        </div>
                                    </div>
                                </div>
                          
                    </div>
                 
                    @endforeach
                    @endif
                    <div class="pagination" >
                        {{ $products->links() }}
                    </div>
                </div>
    </div>
    </section>
    </main>
    </div>
    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>
</body>
