<!DOCTYPE html>
<html class="no-js" lang="fa">

@include('client.layouts.navbar',['title' => 'محصولات'])

@include('client.layouts.breadcrumb',['title' => 'محصولات'])

<!-- Start Shop Page -->
<section class="section-padding rtl">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- ltn__shop-options -->
                <div class="row mb-30">
                    <div class="col-12">
                        <div class="ltn__shop-options">
                            <div class="list-single">
                                <div class="ltn__grid-list-tab-menu ">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="gridView-tab" data-bs-toggle="tab"
                                                    data-bs-target="#gridView" role="tab" aria-controls="gridView"
                                                    aria-selected="true"><i class="fas fa-th"></i></button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="listView-tab" data-bs-toggle="tab"
                                                    data-bs-target="#listView" role="tab" aria-controls="listView"
                                                    aria-selected="false"><i class="fas fa-list-ul"></i></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="list-single">
                                <div class="showing-product-number text-right">
                                    <span>
                                        نمایش {{ $products->firstItem() ?? 0 }} - {{ $products->lastItem() ?? 0 }} از {{ $products->total() ?? 0 }}  نتیجه
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Products -->
                <div class="row">
                    <div class="tab-content" id="myTabContent">
                        <!-- Shop GridView -->
                        <div class="tab-pane fade show active shop-gridview" id="gridView" role="tabpanel"
                             aria-labelledby="gridView-tab">
                            <div class="row">
                                @if($products->isEmpty())
                                    <div class="alert alert-danger alert-dismissible fade show text-center"
                                         role="alert">
                                        <strong> محصول برای نمایش موجود نیست </strong>
                                    </div>
                                @endif
                                @foreach($products as $product)
                                    <div class="col-lg-4 col-sm-6 mb-30">
                                        <div class="product-item rtl">
                                            <!-- Thumbnail -->
                                            <div class="product-thumbnail">
                                                <a href="{{route('client.product.show',['product'=>$product])}}">
                                                    <img src="{{asset('storage/'.$product->image)}}" alt="product">
                                                </a>
                                                <div class="product-overly-btn">
                                                    <ul>
                                                        <li><a href="#" class="add-to-cart" id="{{$product->id}}"><i
                                                                    class="fas fa-shopping-cart"></i><span>به سبد خرید اضافه کنید</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Content -->
                                            <div class="product-content">
                                                <div class="ratting">
                                                    @for ($i = 0; $i < $product->score; $i++)
                                                        <span><i class="fas fa-star"></i></span>
                                                    @endfor
                                                </div>
                                                <h4>
                                                    <a href="{{route('client.product.show',['product'=>$product])}}">{{$product->name}}</a>
                                                </h4>
                                                <div class="pricing">
                                                    @if($product->discount > 0)
                                                        <span>{{number_format($product->discounted_price)}}تومان <del>{{number_format($product->price)}} تومان</del></span>
                                                    @else
                                                        <span>{{number_format($product->price)}}تومان </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- Shop ListView -->
                        <div class="tab-pane fade shop-listview" id="listView" role="tabpanel"
                             aria-labelledby="listView-tab">
                            <div class="row">
                                @if($products->isEmpty())
                                    <div class="alert alert-danger alert-dismissible fade show text-center"
                                         role="alert">
                                        <strong> محصول برای نمایش موجود نیست </strong>
                                    </div>
                                @endif
                                @foreach($products as $product)
                                    <div class="col-lg-12 rtl">
                                        <div class="product-list-item mb-30">
                                            <div class="row">
                                                <div class="col-sm-4 d-flex">
                                                    <div class="thumbnail">
                                                        <a href="{{route('client.product.show',['product'=>$product])}}">
                                                            <img src="{{asset('storage/'.$product->image)}}" alt="img">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8 align-self-center">
                                                    <div class="content">
                                                        <h2 class="title">
                                                            <a href="{{route('client.product.show',['product'=>$product])}}">{{$product->name}}</a>
                                                        </h2>
                                                        <div class="ratting">
                                                            @for ($i = 0; $i < $product->score; $i++)
                                                                <span><i class="fas fa-star"></i></span>
                                                            @endfor
                                                        </div>
                                                        <div class="pricing">
                                                            @if($product->discount > 0)
                                                                <span>{{number_format($product->discounted_price)}}تومان <del>{{number_format($product->price)}} تومان</del></span>
                                                            @else
                                                                <span>{{number_format($product->price)}}تومان </span>
                                                            @endif
                                                        </div>
                                                        <p>
                                                            {{\Illuminate\Support\Str::limit($product->description,50)}}
                                                        </p>
                                                        <div class="product-hover-action">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" class="add-to-cart" id="{{$product->id}}" title="Add to Cart">
                                                                        <i class="fas fa-shopping-cart"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pagination -->
                <div class="row mt-15 mb-30">
                    <div class="col-12 text-center">
                        <div class="fr-pagination">
                            <ul>
                                @if($products->onFirstPage())
                                    <li><a class="disabled"><i class="fas fa-angle-right"></i></a></li>
                                @else
                                    <li><a href="{{$products->previousPageUrl()}}"><i
                                                class="fas fa-angle-right"></i></a></li>
                                @endif
                                <li><span>{{$products->currentPage()}}</span></li>
                                @if(!$products->hasMorePages())
                                    <li><a class="disabled"><i class="fas fa-angle-left"></i></a></li>
                                @else
                                    <li><a href="{{$products->nextPageUrl()}}"><i class="fas fa-angle-left"></i></a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @include('client.product.product_sidebar')
        </div>
    </div>
</section>
<!-- End Shop Page -->

@include('client.layouts.footer')

<script>
    $(document).ready(function () {
        $(".add-to-cart").click(function () {
            var idValue = $(this).attr("id");
            var url = "{{ route('client.cart.store', ['product_id' => '__ID__']) }}".replace('__ID__', idValue);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: url,
                type: 'POST',
                dataType: 'json',
                success: function () {
                   window.location.href = "{{route('client.cart.index')}}"
                },
            })

        });
    });
</script>

</html>
