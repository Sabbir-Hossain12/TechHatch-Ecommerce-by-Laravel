<!-- START HEADER -->
<header class="header_wrap">
    <div class="middle-header dark_skin">
        <div class="custom-container">
            <div class="nav_block">
                <a class="navbar-brand" href="index.html">
                    <img class="logo_light" src="assets/images/logo_light.png" alt="logo"/>
                    <img class="logo_dark" src="assets/images/logo_dark.png" alt="logo"/>
                </a>
                <div class="product_search_form rounded_input">
                    <form>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="custom_select">
                                    <select class="first_null">
                                        <option value="">All Category</option>
                                        <option value="Dresses">Dresses</option>
                                        <option value="Shirt-Tops">Shirt & Tops</option>
                                        <option value="T-Shirt">T-Shirt</option>
                                        <option value="Pents">Pents</option>
                                        <option value="Jeans">Jeans</option>
                                    </select>
                                </div>
                            </div>
                            <input class="form-control" placeholder="Search Product..." required="" type="text">
                            <button type="submit" class="search_btn2"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
                <ul class="navbar-nav attr-nav align-items-center">
                    <li><a href="#" class="nav-link"><i class="linearicons-user"></i></a></li>
                    <li><a href="#" class="nav-link"><i class="linearicons-heart"></i><span
                                class="wishlist_count">0</span></a></li>
                    <li class="dropdown cart_dropdown"><a class="nav-link cart_trigger" href="#"
                                                          data-bs-toggle="dropdown"><i
                                class="linearicons-bag2"></i><span class="cart_count">2</span><span class="amount"><span
                                    class="currency_symbol">$</span>159.00</span></a>
                        <div class="cart_box cart_right dropdown-menu dropdown-menu-right">
                            <ul class="cart_list">
                                <li>
                                    <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                    <a href="#"><img src="assets/images/cart_thamb1.jpg" alt="cart_thumb1">Variable
                                        product 001</a>
                                    <span class="cart_quantity"> 1 x <span class="cart_amount"> <span
                                                class="price_symbole">$</span></span>78.00</span>
                                </li>
                                <li>
                                    <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                    <a href="#"><img src="assets/images/cart_thamb2.jpg" alt="cart_thumb2">Ornare sed
                                        consequat</a>
                                    <span class="cart_quantity"> 1 x <span class="cart_amount"> <span
                                                class="price_symbole">$</span></span>81.00</span>
                                </li>
                            </ul>
                            <div class="cart_footer">
                                <p class="cart_total"><strong>Subtotal:</strong> <span class="cart_price"> <span
                                            class="price_symbole">$</span></span>159.00</p>
                                <p class="cart_buttons"><a href="#" class="btn btn-fill-line view-cart">View Cart</a><a
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
                    <div class="categories_wrap">
                        <button type="button" data-bs-toggle="collapse" data-bs-target="#navCatContent"
                                aria-expanded="false" class="categories_btn">
                            <i class="linearicons-menu"></i><span>All Categories </span>
                        </button>
                        <div id="navCatContent" class="nav_cat navbar nav collapse">
                            <ul id="catList">
{{--                                <li>--}}
{{--                                    <ul class="more_slide_open" style="display: none;">--}}
{{--                                        <li><a class="dropdown-item nav-link nav_item" href="login.html"><i class="flaticon-fax"></i> <span>Fax Machine</span></a></li>--}}
{{--                                        <li><a class="dropdown-item nav-link nav_item" href="register.html"><i class="flaticon-mouse"></i> <span>Mouse</span></a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
                            </ul>

                            <div class="more_categories">More Categories</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9 col-md-8 col-sm-6 col-9">
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
                                <li class="dropdown">
                                    <a data-bs-toggle="dropdown" class="nav-link dropdown-toggle active"
                                       href="#">Home</a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li><a class="dropdown-item nav-link nav_item" href="index.html">Fashion
                                                    1</a></li>

                                        </ul>
                                    </div>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle nav-link" href="#" data-bs-toggle="dropdown">Pages</a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li><a class="dropdown-item nav-link nav_item" href="about.html">About
                                                    Us</a></li>

                                        </ul>
                                    </div>
                                </li>
                                <li class="dropdown dropdown-mega-menu">
                                    <a class="dropdown-toggle nav-link" href="#"
                                       data-bs-toggle="dropdown">Products</a>
                                    <div class="dropdown-menu">
                                        <ul class="mega-menu d-lg-flex">
                                            <li class="mega-menu-col col-lg-3">
                                                <ul>
                                                    <li class="dropdown-header">Woman's</li>

                                                </ul>
                                            </li>
                                            <li class="mega-menu-col col-lg-3">
                                                <ul>
                                                    <li class="dropdown-header">Men's</li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                           href="shop-cart.html">Donec vitae ante ante</a></li>

                                                </ul>
                                            </li>
                                            <li class="mega-menu-col col-lg-3">
                                                <ul>
                                                    <li class="dropdown-header">Kid's</li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                           href="shop-product-detail.html">Donec vitae facilisis</a>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li class="mega-menu-col col-lg-3">
                                                <ul>
                                                    <li class="dropdown-header">Accessories</li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                           href="shop-product-detail.html">Donec vitae facilisis</a>
                                                    </li>

                                                </ul>
                                            </li>
                                        </ul>
                                        <div class="d-lg-flex menu_banners row g-3 px-3">
                                            <div class="col-lg-6">
                                                <div class="header-banner">
                                                    <div class="sale-banner">
                                                        <a class="hover_effect1" href="#">
                                                            <img src="assets/images/shop_banner_img7.jpg"
                                                                 alt="shop_banner_img7">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="header-banner">
                                                    <div class="sale-banner">
                                                        <a class="hover_effect1" href="#">
                                                            <img src="assets/images/shop_banner_img8.jpg"
                                                                 alt="shop_banner_img8">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                                                               href="blog-three-columns.html">3 columns</a></li>

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
                                                               href="blog-list-left-sidebar.html">left sidebar</a>
                                                        </li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                               href="blog-list-right-sidebar.html">right sidebar</a>
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
                                                                   href="shop-list.html">shop List view</a></li>

                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-col col-lg-4">
                                                        <ul>
                                                            <li class="dropdown-header">Other Pages</li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                   href="shop-cart.html">Cart</a></li>

                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-col col-lg-4">
                                                        <ul>
                                                            <li class="dropdown-header">Product Pages</li>
                                                            <li><a class="dropdown-item nav-link nav_item"
                                                                   href="shop-product-detail.html">Default</a></li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-col col-lg-3">
                                                <div class="header_banner">
                                                    <div class="header_banner_content">
                                                        <div class="shop_banner">
                                                            <div class="banner_img overlay_bg_40">
                                                                <img src="assets/images/shop_banner3.jpg"
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
                                <li><a class="nav-link nav_item" href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="contact_phone contact_support">
                            <i class="linearicons-phone-wave"></i>
                            <span>123-456-7689</span>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- END HEADER -->


<script>

    category();

    async function category() {

        let res = await axios.get('/categories')
        console.log(res)
        $('#catList').empty()

        let category=res.data['data'].slice(0,10)
        category.forEach(function (item, index) {


            let cat = `<li class="dropdown dropdown-mega-menu">
                                    <a class="dropdown-item nav-link dropdown-toggler" href="#"
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


            $('#catList').append(cat)

        })

    }
</script>
