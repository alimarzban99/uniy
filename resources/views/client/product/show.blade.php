<!DOCTYPE html>
<html class="no-js" lang="fa">

@include('client.layouts.navbar',['title' => 'جزئیات محصول'])

@include('client.layouts.breadcrumb',['title' => 'جزئیات محصول'])
<!-- Start Shop Page -->
<section class="section-padding">
    <div class="container rtl">
        <div class="row">
            <div class="col-lg-6 mb-30">
                <div class="blog-details-thumb">
                    <div class="modal_tab">
                        <div class="tab-content product-details-large">
                            <div class="tab-pane fade show active" role="tabpanel">
                                <div class="modal_tab_img">
                                    <a href="#"><img src="{{asset('storage/'.$product->image)}}" alt="img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-30">
                <div class="products-details-content">
                    <div class="quickview-modal-content-full">
                        <!-- Ratting -->
                        <div class="ratting">
                            @for ($i = 0; $i < $product->score; $i++)
                                <span><i class="fas fa-star"></i></span>
                            @endfor
                        </div>
                        <!-- Title -->
                        <h3>{{$product->name}}</h3>
                        <p>
                            {{$product->description}}
                        </p>
                        <!-- Price -->
                        <div class="pricing">
                            @if($product->discount > 0)
                                <span>{{number_format($product->discounted_price)}}تومان <del>{{number_format($product->price)}} تومان</del></span>
                            @else
                                <span>{{number_format($product->price)}}تومان </span>
                            @endif
                        </div>
                        <!-- Category -->
                        <div class="cate">
                            <span><strong>دسته بندی ها:</strong></span>
                            <span><a
                                    href="{{route('client.product.index',['category'=>$product->category->id])}}">{{$product->category->name}}</a></span>
                        </div>
                        <!-- Add To Cart -->
                        <div class="quantity-add-cart">
								<span class="quantity">
				  					<input type="number" min="1" max="1000" step="1" value="1">
								</span>
                            <div class="cart-btn">
                                <a class="button-1" href="#"><i class="fas fa-shopping-cart"></i> به سبد خرید اضافه کنید</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Section Headding -->
        <div class="row mt-50">
            <div class="col-lg-12 rtl">
                <div class="section-headding text-center  mb-50">
                    <h2><span>محصولات مرتبط</span></h2>
                </div>
            </div>
        </div>
        <!-- Related Products -->
        <div class="row">
            <div class="col-lg-12 rtl">
                <div class="related-product-slider owl-carousel">

                    @foreach($relatedProducts as $related)
                        <div class="product-item rtl">
                            @if(\Illuminate\Support\Carbon::parse($related->created_at)->isToday())
                                <div class="sale-badge"><span>جدید</span></div>
                            @elseif($related->discount > 0)
                                <div class="sale-badge"><span>{{$related->discount}}%</span></div>
                            @endif
                            <!-- Thumbnail -->
                            <div class="product-thumbnail">
                                <a href="#">
                                    <img src="{{asset('storage/'.$related->image)}}" alt="product">
                                </a>
                                <div class="product-overly-btn">
                                    <ul>
                                        <li>
                                            <a href="#" class="add-to-cart" id="{{$product->id}}">
                                                <i class="fas fa-shopping-cart"></i>
                                                <span>به سبد خرید اضافه کنید</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Content -->
                            <div class="product-content">
                                <div class="ratting">
                                    @for ($i = 0; $i < $related->score; $i++)
                                        <span><i class="fas fa-star"></i></span>
                                    @endfor
                                </div>
                                <h4>
                                    <a href="{{route('client.product.show',['product'=>$related->id])}}">{{$related->name}}</a>
                                </h4>
                                <div class="pricing">
                                    @if($related->discount > 0)
                                        <span>{{number_format($related->discounted_price)}}تومان <del>{{number_format($related->price)}} تومان</del></span>
                                    @else
                                        <span>{{number_format($related->price)}}تومان </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>
            </div>
        </div>
        <!-- Related Products -->
    </div>
</section>

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
