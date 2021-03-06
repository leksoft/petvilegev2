<!DOCTYPE html>
<html lang="en">
<head>
    <title>petvilege - เพทวิเลจ ให้บริการค้นหา รีวิว ดีลและคูปอง ส่วนลดร้านค้าต่าง ๆ
        รวมทุกบริการสำหรับสัตว์เลี้ยง</title>
    <meta charset="utf-8">
    <meta name="description"
          content="petvilege - พทวิเลจ ให้บริการค้นหา รีวิว ดีลและคูปอง ส่วนลดร้านค้าต่าง ๆ รวมทุกบริการสำหรับสัตว์เลี้ยง">
    <meta name="author" content="petvilege"/>
    <meta name="keywords"
          content="petvilege  ,เพทวิเลจ, ให้บริการค้นหา ,รีวิว, ดีลและคูปอง, ส่วนลดร้านค้าต่าง ๆ รวมทุกบริการสำหรับสัตว์เลี้ยง"/>
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">

    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <!--Favicon-->
    <link rel="shortcut icon" href="{{ asset('frontend/img/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('frontend/img/favicon.png') }}" type="image/x-icon">

    <!-- css files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/owl.carousel.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/owl.theme.default.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/animate.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/swiper.css') }}"/>


    <link id="pagestyle" rel="stylesheet" type="text/css" href="{{ asset('frontend/css/default.css') }}"/>


    @yield('css')

</head>
<body>
<!-- start section -->
<section class="primary-background hidden-xs">
    <div class="container-fluid">
        <div class="row grid-space-0">
            <div class="col-sm-12">
                <figure>
                    <a href="category.html">
                        <img src="{{ asset('frontend/img/banners/topBanner.png') }}" alt=""/>
                    </a>
                </figure>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!-- end section -->
<div class="middleBar" style="background-color: #18dcff;">
    <div class="container-fluid">
        <div class="row display-table">
            <div class="col-sm-2 vertical-align text-left hidden-xs">
                <a href="{{ url('homepage') }}">
                    <img width="94px" height="45px" src="{{ asset('frontend/img/PETVILEGE_Logo.png') }}" alt=""/>
                </a>
            </div><!-- end col -->
            <div class="col-sm-6 vertical-align text-center">
                <form>
                    <div class="row grid-space-1">
                        <div class="col-sm-12">
                            <input type="text" name="keyword" class="form-control input-lg" placeholder="ค้นหาสถานที่ ดีล คูปอง และอื่น ๆ" style="border: none;border-radius : 0.3rem;">
                        </div><!-- end col -->

                    </div><!-- end row -->
                </form>
            </div><!-- end col -->
            <div class="col-sm-4 vertical-align header-items hidden-xs">
                @guest

                <div class="login-top-menu">
                    <a href="javascript:void(0);" data-toggle="modal" data-target=".loginModal"  class="btn btn-info-outline btn-md"
                        <i class="fa fa-sign-in"></i> เข้าระบบ
                    </a>
                </div>

                @else


                    <ul class="nav navbar-nav">
                        <!-- Home -->
                        <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">ตะกร้าสินค้า</a>
                            <ul role="menu" class="dropdown-menu">
                                <li><a href="">cart</a></li>
                                <li><a href="">cart</a></li>
                            </ul><!-- end ul dropdown-menu -->
                        </li><!-- end li dropdown -->
                    </ul>

                    <ul class="nav navbar-nav">
                        <!-- Home -->
                        <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">การแจ้งเตือน</a>
                            <ul role="menu" class="dropdown-menu">
                                <li><a href="">cart</a></li>
                                <li><a href="">cart</a></li>
                            </ul><!-- end ul dropdown-menu -->
                        </li><!-- end li dropdown -->
                    </ul>
                    <ul class="nav navbar-nav">
                        <!-- Home -->
                        <li class="dropdown">
                            <a href="{{ route('members.my-account') }}">{{ Auth::user()->name }}</a>
                            <ul role="menu" class="dropdown-menu">
                                <li><a href="">cart</a></li>
                                <li>
                                    <a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </ul>
                        </li>
                    </ul>
                @endif

            </div>
        </div>
    </div>
</div>

<!-- start navbar -->
<div class="navbar yamm navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" data-toggle="collapse" data-target="#navbar-collapse-3" class="navbar-toggle">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="{{ url('homepage') }}" class="navbar-brand visible-xs">
                <img width="160" src="{{ asset('frontend/img/PETVILEGE_Logo.png') }}" alt=""/>
            </a>
        </div>
        <div id="navbar-collapse-3" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <!-- Home -->
                <li><a href="index.html"><div class="icon-menu-middle"><img src = "{{ asset('frontend/img/categoryicon/01-vet.png') }}"></div><div class = "text-menu-middle">รักษาสัตว์</div></a></li>
                <li><a href="index.html"><div class="icon-menu-middle"><img src = "{{ asset('frontend/img/categoryicon/02-grooming.png') }}"></div><div class = "text-menu-middle">กรูมมิ่ง</a></li>
                <li><a href="index.html"><div class="icon-menu-middle"><img src = "{{ asset('frontend/img/categoryicon/03-petHotel.png') }}"></div><div class = "text-menu-middle">รักฝากสัตว์</a></li>
                <li><a href="index.html"><div class="icon-menu-middle"><img src = "{{ asset('frontend/img/categoryicon/04-activities.png') }}"></div><div class = "text-menu-middle">กิจกรรมสัตว์</a></li>
                <li><a href="index.html"><div class="icon-menu-middle"><img src = "{{ asset('frontend/img/categoryicon/05-product.png') }}"></div><div class = "text-menu-middle">สินค้า</a></li>
                <li><a href="index.html"><div class="icon-menu-middle"><img src = "{{ asset('frontend/img/categoryicon/06-services.png') }}"></div><div class = "text-menu-middle">บริการอื่นๆ</a></li>
                <li><a href="index.html"><div class="icon-menu-middle"><img src = "{{ asset('frontend/img/categoryicon/07-farm.png') }}"></div><div class = "text-menu-middle">ฟาร์ม</a></li>
                <li><a href="index.html"><div class="icon-menu-middle"><img src = "{{ asset('frontend/img/categoryicon/08-lifestyle.png') }}"></div><div class = "text-menu-middle">ไลฟ์สไตล์</a></li>


            </ul><!-- end navbar-nav -->

        </div><!-- end navbar collapse -->
    </div><!-- end container -->
</div><!-- end navbar -->

@yield('content')


<!-- start footer -->
@include('home.footer')
<!-- end footer -->


<!-- Modal -->
@include('home.includes.modal')


<!-- JavaScript Files -->
<script type="text/javascript" src="{{ asset('frontend/js/jquery-3.1.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/jquery.downCount.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/nouislider.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/jquery.sticky.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/pace.min.js') }}"></script>
<script type="text/javascript" src={{ asset('frontend/js/star-rating.min.js') }}""></script>
<script type="text/javascript" src="{{ asset('frontend/js/wow.min.js') }}"></script>
{{-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script> --}}
<script type="text/javascript" src="{{ asset('frontend/js/gmaps.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/swiper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/main.js') }}"></script>


<!-- Initialize Swiper slide -->
<script>
    var swiperH = new Swiper('.swiper-coverflow', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        paginationClickable: true,
        effect: 'coverflow',
        centeredSlides: true,
        slidesPerView: 'auto',
        loop: true,
        coverflow: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true
        }
    });
</script>
@yield('js')
</body>
</html>