<div class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="heading_s4 text-center">
                    <h2>Top Brands</h2>
                </div>
                <p class="text-center leads">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim Nullam nunc varius.</p>
            </div>
        </div>
        <div id="TopBrandItem" class="row align-items-center">


        </div>
    </div>
</div>


<script>

    async function TopBrands(){
        let res=await axios.get("/brands");
        $("#TopBrandItem").empty()
        res.data['data'].forEach((item,i)=>{
            let EachItem= `<div class="p-2 col-2">
                <div class="item">
                    <div class="categories_box">
                        <a href="/productsByBrand?id=${item['id']}">
                            <img src="${item['brand_img']}" alt="cat_img1"/>
                            <span>${item['brand_name']}</span>
                        </a>
                    </div>
                </div>
            </div>`
            $("#TopBrandItem").append(EachItem);
        })
    }
</script>
