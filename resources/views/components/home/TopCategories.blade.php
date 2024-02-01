<div class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="heading_s4 text-center">
                    <h2>Top Categories</h2>
                </div>
                <p class="text-center leads">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim Nullam nunc varius.</p>
            </div>
        </div>
        <div id="TopCategoryItem" class="row ">


        </div>
    </div>
</div>


<script>

    async function TopCategory(){
        let res=await axios.get("/categories");

        $("#TopCategoryItem").empty()
        res.data['data'].slice(0,6). forEach((item,i)=>{
            let EachItem= `<div class="col-2 d-flex align-items-stretch">
                <div class="item">
                    <div class="categories_box">
                        <a href="/productsByCategory?id=${item['id']}">
                            <img src="${item['category_img']}" alt="cat_img1"/>
                            <span>${item['category_name']}</span>
                        </a>
                    </div>
                </div>
            </div>`
            $("#TopCategoryItem").append(EachItem);
        })
    }
</script>


