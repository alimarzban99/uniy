<section class="pt-30 pb-50">
    <div class="container">
        <!-- Section Headding -->
        <div class="row">
            <div class="col-lg-12 rtl">
                <div class="section-headding text-center  mb-50">
                    <h2><span>جدیدترین محصولات</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 rtl">
                <div class="feature-product-slider owl-carousel">

                    @foreach($newestProducts as $product)
                        <div class="product-item rtl">
                            <!-- Thumbnail -->
                            <div class="product-thumbnail">
                                <img src="{{asset('storage/'.$product->image)}}" alt="product">
                                <div class="product-overly-btn">
                                    <ul>
                                        <li>
                                            <a class="add-to-cart" id="{{$product->id}}">
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
                                    @for ($i = 0; $i < $product->score; $i++)
                                        <span><i class="fas fa-star"></i></span>
                                    @endfor
                                </div>
                                <h4>
                                    <a href="{{route('client.product.show',['product'=>$product->id])}}">{{$product->name}}</a>
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
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</section>

@section('custom-script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function () {
            $(".add-to-cart").click(function () {
                var isLoggedIn = {{ auth()->check() ? 'true' : 'false' }};

                if (!isLoggedIn) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'ورود به حساب کاربری',
                        text: 'برای افزودن محصول به سبد خرید، ابتدا وارد حساب کاربری خود شوید.',
                        confirmButtonText: 'باشه',
                        showCancelButton: true,
                        cancelButtonText: 'لغو',
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "{{ route('auth.login') }}";
                        }
                    });
                    return;
                }

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
@endsection
