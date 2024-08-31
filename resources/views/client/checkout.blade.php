@extends('layouts.client')

@section('content')
<div class="page-header text-center">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                <div class="page-title">
                    <h1>One Page Checkout Style2</h1>
                </div>
                <!--Breadcrumbs-->
                <div class="breadcrumbs"><a href="index.html" title="Back to the home page">Home</a><span
                        class="main-title"><i class="icon anm anm-angle-right-l"></i>One Page Checkout Style2</span></div>
                <!--End Breadcrumbs-->
            </div>
        </div>
    </div>
</div>
<!--End Page Header-->

<!--Main Content-->
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <!--Nav step checkout-->
            <div id="nav-tabs" class="step-checkout">
                <ul class="nav nav-tabs step-items">
                    <li class="nav-item onactive">
                        <a class="nav-link active" data-bs-toggle="tab" href="#steps1">Checkout Method</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#steps2">Address</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#steps3">Order Summary</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#steps4">Payment</a>
                    </li>
                </ul>
            </div>
            <!--End Nav step checkout-->

            <!--Tab checkout content-->
            <div class="tab-content checkout-form">
                <div class="tab-pane active" id="steps1">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-4 mb-md-0">
                            <div class="block h-100">
                                <div class="block-content">
                                    <h3 class="title">Check As a Guest or Register</h3>
                                    <p class="text-gray">Register with us for future convenience:</p>
                                    <ul class="list-unstyled radio-group mb-4">
                                        <li>
                                            <div class="checkout customRadio">
                                                <input type="radio" id="option-1" name="selector" checked="" />
                                                <label for="option-1"> Checkout as guest</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkout customRadio">
                                                <input type="radio" id="option-2" name="selector" />
                                                <label for="option-2"> Register</label>
                                            </div>
                                        </li>
                                    </ul>

                                    <h3 class="title">Register and save time !</h3>
                                    <p class="text-gray">Register with us for future convenience:</p>
                                    <ul class="lists-style1 text-gray mb-3">
                                        <li>Fast and easy check out</li>
                                        <li>Easy access to your order history and status</li>
                                    </ul>
                                    <button type="submit" name="Continue" class="btn btn-primary">Continue</button>
                                    <button type="submit" name="Continue" class="btn btn-secondary ms-2 btnNext">Next
                                        Address</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="block h-100">
                                <div class="block-content">
                                    <form method="post" action="#" class="login-form">
                                        <h3 class="title">Already Register ?</h3>
                                        <p class="text-gray">Please log in below :</p>
                                        <div class="row">
                                            <div class="col-12 form-group">
                                                <label for="CustomerEmail" class="form-label">Email Address <span
                                                        class="required">*</span></label>
                                                <input type="email" name="customer[email]" placeholder=""
                                                    id="CustomerEmail" autofocus="" class="form-control">
                                            </div>
                                            <div class="col-12 form-group">
                                                <label for="CustomerPassword" class="form-label">Password <span
                                                        class="required">*</span></label>
                                                <input type="password" value="" name="customer[password]"
                                                    placeholder="" id="CustomerPassword" class="form-control">
                                            </div>
                                            <div class="col-12 form-group">
                                                <div class="remember-me customCheckbox">
                                                    <input id="remember" name="remember" type="checkbox"
                                                        value="remember me" required />
                                                    <label for="remember"> Remember me</label>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex justify-content-between align-items-center">
                                                <input type="submit" class="btn" value="Sign In">
                                                <a href="forgot-password.html" class="btn-link">Forgot your
                                                    password?</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="steps2">
                    <!--Shipping Address-->
                    <div class="block shipping-address mb-4">
                        <div class="block-content">
                            <h3 class="title mb-3">Shipping Address</h3>
                            <fieldset>
                                <div class="row">
                                    <div class="form-group col-12 col-sm-6 col-md-6 col-lg-6">
                                        <label for="firstname" class="form-label">First Name <span
                                                class="required">*</span></label>
                                        <input name="firstname" value="" id="firstname" type="text"
                                            required="" class="form-control">
                                    </div>
                                    <div class="form-group col-12 col-sm-6 col-md-6 col-lg-6">
                                        <label for="lastname" class="form-label">Last Name <span
                                                class="required">*</span></label>
                                        <input name="lastname" value="" id="lastname" type="text"
                                            required="" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12 col-sm-6 col-md-6 col-lg-6">
                                        <label for="email" class="form-label">E-Mail <span
                                                class="required">*</span></label>
                                        <input name="email" value="" id="email" type="email"
                                            required="" class="form-control">
                                    </div>
                                    <div class="form-group col-12 col-sm-6 col-md-6 col-lg-6">
                                        <label for="phone" class="form-label">Phone <span
                                                class="required">*</span></label>
                                        <input name="phone" value="" id="phone" type="tel"
                                            required="" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12 col-sm-6 col-md-6 col-lg-6">
                                        <label for="address-1" class="form-label">Address <span
                                                class="required">*</span></label>
                                        <input name="address_1" value="" id="address-1" type="text"
                                            required="" placeholder="Street address" class="form-control">
                                    </div>
                                    <div class="form-group col-12 col-sm-6 col-md-6 col-lg-6">
                                        <label for="address-1" class="form-label d-none d-sm-block">&nbsp;</label>
                                        <input name="address_2" value="" id="address-2" type="text"
                                            required="" placeholder="Apartment, suite, unit etc. (optional)"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12 col-sm-6 col-md-6 col-lg-6">
                                        <label for="postcode" class="form-label">Postcode / ZIP <span
                                                class="required">*</span></label>
                                        <input name="postcode" value="" id="postcode" type="text"
                                            class="form-control">
                                    </div>
                                    <div class="form-group col-12 col-sm-6 col-md-6 col-lg-6">
                                        <label for="address_country1" class="form-label">Country <span
                                                class="required">*</span></label>
                                        <select id="address_country1" name="address[country]"
                                            data-default="United States" class="form-control">
                                            <option value="0" label="Select a country" selected="selected">
                                                Select a country</option>
                                            <optgroup id="country-optgroup-As" label="Asia">
                                                <option value="AF" label="Afghanistan">Afghanistan</option>
                                                <option value="VN" label="Vietnam">Vietnam</option>
                                                <option value="YE" label="Yemen">Yemen</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12 col-sm-6 col-md-6 col-lg-6">
                                        <label for="address_State" class="form-label">State <span
                                                class="required">*</span></label>
                                        <select id="address_State" name="address[State]" data-default=""
                                            class="form-control">
                                            <option value="0" label="Select a state" selected="selected">Select
                                                a state</option>

                                            <option value="WI">Wisconsin</option>
                                            <option value="WY">Wyoming</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-12 col-sm-6 col-md-6 col-lg-6">
                                        <label for="address_province" class="form-label">Town / City <span
                                                class="required">*</span></label>
                                        <select id="address_province" name="address[province]" data-default=""
                                            class="form-control">
                                            <option value="0" label="Select a city" selected="selected">Select a
                                                city</option>
                                            <option value="AR">Arkansas</option>

                                            <option value="VA">Virginia</option>
                                            <option value="WY">Wyoming</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12 col-lg-12 mb-0">
                                        <div class="checkout-tearm customCheckbox">
                                            <input id="checkout_tearm" name="tearm" type="checkbox"
                                                value="checkout tearm" required />
                                            <label for="checkout_tearm"> Save address to my account</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    <!--End Shipping Address-->
                    <!--Billing Address-->

                    <!--End Billing Address-->

                    <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-secondary btnPrevious me-1">Back to Checkout
                            Method</button>
                        <button type="button" class="btn btn-primary btnNext ms-1">Next Order Summary</button>
                    </div>
                </div>
                <div class="tab-pane fade" id="steps3">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-7 col-lg-8">
                            <!--Order Summary-->
                            <div class="block order-summary">
                                <div class="block-content">
                                    <h3 class="title mb-3">Order Summary</h3>
                                    <div class="table-responsive table-bottom-brd order-table">
                                        <table class="table table-hover align-middle mb-0">
                                            <thead>
                                                <tr>
                                                    <th class="action">&nbsp;</th>
                                                    <th class="text-start">Image</th>
                                                    <th class="text-start proName">Product</th>
                                                    <th class="text-center">Qty</th>
                                                    <th class="text-center">Price</th>
                                                    <th class="text-center">Subtotal</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center cart-delete"><a href="#"
                                                            class="btn btn-secondary cart-remove remove-icon position-static"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Remove to Cart"><i
                                                                class="icon anm anm-times-r"></i></a></td>
                                                    <td class="text-start"><a href="product-layout1.html"
                                                            class="thumb"><img class="rounded-0 blur-up lazyload"
                                                                data-src="assets/images/products/product1-120x170.jpg"
                                                                src="assets/images/products/product1-120x170.jpg"
                                                                alt="product" title="product" width="120"
                                                                height="170" /></a></td>
                                                    <td class="text-start proName">
                                                        <div class="list-view-item-title">
                                                            <a href="product-layout1.html">Oxford Cuban Shirt</a>
                                                        </div>
                                                        <div class="cart-meta-text">
                                                            Color: Black<br>Size: Small
                                                        </div>
                                                    </td>
                                                    <td class="text-center">2</td>
                                                    <td class="text-center">$99.00</td>
                                                    <td class="text-center"><strong>$198.00</strong></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--End Order Summary-->
                            <!--Order Comment-->
                            <div class="block order-comments my-4">
                                <div class="block-content">
                                    <h3 class="title mb-3">Order Comment</h3>
                                    <fieldset>
                                        <div class="row">
                                            <div class="form-group col-md-12 col-lg-12 col-xl-12 mb-0">
                                                <textarea class="resize-both form-control" rows="3" placeholder="Place your comment here"></textarea>
                                                <small class="mt-2 d-block">*Savings include promotions, coupons,
                                                    rueBUCKS, and shipping (if applicable).</small>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <!--End Order Comment-->
                        </div>
                        <div class="col-12 col-sm-12 col-md-5 col-lg-4">
                            <!--Apply Promocode-->
                            <div class="block mb-3 apply-code mb-4">
                                <div class="block-content">
                                    <h3 class="title mb-3">Apply Promocode</h3>
                                    <div id="coupon" class="coupon-dec">
                                        <p>Got a promo code? Then you're a few randomly combined numbers & letters away
                                            from fab savings!</p>
                                        <div class="input-group mb-0 d-flex">
                                            <input id="coupon-code" required="" type="text"
                                                class="form-control" placeholder="Promotion/Discount Code">
                                            <button class="coupon-btn btn btn-primary" type="submit">Apply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Apply Promocode-->
                            <!--Cart Summary-->
                            <div class="cart-info mb-4">
                                <div class="cart-order-detail cart-col">
                                    <div class="row g-0 border-bottom pb-2">
                                        <span
                                            class="col-6 col-sm-6 cart-subtotal-title"><strong>Subtotal</strong></span>
                                        <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span
                                                class="money">$326.00</span></span>
                                    </div>
                                    <div class="row g-0 border-bottom py-2">
                                        <span class="col-6 col-sm-6 cart-subtotal-title"><strong>Coupon
                                                Discount</strong></span>
                                        <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span
                                                class="money">-$25.00</span></span>
                                    </div>
                                    <div class="row g-0 border-bottom py-2">
                                        <span class="col-6 col-sm-6 cart-subtotal-title"><strong>Tax</strong></span>
                                        <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span
                                                class="money">$10.00</span></span>
                                    </div>
                                    <div class="row g-0 border-bottom py-2">
                                        <span
                                            class="col-6 col-sm-6 cart-subtotal-title"><strong>Shipping</strong></span>
                                        <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span
                                                class="money">Free shipping</span></span>
                                    </div>
                                    <div class="row g-0 pt-2">
                                        <span
                                            class="col-6 col-sm-6 cart-subtotal-title fs-6"><strong>Total</strong></span>
                                        <span
                                            class="col-6 col-sm-6 cart-subtotal-title fs-5 cart-subtotal text-end text-primary"><b
                                                class="money">$311.00</b></span>
                                    </div>
                                </div>
                            </div>
                            <!--Cart Summary-->
                        </div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-secondary me-1 btnPrevious">Back to Order
                            Summary</button>
                        <button type="button" class="btn btn-primary ms-1 btnNext">Next Proceed to Payment</button>
                    </div>
                </div>
                <div class="tab-pane fade" id="steps4">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-7 col-lg-8">
                            <!--Delivery Methods-->
                            <div class="block mb-3 delivery-methods mb-4">
                                <div class="block-content">
                                    <h3 class="title mb-3">Delivery Methods</h3>
                                    <div class="delivery-methods-content">
                                        <div class="customRadio clearfix">
                                            <input id="formcheckoutRadio1" value="" name="radio1"
                                                type="radio" class="radio" checked="checked">
                                            <label for="formcheckoutRadio1" class="mb-0">Standard Delivery $2.99
                                                (3-5 days)</label>
                                        </div>
                                        <div class="customRadio clearfix">
                                            <input id="formcheckoutRadio2" value="" name="radio1"
                                                type="radio" class="radio">
                                            <label for="formcheckoutRadio2" class="mb-0">Express Delivery $10.99
                                                (1-2 days)</label>
                                        </div>
                                        <div class="customRadio clearfix mb-0">
                                            <input id="formcheckoutRadio3" value="" name="radio1"
                                                type="radio" class="radio">
                                            <label for="formcheckoutRadio3" class="mb-0">Same-Day $20.00 (Evening
                                                Delivery)</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Delivery Methods-->
                            <!--Payment Methods-->
                            <div class="block mb-3 payment-methods mb-4">
                                <div class="block-content">
                                    <h3 class="title mb-3">Payment Methods</h3>
                                    <div class="payment-accordion-radio">
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item card mb-2">
                                                <div class="card-header" id="headingOne">
                                                    <button class="card-link" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">

                                                    </button>
                                                </div>

                                            </div>
                                            <div class="accordion-item card mb-2">
                                                <div class="card-header" id="headingTwo">
                                                    <button class="card-link" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                        <span class="customRadio clearfix mb-0">
                                                            <input id="paymentRadio2" value=""
                                                                name="payment" type="radio" class="radio" />
                                                            <label for="paymentRadio2" class="mb-0">Pay with
                                                                Paypal</label>
                                                        </span>
                                                    </button>
                                                </div>
                                                <div id="collapseTwo" class="accordion-collapse collapse"
                                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="card-body px-0">
                                                        <p>Pay via PayPal you can pay with your credit card if you don't
                                                            have a PayPal account.</p>
                                                        <div class="input-group mb-0 d-flex">
                                                            <input type="text" class="form-control"
                                                                placeholder="paypal@example.com" required="">
                                                            <button class="btn btn-primary" type="submit">Pay 99.00
                                                                USD</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item card mb-2">
                                                <div class="card-header" id="headingThree">
                                                    <button class="card-link" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                        aria-expanded="false" aria-controls="collapseThree">
                                                        <span class="customRadio clearfix mb-0">
                                                            <input id="paymentRadio3" value=""
                                                                name="payment" type="radio" class="radio" />
                                                            <label for="paymentRadio3" class="mb-0">Cheque
                                                                Payment</label>
                                                        </span>
                                                    </button>
                                                </div>
                                                <div id="collapseThree" class="accordion-collapse collapse"
                                                    aria-labelledby="headingThree"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="card-body px-0">
                                                        <p>Please send your cheque to Store Name, Store Street, Store
                                                            Town, Store State / County, Store Postcode.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item card mb-0">
                                                <div class="card-header" id="headingFour">
                                                    <button class="card-link" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                        aria-expanded="false" aria-controls="collapseFour">
                                                        <span class="customRadio clearfix mb-0">
                                                            <input id="paymentRadio4" value=""
                                                                name="payment" type="radio" class="radio" />
                                                            <label for="paymentRadio4" class="mb-0">Cash On
                                                                Delivery</label>
                                                        </span>
                                                    </button>
                                                </div>
                                                <div id="collapseFour" class="accordion-collapse collapse"
                                                    aria-labelledby="headingFour"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="card-body px-0">
                                                        <p>Cash on delivery refers to an arrangement in which payment
                                                            for a purchase is made directly by the purchaser to the
                                                            person who delivers the item.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Payment Methods-->
                        </div>
                        <div class="col-12 col-sm-12 col-md-5 col-lg-4">
                            <!--Cart Summary-->
                            <div class="cart-info">
                                <div class="cart-order-detail cart-col">
                                    <div class="row g-0 border-bottom pb-2">
                                        <span
                                            class="col-6 col-sm-6 cart-subtotal-title"><strong>Subtotal</strong></span>
                                        <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span
                                                class="money">$226.00</span></span>
                                    </div>
                                    <div class="row g-0 border-bottom py-2">
                                        <span class="col-6 col-sm-6 cart-subtotal-title"><strong>Coupon
                                                Discount</strong></span>
                                        <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span
                                                class="money">-$25.00</span></span>
                                    </div>
                                    <div class="row g-0 border-bottom py-2">
                                        <span class="col-6 col-sm-6 cart-subtotal-title"><strong>Tax</strong></span>
                                        <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span
                                                class="money">$10.00</span></span>
                                    </div>
                                    <div class="row g-0 border-bottom py-2">
                                        <span
                                            class="col-6 col-sm-6 cart-subtotal-title"><strong>Shipping</strong></span>
                                        <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span
                                                class="money">Free shipping</span></span>
                                    </div>
                                    <div class="row g-0 pt-2">
                                        <span
                                            class="col-6 col-sm-6 cart-subtotal-title fs-6"><strong>Total</strong></span>
                                        <span
                                            class="col-6 col-sm-6 cart-subtotal-title fs-5 cart-subtotal text-end text-primary"><b
                                                class="money">$311.00</b></span>
                                    </div>

                                    <a href="order-success.html" id="cartCheckout"
                                        class="btn btn-lg my-4 checkout w-100">Place order</a>
                                    <div class="paymnet-img text-center"><img
                                            src="assets/images/icons/safepayment.png" alt="Payment"
                                            width="299" height="28" /></div>
                                </div>
                            </div>
                            <!--Cart Summary-->
                        </div>
                    </div>
                </div>
            </div>
            <!--End Tab checkout content-->

        </div>
    </div>
</div>
@endsection
