<!-- Widgets -->
<div class="col-lg-4">
    <!-- Single -->
    <div class="widgets-single mb-30">
        <h2> جستجوی محصول</h2>
        <div class="wi-search-form">
            <form action="{{route('client.product.index')}}">
                <input type="text" name="search" placeholder="جستجو کنید" value="{{request()->get('search') ?? null}}">
                <button type="submit"><i class="bi bi-search"></i></button>
            </form>
        </div>
    </div>
    <!-- Single -->
    <div class="widgets-single mb-30">
        <h2>دسته محصولات</h2>
        <ul>
            <li><a href="{{route('client.product.index')}}">همه دسته بندی ها</a></li>
            @foreach($categories as $category)
                <li>
                    <a href="{{route('client.product.index',['category'=>$category->id])}}">{{$category->name}}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
