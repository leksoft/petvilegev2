        
      @extends('layouts.home')

      @section('content')        
        <!-- Swiper slider-->
        <div class="swiper-container swiper-coverflow">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-color:#e1e6e6;">
                        <div class="slider-content">
                           
                            <div class="box text-right fa">
                                <img src="{{ asset('frontend/img/banners/phpunit.jpg') }}" alt="" class="img-fluid"/>
                            </div>
                        </div><!-- end slider-content -->
                    </div><!-- end swiper-slider -->
                    <div class="swiper-slide" style="background-color:#e1e6e6;">
                        <div class="slider-content">
                          
                            <div class="box text-right fa">
                                    <img src="{{ asset('frontend/img/banners/phpunit.jpg') }}" alt="" />
                            </div>
                        </div><!-- end slider-content -->
                    </div><!-- end swiper-slider -->
                </div><!-- end swiper wrapper -->
                <!-- Pagination -->
                <div class="swiper-pagination swiper-pagination-h"></div>
                <!-- Arrows -->
                <div class="swiper-button-next swiper-button-white"></div>
                <div class="swiper-button-prev swiper-button-white"></div>
        </div><!-- end swiper-container -->
            
            <!-- start section หมวดหมู่-->
            <section class="section light-backgorund">
                <div class="container">
                        <div class="row">
                                <div class="col-sm-10">
                                    <h4 class="mb-20">หมวดหมู่ร้านค้า</h4>
                                </div><!-- end col -->
                                <div class="col-sm-2">
                                        <h6 class="mb-20 pull-right">ดูทั้งหมด</h6>
                                    </div><!-- end col -->
                            </div><!-- end row -->        
                      
                        <div class="row">
                               
                                <div class="col-sm-4">
                                    <div class="box-banner-img">
                                        <figure>
                                            <a href="javascript:void(0);">
                                                <img src="{{ asset('frontend/img/banners/banner_04.jpg') }}" alt=""/>
                                            </a>
                                        </figure>
                                    </div><!-- end box-banner-img -->
                                </div><!-- end col -->
                                <div class="col-sm-4">
                                    <div class="box-banner-img">
                                        <figure>
                                            <a href="javascript:void(0);">
                                                <img src="{{ asset('frontend/img/banners/banner_05.jpg') }}" alt=""/>
                                            </a>
                                        </figure>
                                    </div><!-- end box-banner-img -->
                                </div><!-- end col -->
                                <div class="col-sm-4">
                                        <div class="box-banner-img">
                                            <figure>
                                                <a href="javascript:void(0);">
                                                    <img src="{{ asset('frontend/img/banners/banner_04.jpg') }}" alt=""/>
                                                </a>
                                            </figure>
                                        </div><!-- end box-banner-img -->
                                    </div><!-- end col -->
                            </div><!-- end row -->
                            <hr class="spacer-10 no-border"/>
                              <div class="row">
                                <div class="col-sm-4">
                                    <div class="box-banner-img">
                                        <figure>
                                            <a href="javascript:void(0);">
                                                <img src="{{ asset('frontend/img/banners/banner_04.jpg') }}" alt=""/>
                                            </a>
                                        </figure>
                                    </div><!-- end box-banner-img -->
                                </div><!-- end col -->
                                <div class="col-sm-4">
                                    <div class="box-banner-img">
                                        <figure>
                                            <a href="javascript:void(0);">
                                                <img src="{{ asset('frontend/img/banners/banner_05.jpg') }}" alt=""/>
                                            </a>
                                        </figure>
                                    </div><!-- end box-banner-img -->
                                </div><!-- end col -->
                                <div class="col-sm-4">
                                        <div class="box-banner-img">
                                            <figure>
                                                <a href="javascript:void(0);">
                                                    <img src="{{ asset('frontend/img/banners/banner_04.jpg') }}" alt=""/>
                                                </a>
                                            </figure>
                                        </div><!-- end box-banner-img -->
                                    </div><!-- end col -->
                            </div><!-- end row -->
                  
                </div><!-- end container -->
            </section>
            <!-- end section  หมวดหมู่-->
                <!-- start section ดีลแนะนำ -->
            <section class="section light-backgorund">
                        <div class="container">
                                <div class="row">
                                        <div class="col-sm-10">
                                            <h4 class="mb-20">ดีลแนะนำ</h4>
                                        </div><!-- end col -->
                                        <div class="col-sm-2">
                                                <h6 class="mb-20 pull-right">ดีลทั้งหมด</h6>
                                            </div><!-- end col -->
                                    </div><!-- end row -->        
            
                            <div class="row">
                                    <div class="col-sm-12">
                                        <div id="owl-demo" class="owl-carousel column-4 owl-theme">
                                            <div class="item">
                                                    <div class="thumbnail store style2" style="background-color: #ffffff;">
                                                            <div class="header">
                                                                <div class="badges">
                                                                        <span class="product-badge top right info-background text-white semi-circle"><i class="fa fa-heart-o"></i></span>
                                                                 
                                                                </div>
                                                                <figure>
                                                                    <a href="javascript:void(0);">
                                                                        <img src="{{ asset('frontend/img/products/cat.jpg') }}" alt="" width="250px" height="165px">
                                                                    </a>
                                                                </figure>
                                                               
                                                            </div>
                                                            <div class="caption">
                                                                <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
                                                                <p>อาบน้ำ/ตัดขน</p>
                                                                <span class="product-badge top right text-warning">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-half-o"></i>
                                                                   </span> <span> (2,581)</span>
                                                                <div class="price">
                                                                    <span class="amount text-primary">$59.99</span>
                                                                </div>
                                                            </div><!-- end caption -->
                                                        </div><!-- end thumbnail -->
                                            </div><!-- end item -->
                                            
                                            <div class="item">
                                                    <div class="thumbnail store style2" style="background-color: #ffffff;">
                                                            <div class="header">
                                                                <div class="badges">
                                                                        <span class="product-badge top right info-background text-white semi-circle"><i class="fa fa-heart-o"></i></span>
                                                                 
                                                                </div>
                                                                <figure>
                                                                    <a href="javascript:void(0);">
                                                                        <img src="{{ asset('frontend/img/products/cat.jpg') }}" alt="" width="250px" height="165px">
                                                                    </a>
                                                                </figure>
                                                               
                                                            </div>
                                                            <div class="caption">
                                                                    <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
                                                                    <p>เพทช็อป</p>
                                                                    <span class="product-badge top right text-warning">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star-half-o"></i>
                                                                       </span> <span> (2,581)</span>
                                                                    <div class="price">
                                                                        <span class="amount text-primary">ฟรี</span>
                                                                    </div>
                                                                </div><!-- end caption -->
                                                        </div><!-- end thumbnail -->
                                            </div><!-- end item -->
                                            
                                            <div class="item">
                                                    <div class="thumbnail store style2" style="background-color: #ffffff;">
                                                            <div class="header">
                                                                <div class="badges">
                                                                        <span class="product-badge top right info-background text-white semi-circle"><i class="fa fa-heart-o"></i></span>
                                                                 
                                                                </div>
                                                                <figure>
                                                                    <a href="javascript:void(0);">
                                                                        <img src="{{ asset('frontend/img/products/cat.jpg') }}" alt="" width="250px" height="165px">
                                                                    </a>
                                                                </figure>
                                                               
                                                            </div>
                                                            <div class="caption">
                                                                    <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
                                                                    <p>โรงพยาบาลสัตว์/คลีนิก</p>
                                                                    <span class="product-badge top right text-warning">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star-half-o"></i>
                                                                       </span> <span> (2,581)</span>
                                                                    <div class="price">
                                                                        <span class="amount text-primary">$59.99</span>
                                                                    </div>
                                                                </div><!-- end caption -->
                                                        </div><!-- end thumbnail -->
                                            </div><!-- end item -->
                                            
                                            <div class="item">
                                                    <div class="thumbnail store style2" style="background-color: #ffffff;">
                                                            <div class="header">
                                                                <div class="badges">
                                                                        <span class="product-badge top right info-background text-white semi-circle"><i class="fa fa-heart-o"></i></span>
                                                                 
                                                                </div>
                                                                <figure>
                                                                    <a href="javascript:void(0);">
                                                                        <img src="{{ asset('frontend/img/products/cat.jpg') }}" alt="" width="250px" height="165px">
                                                                    </a>
                                                                </figure>
                                                               
                                                            </div>
                                                            <div class="caption">
                                                                    <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
                                                                    <p>อื่นๆ</p>
                                                                    <span class="product-badge top right text-warning">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star-half-o"></i>
                                                                            <i class="fa fa-star-half-o"></i>
                                                                            <i class="fa fa-star-half-o"></i>
                                                                       </span> <span> (2,581)</span>
                                                                    <div class="price">
                                                                        <span class="amount text-primary">$59.99</span>
                                                                    </div>
                                                                </div><!-- end caption -->
                                                        </div><!-- end thumbnail -->
                                            </div><!-- end item -->
                                            <div class="item">
                                                    <div class="thumbnail store style2" style="background-color: #ffffff;">
                                                            <div class="header">
                                                                <div class="badges">
                                                                        <span class="product-badge top right info-background text-white semi-circle"><i class="fa fa-heart-o"></i></span>
                                                                 
                                                                </div>
                                                                <figure>
                                                                    <a href="javascript:void(0);">
                                                                        <img src="{{ asset('frontend/img/products/cat.jpg') }}" alt="" width="250px" height="165px">
                                                                    </a>
                                                                </figure>
                                                               
                                                            </div>
                                                            <div class="caption">
                                                                    <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
                                                                    <p>เพทช็อป</p>
                                                                    <span class="product-badge top right text-warning">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star-half-o"></i>
                                                                            <i class="fa fa-star-half-white"></i>
                                                                       </span> <span> (2,581)</span>
                                                                    <div class="price">
                                                                        <span class="amount text-primary">$59.99</span>
                                                                    </div>
                                                                </div><!-- end caption -->
                                                        </div><!-- end thumbnail -->
                                            </div><!-- end item -->
                                        </div><!-- end owl carousel -->
                                    </div><!-- end col -->
                                </div><!-- end row -->
                        </div>
    
             </section> 
             <!-- ดีลแนะนำ -->
     <!-- คูปอง -->
             <section class="section light-backgorund">
                    <div class="container">
                            <div class="row">
                                    <div class="col-sm-10">
                                        <h4 class="mb-20">คูปอง</h4>
                                    </div><!-- end col -->
                                    <div class="col-sm-2">
                                            <h6 class="mb-20 pull-right">คูปองทั้งหมด</h6>
                                        </div><!-- end col -->
                                </div><!-- end row -->        
        
                        <div class="row">
                                <div class="col-sm-12">
                                    <div id="owl-demo" class="owl-carousel column-4 owl-theme">
                                        <div class="item">
                                                <div class="thumbnail store style2" style="background-color: #ffffff;">
                                                        <div class="header">
                                                            <div class="badges">
                                                                    <span class="product-badge top right info-background text-white semi-circle"><i class="fa fa-heart-o"></i></span>
                                                             
                                                            </div>
                                                            <figure>
                                                                <a href="javascript:void(0);">
                                                                    <img src="{{ asset('frontend/img/products/cat.jpg') }}" alt="" width="250px" height="165px">
                                                                </a>
                                                            </figure>
                                                           
                                                        </div>
                                                        <div class="caption">
                                                            <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
                                                            <p>อาบน้ำ/ตัดขน</p>
                                                            <span class="product-badge top right text-warning">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-half-o"></i>
                                                               </span> <span> (2,581)</span>
                                                            <div class="price">
                                                                <span class="amount text-primary">$59.99</span>
                                                            </div>
                                                        </div><!-- end caption -->
                                                    </div><!-- end thumbnail -->
                                        </div><!-- end item -->
                                        
                                        <div class="item">
                                                <div class="thumbnail store style2" style="background-color: #ffffff;">
                                                        <div class="header">
                                                            <div class="badges">
                                                                    <span class="product-badge top right info-background text-white semi-circle"><i class="fa fa-heart-o"></i></span>
                                                             
                                                            </div>
                                                            <figure>
                                                                <a href="javascript:void(0);">
                                                                    <img src="{{ asset('frontend/img/products/cat.jpg') }}" alt="" width="250px" height="165px">
                                                                </a>
                                                            </figure>
                                                           
                                                        </div>
                                                        <div class="caption">
                                                                <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
                                                                <p>เพทช็อป</p>
                                                                <span class="product-badge top right text-warning">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-half-o"></i>
                                                                   </span> <span> (2,581)</span>
                                                                <div class="price">
                                                                    <span class="amount text-primary">ฟรี</span>
                                                                </div>
                                                            </div><!-- end caption -->
                                                    </div><!-- end thumbnail -->
                                        </div><!-- end item -->
                                        
                                        <div class="item">
                                                <div class="thumbnail store style2" style="background-color: #ffffff;">
                                                        <div class="header">
                                                            <div class="badges">
                                                                    <span class="product-badge top right info-background text-white semi-circle"><i class="fa fa-heart-o"></i></span>
                                                             
                                                            </div>
                                                            <figure>
                                                                <a href="javascript:void(0);">
                                                                    <img src="{{ asset('frontend/img/products/cat.jpg') }}" alt="" width="250px" height="165px">
                                                                </a>
                                                            </figure>
                                                           
                                                        </div>
                                                        <div class="caption">
                                                                <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
                                                                <p>โรงพยาบาลสัตว์/คลีนิก</p>
                                                                <span class="product-badge top right text-warning">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-half-o"></i>
                                                                   </span> <span> (2,581)</span>
                                                                <div class="price">
                                                                    <span class="amount text-primary">$59.99</span>
                                                                </div>
                                                            </div><!-- end caption -->
                                                    </div><!-- end thumbnail -->
                                        </div><!-- end item -->
                                        
                                        <div class="item">
                                                <div class="thumbnail store style2" style="background-color: #ffffff;">
                                                        <div class="header">
                                                            <div class="badges">
                                                                    <span class="product-badge top right info-background text-white semi-circle"><i class="fa fa-heart-o"></i></span>
                                                             
                                                            </div>
                                                            <figure>
                                                                <a href="javascript:void(0);">
                                                                    <img src="{{ asset('frontend/img/products/cat.jpg') }}" alt="" width="250px" height="165px">
                                                                </a>
                                                            </figure>
                                                           
                                                        </div>
                                                        <div class="caption">
                                                                <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
                                                                <p>อื่นๆ</p>
                                                                <span class="product-badge top right text-warning">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-half-o"></i>
                                                                        <i class="fa fa-star-half-o"></i>
                                                                        <i class="fa fa-star-half-o"></i>
                                                                   </span> <span> (2,581)</span>
                                                                <div class="price">
                                                                    <span class="amount text-primary">$59.99</span>
                                                                </div>
                                                            </div><!-- end caption -->
                                                    </div><!-- end thumbnail -->
                                        </div><!-- end item -->
                                        <div class="item">
                                                <div class="thumbnail store style2" style="background-color: #ffffff;">
                                                        <div class="header">
                                                            <div class="badges">
                                                                    <span class="product-badge top right info-background text-white semi-circle"><i class="fa fa-heart-o"></i></span>
                                                             
                                                            </div>
                                                            <figure>
                                                                <a href="javascript:void(0);">
                                                                    <img src="{{ asset('frontend/img/products/cat.jpg') }}" alt="" width="250px" height="165px">
                                                                </a>
                                                            </figure>
                                                           
                                                        </div>
                                                        <div class="caption">
                                                                <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
                                                                <p>เพทช็อป</p>
                                                                <span class="product-badge top right text-warning">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star-half-o"></i>
                                                                        <i class="fa fa-star-half-white"></i>
                                                                   </span> <span> (2,581)</span>
                                                                <div class="price">
                                                                    <span class="amount text-primary">$59.99</span>
                                                                </div>
                                                            </div><!-- end caption -->
                                                    </div><!-- end thumbnail -->
                                        </div><!-- end item -->
                                    </div><!-- end owl carousel -->
                                </div><!-- end col -->
                            </div><!-- end row -->
                    </div>
    
         </section>
         <!-- คูปอง -->
     <!-- สถานที่ -->
     <section class="section light-backgorund">
            <div class="container">
                    <div class="row">
                            <div class="col-sm-10">
                                <h4 class="mb-20">สถานที่</h4>
                            </div><!-- end col -->
                            <div class="col-sm-2">
                                    <h6 class="mb-20 pull-right">สถานที่ทั้งหมด</h6>
                                </div><!-- end col -->
                        </div><!-- end row -->        
    
                <div class="row">
                        <div class="col-sm-12">
                            <div id="owl-demo" class="owl-carousel column-4 owl-theme">
                                <div class="item">
                                        <div class="thumbnail store style2" style="background-color: #ffffff;">
                                                <div class="header">
                                                    <div class="badges">
                                                            <span class="product-badge top right info-background text-white semi-circle"><i class="fa fa-heart-o"></i></span>
                                                     
                                                    </div>
                                                    <figure>
                                                        <a href="javascript:void(0);">
                                                            <img src="{{ asset('frontend/img/products/cat.jpg') }}" alt="" width="250px" height="165px">
                                                        </a>
                                                    </figure>
                                                   
                                                </div>
                                                <div class="caption">
                                                    <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
                                                    <p>อาบน้ำ/ตัดขน</p>
                                                    <span class="product-badge top right text-warning">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                       </span> <span> (2,581)</span>
                                                    <div class="price">
                                                        <span class="amount text-primary">$59.99</span>
                                                    </div>
                                                </div><!-- end caption -->
                                            </div><!-- end thumbnail -->
                                </div><!-- end item -->
                                
                                <div class="item">
                                        <div class="thumbnail store style2" style="background-color: #ffffff;">
                                                <div class="header">
                                                    <div class="badges">
                                                            <span class="product-badge top right info-background text-white semi-circle"><i class="fa fa-heart-o"></i></span>
                                                     
                                                    </div>
                                                    <figure>
                                                        <a href="javascript:void(0);">
                                                            <img src="{{ asset('frontend/img/products/cat.jpg') }}" alt="" width="250px" height="165px">
                                                        </a>
                                                    </figure>
                                                   
                                                </div>
                                                <div class="caption">
                                                        <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
                                                        <p>เพทช็อป</p>
                                                        <span class="product-badge top right text-warning">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-half-o"></i>
                                                           </span> <span> (2,581)</span>
                                                        <div class="price">
                                                            <span class="amount text-primary">ฟรี</span>
                                                        </div>
                                                    </div><!-- end caption -->
                                            </div><!-- end thumbnail -->
                                </div><!-- end item -->
                                
                                <div class="item">
                                        <div class="thumbnail store style2" style="background-color: #ffffff;">
                                                <div class="header">
                                                    <div class="badges">
                                                            <span class="product-badge top right info-background text-white semi-circle"><i class="fa fa-heart-o"></i></span>
                                                     
                                                    </div>
                                                    <figure>
                                                        <a href="javascript:void(0);">
                                                            <img src="{{ asset('frontend/img/products/cat.jpg') }}" alt="" width="250px" height="165px">
                                                        </a>
                                                    </figure>
                                                   
                                                </div>
                                                <div class="caption">
                                                        <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
                                                        <p>โรงพยาบาลสัตว์/คลีนิก</p>
                                                        <span class="product-badge top right text-warning">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-half-o"></i>
                                                           </span> <span> (2,581)</span>
                                                        <div class="price">
                                                            <span class="amount text-primary">$59.99</span>
                                                        </div>
                                                    </div><!-- end caption -->
                                            </div><!-- end thumbnail -->
                                </div><!-- end item -->
                                
                                <div class="item">
                                        <div class="thumbnail store style2" style="background-color: #ffffff;">
                                                <div class="header">
                                                    <div class="badges">
                                                            <span class="product-badge top right info-background text-white semi-circle"><i class="fa fa-heart-o"></i></span>
                                                     
                                                    </div>
                                                    <figure>
                                                        <a href="javascript:void(0);">
                                                            <img src="{{ asset('frontend/img/products/cat.jpg') }}" alt="" width="250px" height="165px">
                                                        </a>
                                                    </figure>
                                                   
                                                </div>
                                                <div class="caption">
                                                        <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
                                                        <p>อื่นๆ</p>
                                                        <span class="product-badge top right text-warning">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-half-o"></i>
                                                                <i class="fa fa-star-half-o"></i>
                                                                <i class="fa fa-star-half-o"></i>
                                                           </span> <span> (2,581)</span>
                                                        <div class="price">
                                                            <span class="amount text-primary">$59.99</span>
                                                        </div>
                                                    </div><!-- end caption -->
                                            </div><!-- end thumbnail -->
                                </div><!-- end item -->
                                <div class="item">
                                        <div class="thumbnail store style2" style="background-color: #ffffff;">
                                                <div class="header">
                                                    <div class="badges">
                                                            <span class="product-badge top right info-background text-white semi-circle"><i class="fa fa-heart-o"></i></span>
                                                     
                                                    </div>
                                                    <figure>
                                                        <a href="javascript:void(0);">
                                                            <img src="{{ asset('frontend/img/products/cat.jpg') }}" alt="" width="250px" height="165px">
                                                        </a>
                                                    </figure>
                                                   
                                                </div>
                                                <div class="caption">
                                                        <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
                                                        <p>เพทช็อป</p>
                                                        <span class="product-badge top right text-warning">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-half-o"></i>
                                                                <i class="fa fa-star-half-white"></i>
                                                           </span> <span> (2,581)</span>
                                                        <div class="price">
                                                            <span class="amount text-primary">$59.99</span>
                                                        </div>
                                                    </div><!-- end caption -->
                                            </div><!-- end thumbnail -->
                                </div><!-- end item -->
                            </div><!-- end owl carousel -->
                        </div><!-- end col -->
                    </div><!-- end row -->
            </div>
    
    </section>
    <!-- สถานที่ -->
    @stop