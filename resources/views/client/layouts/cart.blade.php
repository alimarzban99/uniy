<div class="minicart-sidebar">
    <div class="minicart-sidebar-full">
        <div class="minicart-header">
            <div class="left">
                <i class="bi bi-bag-fill"></i>
                <span>3 مورد</span>
            </div>
            <div class="mini-cart-off">
                <i class="bi bi-x-lg"></i>
            </div>
        </div>
        <div class="minicart-product-item-full">
            <!-- Single -->
            <div class="mcp-item-single">
                <div class="thumbnail">
                    <a href="#">
                        <img src="{{asset('assets/img/1.png')}}" alt="img">
                    </a>
                </div>
                <div class="content">
                    <h4><a href="#">محصول ساده</a></h4>
                    <div class="price">
                        <span>تومان200.00 x 1</span>
                    </div>
                </div>
                <div class="remove">
                    <a href="#"><i class="bi bi-x-lg"></i></a>
                </div>
            </div>
            <!-- Single -->
            <div class="mcp-item-single">
                <div class="thumbnail">
                    <a href="#">
                        <img src="{{asset('assets/img/2.png')}}" alt="img">
                    </a>
                </div>
                <div class="content">
                    <h4><a href="#">محصول ساده</a></h4>
                    <div class="price">
                        <span>تومان200.00 x 1</span>
                    </div>
                </div>
                <div class="remove">
                    <a href="#"><i class="bi bi-x-lg"></i></a>
                </div>
            </div>
            <!-- Single -->
            <div class="mcp-item-single">
                <div class="thumbnail">
                    <a href="#">
                        <img src="{{asset('assets/img/3.png')}}" alt="img">
                    </a>
                </div>
                <div class="content">
                    <h4><a href="#">محصول ساده</a></h4>
                    <div class="price">
                        <span>تومان200.00 x 1</span>
                    </div>
                </div>
                <div class="remove">
                    <a href="#"><i class="bi bi-x-lg"></i></a>
                </div>
            </div>
        </div>
        <div class="minicart-bottom">
            <div class="title">
                <h2>جمع : <span>600 تومان</span></h2>
            </div>
            <div class="button-b">
                <a class="button-2" href="{{route('client.cart.index')}}">مشاهده سبد خرید</a>
                <a class="button-1" href="{{route('client.checkout')}}">ادامه تسویه حساب </a>
            </div>
        </div>
    </div>
</div>
