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
                                @if($stores->count() > 0)
                                @foreach ($stores as $store)
                                <tr>
                                        <td>{{ $store->id }}</td>
                                        <td>{{ $store->store_name_th }}</td>
                                        <td>{{ $store->created_at}}</td>
                                        <td>
                                            @if($store->status == 0)
                                                <span class="badge badge-info">ล้มเหลว</span>
                                            @elseif($store->status == 1)
                                                <span class="badge badge-success">ล้มเหลว</span>
                                            @elseif($store->status == 2)
                                                <span class="badge badge-warning">อยู่ในระหว่างดำเนินการ</span>
                                            @endif
                                            
                                        </td>
                                        <td><a href = "">จัดการร้านค้า</a></td>
                                        
                                       
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                        <td colspan="5">คุณยังไม่ได้สร้างร้านค้าแรก</td>
                                      
                                    </tr>
                                @endif
                            
                            
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
