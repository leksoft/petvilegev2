<div class="sidebar-inner slimscrollleft">
    <!--- Divider -->
    <div id="sidebar-menu">
        <ul>
            <li class="menu-title">Main</li>

            <li>
                <a href="index.html" class="waves-effect waves-primary"><i
                            class="ti-home"></i><span> Dashboard </span></a>
            </li>
            @if(Auth::user()->role_id == 2)
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect waves-primary"><i class="ti-user"></i> <span> Member </span>
                        <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="url.html">ข้อมูลสมาชิก</a></li>
                        <li><a href="url.html">ข้อมูลสัตว์เลี้ยง</a></li>
                        <li><a href="url.html">ประวัติการซื้อเหรียญ</a></li>
                        <li><a href="url.html">ประวัติการใช้คูปอง</a></li>
                        <li><a href="url.html">ประวัติเช็คอินร้านค้า</a></li>
                        <li><a href="url.html">ประวัติการแลกแต้ม</a></li>
                        <li><a href="url.html">ตะกร้าสินค้า</a></li>
                        <li><a href="url.html">รายการโปรด</a></li>
                    </ul>
                </li>
            @endif

            @if(Auth::user()->role_id == 3)
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect waves-primary"><i
                                class="ti-light-bulb"></i><span> Partner/Store </span> <span class="menu-arrow"></span>
                    </a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('partner.new-store') }}">สร้างร้านค้าใหม่</a></li>
                        <li><a href="url.html">ข้อมูลเจ้าของร้านค้า</a></li>
                        <li><a href="">ข้อมูลรายละเอียดร้านค้า</a></li>
                        <li><a href="url.html">ข้อมูลดีล</a></li>
                        <li><a href="url.html">ข้อมูลคูปอง</a></li>
                        <li><a href="url.html">Income</a></li>
                        <li><a href="url.html">Withdraw</a></li>
                        <li><a href="url.html">Credit</a></li>
                        <li><a href="url.html">รายงานการขาย</a></li>
                        <li><a href="url.html">รายละเอียดคำสั่งซื้อ</a></li>
                        <li><a href="url.html">รีวิวร้านค้า</a></li>
                        <li><a href="url.html">ประวัติลูกค้า</a></li>
                        <li><a href="url.html">ประวัติการใช้ดีล</a></li>
                        <li><a href="url.html">ประวัติการใช้คูปอง</a></li>
                        <li><a href="url.html">ยอดขายดีล</a></li>
                        <li><a href="url.html">ยอดดาวน์โหลดคูปอง</a></li>
                    </ul>
                </li>
            @endif

            @if(Auth::user()->role_id == 1)
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect waves-primary"><i
                                class="ti-gift"></i><span> Admin </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="url.html">รายการสินค้าแลกแต้ม</a></li>
                        <li><a href="url.html">ค่าคอมมิชชั่น</a></li>
                        <li><a href="url.html">การแนะนำร้านค้าใหม่</a></li>
                        <li><a href="url.html">การแนะนำเพื่อน</a></li>
                        <li><a href="url.html">รายละเอียดคำสั่งซื้อ</a></li>
                        <li><a href="url.html">ข้อมูลสมาชิก</a></li>
                        <li><a href="url.html">จำนวนร้านค้า</a></li>
                        <li><a href="url.html">ยอดขายดีล</a></li>
                        <li><a href="url.html">ยอดดาวน์โหลดคูปอง</a></li>
                        <li><a href="url.html">สถิติสมาชิกเช็คอินร้านค้า</a></li>

                    </ul>
                </li>


                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect waves-primary"><i
                                class="ti-map"></i><span> Maps </span><span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="url.html"> Google Map</a></li>
                        <li><a href="url.html"> Vector Map</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect waves-primary"><i
                                class="ti-email"></i><span> Mail </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="url.html">Inbox</a></li>
                        <li><a href="url.html">Compose Mail</a></li>
                        <li><a href="url.html">View Mail</a></li>
                    </ul>
                </li>

                <li class="menu-title">ตั้งค่าเว็บไซต์</li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect waves-primary"><i
                                class="ti-files"></i><span> Pages </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="url.html">จัดการแบนเนอร์</a></li>
                        <li><a href="url.html">Logo & Favicon</a></li>
                        <li><a href="url.html">Google Analitics</a></li>
                        <li><a href="url.html">Live Chat</a></li>
                        <li><a href="url.html">Manage Slider</a></li>
                        <li><a href="url.html">Manage Menu</a></li>
                        <li><a href="url.html">Aboute Page</a></li>
                        <li><a href="url.html">Manage Footer</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect waves-primary"><i
                                class="ti-settings"></i><span> ตั้งค่าระบบ </span> <span
                                class="badge badge-success pull-right">2</span></a>
                    <ul class="list-unstyled">
                        <li><a href="url.html">ประเภทสมาชิก</a></li>
                        <li><a href="url.html">ประเภทสัตว์เลี้ยง</a></li>

                    </ul>
                </li>
            @endif

        </ul>

        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
</div>