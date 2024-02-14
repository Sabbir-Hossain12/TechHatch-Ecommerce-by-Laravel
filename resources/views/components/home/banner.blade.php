<!-- START SECTION BANNER -->
<div class="mt-4 staggered-animation-wrap">
    <div class="custom-container">
        <div class="row">
            <div class="col-lg-7 offset-lg-3">
                <div class="banner_section shop_el_slider">
                    <div id="carouselExampleControls" class="carousel slide carousel-fade light_arrow"
                         data-bs-ride="carousel">
                        <div class="carousel-inner" id="showBanner">


                        </div>
                        <ol class="carousel-indicators indicators_style3">
                            <li data-bs-target="#carouselExampleControls" data-bs-slide-to="0" class="active"></li>
                            <li data-bs-target="#carouselExampleControls" data-bs-slide-to="1"></li>
                            <li data-bs-target="#carouselExampleControls" data-bs-slide-to="2"></li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 d-none d-lg-block">
                <div class="shop_banner2 el_banner1">
                    <a href="#" class="hover_effect1">
                        <div class="el_title text_white">
                            <h6>iphone Collection</h6>
                            <span>25% off</span>
                        </div>
                        <div class="el_img">
                            <img src=" {{asset('assets')}}/images/shop_banner_img6.png" alt="shop_banner_img6">
                        </div>
                    </a>
                </div>
                <div class="shop_banner2 el_banner2">
                    <a href="#" class="hover_effect1">
                        <div class="el_title text_white">
                            <h6>MAC Computer</h6>
                            <span><u>Shop Now</u></span>
                        </div>
                        <div class="el_img">
                            <img src=" {{asset('assets')}}/images/shop_banner_img7.png" alt="shop_banner_img7">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION BANNER -->

<script>

    async function banner() {
        let res = await axios.get('/productsSlider')
        $('#showBanner').empty()


        res.data['data'].forEach(function (item, i) {
            let active = ''
            if (i === 0) {
                active = "active"
            }
            let foreachBanner = ` <div class="carousel-item ${active} background_bg" style="background-image: url('${item['image']}')">
        <div class="banner_slide_content banner_content_inner">
            <div class="col-lg-7 col-10">
                <div class="banner_content3 overflow-hidden ">
                    <h5 class="mb-3 staggered-animation font-weight-light text-light" data-animation="slideInLeft" data-animation-delay="0.5s">${item['short_des']}</h5>
                    <h2 class="staggered-animation text-light" data-animation="slideInLeft" data-animation-delay="1s">${item['title']}</h2>
                    <h4 class="staggered-animation mb-4 product-price text-light" data-animation="slideInLeft" data-animation-delay="1.2s"><span class="price">$${item['price']}</span><del>$55.25</del></h4>
                    <a class="btn btn-fill-out btn-radius staggered-animation text-uppercase" href="/productDetails?id=${item['product_id']}" data-animation="slideInLeft" data-animation-delay="1.5s">Shop Now</a>
                </div>
            </div>
        </div>
    </div>`

            $('#showBanner').append(foreachBanner)
        })

    }


</script>
