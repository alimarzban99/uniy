<section class="section-padding-2">
    <div class="container">
        <!-- Section Headding -->
        <div class="row">
            <div class="col-lg-12 rtl">
                <div class="section-headding text-center  mb-50">
                    <h2><span>آخرین وبلاگ</span></h2>
                </div>
            </div>
        </div>
        <div class="row rtl">
            @foreach($latestBlogs as $blog)
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="blog-item">
                        <div class="thumbnail">
                            <a href="{{route('client.blog.show',['blog'=>$blog->id])}}">
                                <img src="{{asset('storage/'.$blog->image)}}" alt="blog">
                            </a>
                        </div>
                        <div class="content">
                            <div class="meta">
                                <span><i class="bi bi-tags-fill"></i> {{$blog->category->name}}</span>
                            </div>
                            <h2 class="title"><a href="{{route('client.blog.show',['blog'=>$blog->id])}}">{{$blog->title}}</a></h2>
                            <div class="btm-meta">
                                <div class="date">
                                    <span><i class="far fa-calendar-alt"></i>{{$blog->created_at}}</span>
                                </div>
                                <div class="read-more">
                                    <a href="{{route('client.blog.show',['blog'=>$blog->id])}}">ادامه مطلب</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
