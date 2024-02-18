<!-- START HEADER -->
<header class="header_wrap">
    <div class="middle-header dark_skin">
        <div class="custom-container">
            <div class="nav_block">
                <a class="navbar-brand" href="{{route('home')}}">
                    {{--                    <img class="logo_light" src=" {{asset('assets')}}/images/Capture_dark2.png" alt="logo"/>--}}
                    <img class="logo_dark" src=" {{asset('assets')}}/images/capture2.png" alt="logo"/>
                </a>
                <div class="product_search_form rounded_input">

                    <div class="input-group">
                        {{--                            <div class="input-group-prepend">--}}
                        {{--                                <div class="custom_select">--}}
                        {{--                                    <select class="first_null" id="searchCategory">--}}
                        {{--                                        <option value="">All Category</option>--}}


                        {{--                                    </select>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        <input class="form-control" placeholder="Search Product..." required="" type="text"
                               id="searchName">
                        <button type="button" onclick="searchProduct()" class="search_btn2"><i class="fa fa-search"></i>
                        </button>
                    </div>

                </div>

                <ul class="navbar-nav attr-nav align-items-center">
                    @if(Cookie::get('token')!==null)
                        {{--                        <li class="dropdown">--}}
                        {{--                            <a class="dropdown-toggle nav-link" href="#" data-bs-toggle="dropdown"><i--}}
                        {{--                                    class="linearicons-user"></i><span class="bold " id="user"> Welcome </span></a>--}}
                        {{--                            <div class="dropdown-menu" id="hoverDropdown">--}}
                        {{--                                <ul class="menu d-lg-flex">--}}
                        {{--                                    <li class="menu-col col-lg-3">--}}
                        {{--                                        <ul id="" class="navbar-nav nav-link">--}}

                        {{--                                            <li><a class="dropdown-item nav-link text-decoration-none"--}}
                        {{--                                                   href="{{url('/logout')}}">Logout</a></li>--}}
                        {{--                                            <li><a class="dropdown-item nav-link text-decoration-none"--}}
                        {{--                                                   href="{{url('/my-account')}}">Account</a></li>--}}

                        {{--                                        </ul>--}}
                        {{--                                    </li>--}}

                        {{--                                </ul>--}}

                        {{--                            </div>--}}
                        {{--                        </li>--}}

                        <li class="dropdown cart_dropdown"><a class="nav-link cart_trigger" href=""
                                                              data-bs-toggle="dropdown"><i
                                    class="linearicons-user"></i><span class="cart_count" id="">Welcome</span></a>

                            <div class="cart_box cart_right dropdown-menu dropdown-menu-right">
                                <ul class="cart_list" id="">
                                    <li><a href="{{url('/my-account')}}">My Account </a></li>
                                    <li><a href="{{url('/logout')}}">Logout </a></li>

                                </ul>


                            </div>
                        </li>

                    @else

                        <li class=""><a href="{{url('/login')}}" class="nav-link "><i class="linearicons-user"></i><span
                                    class="bold " id="user"> Login </span></a></li>

                    @endif


                    @if(Cookie::get('token')!==null)

                        <li>
                            <a href=" @if(Cookie::get('token')!==null){{url('/wishlist-page')}} @else {{url('/login')}}  @endif"
                               class="nav-link"><i class="linearicons-heart"></i><span
                                    class="wishlist_count" id="wishlistCount">0</span> <span class="mx-1"
                                                                                             id="user">Wish</span></a>
                        </li>

                        <li class="dropdown cart_dropdown"><a class="nav-link cart_trigger" href=""
                                                              data-bs-toggle="dropdown"><i
                                    class="linearicons-bag2"></i><span class="cart_count" id="cartQty"></span><span
                                    class="amount"><span
                                        class="currency_symbol">$</span> <span class='subT'>0</span></span></a>

                            <div class="cart_box cart_right dropdown-menu dropdown-menu-right">
                                <ul class="cart_list" id="menuCartList">


                                </ul>

                                <div class="cart_footer">
                                    <p class="cart_total"><strong>Subtotal:</strong> <span class="cart_price"> <span
                                                class="price_symbole">$</span></span> <span class="subT">0</span>
                                    </p>
                                    <p class="cart_buttons"><a
                                            href="@if(Cookie::get('token')!==null){{url('/cart-page')}} @else {{url('/login')}}  @endif"
                                            class="btn btn-fill-line view-cart">View Cart</a><a
                                            href="@if(Cookie::get('token')!==null){{url('/checkout-page')}}@else {{url('/login')}} @endif"
                                            class="btn btn-fill-out checkout">Checkout</a></p>
                                </div>
                            </div>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
    <div class="bottom_header dark_skin main_menu_uppercase border-top border-bottom">
        <div class="custom-container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-3">

                    @if(Route::currentRouteName()==='home')

                        <div class="categories_wrap">
                            <button type="button" data-bs-toggle="collapse" data-bs-target="#navCatContent"
                                    aria-expanded="false" class="categories_btn collapsed">
                                <i class="linearicons-menu"></i><span>All Categories </span>
                            </button>
                            <div id="navCatContent" class="nav_cat navbar nav collapse">
                                <ul id="catList">


                                </ul>

                                <div class="more_categories">More Categories</div>
                            </div>
                        </div>

                    @endif

                </div>

                <div class="col-lg-6 col-md-8 col-sm-6 col-9">
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler side_navbar_toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSidetoggle" aria-expanded="false">
                            <span class="ion-android-menu"></span>
                        </button>
                        <div class="pr_search_icon">
                            <a href="javascript:;" class="nav-link pr_search_trigger"><i
                                    class="linearicons-magnifier"></i></a>
                        </div>
                        <div class="collapse navbar-collapse mobile_side_menu" id="navbarSidetoggle">
                            <ul class="navbar-nav">
                                <li class=" ">
                                    <a data-bs-toggle="" class="nav-link active"
                                       href="{{route('home')}}">Home</a>

                                </li>


                                <li class="dropdown ">
                                    <a class="dropdown-toggle nav-link" href="#"
                                       data-bs-toggle="dropdown">Products</a>
                                    <div class="dropdown-menu">
                                        <ul class="mega-menu d-lg-flex">
                                            <li class="mega-menu-col col-lg-3">
                                                <ul id="productMenu">
                                                    <li class="dropdown-header">Categories</li>

                                                </ul>
                                            </li>

                                        </ul>

                                    </div>
                                </li>


                                <li><a class="nav-link nav_item" href="{{url('/about-us')}}">About Us</a></li>
                                <li><a class="nav-link nav_item" href="{{url('/contact-us')}}">Contact Us</a></li>
                                <li><a class="nav-link nav_item" href="{{url('/faq')}}">FAQ</a></li>
                            </ul>
                        </div>
                        {{--                        <div class="contact_phone contact_support">--}}
                        {{--                            <i class="linearicons-phone-wave"></i>--}}
                        {{--                            <span>123-456-7689</span>--}}
                        {{--                        </div>--}}
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
{{--<!-- END HEADER -->--}}


<script>
    (async () => {

            await wishListCount()
            await cartList2()


        }
    )()


    async function category() {

        let res = await axios.get('/categories')

        $('#catList').empty()
        // $('#productMenu').empty()

        let category = res.data['data'].slice(0, 10)
        category.forEach(function (item, index) {


            let cat = `<li class="dropdown dropdown-mega-menu">
                                    <a class=" nav-link " href="/productsByCategory?id=${item['id']}"> <span>${item['category_name']}</span></a>
<!--                                    <div class="dropdown-menu">-->
<!--                                        <ul class="mega-menu d-lg-flex">-->
<!--                                            <li class="mega-menu-col col-lg-6">-->
<!--                                                <ul class="d-lg-flex">-->
<!--                                                    <li class=" col-lg-6">-->
<!--                                                        <ul>-->
<!--                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Vestibulum-->
<!--                                                                    sed</a></li>-->

<!--                                                        </ul>-->
<!--                                                    </li>-->

<!--                                                </ul>-->
<!--                                            </li>-->

<!--                                        </ul>-->
<!--                                    </div>-->
                                </li>`
            let pro = ` <li><a class="dropdown-item nav-link nav_item" href="/productsByCategory?id=${item['id']}">${item['category_name']} </a></li>`

            let cat2 = ` <option value="${item['category_name']}">${item['category_name']}</option>`

            $('#catList').append(cat)
            $('#productMenu').append(pro)
            $('#searchCategory').append(cat2)


        })

    }


    async function cartList2() {

        try {


            let res = await axios.get(`/cartList`);
            $("#menuCartList").empty();

            res.data['data'].forEach((item, i) => {
                let EachItem = `<li>
                                    <a href="#" class="item_remove" data-id="${item['product_id']}"><i class="ion-close"></i></a>
                                    <a href="#"><img src=" ${item['product']['image']}" alt="cart_thumb1">${item['product']['title']}</a>
                                    <span class="cart_quantity"> ${item['qty']} x <span class="cart_amount"> <span
                                                class="price_symbole">$</span></span>${item['product']['discount_price']}</span>
                                </li>`
                $("#menuCartList").append(EachItem);
            })

            await cartTotal(res.data['data']);

            $(".item_remove").on('click', function () {
                let id = $(this).data('id');
                removeCartProduct(id);
                // location.reload()
            })
        } catch (e) {


        }


        async function cartTotal(data) {
            let Total = 0
            let cartQty = 0
            data.forEach(function (item, i) {
                Total = Total + parseFloat(item['price']);
                cartQty = cartQty + 1


            })

            $('.subT').text(Total)
            $('#cartQty').text(cartQty)

        }
    }


    async function removeCartProduct(id) {
        let preloader = $(".preloader");
        preloader.delay(50).fadeIn(60).removeClass('loaded');

        let res = await axios.get(`/removeCart/${id}`)
        preloader.delay(50).fadeOut(60).addClass('loaded');
        if (res.data['message'] === 'success') {
            await cartList2()

        } else {
            errorToast('Request Failed')
        }
    }


    async function wishListCount() {


        try {


            let res = await axios.get('/wishList')


            let totalWish = 0
            if (res.data['data'] !== null) {
                res.data['data'].forEach(function (item, i) {
                    totalWish = totalWish + 1
                })

                $('#wishlistCount').text(totalWish)


            }
        } catch (e) {

        }


    }

    async function searchProduct() {

        let searchProduct = $('#searchName').val();

        if (searchProduct.length === 0) {
            alert('Product Name Required')
        } else {
            let res = await axios.get(`/products-search/${searchProduct}`)

            if (res.data['message'] === "success") {
                sessionStorage.setItem(`productName`, searchProduct)
                window.location.href = `/search-products`

            } else {
                console.error('error')
            }

        }
    }
</script>
