<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="heading_s1 text-center">
                <h2>Exclusive Products</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="tab-style1">
                <ul class="nav nav-tabs justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="arrival-tab" data-bs-toggle="tab" href="#arrival" role="tab" aria-controls="arrival" aria-selected="true">New Arrival</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="sellers-tab" data-bs-toggle="tab" href="#sellers" role="tab" aria-controls="sellers" aria-selected="false">Top Seller</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="featured-tab" data-bs-toggle="tab" href="#featured" role="tab" aria-controls="featured" aria-selected="false">Featured</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="special-tab" data-bs-toggle="tab" href="#Special" role="tab" aria-controls="special" aria-selected="false">Special</a>
                    </li>

                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="arrival" role="tabpanel" aria-labelledby="arrival-tab">
                    <div id="arrivalItem" class="row shop_container">




                    </div>
                </div>
                <div class="tab-pane fade" id="sellers" role="tabpanel" aria-labelledby="sellers-tab">
                    <div id="sellersItem"  class="row shop_container">


                    </div>
                </div>
                <div class="tab-pane fade" id="featured" role="tabpanel" aria-labelledby="featured-tab">
                    <div id="featuredItem" class="row shop_container">

                    </div>
                </div>
                <div class="tab-pane fade" id="Special" role="tabpanel" aria-labelledby="special-tab">
                    <div id="SpecialItem" class="row shop_container">

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
        <!-- END SECTION SHOP -->

<script>
    productByRemark('arrival','arrivalItem')
    productByRemark('sellers','sellersItem')
    productByRemark('featured','featuredItem')
    productByRemark('special','SpecialItem')

    async function productByRemark(remark,id)
    {
        let res= await axios.get(`/productsByRemark/${remark}`)
        console.log(res)
        $(`#${id}`).empty()

        res.data['data'].forEach(function (item,i)
        {

            let eachProduct=`<div class="col-lg-3 col-md-4 col-6 d-flex align-items-stretch">
                                <div class="product">
                                    <div class="product_img">
                                        <a href="#">
                                            <img src="${item['image']}" alt="product_img9">
                                        </a>
                                        <div class="product_action_box">
                                            <ul class="list_none pr_action_btn">
                                                <li><a href="" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title"><a  href="">${item['title']}</a></h6>
                                        <div class="product_price">
                                            <span class="price">$ ${item['price']}</span>
                                        </div>
                                        <div class="rating_wrap">
                                            <div class="rating">
                                                <div class="product_rate" style="width: ${item['star']}%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>`
            console.log(eachProduct)
            $(`#${id}`).append(eachProduct)
        })

    }

</script>

