<main class="main">
    <div class="container">
        <ul class="checkout-progress-bar d-flex justify-content-center flex-wrap">
            <li class="active">
                <a href="cart.html">Shopping Cart</a>
            </li>
            <li>
                <a href="checkout.html">Checkout</a>
            </li>
            <li class="disabled">
                <a href="cart.html">Order Complete</a>
            </li>
        </ul>

        <div class="row">
            <div class="col-lg-8">
                <div class="cart-table-container">
                    <table class="table table-cart">
                        <thead>
                            <tr>
                                <th class="thumbnail-col">Hình Ảnh</th>
                                <th class="product-col">Tên Sản Phẩm</th>
                                <th class="price-col">Giá</th>
                                <th class="qty-col">Số Lượng</th>
                                <th class="text-right">Tổng</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (session('cart') as $productId => $details)
                                <tr class="product-row">
                                    <td>
                                        <figure class="product-image-container">
                                            <a href="#" class="product-image">
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
                                    <td class="text-right"><span class="subtotal-price">
                                            @php
                                                $subtotal = $details['price'] * $details['quantity'];
                                                echo number_format($subtotal) . ' VNĐ';
                                            @endphp
                                    </td>
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
                                                        <button class="btn btn-sm" type="submit">Apply
                                                            Coupon</button>
                                                    </div>
                                                </div><!-- End .input-group -->
                                            </form>
                                        </div>
                                    </div><!-- End .float-left -->

                                    <div class="float-right">
                                        <button type="submit" class="btn btn-shop btn-update-cart">
                                            Update Cart
                                        </button>
                                    </div><!-- End .float-right -->
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div><!-- End .cart-table-container -->
            </div><!-- End .col-lg-8 -->

            <div class="col-lg-4">
                <div class="cart-summary">
                    <h3>CART TOTALS</h3>

                    <table class="table table-totals">
                        <tbody>
                            <tr>
                                <td>Subtotal</td>
                                <td>$17.90</td>
                            </tr>

                            <tr>
                                <td colspan="2" class="text-left">
                                    <h4>Shipping</h4>

                                    <div class="form-group form-group-custom-control">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="radio" checked>
                                            <label class="custom-control-label">Local pickup</label>
                                        </div><!-- End .custom-checkbox -->
                                    </div><!-- End .form-group -->

                                    <div class="form-group form-group-custom-control mb-0">
                                        <div class="custom-control custom-radio mb-0">
                                            <input type="radio" name="radio" class="custom-control-input">
                                            <label class="custom-control-label">Flat rate</label>
                                        </div><!-- End .custom-checkbox -->
                                    </div><!-- End .form-group -->

                                    <form action="#">
                                        <div class="form-group form-group-sm">
                                            <label>Shipping to <strong>NY.</strong></label>
                                            <div class="select-custom">
                                                <select class="form-control form-control-sm">
                                                    <option value="USA">United States (US)</option>
                                                    <option value="Turkey">Turkey</option>
                                                    <option value="China">China</option>
                                                    <option value="Germany">Germany</option>
                                                </select>
                                            </div><!-- End .select-custom -->
                                        </div><!-- End .form-group -->

                                        <div class="form-group form-group-sm">
                                            <div class="select-custom">
                                                <select class="form-control form-control-sm">
                                                    <option value="NY">New York</option>
                                                    <option value="CA">California</option>
                                                    <option value="TX">Texas</option>
                                                </select>
                                            </div><!-- End .select-custom -->
                                        </div><!-- End .form-group -->

                                        <div class="form-group form-group-sm">
                                            <input type="text" class="form-control form-control-sm"
                                                placeholder="Town / City">
                                        </div><!-- End .form-group -->

                                        <div class="form-group form-group-sm">
                                            <input type="text" class="form-control form-control-sm"
                                                placeholder="ZIP">
                                        </div><!-- End .form-group -->

                                        <button type="submit" class="btn btn-shop btn-update-total">
                                            Update Totals
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>

                        <tfoot>
                            <tr>
                                <td>Total</td>
                                <td>$17.90</td>
                            </tr>
                        </tfoot>
                    </table>

                    <div class="checkout-methods">
                        <a href="cart.html" class="btn btn-block btn-dark">Proceed to Checkout
                            <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div><!-- End .cart-summary -->
            </div><!-- End .col-lg-4 -->
        </div><!-- End .row -->
    </div><!-- End .container -->

    <div class="mb-6"></div><!-- margin -->
</main>
