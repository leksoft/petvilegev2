<!-- start section -->

{{-- <section class="info-background">
    <div class="container">
        <div class="box-banner-wide info-background">
            <div class="row">
                <div class="col-sm-12 text-center">
                   
                    <h5>กลับขึ้นด้านบน</h5>
              
                </div><!-- end col -->   
            </div><!-- end row -->
        </div><!-- end box-banner-wide -->
    </div><!-- end container -->
</section> --}}
<!-- end section -->
<footer class="footer light">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5 class="title">Petvilege</h5>
                    <ul class="list alt-list">
                        <li><a href="about.html"><i class="fa fa-angle-right"></i>เกี่ยวกับเรา</a></li>
                        <li><a href="url.html"><i class="fa fa-angle-right"></i>เงือนไขการให้บริการ</a></li>
                        <li><a href="url.html"><i class="fa fa-angle-right"></i>ความเป็นส่วนตัว</a></li>
                       
                    </ul>
                </div><!-- end col -->
                <div class="col-sm-3">
                    <h5 class="title">การบริการ</h5>
                    <ul class="list alt-list">
                        <li><a href="fag.html"><i class="fa fa-angle-right"></i>คำถามที่พบบ่อย</a></li>
                        <li><a href="url.html"><i class="fa fa-angle-right"></i>ศูนย์การช่วยเหลือ</a></li>
                        
                        @guest
                            <li><a href="{{ route('partners') }}"><i class="fa fa-angle-right"></i>ร่วมเป็นพาร์ทเนอร์</a></li>
                        @else
                            @if(Auth::user()->role_id == 3)
                            <li><a href="{{ route('partner.main') }}"><i class="fa fa-angle-right"></i>ร่วมเป็นพาร์ทเนอร์</a></li>
                            @endif
                        @endif
                    </ul>
                </div><!-- end col -->
                <div class="col-sm-3">
                    <h5 class="title">คอมมูนิตี้</h5>
                    <ul class="list alt-list">
                        <li><a href="url.html"><i class="fa fa-angle-right"></i>Facebook</a></li>
                        <li><a href="url.html"><i class="fa fa-angle-right"></i>กิจกรรมและข่าวสาร</a></li>
                        <li><a href="url.html"><i class="fa fa-angle-right"></i>สาระสัตว์เลี้ยง</a></li>
                    </ul>
                </div><!-- end col -->
                <div class="col-sm-3">
                    LOGO Petvilege
                </div><!-- end col -->
            </div><!-- end row -->
            
        </div><!-- end container -->
    </footer>