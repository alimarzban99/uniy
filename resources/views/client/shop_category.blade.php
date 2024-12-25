<section class="shop-category pt-20 pb-50">
    <div class="container">
        <!-- Section Headding -->
        <div class="row">
            <div class="col-lg-12 rtl">
                <div class="section-headding text-center  mb-50">
                    <h2><span>خرید بر اساس طبقه بندی</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="shop-category-full owl-carousel">

                @foreach($categories as $category)
                    <div class="sc-sigle-item">
                        <div class="thumbanil">
                            <img src="{{asset('storage/'.$category->image)}}" alt="img">
                            <a href="{{route('client.product.index',['category'=>$category->id])}}">
                                <i class="fas fa-times"></i>
                            </a>
                        </div>
                        <div class="title">
                            <a href="{{route('client.product.index',['category'=>$category->id])}}">{{$category->name}}</a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
