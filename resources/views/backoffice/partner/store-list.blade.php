@extends('layouts.partner.template-partner')
@section('content')
<div class="wrapper">
    <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                   
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card-box">
                    <h4 class="text-dark  header-title m-t-0">ร้านค้าของคุณ</h4>
                    <p class="text-muted m-b-25 font-13">
                        แสดงร้านค้าทั้งหมดที่คุณมี
                    </p>

                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                            <tr>
                                <th>ลำดับ</th>
                                <th>ชื่อร้าน</th>
                                <th>วันที่สร้าง</th>
                                <th>สถานะร้านค้า</th>
                                <th>จัดการ</th>
                               
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Minton Admin v1</td>
                                <td>01/01/2017</td>
                                <td><span class="badge badge-info">Released</span></td>
                                <td>จัดการร้านค้า</td>
                                
                               
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Minton Frontend v1</td>
                                <td>01/01/2017</td>
                                <td><span class="badge badge-success">Released</span></td>
                                <td>จัดการร้านค้า</td>
                               
                               
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Minton Admin v1.1</td>
                                <td>01/05/2017</td>
                                <td><span class="badge badge-pink">Pending</span></td>
                                <td>จัดการร้านค้า</td>
                                
                                
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Minton Frontend v1.1</td>
                                <td>01/01/2017</td>
                                <td><span class="badge badge-purple">Work in Progress</span>
                                <td>จัดการร้านค้า</td>
                               
                                </td>
                                
                            </tr>
                           

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end col -8 -->

        </div>
        <!-- end row -->

    </div> <!-- end container -->
</div>
@stop
