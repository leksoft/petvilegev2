@extends('layouts.home')

@section('content')
 <!-- start section -->
 <section class="section white-backgorund">
    <div class="container">
        <div class="row">
            <div class="col-sm-7 vertical-align">
                <h2 class="title">สมัครเป็น Partner กับ เพจวิเลจ</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
            
                            <ul class="list list-unstyled list-inline">
                                <li><a href="#" class="btn btn-google-plus round btn-lg" data-toggle="modal" data-target=".QuickView">ฝากร้าน</a></li>
                                <li><a href="javascript:void(0);" data-toggle="modal" data-target=".loginModal" class="btn btn-linkedin round btn-lg">เข้าระบบ</a></li>
                              
                            </ul>
               
            </div><!-- end col -->
            <div class="col-sm-5 vertical-align">
                <figure class="zoom-in">
                <img src="{{ asset('frontend/img/partner/partner-1.jpg') }}" alt="">
                </figure>
            </div><!-- end col -->
        </div><!-- end row -->
        
        <hr class="spacer-20">
        <div class="row">
                <div class="col-sm-5 vertical-align">
                    <div class="embed-responsive embed-responsive-16by9">
                            <figure class="zoom-in">
                                    <img src="{{ asset('frontend/img/partner/partner-2.jpg') }}" alt="">
                                    </figure>
                    </div>
                </div><!-- end col -->
                <div class="col-sm-7 vertical-align">
                    <h2 class="title">Lorem Ipsum</h2>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                    
                    <hr class="spacer-10 no-border">
                    
                  
                </div><!-- end col -->
            </div><!-- end row -->

            <div class="row">
                    
                    <div class="col-sm-7 vertical-align">
                        <h2 class="title">Lorem Ipsum</h2>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        
                        <hr class="spacer-10 no-border">
                        
                      
                    </div><!-- end col -->
                    <div class="col-sm-5 vertical-align">
                            <div class="embed-responsive embed-responsive-16by9">
                                    <figure class="zoom-in">
                                            <img src="{{ asset('frontend/img/partner/partner-2.jpg') }}" alt="">
                                            </figure>
                            </div>
                        </div><!-- end col -->
            </div><!-- end row -->
            <div class="row">
                    <div class="col-sm-5 vertical-align">
                        <div class="embed-responsive embed-responsive-16by9">
                                <figure class="zoom-in">
                                        <img src="{{ asset('frontend/img/partner/partner-2.jpg') }}" alt="">
                                        </figure>
                        </div>
                    </div><!-- end col -->
                    <div class="col-sm-7 vertical-align">
                        <h2 class="title">Lorem Ipsum</h2>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        
                        <hr class="spacer-10 no-border">
                        
                      
                    </div><!-- end col -->
            </div><!-- end row -->

                

    </div>
 </section>   
 <!-- start section -->
 <section class="info-background">
        <div class="container">
            <div class="box-banner-wide info-background">
                <div class="row">
                    <div class="col-sm-4 vertical-align">
                        <h2 class="alt-font text-uppercase text-white">
                                Lorem Ipsum 
                        </h2>
                    </div><!-- end col -->
                    <div class="col-sm-4 vertical-align">
                        <p class="mt-20">Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem.</p>
                    </div><!-- end col -->
                    <div class="col-sm-4 vertical-align text-right">
                    <a  href="{{ route('partner-select') }}" class="btn btn-google-plus round btn-lg">ฝากร้าน</a>
                    </div><!-- end col -->   
                </div><!-- end row -->
            </div><!-- end box-banner-wide -->
        </div><!-- end container -->
    </section>
    <!-- end section -->


      <!-- Modal Product Quick View -->
      <div class="modal fade QuickView" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h5>ฝากร้านกับเพจวิเลจ</h5>
                    </div><!-- end modal-header -->
                    <div class="modal-body">
                        <div class="row">
                   
                            <div class="col-sm-12">
                       
                                <h4 class="text-primary">เลือกประเภทบัญชี</h4>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                <hr class="spacer-10">
                                <ul class="list list-inline">
                                    <li><button type="button" class="btn btn-default btn-md round"><i class="fa fa-shopping-basket mr-5"></i>Add to Cart</button></li>
                                    <li><button type="button" class="btn btn-gray btn-md round"><i class="fa fa-heart mr-5"></i>Add to Wishlist</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop