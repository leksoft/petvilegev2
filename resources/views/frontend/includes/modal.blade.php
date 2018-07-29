<div class="modal fade modal-wrapper" id="exampleModalCenter" >
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-inner-area row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="single-product-tab">
                                <div class="zoomWrapper">
                                    <div id="img-1" class="zoomWrapper single-zoom">
                                        <a href="#">
                                            <img id="zoom1" src="{{ asset('frontend/img/product/1.jpg') }}" data-zoom-image="{{ asset('frontend/img/product/1.jpg') }}" alt="big-1">
                                        </a>
                                    </div>
                                    <div class="single-zoom-thumb">
                                        <ul class="s-tab-zoom single-product-active owl-carousel" id="gallery_01">
                                            <li>
                                                <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{ asset('frontend/img/product/1.jpg') }}" data-zoom-image="{{ asset('frontend/img/product/1.jpg') }}"><img src="{{ asset('frontend/img/product/1.jpg') }}" alt="zo-th-1"/></a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="elevatezoom-gallery" data-image="{{ asset('frontend/img/product/2.jpg') }}" data-zoom-image="{{ asset('frontend/img/product/2.jpg') }}"><img src="{{ asset('frontend/img/product/2.jpg') }}" alt="zo-th-2"></a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="elevatezoom-gallery" data-image="{{ asset('frontend/img/product/3.jpg') }}" data-zoom-image="{{ asset('frontend/') }}/img/product/3.jpg"><img src="img/product/3.jpg" alt="ex-big-3" /></a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="elevatezoom-gallery" data-image="{{ asset('frontend/img/product/4.jpg') }}" data-zoom-image="{{ asset('frontend/') }}/img/product/4.jpg"><img src="img/product/4.jpg" alt="zo-th-4"></a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="elevatezoom-gallery" data-image="{{ asset('frontend/img/product/5.jpg') }}" data-zoom-image="{{ asset('frontend/') }}/img/product/5.jpg"><img src="img/product/5.jpg" alt="zo-th-5"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div> 

                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <!-- product-thumbnail-content start -->
                            <div class="quick-view-content">
                                <div class="product-info">
                                    <h2>Phone Saminon galax Tab</h2>
                                    <div class="rating-box">
                                        <ul class="rating d-flex">
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-android-star-outline"></i></li>
                                            <li><i class="ion-android-star-outline"></i></li>
                                        </ul>
                                    </div>
                                    <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                    
                                    <div class="price-box">
                                       <span class="new-price">$25.50</span>
                                       <span class="old-price">$30.50</span>
                                   </div>
                                   
                                   <ul class="list-unstyled">
                                        <li>Brand: <a href="#">Hewlett-Packard</a></li>
                                        <li>Product Code: Digital</li>
                                        <li>Reward Points: 1000</li>
                                        <li>Availability: In Stock</li>
                                    </ul>
                                   
                                   <div class="quick-add-to-cart">
                                        <form class="modal-cart">
                                            <div class="quantity">
                                                <label>Quantity</label>
                                                <div class="cart-plus-minus">
                                                    <input type="number" value="1" min="0" step="1" class="input-box">
                                                </div>
                                            </div>
                                            <button class="add-to-cart" type="submit">Add to cart</button>
                                            <ul class="wishlist-compare-btn">
                                                <li><a class="wishlist" href="#"><i class="ion-heart"></i> Add To Wishlist</a></li>
                                                <li><a class="compare" href="#"><i class="ion-arrow-swap"></i> Compare</a></li>
                                            </ul>
                                        </form>
                                   </div>
                                </div>
                            </div>
                            <!-- product-thumbnail-content end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   


    <!-- Modal Login -->
    <div class="modal fade modal-wrapper" id="ModalLogin" >
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="modal-inner-area row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                
                                    <a class="btn btn-primary" href="{{ route('facebook.login') }}" id="btn-fblogin">
                                        <i class="fa fa-facebook"></i> Login with Facebook
                                    </a>
                                  
    
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="customer-login-register">
                                        <h3>Login</h3>
                                        <div class="login-Register-info">
                                            <form method="POST" action="{{ route('login') }}"> 
                                                    @csrf
                                                <p class="coupon-input form-row-first">
                                                    <label>Username or email <span class="required">*</span></label>
                                                    <input class="form-control{{ $errors->has('username') || $errors->has('email') ? ' is-invalid' : '' }}" id="login" type="text"  placeholder="Username" name="login" value="{{ old('username') ?: old('email') }}" required autofocus>
                                                    @if ($errors->has('username') || $errors->has('email'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('username') ?: $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </p>
                                                <p class="coupon-input form-row-last">
                                                    <label>password <span class="required">*</span></label>
                                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
                                                    @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                                </p>
                                               <div class="clear"></div>
                                                <p>
                                                    <button class="button-login" type="submit">Login</button>
                                                    <label> <input type="checkbox" id="checkbox-signup"  name="remember" {{ old('remember') ? 'checked' : '' }}> <span>Remember me</span></label>
                                                    <a href="#" class="lost-password">Lost your password?</a>
                                                </p>
                                            </form>
                                        </div>
                                    </div>
    
      
                        </div>
                    </div>
                </div>
            </div>
    </div>  

    <!-- End Modal Login -->