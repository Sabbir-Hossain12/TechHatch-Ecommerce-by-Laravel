<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive wishlist_table">
                    <table class="table">
                        <thead>
                        <tr>
                            <th class="product-thumbnail">&nbsp;</th>
                            <th class="product-name">Product</th>
                            <th class="product-price">Price</th>
                            <th class="product-stock-status">Stock Status</th>
                            <th class="product-add-to-cart"></th>
                            <th class="product-remove">Remove</th>
                        </tr>
                        </thead>
                        <tbody id="wishProducts">


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    async function wishList() {
        let preloader = $(".preloader");
        preloader.delay(50).fadeIn(60).removeClass('loaded');
        let res = await axios.get('/wishList')
        preloader.delay(50).fadeOut(60).addClass('loaded');
        $('#wishProducts').empty();

let stock='';
        res.data['data'].forEach(function (item, i) {

              if(item['wish']['stock'])
              {
                    stock='IN STOCK';
              }
              else
              {
                  stock="OUT OF STOCK";
              }

            let foreach = `<tr>
                            <td class="product-thumbnail"><a href="#"><img src="${item['wish']['image']}"
                                                                           alt="product1"></a></td>
                            <td class="product-name" data-title="Product"><a href="#">${item['wish']['title']}</a></td>
                            <td class="product-price" data-title="Price">${item['wish']['discount_price']}</td>
                            <td class="product-stock-status" data-title="Stock Status">

                                 <span class="badge rounded-pill text-bg-success">${stock}</span>
                                 </td>
                                        <td class="product-add-to-cart"><a href="#" class="btn btn-fill-out"><i
                                                    class="icon-basket-loaded"></i> Add to Cart</a></td>
                                        <td class="product-remove" data-title="Remove" data-id="${item['product_id']}"><a href="#"><i class="ti-close"></i></a></td>
                                    </tr>`

            $('#wishProducts').append(foreach)
        })

        $('.product-remove').on('click',function ()
        {
            let id= $(this).data('id')
            removeWish(id)

        })


    }

    async function removeWish(id)
    {
        let preloader = $(".preloader");
        preloader.delay(50).fadeIn(60).removeClass('loaded');
        let res=await axios.get(`/removeWish/${id}`)


        await wishList()
        preloader.delay(50).fadeOut(60).addClass('loaded');

        alert('Wish Product Deleted')
    }

</script>
