@extends('layouts.frontend')

@section('content')       
       <!-- section-row start -->
          <div class="section-row  bg-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- benner-area start -->
                            <div class="benner-area pt-0">
                                    @include('frontend.includes.collection')
                            <!-- benner-area end -->

                            
                            <!-- product-area start -->
                            <div class="product-area box-module bg-gray">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="tabs-categorys-list secton-title">
                                            <ul class="nav" role="tablist">
                                               <li role="presentation" class="active"><a href="#new-deals" aria-controls="new-arrivals" role="tab" data-toggle="tab">Deals                                                </a></li>
                                           
                                           </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- tab-contnt start -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="new-deals">
                                        <div class="product-wrapper ">
                                            <div class="row">
                                                <div class="prodict-active owl-carousel">
                                            
                                                    <div class="col-lg-3">
                                                        <!-- sinle-product-item start -->
                                                        <div class="sinle-product-item">
                                                            <div class="product-thumb">
                                                                <a href="single-product.html" >
                                                                    <img class="primary-image" src="{{ asset('frontend/') }}/img/product/4.jpg" alt="">
                                                                </a>
                                                                <div class="label-product">-7%</div>
                                                                <div class="action-links">
                                                                    <a class="action-btn btn-wishlist" href="#"><i class="ion-android-favorite-outline"></i></a>
                                                                    <a class="action-btn btn-compare" href="#"><i class="ion-arrow-swap"></i></a>
                                                                    <a class="action-btn btn-quickview"  data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="ion ion-ios-eye"></i></a>
                                                                </div>
                                                                <div class="add-to-cart">
                                                                    <a class="btn-cart" href="#"><span> Add to Cart </span></a>
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <div class="rating-box">
                                                                    <ul class="rating d-flex">
                                                                        <li><i class="ion-ios-star"></i></li>
                                                                        <li><i class="ion-ios-star"></i></li>
                                                                        <li><i class="ion-ios-star"></i></li>
                                                                        <li><i class="ion-android-star-outline"></i></li>
                                                                        <li><i class="ion-android-star-outline"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <h4 class="product-name"><a href="single-product.html">Phone Saminon galax Tab</a></h4>
                                                                <div class="price-box">
                                                                    <span class="new-price">$241.99</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- sinle-product-item end -->
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <!-- sinle-product-item start -->
                                                        <div class="sinle-product-item">
                                                            <div class="product-thumb">
                                                                <a href="single-product.html" >
                                                                    <img class="primary-image" src="{{ asset('frontend/') }}/img/product/5.jpg" alt="">
                                                                    <img class="secondary-image" src="{{ asset('frontend/') }}/img/product/6.jpg" alt="">
                                                                </a>
                                                                <div class="action-links">
                                                                    <a class="action-btn btn-wishlist" href="#"><i class="ion-android-favorite-outline"></i></a>
                                                                    <a class="action-btn btn-compare" href="#"><i class="ion-arrow-swap"></i></a>
                                                                    <a class="action-btn btn-quickview"  data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="ion ion-ios-eye"></i></a>
                                                                </div>
                                                                <div class="add-to-cart">
                                                                    <a class="btn-cart" href="#"><span> Add to Cart </span></a>
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <div class="rating-box">
                                                                    <ul class="rating d-flex">
                                                                        <li><i class="ion-ios-star"></i></li>
                                                                        <li><i class="ion-ios-star"></i></li>
                                                                        <li><i class="ion-ios-star"></i></li>
                                                                        <li><i class="ion-android-star-outline"></i></li>
                                                                        <li><i class="ion-android-star-outline"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <h4 class="product-name"><a href="single-product.html">Lovo Ideacentre 300</a></h4>
                                                                <div class="price-box">
                                                                    <span class="new-price">$116.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- sinle-product-item end -->
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <!-- sinle-product-item start -->
                                                        <div class="sinle-product-item">
                                                            <div class="product-thumb">
                                                                <a href="single-product.html" >
                                                                    <img class="primary-image" src="{{ asset('frontend/') }}/img/product/7.jpg" alt="">
                                                                </a>
                                                                <div class="action-links">
                                                                    <a class="action-btn btn-wishlist" href="#"><i class="ion-android-favorite-outline"></i></a>
                                                                    <a class="action-btn btn-compare" href="#"><i class="ion-arrow-swap"></i></a>
                                                                    <a class="action-btn btn-quickview"  data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="ion ion-ios-eye"></i></a>
                                                                </div>
                                                                <div class="add-to-cart">
                                                                    <a class="btn-cart" href="#"><span> Add to Cart </span></a>
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <div class="rating-box">
                                                                    <ul class="rating d-flex">
                                                                        <li><i class="ion-ios-star"></i></li>
                                                                        <li><i class="ion-ios-star"></i></li>
                                                                        <li><i class="ion-ios-star"></i></li>
                                                                        <li><i class="ion-ios-star"></i></li>
                                                                        <li><i class="ion-android-star-outline"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <h4 class="product-name"><a href="single-product.html">BARND ZenPad 3S</a></h4>
                                                                <div class="price-box">
                                                                    <span class="new-price">$98.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- sinle-product-item end -->
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <!-- sinle-product-item start -->
                                                        <div class="sinle-product-item">
                                                            <div class="product-thumb">
                                                                <a href="single-product.html" >
                                                                    <img class="primary-image" src="{{ asset('frontend/') }}/img/product/8.jpg" alt="">
                                                                </a>
                                                                <div class="action-links">
                                                                    <a class="action-btn btn-wishlist" href="#"><i class="ion-android-favorite-outline"></i></a>
                                                                    <a class="action-btn btn-compare" href="#"><i class="ion-arrow-swap"></i></a>
                                                                    <a class="action-btn btn-quickview"  data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="ion ion-ios-eye"></i></a>
                                                                </div>
                                                                <div class="add-to-cart">
                                                                    <a class="btn-cart" href="#"><span> Add to Cart </span></a>
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <div class="rating-box">
                                                                    <ul class="rating d-flex">
                                                                        <li><i class="ion-ios-star"></i></li>
                                                                        <li><i class="ion-ios-star"></i></li>
                                                                        <li><i class="ion-ios-star"></i></li>
                                                                        <li><i class="ion-ios-star"></i></li>
                                                                        <li><i class="ion-android-star-outline"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <h4 class="product-name"><a href="single-product.html">BARND UX360CA</a></h4>
                                                                <div class="price-box">
                                                                    <span class="new-price">$98.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- sinle-product-item end -->
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <!-- sinle-product-item start -->
                                                        <div class="sinle-product-item">
                                                            <div class="product-thumb">
                                                                <a href="single-product.html" >
                                                                    <img class="primary-image" src="{{ asset('frontend/') }}/img/product/9.jpg" alt="">
                                                                </a>
                                                                <div class="label-product label-sale">-7%</div>
                                                                <div class="action-links">
                                                                    <a class="action-btn btn-wishlist" href="#"><i class="ion-android-favorite-outline"></i></a>
                                                                    <a class="action-btn btn-compare" href="#"><i class="ion-arrow-swap"></i></a>
                                                                    <a class="action-btn btn-quickview"  data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="ion ion-ios-eye"></i></a>
                                                                </div>
                                                                <div class="add-to-cart">
                                                                    <a class="btn-cart" href="#"><span> Add to Cart </span></a>
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <div class="rating-box">
                                                                    <ul class="rating d-flex">
                                                                        <li><i class="ion-ios-star"></i></li>
                                                                        <li><i class="ion-ios-star"></i></li>
                                                                        <li><i class="ion-ios-star"></i></li>
                                                                        <li><i class="ion-ios-star"></i></li>
                                                                        <li><i class="ion-android-star-outline"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <h4 class="product-name"><a href="single-product.html">Acer R240HY bidx</a></h4>
                                                                <div class="price-box">
                                                                    <span class="new-price">$80.00</span>
                                                                    <span class="new-price">$86.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- sinle-product-item end -->
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <!-- sinle-product-item start -->
                                                        <div class="sinle-product-item">
                                                            <div class="product-thumb">
                                                                <a href="single-product.html" >
                                                                    <img class="primary-image" src="{{ asset('frontend/') }}/img/product/10.jpg" alt="">
                                                                </a>
                                                                <div class="label-product label-sale">-10%</div>
                                                                <div class="action-links">
                                                                    <a class="action-btn btn-wishlist" href="#"><i class="ion-android-favorite-outline"></i></a>
                                                                    <a class="action-btn btn-compare" href="#"><i class="ion-arrow-swap"></i></a>
                                                                    <a class="action-btn btn-quickview"  data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="ion ion-ios-eye"></i></a>
                                                                </div>
                                                                <div class="add-to-cart">
                                                                    <a class="btn-cart" href="#"><span> Add to Cart </span></a>
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <div class="rating-box">
                                                                    <ul class="rating d-flex">
                                                                        <li><i class="ion-ios-star"></i></li>
                                                                        <li><i class="ion-ios-star"></i></li>
                                                                        <li><i class="ion-ios-star"></i></li>
                                                                        <li><i class="ion-ios-star"></i></li>
                                                                        <li><i class="ion-android-star-outline"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <h4 class="product-name"><a href="single-product.html">HP Pavilion 22cwa</a></h4>
                                                                <div class="price-box">
                                                                    <span class="new-price">$80.00</span>
                                                                    <span class="new-price">$86.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- sinle-product-item end -->
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <!-- sinle-product-item start -->
                                                        <div class="sinle-product-item">
                                                            <div class="product-thumb">
                                                                <a href="single-product.html" >
                                                                    <img class="primary-image" src="{{ asset('frontend/') }}/img/product/11.jpg" alt="">
                                                                </a>
                                                                <div class="action-links">
                                                                    <a class="action-btn btn-wishlist" href="#"><i class="ion-android-favorite-outline"></i></a>
                                                                    <a class="action-btn btn-compare" href="#"><i class="ion-arrow-swap"></i></a>
                                                                    <a class="action-btn btn-quickview"  data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="ion ion-ios-eye"></i></a>
                                                                </div>
                                                                <div class="add-to-cart">
                                                                    <a class="btn-cart" href="#"><span> Add to Cart </span></a>
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <div class="rating-box">
                                                                    <ul class="rating d-flex">
                                                                        <li><i class="ion-ios-star"></i></li>
                                                                        <li><i class="ion-ios-star"></i></li>
                                                                        <li><i class="ion-ios-star"></i></li>
                                                                        <li><i class="ion-ios-star"></i></li>
                                                                        <li><i class="ion-android-star-outline"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <h4 class="product-name"><a href="single-product.html">Radiant Tee</a></h4>
                                                                <div class="price-box">
                                                                    <span class="new-price">$210.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- sinle-product-item end -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                      
                                </div>
                                <!-- tab-contnt end -->
                                
                            </div>
                            <!-- product-area end -->
         <!-- product-area start -->
         <div class="product-area box-module bg-gray">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tabs-categorys-list secton-title">
                            <ul class="nav" role="tablist">
                               <li role="presentation" class="active"><a href="#new-deals" aria-controls="new-arrivals" role="tab" data-toggle="tab"> Coupon</a></li>
                           
                           </ul>
                        </div>
                    </div>
                </div>
                <!-- tab-contnt start -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="new-deals">
                        <div class="product-wrapper ">
                            <div class="row">
                                <div class="prodict-active owl-carousel">
                            
                                    <div class="col-lg-3">
                                        <!-- sinle-product-item start -->
                                        <div class="sinle-product-item">
                                            <div class="product-thumb">
                                                <a href="single-product.html" >
                                                    <img class="primary-image" src="{{ asset('frontend/') }}/img/product/4.jpg" alt="">
                                                </a>
                                                <div class="label-product">-7%</div>
                                                <div class="action-links">
                                                    <a class="action-btn btn-wishlist" href="#"><i class="ion-android-favorite-outline"></i></a>
                                                    <a class="action-btn btn-compare" href="#"><i class="ion-arrow-swap"></i></a>
                                                    <a class="action-btn btn-quickview"  data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="ion ion-ios-eye"></i></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a class="btn-cart" href="#"><span> Add to Cart </span></a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="rating-box">
                                                    <ul class="rating d-flex">
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-android-star-outline"></i></li>
                                                        <li><i class="ion-android-star-outline"></i></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product-name"><a href="single-product.html">Phone Saminon galax Tab</a></h4>
                                                <div class="price-box">
                                                    <span class="new-price">$241.99</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- sinle-product-item end -->
                                    </div>
                                    <div class="col-lg-3">
                                        <!-- sinle-product-item start -->
                                        <div class="sinle-product-item">
                                            <div class="product-thumb">
                                                <a href="single-product.html" >
                                                    <img class="primary-image" src="{{ asset('frontend/') }}/img/product/5.jpg" alt="">
                                                    <img class="secondary-image" src="{{ asset('frontend/') }}/img/product/6.jpg" alt="">
                                                </a>
                                                <div class="action-links">
                                                    <a class="action-btn btn-wishlist" href="#"><i class="ion-android-favorite-outline"></i></a>
                                                    <a class="action-btn btn-compare" href="#"><i class="ion-arrow-swap"></i></a>
                                                    <a class="action-btn btn-quickview"  data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="ion ion-ios-eye"></i></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a class="btn-cart" href="#"><span> Add to Cart </span></a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="rating-box">
                                                    <ul class="rating d-flex">
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-android-star-outline"></i></li>
                                                        <li><i class="ion-android-star-outline"></i></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product-name"><a href="single-product.html">Lovo Ideacentre 300</a></h4>
                                                <div class="price-box">
                                                    <span class="new-price">$116.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- sinle-product-item end -->
                                    </div>
                                    <div class="col-lg-3">
                                        <!-- sinle-product-item start -->
                                        <div class="sinle-product-item">
                                            <div class="product-thumb">
                                                <a href="single-product.html" >
                                                    <img class="primary-image" src="{{ asset('frontend/') }}/img/product/7.jpg" alt="">
                                                </a>
                                                <div class="action-links">
                                                    <a class="action-btn btn-wishlist" href="#"><i class="ion-android-favorite-outline"></i></a>
                                                    <a class="action-btn btn-compare" href="#"><i class="ion-arrow-swap"></i></a>
                                                    <a class="action-btn btn-quickview"  data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="ion ion-ios-eye"></i></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a class="btn-cart" href="#"><span> Add to Cart </span></a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="rating-box">
                                                    <ul class="rating d-flex">
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-android-star-outline"></i></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product-name"><a href="single-product.html">BARND ZenPad 3S</a></h4>
                                                <div class="price-box">
                                                    <span class="new-price">$98.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- sinle-product-item end -->
                                    </div>
                                    <div class="col-lg-3">
                                        <!-- sinle-product-item start -->
                                        <div class="sinle-product-item">
                                            <div class="product-thumb">
                                                <a href="single-product.html" >
                                                    <img class="primary-image" src="{{ asset('frontend/') }}/img/product/8.jpg" alt="">
                                                </a>
                                                <div class="action-links">
                                                    <a class="action-btn btn-wishlist" href="#"><i class="ion-android-favorite-outline"></i></a>
                                                    <a class="action-btn btn-compare" href="#"><i class="ion-arrow-swap"></i></a>
                                                    <a class="action-btn btn-quickview"  data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="ion ion-ios-eye"></i></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a class="btn-cart" href="#"><span> Add to Cart </span></a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="rating-box">
                                                    <ul class="rating d-flex">
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-android-star-outline"></i></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product-name"><a href="single-product.html">BARND UX360CA</a></h4>
                                                <div class="price-box">
                                                    <span class="new-price">$98.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- sinle-product-item end -->
                                    </div>
                                    <div class="col-lg-3">
                                        <!-- sinle-product-item start -->
                                        <div class="sinle-product-item">
                                            <div class="product-thumb">
                                                <a href="single-product.html" >
                                                    <img class="primary-image" src="{{ asset('frontend/') }}/img/product/9.jpg" alt="">
                                                </a>
                                                <div class="label-product label-sale">-7%</div>
                                                <div class="action-links">
                                                    <a class="action-btn btn-wishlist" href="#"><i class="ion-android-favorite-outline"></i></a>
                                                    <a class="action-btn btn-compare" href="#"><i class="ion-arrow-swap"></i></a>
                                                    <a class="action-btn btn-quickview"  data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="ion ion-ios-eye"></i></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a class="btn-cart" href="#"><span> Add to Cart </span></a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="rating-box">
                                                    <ul class="rating d-flex">
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-android-star-outline"></i></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product-name"><a href="single-product.html">Acer R240HY bidx</a></h4>
                                                <div class="price-box">
                                                    <span class="new-price">$80.00</span>
                                                    <span class="new-price">$86.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- sinle-product-item end -->
                                    </div>
                                    <div class="col-lg-3">
                                        <!-- sinle-product-item start -->
                                        <div class="sinle-product-item">
                                            <div class="product-thumb">
                                                <a href="single-product.html" >
                                                    <img class="primary-image" src="{{ asset('frontend/') }}/img/product/10.jpg" alt="">
                                                </a>
                                                <div class="label-product label-sale">-10%</div>
                                                <div class="action-links">
                                                    <a class="action-btn btn-wishlist" href="#"><i class="ion-android-favorite-outline"></i></a>
                                                    <a class="action-btn btn-compare" href="#"><i class="ion-arrow-swap"></i></a>
                                                    <a class="action-btn btn-quickview"  data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="ion ion-ios-eye"></i></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a class="btn-cart" href="#"><span> Add to Cart </span></a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="rating-box">
                                                    <ul class="rating d-flex">
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-android-star-outline"></i></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product-name"><a href="single-product.html">HP Pavilion 22cwa</a></h4>
                                                <div class="price-box">
                                                    <span class="new-price">$80.00</span>
                                                    <span class="new-price">$86.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- sinle-product-item end -->
                                    </div>
                                    <div class="col-lg-3">
                                        <!-- sinle-product-item start -->
                                        <div class="sinle-product-item">
                                            <div class="product-thumb">
                                                <a href="single-product.html" >
                                                    <img class="primary-image" src="{{ asset('frontend/') }}/img/product/11.jpg" alt="">
                                                </a>
                                                <div class="action-links">
                                                    <a class="action-btn btn-wishlist" href="#"><i class="ion-android-favorite-outline"></i></a>
                                                    <a class="action-btn btn-compare" href="#"><i class="ion-arrow-swap"></i></a>
                                                    <a class="action-btn btn-quickview"  data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="ion ion-ios-eye"></i></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a class="btn-cart" href="#"><span> Add to Cart </span></a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="rating-box">
                                                    <ul class="rating d-flex">
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-ios-star"></i></li>
                                                        <li><i class="ion-android-star-outline"></i></li>
                                                    </ul>
                                                </div>
                                                <h4 class="product-name"><a href="single-product.html">Radiant Tee</a></h4>
                                                <div class="price-box">
                                                    <span class="new-price">$210.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- sinle-product-item end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                      
                </div>
                <!-- tab-contnt end -->
                
            </div>
            <!-- product-area end -->
             <!-- product-area start -->
             <div class="product-area box-module bg-gray">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tabs-categorys-list secton-title">
                                <ul class="nav" role="tablist">
                                   <li role="presentation" class="active"><a href="#new-deals" aria-controls="new-arrivals" role="tab" data-toggle="tab"> Place  </a></li>
                               
                               </ul>
                            </div>
                        </div>
                    </div>
                    <!-- tab-contnt start -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="new-deals">
                            <div class="product-wrapper ">
                                <div class="row">
                                    <div class="prodict-active owl-carousel">
                                
                                        <div class="col-lg-3">
                                            <!-- sinle-product-item start -->
                                            <div class="sinle-product-item">
                                                <div class="product-thumb">
                                                    <a href="single-product.html" >
                                                        <img class="primary-image" src="{{ asset('frontend/') }}/img/product/4.jpg" alt="">
                                                    </a>
                                                    <div class="label-product">-7%</div>
                                                    <div class="action-links">
                                                        <a class="action-btn btn-wishlist" href="#"><i class="ion-android-favorite-outline"></i></a>
                                                        <a class="action-btn btn-compare" href="#"><i class="ion-arrow-swap"></i></a>
                                                        <a class="action-btn btn-quickview"  data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="ion ion-ios-eye"></i></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a class="btn-cart" href="#"><span> Add to Cart </span></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating-box">
                                                        <ul class="rating d-flex">
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-android-star-outline"></i></li>
                                                            <li><i class="ion-android-star-outline"></i></li>
                                                        </ul>
                                                    </div>
                                                    <h4 class="product-name"><a href="single-product.html">Phone Saminon galax Tab</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$241.99</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- sinle-product-item end -->
                                        </div>
                                        <div class="col-lg-3">
                                            <!-- sinle-product-item start -->
                                            <div class="sinle-product-item">
                                                <div class="product-thumb">
                                                    <a href="single-product.html" >
                                                        <img class="primary-image" src="{{ asset('frontend/') }}/img/product/5.jpg" alt="">
                                                        <img class="secondary-image" src="{{ asset('frontend/') }}/img/product/6.jpg" alt="">
                                                    </a>
                                                    <div class="action-links">
                                                        <a class="action-btn btn-wishlist" href="#"><i class="ion-android-favorite-outline"></i></a>
                                                        <a class="action-btn btn-compare" href="#"><i class="ion-arrow-swap"></i></a>
                                                        <a class="action-btn btn-quickview"  data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="ion ion-ios-eye"></i></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a class="btn-cart" href="#"><span> Add to Cart </span></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating-box">
                                                        <ul class="rating d-flex">
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-android-star-outline"></i></li>
                                                            <li><i class="ion-android-star-outline"></i></li>
                                                        </ul>
                                                    </div>
                                                    <h4 class="product-name"><a href="single-product.html">Lovo Ideacentre 300</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$116.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- sinle-product-item end -->
                                        </div>
                                        <div class="col-lg-3">
                                            <!-- sinle-product-item start -->
                                            <div class="sinle-product-item">
                                                <div class="product-thumb">
                                                    <a href="single-product.html" >
                                                        <img class="primary-image" src="{{ asset('frontend/') }}/img/product/7.jpg" alt="">
                                                    </a>
                                                    <div class="action-links">
                                                        <a class="action-btn btn-wishlist" href="#"><i class="ion-android-favorite-outline"></i></a>
                                                        <a class="action-btn btn-compare" href="#"><i class="ion-arrow-swap"></i></a>
                                                        <a class="action-btn btn-quickview"  data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="ion ion-ios-eye"></i></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a class="btn-cart" href="#"><span> Add to Cart </span></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating-box">
                                                        <ul class="rating d-flex">
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-android-star-outline"></i></li>
                                                        </ul>
                                                    </div>
                                                    <h4 class="product-name"><a href="single-product.html">BARND ZenPad 3S</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$98.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- sinle-product-item end -->
                                        </div>
                                        <div class="col-lg-3">
                                            <!-- sinle-product-item start -->
                                            <div class="sinle-product-item">
                                                <div class="product-thumb">
                                                    <a href="single-product.html" >
                                                        <img class="primary-image" src="{{ asset('frontend/') }}/img/product/8.jpg" alt="">
                                                    </a>
                                                    <div class="action-links">
                                                        <a class="action-btn btn-wishlist" href="#"><i class="ion-android-favorite-outline"></i></a>
                                                        <a class="action-btn btn-compare" href="#"><i class="ion-arrow-swap"></i></a>
                                                        <a class="action-btn btn-quickview"  data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="ion ion-ios-eye"></i></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a class="btn-cart" href="#"><span> Add to Cart </span></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating-box">
                                                        <ul class="rating d-flex">
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-android-star-outline"></i></li>
                                                        </ul>
                                                    </div>
                                                    <h4 class="product-name"><a href="single-product.html">BARND UX360CA</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$98.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- sinle-product-item end -->
                                        </div>
                                        <div class="col-lg-3">
                                            <!-- sinle-product-item start -->
                                            <div class="sinle-product-item">
                                                <div class="product-thumb">
                                                    <a href="single-product.html" >
                                                        <img class="primary-image" src="{{ asset('frontend/') }}/img/product/9.jpg" alt="">
                                                    </a>
                                                    <div class="label-product label-sale">-7%</div>
                                                    <div class="action-links">
                                                        <a class="action-btn btn-wishlist" href="#"><i class="ion-android-favorite-outline"></i></a>
                                                        <a class="action-btn btn-compare" href="#"><i class="ion-arrow-swap"></i></a>
                                                        <a class="action-btn btn-quickview"  data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="ion ion-ios-eye"></i></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a class="btn-cart" href="#"><span> Add to Cart </span></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating-box">
                                                        <ul class="rating d-flex">
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-android-star-outline"></i></li>
                                                        </ul>
                                                    </div>
                                                    <h4 class="product-name"><a href="single-product.html">Acer R240HY bidx</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$80.00</span>
                                                        <span class="new-price">$86.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- sinle-product-item end -->
                                        </div>
                                        <div class="col-lg-3">
                                            <!-- sinle-product-item start -->
                                            <div class="sinle-product-item">
                                                <div class="product-thumb">
                                                    <a href="single-product.html" >
                                                        <img class="primary-image" src="{{ asset('frontend/') }}/img/product/10.jpg" alt="">
                                                    </a>
                                                    <div class="label-product label-sale">-10%</div>
                                                    <div class="action-links">
                                                        <a class="action-btn btn-wishlist" href="#"><i class="ion-android-favorite-outline"></i></a>
                                                        <a class="action-btn btn-compare" href="#"><i class="ion-arrow-swap"></i></a>
                                                        <a class="action-btn btn-quickview"  data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="ion ion-ios-eye"></i></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a class="btn-cart" href="#"><span> Add to Cart </span></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating-box">
                                                        <ul class="rating d-flex">
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-android-star-outline"></i></li>
                                                        </ul>
                                                    </div>
                                                    <h4 class="product-name"><a href="single-product.html">HP Pavilion 22cwa</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$80.00</span>
                                                        <span class="new-price">$86.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- sinle-product-item end -->
                                        </div>
                                        <div class="col-lg-3">
                                            <!-- sinle-product-item start -->
                                            <div class="sinle-product-item">
                                                <div class="product-thumb">
                                                    <a href="single-product.html" >
                                                        <img class="primary-image" src="{{ asset('frontend/') }}/img/product/11.jpg" alt="">
                                                    </a>
                                                    <div class="action-links">
                                                        <a class="action-btn btn-wishlist" href="#"><i class="ion-android-favorite-outline"></i></a>
                                                        <a class="action-btn btn-compare" href="#"><i class="ion-arrow-swap"></i></a>
                                                        <a class="action-btn btn-quickview"  data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="ion ion-ios-eye"></i></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a class="btn-cart" href="#"><span> Add to Cart </span></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating-box">
                                                        <ul class="rating d-flex">
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-ios-star"></i></li>
                                                            <li><i class="ion-android-star-outline"></i></li>
                                                        </ul>
                                                    </div>
                                                    <h4 class="product-name"><a href="single-product.html">Radiant Tee</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$210.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- sinle-product-item end -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                          
                    </div>
                    <!-- tab-contnt end -->
                    
                </div>
                <!-- product-area end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- section-row end -->
        </div>
@endsection