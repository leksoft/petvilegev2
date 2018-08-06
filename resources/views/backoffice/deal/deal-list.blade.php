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
                    <h4 class="text-dark  header-title m-t-0">ดีลของคุณ</h4>
                    <p class="text-muted m-b-25 font-13">
                        แสดงดีลทั้งหมดที่คุณมี
                    </p>

                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                            <tr>
                                <th>ลำดับ</th>
                                <th>ชื่อดีล</th>
                                <th>วันที่สร้าง</th>
                                <th>สถานะดีล</th>
                                <th>จัดการ</th>
                               
                            </tr>
                            </thead>
                            <tbody>
                                @if($deals->count() > 0)
                                @foreach ($deals as $d)
                                <tr>
                                        <td>{{ $d->id }}</td>
                                        <td>{{ $d->name }}</td>
                                        <td>{{ $d->created_at}}</td>
                                        <td>
                                            @if($d->status == 0)
                                                <span class="badge badge-info">ล้มเหลว</span>
                                            @elseif($d->status == 1)
                                                <span class="badge badge-success">ล้มเหลว</span>
                                            @elseif($d->status == 2)
                                                <span class="badge badge-warning">อยู่ในระหว่างดำเนินการ</span>
                                            @endif
                                            
                                        </td>
                                    <td><a href = "{{ route('partner.deal-edit',['id'=> $d->id]) }}"><i class = "fa fa-pencil-square-o"></i> แก้ไข</a>  <a href = ""><i class = "fa fa-trash-o"></i> ลบ</a></td>
                                        
                                       
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                        <td colspan="5">คุณยังไม่ได้สร้างดีลแรก</td>
                                      
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
