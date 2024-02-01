<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
                <div class="product-image">
                    <div class="product_img_box">
                        <img id="product_img1" class="w-100" src="">
                    </div>
                    <div class="row p-2">
                        <a href="#" class="col-3 product_img_box p-1">
                            <img id="img1"
                                 src="https://photo.teamrabbil.com/images/2023/08/15/macbooks-2048px-2349.md.jpeg">
                        </a>
                        <a href="#" class="col-3 product_img_box p-1">
                            <img id="img2" src="https://photo.teamrabbil.com/images/2023/09/23/Group-1.png">
                        </a>
                        <a href="#" class="col-3 product_img_box p-1">
                            <img id="img3" src="https://photo.teamrabbil.com/images/2023/09/23/Group-2.png"
                                 alt="product_small_img3">
                        </a>
                        <a href="#" class="col-3 product_img_box p-1">
                            <img id="img4" src="https://photo.teamrabbil.com/images/2023/09/23/Group-3.png"
                                 alt="product_small_img3">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="pr_detail">
                    <div class="product_description">
                        <h4 id="p_title" class="product_title">MacBook Air M1 8/256GB</h4>
                        <h1 id="p_price" class="price">$ 94000</h1>
                    </div>
                    <div>
                        <p id="p_des">MacBook Air M1 8/256GB 13-inch Space Gray</p>
                    </div>
                </div>


                <label class="form-label">Size</label>
                <select id="p_size" class="form-select">
                    <option value="">Choose Size</option>

                </select>

                <label class="form-label">Color</label>
                <select id="p_color" class="form-select">

                    <option value="">Choose Color</option>

                </select>

                <hr>
                <div class="cart_extra">
                    <div class="cart-product-quantity">
                        <div class="quantity">
                            <input type="button" value="-" class="minus">
                            <input id="p_qty" type="text" name="quantity" value="1" title="Qty" class="qty" size="4">
                            <input type="button" value="+" class="plus">
                        </div>
                    </div>
                    <div class="cart_btn">
                        <button onclick="AddToCart()" class="btn btn-fill-out btn-addtocart" type="button"><i
                                class="icon-basket-loaded"></i> Add to cart
                        </button>
                        <a class="add_wishlist" onclick="AddToWishList()" href="#"><i class="icon-heart"></i></a>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="details-tab" data-bs-toggle="tab"
                            data-bs-target="#details-tab-pane" type="button" role="tab" aria-controls="details-tab-pane"
                            aria-selected="true">Details
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review-tab-pane"
                            type="button" role="tab" aria-controls="review-tab-pane" aria-selected="false">Review
                    </button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="review_create-tab" data-bs-toggle="tab"
                            data-bs-target="#review_create-tab-pane" type="button" role="tab"
                            aria-controls="review_create-tab-pane" aria-selected="false">Add Review
                    </button>
                </li>

            </ul>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade active show" id="details-tab-pane" role="tabpanel"
                     aria-labelledby="details-tab" tabindex="0">
                    <div id="p_details">


                    </div>
                </div>
                <div class="tab-pane fade" id="review-tab-pane" role="tabpanel" aria-labelledby="review-tab"
                     tabindex="0">
                    <ul id="reviewList" class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h6>Rabbil Hasan</h6>
                            <p class="m-0 p-0">Lorem ipsum dolor sit amet,</p>
                            <div class="rating_wrap">
                                <div class="rating">
                                    <div class="product_rate" style="width:90%"></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>


                <div class="tab-pane fade" id="review_create-tab-pane" role="tabpanel"
                     aria-labelledby="review_create-tab" tabindex="0">
                    <label class="form-label">Write Your Review</label>
                    <textarea class="form-control form-control-sm" id="reviewTextID" rows="5"
                              placeholder="Your Review"></textarea>
                    <label class="form-label mt-2">Rating Score</label>
                    <input min="1" value="0" max="10" id="reviewScore" type="number"
                           class="form-control-sm form-control">
                    <button onclick="AddReview()" class="btn btn-danger mt-3 btn-sm">Submit</button>
                </div>


            </div>
        </div>
    </div>
</div>

<script>

    let para = new URLSearchParams(window.location.search)
    let id = para.get('id')

    async function productDetails() {


        let res = await axios.get(`/productsDetails/${id}`)

        console.log(res.data['data']['img1'])

        $('#product_img1').attr('src', res.data['data']['img1'])
        $('#img1').attr('src', res.data['data']['img1'])
        $('#img2').attr('src', res.data['data']['img2'])
        $('#img3').attr('src', res.data['data']['img3'])
        $('#img4').attr('src', res.data['data']['img4'])

        $('#p_title').text(res.data['data']['product']['title'])
        $('#p_price').text(res.data['data']['product']['discount_price'])
        $('#p_des').text(res.data['data']['product']['short_des'])

        let size = res.data['data']['size'].split(',')
        size.forEach(function (item, i) {

            let option = `<option value="${item}">${item}</option>`
            $('#p_size').append(option)
        })

        let color = res.data['data']['color'].split(',')
        color.forEach(function (item, i) {

            let option = `<option value="${item}">${item}</option>`
            $('#p_color').append(option)
        })

        $('#p_details').text(res.data['data']['des'])
    }

    async function AddToWishList() {
        try {

            let res = await axios.get(`/createWish/${id}`)
        } catch (e) {
            if (e.response.status === 401) {
                window.location.href = '/'
            }
        }
    }

    async function AddToCart() {
        try {
            let obj = {

                "product_id": id,
                "color": $('#p_color').val(),
                "size": $('#p_size').val(),
                "qty": $('#p_qty').val()

            }
            console.log(obj)

            let res = await axios.post(`/createCart`, obj)
        } catch (e) {
            if (e.response.status === 401) {
                // window.location.href='/'
            }
        }
    }


</script>
