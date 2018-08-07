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
            
            <hr class="spacer-30">
            
            <div class="row text-center">
                <div class="col-sm-12">
                    <p class="text-sm">&COPY; Copyright 2018 Open 21 Co.,Ltd.</p>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </footer>