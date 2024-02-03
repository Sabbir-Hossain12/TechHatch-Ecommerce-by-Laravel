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
                    <form>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="custom_select">
                                    <select class="first_null" id="searchCategory">
                                        <option value="">All Category</option>


                                    </select>
                                </div>
                            </div>
                            <input class="form-control" placeholder="Search Product..." required="" type="text">
                            <button type="submit" class="search_btn2"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>

                <ul class="navbar-nav attr-nav align-items-center">
                    @if(Cookie::get('token')!==null)
                        <li class="dropdown">
                            <a class="dropdown-toggle nav-link" href="#" data-bs-toggle="dropdown"><i
                                    class="linearicons-user"></i><span class="bold " id="user"> Welcome </span></a>
                            <div class="dropdown-menu" id="hoverDropdown">
                                <ul class="menu d-lg-flex">
                                    <li class="menu-col col-lg-3">
                                        <ul id="" class="navbar-nav nav-link">

                                            <li><a class="dropdown-item nav-link text-decoration-none"
                                                   href="{{url('/logout')}}">Logout</a></li>
                                            <li><a class="dropdown-item nav-link text-decoration-none"
                                                   href="">Profile</a></li>

                                        </ul>
                                    </li>

                                </ul>

                            </div>
                        </li>
                    @else


                        <li class=""><a href="{{url('/login')}}" class="nav-link "><i class="linearicons-user"></i><span
                                    class="bold " id="user"> Login </span></a></li>

                    @endif

                    <li><a href="{{url('/wishlist-page')}}" class="nav-link"><i class="linearicons-heart"></i><span
                                class="wishlist_count">0</span> <span class="mx-1" id="user">Wish</span></a></li>

                    <li class="dropdown cart_dropdown"><a class="nav-link cart_trigger" href="{{url('/cart-page')}}"
                                                          data-bs-toggle="dropdown"><i
                                class="linearicons-bag2"></i><span class="cart_count" id="cartQty"></span><span
                                class="amount"><span
                                    class="currency_symbol">$</span>159.00</span></a>

                        <div class="cart_box cart_right dropdown-menu dropdown-menu-right">
                            <ul class="cart_list" id="menuCartList">


                            </ul>

                            <div class="cart_footer">
                                <p class="cart_total"><strong>Subtotal:</strong> <span class="cart_price"> <span
                                            class="price_symbole">$</span></span> <span id="subTotal">159.00</span>
                                </p>
                                <p class="cart_buttons"><a href="{{url('/cart-page')}}"
                                                           class="btn btn-fill-line view-cart">View Cart</a><a
                                        href="#" class="btn btn-fill-out checkout">Checkout</a></p>
                            </div>
                        </div>
                    </li>
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
                            <button type="button" data-bs-toggle="show" data-bs-target="#navCatContent"
                                    aria-expanded="false" class="categories_btn">
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
                                <li class="dropdown">
                                    <a class="dropdown-toggle nav-link" href="#" data-bs-toggle="dropdown">Pages</a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li><a class="dropdown-item nav-link nav_item" href="">About
                                                    Us</a></li>

                                        </ul>
                                    </div>
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


                                <li class="dropdown">
                                    <a class="dropdown-toggle nav-link" href="#" data-bs-toggle="dropdown">Blog</a>
                                    <div class="dropdown-menu dropdown-reverse">
                                        <ul>
                                            <li>
                                                <a class="dropdown-item menu-link dropdown-toggler"
                                                   href="#">Grids</a>
                                                <div class="dropdown-menu">
                                                    <ul>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                               href="">3 columns</a></li>

                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <a class="dropdown-item menu-link dropdown-toggler"
                                                   href="#">Masonry</a>
                                                <div class="dropdown-menu">
                                                    <ul>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                               href="blog-masonry-three-columns.html">3 columns</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <a class="dropdown-item menu-link dropdown-toggler" href="#">Single
                                                    Post</a>
                                                <div class="dropdown-menu">
                                                    <ul>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                               href="blog-single.html">Default</a></li>

                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <a class="dropdown-item menu-link dropdown-toggler"
                                                   href="#">List</a>
                                                <div class="dropdown-menu">
                                                    <ul>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                               href="">left sidebar</a>
                                                        </li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                               href="">right sidebar</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="dropdown dropdown-mega-menu">
                                    <a class="dropdown-toggle nav-link" href="#" data-bs-toggle="dropdown">Shop</a>
                                    <div class="dropdown-menu">
                                        <ul class="mega-menu d-lg-flex">
                                            <li class="mega-menu-col col-lg-9">
                                                <ul class="d-lg-flex">
                                                    <li class="mega-menu-col col-lg-4">
                                                        <ul>
                                                            <li class="dropdown-header">Shop Page Layout</li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                   href="">shop List view</a></li>

                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-col col-lg-4">
                                                        <ul>
                                                            <li class="dropdown-header">Other Pages</li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                   href="">Cart</a></li>

                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-col col-lg-4">
                                                        <ul>
                                                            <li class="dropdown-header">Product Pages</li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                   href="">Default</a></li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-col col-lg-3">
                                                <div class="header_banner">
                                                    <div class="header_banner_content">
                                                        <div class="shop_banner">
                                                            <div class="banner_img overlay_bg_40">
                                                                <img src=" {{asset('assets')}}/images/shop_banner3.jpg"
                                                                     alt="shop_banner"/>
                                                            </div>
                                                            <div class="shop_bn_content">
                                                                <h5 class="text-uppercase shop_subtitle">New
                                                                    Collection</h5>
                                                                <h3 class="text-uppercase shop_title">Sale 30%
                                                                    Off</h3>
                                                                <a href="#"
                                                                   class="btn btn-white rounded-0 btn-sm text-uppercase">Shop
                                                                    Now</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a class="nav-link nav_item" href="">Contact Us</a></li>
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


    async function category() {

        let res = await axios.get('/categories')

        $('#catList').empty()
        // $('#productMenu').empty()
        let category = res.data['data'].slice(0, 10)
        category.forEach(function (item, index) {


            let cat = `<li class="dropdown dropdown-mega-menu">
                                    <a class="dropdown-item nav-link dropdown-toggler" href=""
                                       data-bs-toggle="dropdown"><i class="flaticon-tv"></i> <span>${item['category_name']}</span></a>
                                    <div class="dropdown-menu">
                                        <ul class="mega-menu d-lg-flex">
                                            <li class="mega-menu-col col-lg-6">
                                                <ul class="d-lg-flex">
                                                    <li class=" col-lg-6">
                                                        <ul>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Vestibulum
                                                                    sed</a></li>

                                                        </ul>
                                                    </li>

                                                </ul>
                                            </li>

                                        </ul>
                                    </div>
                                </li>`
            let pro = ` <li><a class="dropdown-item nav-link nav_item" href="/productsByCategory?id=${item['id']}">${item['category_name']} </a></li>`

            let cat2 = ` <option value="${item['category_name']}">${item['category_name']}</option>`

            $('#catList').append(cat)
            $('#productMenu').append(pro)
            $('#searchCategory').append(cat2)


        })

    }


   // cartList()

    async function cartList() {


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
        })


    }

    async function cartTotal(data) {
        let Total = 0
        let cartQty = 0
        data.forEach(function (item, i) {
            Total = Total + parseFloat(item['price']);
            cartQty = cartQty + 1

        })
        $('#subTotal').text(Total)
        $('#cartQty').text(cartQty)

    }

    async function removeCartProduct(id) {
        let preloader = $(".preloader");
        preloader.delay(50).fadeIn(60).removeClass('loaded');

        let res = await axios.get(`/removeCart/${id}`)
        preloader.delay(50).fadeOut(60).addClass('loaded');
        if (res.data['message'] === 'success') {
            await cartList()

        } else {
            alert('Request Failed')
        }
    }


</script>
