<!DOCTYPE html>
<html class="no-js" lang="fa">

@include('client.layouts.navbar',['title' => 'وبلاگ'])

@include('client.layouts.breadcrumb',['title' => 'وبلاگ'])



<!-- Start Blog Section -->
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    @if($blogs->isEmpty())
                        <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                            <strong> وبلاگ برای نمایش موجود نیست </strong>
                        </div>
                    @endif
                    @foreach($blogs as $blog)
                        <div class="col-12 mb-30 rtl">
                            <div class="blog-item-2">
                                <div class="thumbnail">
                                    <a href="{{route('client.blog.show',['blog'=>$blog])}}">
                                        <img src="{{asset('storage/'.$blog->image)}}" alt="blog">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="cate">
                                        <a href="{{route('client.blog.index',['category'=>$blog->category_id])}}"> {{$blog->category->name}}</a>
                                    </div>
                                    <h2 class="title">
                                        <a href="{{route('client.blog.show',['blog'=>$blog])}}">
                                            {{$blog->title}}
                                        </a>
                                    </h2>
                                    <div class="meta mb-20">
                                        <span><i class="far fa-eye"></i> {{$blog->visit}} بازدید</span>
                                        <span><i class="far fa-calendar-alt"></i> {{$blog->created_at}}</span>
                                    </div>
                                    <p>{{$blog->summary}}</p>
                                    <div class="btm-meta">
                                        <div class="read-more">
                                            <a href="{{route('client.blog.show',['blog'=>$blog])}}">ادامه مطلب</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>
                <!-- Pagination -->
                <div class="row mt-15 mb-30 rtl">
                    <div class="col-12 text-center">
                        <div class="fr-pagination">
                            <ul>
                                @if($blogs->onFirstPage())
                                    <li><a class="disabled"><i class="fas fa-angle-right"></i></a></li>
                                @else
                                    <li><a href="{{$blogs->previousPageUrl()}}"><i
                                                class="fas fa-angle-right"></i></a></li>
                                @endif
                                <li><span>{{$blogs->currentPage()}}</span></li>
                                @if(!$blogs->hasMorePages())
                                    <li><a class="disabled"><i class="fas fa-angle-left"></i></a></li>
                                @else
                                    <li><a href="{{$blogs->nextPageUrl()}}"><i class="fas fa-angle-left"></i></a></li>
                                @endif
                            </ul>
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
