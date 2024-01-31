<div class="main_content">

    <!-- START SECTION SHOP -->
    <div class="section">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 mt-4 pt-2 mt-lg-0 pt-lg-0">
                    <div class="sidebar">
                        <div class="widget">
                            <h5 class="widget_title">Categories</h5>
                            <ul class="widget_categories">
                                <li><a href="#"><span class="categories_name">Women</span><span class="categories_num">(9)</span></a>
                                </li>
                                <li><a href="#"><span class="categories_name">Top</span><span
                                            class="categories_num">(6)</span></a></li>
                                <li><a href="#"><span class="categories_name">T-Shirts</span><span
                                            class="categories_num">(4)</span></a></li>
                                <li><a href="#"><span class="categories_name">Men</span><span
                                            class="categories_num">(7)</span></a></li>
                                <li><a href="#"><span class="categories_name">Shoes</span><span class="categories_num">(12)</span></a>
                                </li>
                            </ul>
                        </div>

                        <div class="widget">
                            <h5 class="widget_title">Brand</h5>
                            <ul class="list_brand">
                                <li>
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="Arrivals"
                                               value="">
                                        <label class="form-check-label" for="Arrivals"><span>New Arrivals</span></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="Lighting"
                                               value="">
                                        <label class="form-check-label" for="Lighting"><span>Lighting</span></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="Tables"
                                               value="">
                                        <label class="form-check-label" for="Tables"><span>Tables</span></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="Chairs"
                                               value="">
                                        <label class="form-check-label" for="Chairs"><span>Chairs</span></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="Accessories"
                                               value="">
                                        <label class="form-check-label"
                                               for="Accessories"><span>Accessories</span></label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="widget">
                            <h5 class="widget_title">Size</h5>
                            <div class="product_size_switch">
                                <span>xs</span>
                                <span>s</span>
                                <span>m</span>
                                <span>l</span>
                                <span>xl</span>
                                <span>2xl</span>
                                <span>3xl</span>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row align-items-center mb-4 pb-1">
                        <div class="col-12">
                            <div class="product_header">
                                <div class="product_header_left">
                                    <div class="custom_select">
                                        <select class="form-control form-control-sm">
                                            <option value="order">Default sorting</option>
                                            <option value="popularity">Sort by popularity</option>
                                            <option value="date">Sort by newness</option>
                                            <option value="price">Sort by price: low to high</option>
                                            <option value="price-desc">Sort by price: high to low</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="product_header_right">
                                    <div class="products_view">
                                        <a href="javascript:;" class="shorting_icon grid active"><i
                                                class="ti-view-grid"></i></a>
                                        <a href="javascript:;" class="shorting_icon list"><i
                                                class="ti-layout-list-thumb"></i></a>
                                    </div>
                                    <div class="custom_select">
                                        <select class="form-control form-control-sm first_null not_chosen">
                                            <option value="">Showing</option>
                                            <option value="9">9</option>
                                            <option value="12">12</option>
                                            <option value="18">18</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row shop_container" id="productList">


                    </div>
                    <div class="row">
                        <div class="col-12">
                            <ul class="pagination mt-3 justify-content-center pagination_style1">
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i
                                            class="linearicons-arrow-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION SHOP -->


</div>

<script>

byCategory()
    async function byCategory() {
        let searchParams = new URLSearchParams(window.location.search);
        let id = searchParams.get('id');


        let res = await axios.get(`/productsByCategory/${id}`);
        $("#productList").empty();
        res.data['data'].forEach((item, i) => {
            let EachItem = `<div class="col-md-4 col-6">
                        <div class="product">
                            <div class="product_img">
                                <a href="">
                                    <img src="${item['image']}" alt="product_img1">
                                </a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                        <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6 class="product_title"><a href="shop-product-detail.html">${item['title']}</a></h6>
                                <div class="product_price">
                                    <span class="price">${item['discount_price']}</span>
                                    <del>${item['price']}</del>
                                    <div class="on_sale">
                                        <span>${item['discount']}% Off</span>
                                    </div>
                                </div>
                                <div class="rating_wrap">
                                    <div class="rating">
                                        <div class="product_rate" style="width: ${item['star']}%"></div>
                                    </div>
                                    <span class="rating_num">(21)</span>
                                </div>
                                <div class="pr_desc">
                                    <p>${item['short_des']}</p>
                                </div>
<!--                                <div class="pr_switch_wrap">-->
<!--                                    <div class="product_color_switch">-->
<!--                                        <span class="active" data-color="#87554B" style="background-color: rgb(135, 85, 75);"></span>-->
<!--                                        <span data-color="#333333" style="background-color: rgb(51, 51, 51);"></span>-->
<!--                                        <span data-color="#DA323F" style="background-color: rgb(218, 50, 63);"></span>-->
<!--                                    </div>-->
<!--                                </div>-->
                                <div class="list_product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                        <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>`
            $("#productList").append(EachItem);

            // $("#CatName").text( res.data['data'][0]['category']['categoryName']);
        })

    }
</script>
