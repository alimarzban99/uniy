<div class="col-lg-4">
    <!-- Single -->
    <div class="widgets-single mb-30">
        <h2>جستجوی وبلاگ</h2>
        <div class="wi-search-form">
            <form action="{{route('client.blog.index')}}">
                <input type="text" name="search" placeholder="جستجو کنید" value="{{request()->get('search') ?? null}}">
                <button type="submit"><i class="bi bi-search"></i></button>
            </form>
        </div>
    </div>
    <!-- Single -->
    <div class="widgets-single mb-30">
        <h2>دسته بندی وبلاگ</h2>
        <ul>
            <li><a href="{{route('client.blog.index')}}">همه دسته بندی ها</a></li>
            @foreach($categories as $category)
                <li>
                    <a href="{{route('client.blog.index',['category'=>$category->id])}}">{{$category->name}}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
