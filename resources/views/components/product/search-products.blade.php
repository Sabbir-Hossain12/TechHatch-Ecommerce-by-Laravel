<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="page-title">
                    <h1>Search Results</h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active">Search Products</li>
                </ol>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>


<div class="main_content">

    <!-- START SECTION SHOP -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
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
                    <div class="row shop_container grid  align-items-center" id="seachPro">



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

    async function searchProductList()
    {
        let productName= sessionStorage.getItem('productName')
            let res=await axios.get(`/products-search/${productName}`)
        $('#seachPro').empty()
        if(res.data['message']==='success')
        {

            res.data['data'].forEach(function (item,i)
            {
                let forEach= ` <div class="col-lg-3 col-md-4 col-6 ">
                            <div class="product">
                                <div class="product_img">
                                    <a href="shop-product-detail.html">
                                        <img src="${item['image']}" alt="product_img1">
                                    </a>

                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="/productDetails?id=${item['id']}">${item['title']}</a></h6>
                                    <div class="product_price">
                                        <span class="price">${item['discount_price']}</span>
                                        <del>${item['price']}</del>
                                        <div class="on_sale">
                                            <span>${item['discount']}%</span>
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


                                </div>
                            </div>
                        </div>`


                $('#seachPro').append(forEach)
            })

            // sessionStorage.clear()
        }

    }


</script>
