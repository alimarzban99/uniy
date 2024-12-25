<!DOCTYPE html>
<html  class="no-js" lang="fa">

@include('client.layouts.navbar',['title' => 'جزئیات وبلاگ'])

@include('client.layouts.breadcrumb',['title' => 'جزئیات وبلاگ'])

<!-- Start Blog Section -->
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-40">
                <div class="blog-details">
                    <!-- Content -->
                    <div class="blog-details-content mb-30 rtl">
                        <div class="thumbnail">
                            <img src="{{asset('storage/'.$blog->image)}}" alt="blog">
                        </div>
                        <div class="content">
                            <div class="cate">
                                <a href="{{route('client.blog.index',['category'=>$blog->category_id])}}">{{$blog->category->name}}</a>
                            </div>
                            <h2 class="title">{{$blog->title}}</h2>
                            <div class="meta mb-20">
                                <span><i class="far fa-eye"></i>  {{$blog->visit}} بازدید</span>
                                <span><i class="far fa-calendar-alt"></i> {{$blog->created_at}}</span>
                            </div>
                            {!! $blog->description !!}
                        </div>
                    </div>
                </div>
            </div>

            @include('client.blog.blog_sidebar',['categories'=>$categories])
        </div>
    </div>
</section>
<!-- End Blog Section -->

@include('client.layouts.footer')

</html>
