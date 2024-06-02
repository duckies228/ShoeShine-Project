<main class="main">
    <div class="container">
        <ul class="checkout-progress-bar d-flex justify-content-center flex-wrap">
            <li class="active">
                <a href="cart.html">Giỏ Hàng</a>
            </li>

            <li class="disabled">
                <a href="cart.html">Đặt Hàng Thành Công</a>
            </li>
        </ul>

        <div class="row">
            <div class="col-lg-8">
                <div class="cart-table-container">
                    <table class="table table-cart">
                        <thead>
                            <tr>
                                <th class="thumbnail-col">Hình Ảnh</th>
                                <th class="product ">Tên Sản Phẩm</th>
                                <th class="price-col">Giá</th>
                                <th class="qty-col">Số Lượng</th>
                                <th class="text-right-col">Tổng</th>
                                <th class="removeIcon"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (session('cart') as $productId => $details)
                                <tr class="product-row">

                                    <td>
                                        <figure class="product-image-container">

                                            <a href="{{ url('/customer/products' . $productId) }}" class="product-image">
                                                <img src="{{ asset($details['images']) }}" alt="{{ $details['name'] }}"
                                                    width="50" height="50">
                                            </a>
                                        </figure>
                                    </td>
                                    <td class="product-col">
                                        <h5 class="product-title">
                                            <a href="product.html">
                                                {{ $details['name'] }}
                                    </td>

                                    <td> {{ $details['price'] ? number_format($details['price']) . ' ' : '' }}</td>
                                    <td>
                                        <div class="product-single-qty">
                                            <input type="number" class="horizontal-quantity form-control"
                                                value="{{ $details['quantity'] }}" min="1">
                                        </div>
                                    </td>
                                    <td class="text-right-col"><span class="subtotal-price">
                                            @php
                                                $subtotal = $details['price'] * $details['quantity'];
                                                echo number_format($subtotal) . ' VNĐ';
                                            @endphp
                                    </td>
                                    <td class="removeIcon">
                                        <form method="POST" action="{{ url('/cart/remove/' . $productId) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn remove" title="Remove Product">
                                                <i class="icon-cancel"></i>
                                    </td>
                                    </button>
                                    </form>
                                </tr>
                        </tbody>
                        @endforeach
                        <tfoot>
                            <tr>
                                <td colspan="5" class="clearfix">
                                    <div class="float-left">
                                        <div class="cart-discount">
                                            <form action="#">
                                                <div class="input-group">
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Coupon Code" required>
                                                    <div class="input-group-append">
                                                        <button class="btn btn-sm" type="submit">Mã Giảm Giá</button>
                                                    </div>
                                                </div><!-- End .input-group -->
                                            </form>
                                        </div>
                                    </div><!-- End .float-left -->
                                    <div class="float-right">
                                        <a href="{{ route('products.main') }}" class="btn btn-shop btn-update-cart">Cập
                                            Nhật Giỏ Hàng</a>
                                    </div><!-- End .float-right -->
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div><!-- End .cart-table-container -->
            </div><!-- End .col-lg-8 -->

            <div class="col-lg-4">
                <div class="cart-summary">
                    <h3>Tổng Giỏ Hàng</h3>

                    <table class="table table-totals">
                        <tbody>
                            <tr>
                                <td>Tạm Tính</td>
                                <td> @php
                                    $subtotal = $details['price'] * $details['quantity'];
                                    $total = $subtotal + $subtotal;

                                    echo number_format($total) . ' VNĐ';
                                @endphp</td>
                            </tr>

                            <tr>
                                <td colspan="2" class="text-left">
                                    <h4>Phương thức thanh toán</h4>

                                    <div class="form-group form-group-custom-control">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="radio" checked>
                                            <label class="custom-control-label">Thanh toán khi nhận hàng</label>
                                        </div><!-- End .custom-checkbox -->
                                    </div><!-- End .form-group -->

                                    <div class="form-group form-group-custom-control mb-0">
                                        <div class="custom-control custom-radio mb-0">
                                            <input type="radio" name="radio" class="custom-control-input">
                                            <label class="custom-control-label">Quét mã QR</label>
                                        </div><!-- End .custom-checkbox -->
                                    </div><!-- End .form-group -->

                                    <form action="#">
                                        <div class="form-group form-group-sm">
                                            <label><strong>Địa chỉ nhận hàng</strong></label>
                                        </div><!-- End .form-group -->
                                        <div class="form-group form-group-sm">
                                            <input type="text" class="form-control form-control-sm"
                                                placeholder="Địa Chỉ">
                                        </div><!-- End .form-group -->

                                        <div class="form-group form-group-sm">
                                            <input type="text" class="form-control form-control-sm"
                                                placeholder="SĐT Người Nhận">
                                        </div><!-- End .form-group -->

                                    </form>
                                </td>
                            </tr>
                        </tbody>

                        <tfoot>
                            <tr>
                                <td>Tổng Tiền</td>
                                <td> @php
                                    $subtotal = $details['price'] * $details['quantity'];
                                    $total = $subtotal + $subtotal;

                                    echo number_format($total) . ' VNĐ';
                                @endphp</td>
                            </tr>
                        </tfoot>
                    </table>

                    <div class="checkout-methods">
                        <a href="cart.html" class="btn btn-block btn-dark">Tiến Hành Thanh Toán
                            <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div><!-- End .cart-summary -->
            </div><!-- End .col-lg-4 -->
        </div>
    </div>
</main>
