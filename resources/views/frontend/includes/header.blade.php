<a href="{{ url('/') }}"><img src="{{ asset('frontend/img/banner/h_banner.jpg') }}" alt="" height="60px"></a>
  
<header>
    <!-- header-area start -->
    <div class="header-area bg-blue" style="height:65px;">
        <div class="container-fluid">
              
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <!-- logo start -->
                    <div class="logo">
                        <a href="{{ url('/homepage') }}"><img src="{{ asset('frontend/') }}/img/logo/PETVILEGE_Logo.png" alt="" ></a>
                    </div>
                    <!-- logo end -->
                </div>
                <div class="col-lg-8 col-md-8">
                    <!-- top-search-area start -->
                    <div class="top-search-area">
                        <div class="search-categories">
                            <form action="#">
                                <div class="search-form-input">
                        
                                    <input type="text" placeholder="Search for places...">
                                    <button class="top-search-btn" type="submit"><i class="ion-ios-search-strong"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- top-search-area end -->
                </div>
                <div class="col-lg-2 col-md-2">
                    <!-- header-cart-box start -->
                    <div class="header-cart-box" style="margin: 20px 0 20px;">
                        <!-- setting-account start -->
                        @guest
                        <div class="setting-account">
                            <div class="btn-group">
                                
                                <button class="btn-link " aria-haspopup="true" aria-expanded="false"  data-toggle="modal" data-target="#ModalLogin">
                                   เข้าสู่ระบบ
                                </button>
                               
                            </div>
                        </div>
                        @else
                        <!-- setting-account end -->
                        <!-- top-shopoing-cart start -->
                        <div class="setting-account">
                                <div class="btn-group">
                                    <button class="btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       {{ Auth::user()->name }} <i class="fa fa-angle-down"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <ul>
                                          
                                           <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">ออกจากระบบ</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                        </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        <div id="top-shopoing-cart" class="btn-group">
                            <button class="btn-link shopping-cart dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ion-ios-cart"></i>
                                <span class="top-cart-total">
                                    <span class="item-text-number">2</span>
                                    <span class="cart-text-items">Cart</span>
                                </span>
                            </button>
                            <div class="dropdown-menu">
                                <ul class="mini-cart-sub">
                                    <li class="single-cart">
                                        <div class="cart-img">
                                            <a href="single-product.html"><img src="{{ asset('frontend/') }}/img/small-product/1.jpg" alt=""></a>
                                        </div>
                                        <div class="cart-info">
                                            <a href="single-product.html">Chaz Kangeroo Hoodie</a>
                                            <p class="cart-quantity">×1</p>
                                            <p class="cart-price">$78.80</p>
                                        </div>
                                        <button class="cart-remove" title="Remove"><i class="ion-ios-close-empty"></i></button>
                                    </li>
                                    <li class="single-cart">
                                        <div class="cart-img">
                                            <a href="#"><img src="img/small-product/2.jpg" alt=""></a>
                                        </div>
                                        <div class="cart-info">
                                            <a href="single-product.html">Voyage Yoga Bag</a>
                                            <p class="cart-quantity">×1</p>
                                            <p class="cart-price">$242.00</p>
                                        </div>
                                        <button class="cart-remove" title="Remove"><i class="ion-ios-close-empty"></i></button>
                                    </li>
                                    <li class="cart-total-box">
                                        <h5>Sub-Total :<span class="float-right">$264.00</span></h5>
                                        <h5>Eco Tax (-2.00) :<span class="float-right">$4.00</span></h5>
                                        <h5>VAT (20%) :<span class="float-right">$52.80</span></h5>
                                        <h5>Total :<span class="float-right">$320.80</span></h5>
                                    </li>
                                    <li>
                                        <p class="text-center cart-button">
                                            <a href="cart.html">View Cart</a>
                                            <a href="checkout.html">Checkout</a>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                      </div>
                      @endguest
                        <!-- top-shopoing-cart end -->
                    </div>
                    <!-- header-cart-box end -->
                </div>
            </div>
        </div>
    </div>
    <!-- header-area end -->
    <!-- main-menu-area start -->
    <div class="main-menu-area sticky-header bg-white" >
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-menu d-none d-lg-block text-center">
                        <nav>
                            <ul>
                                <li><a href="index.html">รักษาสัตว์</a></li>
                                <li><a href="index.html">กรูมมิ่ง</a></li>
                                <li><a href="index.html">รักฝากสัตว์</a></li>
                                <li><a href="index.html">กิจกรรมสัตว์</a></li>
                                <li><a href="index.html">สินค้า</a></li>
                                <li><a href="index.html">บริการอื่นๆ</a></li>
                                <li><a href="index.html">ฟาร์ม</a></li>
                                <li><a href="index.html">ไลฟ์สไตล์</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
              
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Mobile Menu Area Start -->
                    <div class="mobile-menu-area d-block d-lg-none">
                        <div class="mobile-menu">
                            <nav id="mobile-menu-active">
                                <ul>
                                    <li><a href="index.html">รักษาสัตว์</a></li>
                                <li><a href="index.html">กรูมมิ่ง</a></li>
                                <li><a href="index.html">รักฝากสัตว์</a></li>
                                <li><a href="index.html">กิจกรรมสัตว์</a></li>
                                <li><a href="index.html">สินค้า</a></li>
                                <li><a href="index.html">บริการอื่นๆ</a></li>
                                <li><a href="index.html">ฟาร์ม</a></li>
                                <li><a href="index.html">ไลฟ์สไตล์</a></li>
                                </ul>
                            </nav>							
                        </div>
                    </div>
                    <!-- Mobile Menu Area End -->
                </div>
            </div>
        </div>
    </div> 
    <!-- main-menu-area end -->
</header>