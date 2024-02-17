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
        // slice(0,6).
        $("#TopCategoryItem").empty()
        res.data['data']. forEach((item,i)=>{
            let EachItem= `<div class="col-3 col-sm-2 d-flex align-items-center justify-content-center">
                <div class="item d-flex flex-column flex-grow-1">
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


