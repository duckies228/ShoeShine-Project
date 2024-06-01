<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="demo3.html"><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Electronics</a></li>
                <li class="breadcrumb-item active" aria-current="page">Headsets</li>
            </ol>
        </div>
    </nav>
    <div class="container pt-1">
        <div class="row">
            <div class="col-lg-12 main-content">
                <div class="product-single-container product-single-default">
                    <div class="row">
                        <div class="col-md-6 product-single-gallery">
                            <div class="product-slider-container">
                                <img src="{{ asset($product->images ? $product->images : '') }}" alt="">
                                <div class="label-group">
                                    <div class="product-label label-hot">HOT</div>
                                    <!---->
                                    <div class="product-label label-sale">
                                        -16%
                                    </div>
                                </div>
                                <span class="prod-full-screen">
                                    <i class="icon-plus"></i>
                                </span>
                            </div>
                        </div><!-- End .product-single-gallery -->
                        <div class="col-md-6 product-single-details">
                            <h1 class="product-title">{{ $product->name ? $product->name : '' }} </h1>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:60%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .ratings-container -->

                            <hr class="short-divider">

                            <div class="price-box">
                                <span
                                    class="product-price">{{ $product->price ? number_format($product->price) . ' VNĐ' : '' }}</span>
                            </div><!-- End .price-box -->
                            <ul class="single-info-list">
                                <!---->
                                <li>
                                    SKU:
                                    <strong> {{ $product->sku ? $product->sku : '' }}</strong>
                                </li>

                                <li>
                                    CATEGORIES:
                                    <strong>
                                        {{ $product->categories ? $product->categories : '' }}
                                    </strong>
                                </li>


                            </ul>

                            <div class="product-filters-container">
                                <div class="product-single-filter flex-column align-items-start">
                                    <label>Color:</label>
                                    <ul class="config-size-list config-color-list config-filter-list">
                                        <li class=""><a href="javascript:;" class="filter-color border-0"
                                                style="background-color: rgb(1, 136, 204);"></a></li>
                                        <li class=""><a href="javascript:;"
                                                class="filter-color border-0 initial disabled"
                                                style="background-color: rgb(221, 181, 119);"></a></li>
                                        <li class=""><a href="javascript:;" class="filter-color border-0"
                                                style="background-color: rgb(96, 133, 165);"></a></li>
                                    </ul>
                                </div>

                                <div class="product-single-filter flex-column align-items-start">
                                    <label>Size:</label>
                                    <ul class="config-size-list">
                                        <li class=""><a href="javascript:;"
                                                class="d-flex align-items-center justify-content-center">
                                                {{ $product->size ? $product->size : '' }}</a>
                                        </li>


                                    </ul>
                                </div>

                                <div class="product-single-filter">
                                    <a class="font1 text-uppercase clear-btn ml-0" href="#">Clear</a>
                                </div>
                                <!---->
                            </div> <!-- color-->
                            <div class="product-action">
                                @csrf
                                <div class="product-single-qty">
                                    <input class="horizontal-quantity form-control" type="text">
                                </div>
                                <form method="POST" action="{{ url('/cart/add/' . $product->id) }}">
                                    @csrf
                                    <button class="btn btn-dark add-cart mr-2" type="submit" title="Add to Cart">Mua
                                        Ngay</a>
                                    </button>
                                </form>
                            </div>
                            <hr class="divider mb-0 mt-0">
                        </div><!-- End .product-single-details -->
                    </div>
                </div>
                <div class="product-single-tabs">

                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="product-tab-desc" data-toggle="tab"
                                href="#product-desc-content" role="tab" aria-controls="product-desc-content"
                                aria-selected="true">Mô Tả</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="product-tab-reviews" data-toggle="tab"
                                href="#product-reviews-content" role="tab" aria-controls="product-reviews-content"
                                aria-selected="false">Đánh Giá </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="product-desc-content" role="tabpanel"
                            aria-labelledby="product-tab-desc">
                            <div class="product-desc-content">
                                {{ $product->description }}
                            </div>
                        </div>
                        <div class="tab-pane fade" id="product-reviews-content" role="tabpanel"
                            aria-labelledby="product-tab-reviews">
                            <div class="product-reviews-content">
                                {{ $product->reviews ? $product->reviews : '' }}
                                <h3 class="reviews-title">{{ $product->name ? $product->name : '' }} </h3>



                                <div class="divider"></div>

                                <div class="add-product-review">
                                    <h3 class="review-title">Viết đánh giá</h3>

                                    <form action="#" class="comment-form m-0">
                                        <div class="rating-form">
                                            <label for="rating">Đánh giá của bạn <span
                                                    class="required">*</span></label>
                                            <span class="rating-stars">
                                                <a class="star-1" href="#">1</a>
                                                <a class="star-2" href="#">2</a>
                                                <a class="star-3" href="#">3</a>
                                                <a class="star-4" href="#">4</a>
                                                <a class="star-5" href="#">5</a>
                                            </span>

                                            <select name="rating" id="rating" required=""
                                                style="display: none;">
                                                <option value="">Rate…</option>
                                                <option value="5">Perfect</option>
                                                <option value="4">Good</option>
                                                <option value="3">Average</option>
                                                <option value="2">Not that bad</option>
                                                <option value="1">Very poor</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Your review <span class="required">*</span></label>
                                            <textarea cols="5" rows="6" class="form-control form-control-sm"></textarea>
                                        </div><!-- End .form-group -->


                                        <div class="row">
                                            <div class="col-md-6 col-xl-12">
                                                <div class="form-group">
                                                    <label>Name <span class="required">*</span></label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        required>
                                                </div><!-- End .form-group -->
                                            </div>

                                            <div class="col-md-6 col-xl-12">
                                                <div class="form-group">
                                                    <label>Email <span class="required">*</span></label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        required>
                                                </div><!-- End .form-group -->
                                            </div>

                                            <div class="col-md-6 col-xl-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="save-name" />
                                                    <label class="custom-control-label mb-0" for="save-name">Lưu
                                                        đánh giá .</label>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-primary" value="Submit">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End .row -->
        </div><!-- End .container -->
        <h2 class="section-title ls-n-15 text-center pb-2 m-b-4">SẢN PHẨM LIÊN QUAN</h2>
        <div class="row py-4 justify-content-center">
            @if (isset($refProducts))
                <div class="products-section pt-0">
                    <div class="row">
                        @foreach ($refProducts as $product)
                            <div class="col-md-3">
                                <div class="product-default">
                                    <figure>
                                        <a
                                            href="{{ route('productsdetail.productsdetail', ['id' => $product->id]) }}">
                                            <img src="{{ asset($product->images) }}" alt="">
                                        </a>
                                        <div class="label-group">
                                            <div class="product-label label-hot">HOT</div>
                                            <div class="product-label label-sale">-20%</div>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="category-list">
                                            <a href="#" class="product-category">{{ $product->categories }}</a>
                                        </div>
                                        <h3 class="product-title">
                                            <a href="">{{ $product->name }}</a>
                                        </h3>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:80%"></span>
                                                <!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <!-- End .product-ratings -->
                                        </div>
                                        <!-- End .product-container -->
                                        <div class="price-box">
                                            <span
                                                class="product-price">{{ $product->price ? number_format($product->price) . ' VNĐ' : '' }}</span>
                                        </div>
                                        <div class="product-action">
                                            <a href="" class="btn-icon btn-add-cart"><i
                                                    class="fa fa-arrow-right"></i><span>Mua Ngay</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
</main>
