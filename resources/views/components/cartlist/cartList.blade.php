<!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="page-title">
                    <h1>Cart List</h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="{{url("/")}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">This Page</a></li>
                </ol>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>

<div class="mt-5">
    <div class="container my-5">
        <div  class="row">
            <div class="col-12">
                <div class="table-responsive shop_cart_table">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th class="product-thumbnail">&nbsp;</th>
                            <th class="product-name">Product</th>
                            <th class="product-quantity">Quantity</th>
                            <th class="product-subtotal">Total</th>
                            <th class="product-remove">Remove</th>
                        </tr>
                        </thead>
                        <tbody id="byList">


                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="6" class="px-0">
                                <div class="row g-0 align-items-center">
                                    <div class="col-lg-4 col-md-6 mb-3 mb-md-0">
                                        Total: $ <span id="total"></span>
                                    </div>
                                    <div class="col-lg-8 col-md-6  text-start  text-md-end">
                                        <button  class="btn btn-line-fill btn-sm" type="submit"><a href="{{url('/checkout-page')}}" >Check Out</a></button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<script>

  async  function cartList()
    {


            let res=await axios.get(`/cartList`);
            $("#byList").empty();

            res.data['data'].forEach((item,i)=>{
                let EachItem=`<tr>
                            <td class="product-thumbnail"><img src=${item['product']['image']} alt="product"></td>
                            <td class="product-name" >${item['product']['title']} </td>
                            <td class="product-quantity"> ${item['qty']} </td>
                            <td class="product-subtotal">$ ${item['price']}</td>
                            <td class="product-remove"><a class="remove" data-id="${item['product_id']}"><i class="ti-close"></i></a></td>
                        </tr>`
                $("#byList").append(EachItem);
            })

            await cartTotal(res.data['data']);

            $(".remove").on('click',function () {
                let id= $(this).data('id');
                removeCartProduct(id);
            })



    }
  async function  cartTotal(data)
  {
      let Total=0
      data.forEach(function (item,i)
      {
          Total=Total+parseFloat(item['price']);

      })
          $('#total').text(Total)
  }

    async function removeCartProduct(id)
    {
        let preloader = $(".preloader");
        preloader.delay(50).fadeIn(60).removeClass('loaded');

        let res=await axios.get(`/removeCart/${id}`)
        preloader.delay(50).fadeOut(60).addClass('loaded');
        if(res.data['message']==='success')
        {
            await cartList()
            await cartList2()

        }
        else
        {
            alert('Request Failed')
        }
    }



</script>

