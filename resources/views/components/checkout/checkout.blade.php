<div class="p-4 bg_gray page-title-mini">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="page-title">
                    <h1>Checkout</h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active">Checkout</li>
                </ol>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>


<div class="main_content">

    <!-- START SECTION SHOP -->
    <div class="section pt-4 mt-4">
        <div class="container">
            <div class="row">

{{--                <div class="col-lg-6">--}}
{{--                    <div class="toggle_info">--}}
{{--                        <span><i class="fas fa-tag"></i>Have a coupon? <a href="#coupon" data-bs-toggle="collapse"--}}
{{--                                                                          class="collapsed" aria-expanded="false">Click here to enter your code</a></span>--}}
{{--                    </div>--}}
{{--                    <div class="panel-collapse coupon_form collapse" id="coupon" style="">--}}
{{--                        <div class="panel-body">--}}
{{--                            <p>If you have a coupon code, please apply it below.</p>--}}
{{--                            <div class="coupon field_form input-group">--}}
{{--                                <input type="text" value="" class="form-control" placeholder="Enter Coupon Code..">--}}
{{--                                <div class="input-group-append">--}}
{{--                                    <button class="btn btn-fill-out btn-sm" type="submit">Apply Coupon</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="medium_divider"></div>
                    <div class="divider center_icon"><i class="linearicons-credit-card"></i></div>
                    <div class="medium_divider"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="heading_s1">
                        <h4>Billing Details</h4>
                    </div>

                    <div class="form-group mb-3">
                        <input type="text" required="" class="form-control" id="name" name="fname" placeholder="Name *">
                    </div>


                    <div class="form-group mb-3">
                        <div class="custom_select">
                            <select class="form-control first_null not_chosen" id="country">
                                <option value="">Select Country...</option>
                                <option value="Bangladesh">Bangladesh</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" name="billing_address" id="add" required=""
                               placeholder="Address *">
                    </div>

                    <div class="form-group mb-3">
                        <input class="form-control" required="" type="text" name="city" id="city"
                               placeholder="City / Town *">
                    </div>

                    <div class="form-group mb-3">
                        <input class="form-control" required="" type="text" name="state" id="state"
                               placeholder="State *">
                    </div>
                    <div class="form-group mb-3">
                        <input class="form-control" required="" type="text" name="zipcode" id="postcode"
                               placeholder="Postcode / ZIP *">
                    </div>
                    <div class="form-group mb-3">
                        <input class="form-control" required="" type="text" name="phone" id="phone" placeholder="Phone *">
                    </div>
                    <div class="form-group mb-3">
                        <input class="form-control" required="" type="text" name="email" id="email" placeholder="Email address *">
                    </div>


                    <div class="ship_detail">
                        <div class="form-group mb-3">
                            <div class="chek-form">
                                <div class="custome-checkbox">
                                    <input class="form-check-input" type="checkbox" name="checkbox"
                                           id="differentaddress">
                                    <label class="form-check-label label_info" for="differentaddress"><span>Ship to a different address?</span></label>
                                </div>
                            </div>
                        </div>

                        <div class="different_address" style="display: none;">
                            <div class="form-group mb-3">
                                <input type="text" required="" class="form-control" id="s_name" name="fname"
                                       placeholder="Name *">
                            </div>
                            <div class="form-group mb-3">
                                <div class="custom_select">
                                    <select class="form-control first_null not_chosen" id="s_country">
                                        <option value="">Select Country...</option>
                                        <option value="Bangladesh">Bangladesh</option>

                                    </select>
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" class="form-control" name="billing_address" id="s_add" required=""
                                       placeholder="Address *">
                            </div>

                            <div class="form-group mb-3">
                                <input class="form-control" required="" type="text" name="city" id="s_city"
                                       placeholder="City / Town *">
                            </div>

                            <div class="form-group mb-3">
                                <input class="form-control" required="" type="text" name="state" id="s_state"
                                       placeholder="State *">
                            </div>
                            <div class="form-group mb-3">
                                <input class="form-control" required="" type="text" name="zipcode" id="s_postcode"
                                       placeholder="Postcode / ZIP *">
                            </div>
                            <div class="form-group mb-3">
                                <input class="form-control" required="" type="text" name="phone" id="s_phone"
                                       placeholder="Phone *">
                            </div>
                            <div class="form-group mb-3">
                                <input class="form-control" required="" type="text" name="email" id="s_email"
                                       placeholder="Email address *">
                            </div>
                        </div>
                    </div>

                    <div class="heading_s1">
                        <h4>Additional information</h4>
                    </div>
                    <div class="form-group mb-0">
                        <textarea rows="5" class="form-control" placeholder="Order notes"></textarea>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="order_review">
                        <div class="heading_s1">
                            <h4>Your Orders</h4>
                        </div>
                        <div class="table-responsive order_table">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Total</th>
                                </tr>
                                </thead>
                                <tbody id="checkoutList">


                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>SubTotal</th>
                                    <td class="product-subtotal" id="subT">$0</td>
                                </tr>
                                <tr>
                                    <th>Shipping</th>
                                    <td>Free Shipping</td>
                                </tr>
                                <tr>
                                    <th>Total</th>
                                    <td class="product-subtotal" id="allT">$0</td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="payment_method">
                            <div class="heading_s1">
                                <h4>Payment</h4>
                            </div>
                            <div class="payment_option">

                                <div class="custome-radio" >
                                    <input class="form-check-input " type="radio" name="payment_option"
                                           id="exampleRadios4" value="cod">
                                    <label class="form-check-label" for="exampleRadios4">Cash on Delivery</label>
                                    <p data-method="option4" class="payment-text" style="display: none;">We accept Cash
                                        on Delivery Inside Dhaka</p>
                                </div>

                                <div class="custome-radio">
                                    <input class="form-check-input " type="radio" name="payment_option"
                                           id="exampleRadios5" value="online">
                                    <label class="form-check-label" for="exampleRadios5">Online
                                        Payment (SSLCOMMERZ)</label>
                                    <p data-method="option5" class="payment-text" style="display: block;">Pay via
                                        Cards,Mobile Banking, Internet Banking, E-Wallets and EMI </p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="btn btn-fill-out btn-block" onclick="order()">Place Order</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION SHOP -->


</div>

<script>


    async function cartListOnCheckout() {
        let preloader = $(".preloader");
        preloader.delay(50).fadeIn(60).removeClass('loaded');
        let res = await axios.get('/cartList');
        preloader.delay(50).fadeOut(60).addClass('loaded');


        $('#checkoutList').empty();


        res.data['data'].forEach(function (item, i) {


            let forEach = `  <tr>
                                    <td>${item['product']['title']} <span class="product-qty">x ${item['qty']}</span></td>
                                    <td>${item['price']}</td>
                                </tr>`

            $('#checkoutList').append(forEach)
        })


           await cartT(res.data['data']);

            async function cartT(data) {
                let Total = 0
                let cartQty = 0
                data.forEach(function (item, i) {
                    Total = Total + parseFloat(item['price']);
                    cartQty = cartQty + 1




                $('#subT').text(Total)
              $('#allT').text(Total)

            })



        }

    }

    async function showProfileOnCheckout()
    {
        let preloader = $(".preloader");

        try {


            preloader.delay(50).fadeIn(60).removeClass('loaded');
            let res = await axios.get('/profile');
            preloader.delay(50).fadeOut(60).addClass('loaded');
            let data = res.data['data']
            if (res.data['message'] === 'success') {
                $('#name').val(data['cus_name'])
                $('#add').val(data['cus_add'])
                $('#city').val(data['cus_city'])
                $('#country').val(data['cus_country'])
                $('#state').val(data['cus_state'])
                $('#postcode').val(data['cus_postcode'])
                $('#phone').val(data['cus_phone'])
                $('#email').val(data['user']['email'])

                $('#s_name').val(data['ship_name'])
                $('#s_add').val(data['ship_add'])
                $('#s_city').val(data['ship_city'])
                $('#s_country').val(data['ship_country'])
                $('#s_state').val(data['ship_state'])
                $('#s_postcode').val(data['ship_postcode'])
                $('#s_phone').val(data['ship_phone'])
                $('#s_email').val(data['user']['email'])


            }
        }
        catch (e) {
            console.log(e)
        }
    }

    async function order() {


        let val = $('input[name=payment_option]:checked').val()

        //profile created or updated
        let name = $('#name').val();
        let phone = $('#phone').val();
        let state = $('#state').val();
        let country = $('#country').val();
        let city = $('#city').val();
        let postcode = $('#postcode').val();
        let address = $('#add').val();

        let s_name = $('#s_name').val();
        let s_phone = $('#s_phone').val();
        let s_state = $('#s_state').val();
        let s_country = $('#s_country').val();
        let s_city = $('#s_city').val();
        let s_postcode = $('#s_postcode').val();
        let s_address = $('#s_add').val();


        let obj =

            {
                "cus_name": name,
                "cus_add": address,
                "cus_city": city,
                "cus_state": state,
                "cus_postcode": postcode,
                "cus_country": country,
                "cus_phone": phone,
                "cus_fax": "1234",
                "ship_name": s_name,
                "ship_add": s_address,
                "ship_city": s_city,
                "ship_state": s_state,
                "ship_postcode": s_postcode,
                "ship_country": s_country,
                "ship_phone": s_phone

            }


        if (name.length === 0) {
            alert('Name Required')
        } else if (phone.length === 0) {
            alert('Phone Required')
        } else if (state.length === 0) {
            alert('State Required')
        } else if (country.length === 0) {
            alert('Country Required')
        } else if (city.length === 0) {
            alert('City Required')
        } else if (postcode.length === 0) {
            alert('Postcode Required')
        } else if (address.length === 0) {
            alert('Address Required')
        } else if (s_name.length === 0) {
            alert('Phone Required')
        } else if (s_phone.length === 0) {
            alert('State Required')
        } else if (s_state.length === 0) {
            alert('Country Required')
        } else if (s_country.length === 0) {
            alert('City Required')
        } else if (s_city.length === 0) {
            alert('Postcode Required')
        } else if (s_postcode.length === 0) {
            alert('Address Required')
        } else if (s_address.length === 0) {
            alert('Address Required')
        } else {

            if (val === 'cod') {


                $(".preloader").delay(50).fadeIn(60).removeClass('loaded');
                let res1 = await axios.post('/createProfile', obj)
                $(".preloader").delay(50).fadeOut(60).addClass('loaded');

                if (res1.status === 201) {
                    alert('Profile Created!')
                }


                // invoice and invoice products create
                let preloader = $(".preloader");
                preloader.delay(50).fadeIn(60).removeClass('loaded');
                let res2 = await axios.post('/createInvoice');
                preloader.delay(50).fadeOut(60).addClass('loaded');

                if (res2.data['message'] === 'success') {
                    alert('success')
                }

            }

        }
    }


</script>
