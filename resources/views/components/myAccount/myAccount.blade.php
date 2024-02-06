<div class="p-4 bg_gray page-title-mini">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="page-title">
                    <h1>My Account</h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active">My Account</li>
                </ol>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>


<div class="main_content">

    <!-- START SECTION SHOP -->
    <div class="section mt-4 pt-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-4">
                    <div class="dashboard_menu">
                        <ul class="nav nav-tabs flex-column" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="dashboard-tab" data-bs-toggle="tab" href="#dashboard" role="tab"
                                   aria-controls="dashboard" aria-selected="false" tabindex="-1"><i
                                        class="ti-layout-grid2"></i>Dashboard</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="orders-tab" data-bs-toggle="tab" href="#orders"
                                   role="tab" aria-controls="orders" aria-selected="true"><i
                                        class="ti-shopping-cart-full"></i>Orders</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="address-tab" data-bs-toggle="tab" href="#address" role="tab"
                                   aria-controls="address" aria-selected="false" tabindex="-1"><i
                                        class="ti-location-pin"></i>My Address</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="account-detail-tab" data-bs-toggle="tab" href="#account-detail"
                                   role="tab" aria-controls="account-detail" aria-selected="false" tabindex="-1"><i
                                        class="ti-id-badge"></i>Account details</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" href="{{url('/logout')}}" aria-selected="false" tabindex="-1" role="tab"><i
                                        class="ti-lock"></i>Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-10 col-md-8">
                    <div class="tab-content dashboard_content">
                        <div class="tab-pane fade" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Dashboard</h3>
                                </div>
                                <div class="card-body">
                                    <p>From your account dashboard. you can easily check &amp; view your <a
                                            href="javascript:;" onclick="$('#orders-tab').trigger('click')">recent
                                            orders</a>, manage your <a href="javascript:;"
                                                                       onclick="$('#address-tab').trigger('click')">shipping
                                            and billing addresses</a> and <a href="javascript:;"
                                                                             onclick="$('#account-detail-tab').trigger('click')">edit
                                            your password and account details.</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade active show" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Orders</h3>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Shipping Details</th>
                                                <th>Date</th>
                                                <th>Payment Status</th>
                                                <th>Delivery Status</th>
                                                <th>Total(including Vat)</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody id="orderList" class="colsp">


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

{{--               Order Details Modal         --}}
                        <div class="modal" id="InvoiceProductModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title fs-6" id="exampleModalLabel">Products</h6>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                            </tr>
                                            </thead>
                                            <tbody id="productList">

                                            </tbody>
                                        </table>



                                    </div>
                                </div>
                            </div>
                        </div>

{{--                        <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-lg-6">--}}
{{--                                    <div class="card mb-3 mb-lg-0">--}}
{{--                                        <div class="card-header">--}}
{{--                                            <h3>Billing Address</h3>--}}
{{--                                        </div>--}}
{{--                                        <div class="card-body">--}}
{{--                                            <address>House #15<br>Road #1<br>Block #C <br>Angali <br> Vedora <br>1212--}}
{{--                                            </address>--}}
{{--                                            <p>New York</p>--}}
{{--                                            <a href="#" class="btn btn-fill-out">Edit</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-6">--}}
{{--                                    <div class="card">--}}
{{--                                        <div class="card-header">--}}
{{--                                            <h3>Shipping Address</h3>--}}
{{--                                        </div>--}}
{{--                                        <div class="card-body">--}}
{{--                                            <address>House #15<br>Road #1<br>Block #C <br>Angali <br> Vedora <br>1212--}}
{{--                                            </address>--}}
{{--                                            <p>New York</p>--}}
{{--                                            <a href="#" class="btn btn-fill-out">Edit</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="tab-pane fade" id="account-detail" role="tabpanel"
                             aria-labelledby="account-detail-tab">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Customer Details</h3>
                                </div>
                                <div class="card-body">
                                    {{--    <p>Already have an account? <a href="#">Log in instead!</a></p>--}}

                                    <div class="row">
                                        <div class="form-group col-md-6 mb-3">
                                            <label>Name <span class="required">*</span></label>
                                            <input required="" class="form-control" name="name" id="name" type="text">
                                        </div>
                                        <div class="form-group col-md-6 mb-3">
                                            <label>Country <span class="required">*</span></label>
                                            <input required="" class="form-control" name="phone" id="country"
                                                   value="Bangladesh">
                                        </div>
                                        <div class="form-group col-md-6 mb-3">
                                            <label>City<span class="required">*</span></label>
                                            <input required="" class="form-control" name="dname" id="city" type="text">
                                        </div>
                                        <div class="form-group col-md-6 mb-3">
                                            <label>State <span class="required">*</span></label>
                                            <input required="" class="form-control" name="email" id="state" type="text">
                                        </div>
                                        <div class="form-group col-md-6 mb-3">
                                            <label>Postcode<span class="required">*</span></label>
                                            <input required="" class="form-control" name="password" id="postcode"
                                                   type="text">
                                        </div>
                                        <div class="form-group col-md-6 mb-3">
                                            <label>phone<span class="required">*</span></label>
                                            <input required="" class="form-control" name="npassword" id="phone"
                                                   type="text">
                                        </div>
                                        <div class="form-group col-md-12 mb-3">
                                            <label>Email <span class="required">*</span></label>
                                            <input required="" class="form-control" name="cpassword" id="email"
                                                   type="email">
                                        </div>
                                        <div class="form-group col-md-12 mb-3">
                                            <label>Address <span class="required">*</span></label>
                                            <input required="" class="form-control" name="cpassword" id="add"
                                                   type="text">
                                        </div>
                                        <div class="col-md-12">
                                            <button class="btn btn-fill-out" name="submit" value="Submit"
                                                    onclick="createProfile()">Save
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION SHOP -->

</div>

<script>

    async function createProfile() {
        let name = $('#name').val();
        let phone = $('#phone').val();
        let state = $('#state').val();
        let country = $('#country').val();
        let email = $('#email').val();
        let city = $('#city').val();
        let postcode = $('#postcode').val();
        let address = $('#add').val();

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
                "ship_name": name,
                "ship_add": address,
                "ship_city": city,
                "ship_state": state,
                "ship_postcode": postcode,
                "ship_country": country,
                "ship_phone": phone

            }


        if (name.length === 0) {
            alert('Name Required')
        } else if (phone.length === 0) {
            alert('Phone Required')
        } else if (state.length === 0) {
            alert('State Required')
        } else if (country.length === 0) {
            alert('Country Required')
        } else if (email.length === 0) {
            alert('Email Required')
        } else if (city.length === 0) {
            alert('City Required')
        } else if (postcode.length === 0) {
            alert('Postcode Required')
        } else if (address.length === 0) {
            alert('Address Required')
        } else {
            $(".preloader").delay(50).fadeIn(60).removeClass('loaded');
            let res = await axios.post('/createProfile', obj)
            $(".preloader").delay(50).fadeOut(60).addClass('loaded');

            if (res.status === 201) {
                alert('Profile Created!')
            }
        }


    }



    async function showProfileInfo() {
        $(".preloader").delay(50).fadeIn(60).removeClass('loaded');
        let res = await axios.get('/profile')
        $(".preloader").delay(50).fadeOut(60).addClass('loaded');

        if (res.data['message'] === 'success') {
            $('#name').val(res.data['data']['cus_name']);
            $('#phone').val(res.data['data']['cus_phone']);
            $('#state').val(res.data['data']['cus_state']);
            $('#country').val(res.data['data']['cus_country']);
            $('#email').val(res.data['data']['user']['email']);
            $('#city').val(res.data['data']['cus_city']);
            $('#postcode').val(res.data['data']['cus_postcode']);
            $('#add').val(res.data['data']['cus_add']);
        }
        else
        {
            alert('invalid request')
        }


    }

    async function orderList()
    {

        let res=await axios.get('/invoiceList')

        $('#orderList').empty()
        res.data['data'].forEach(function (item,i)
        {
            let eachProduct=`  <tr aria-colspan="5">
                                                <td>${item['id']}</td>
                                                <td>${item['ship_details']}</td>
                                                <td>${item['created_at']}</td>
                                                <td>${item['payment_status']}</td>
                                                <td>${item['delivery_status']}</td>
                                                <td>${item['payable']}</td>
                                                <td><button href="#" data-id="${item['id']}" class="btn btn-fill-out btn-sm detailBtn">View</button></td>


                                            </tr>`

            $('#orderList').append(eachProduct)

            $('.detailBtn').on('click',async function ()
            {
                let id= $(this).data('id');
              await  showOrderDetails(id);

            })

        })


    }

    async function showOrderDetails(id)
    {
        let res= await axios.get(`/invoiceProductList/${id}`)
        if (res.data['message']==='success')
        {
            $("#InvoiceProductModal").modal('show');
            $("#productList").empty();
            res.data['data'].forEach(function (ite,ind)
            {
                let each= `  <tr>
                                                <td>${ite['product']['title']}</td>
                                                <td>${ite['qty']}</td>
                                                <td>${ite['sale_price']}</td>
                                            </tr>`

                $('#productList').append(each)
            })
        }
    }


</script>
