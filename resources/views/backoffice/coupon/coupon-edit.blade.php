@extends('layouts.partner.template-partner')
@section('content')
<div class="wrapper">
    <div class="container-fluid">

    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="btn-group pull-right">
                                    <ol class="breadcrumb hide-phone p-0 m-0">
                                      
                                        <li class="breadcrumb-item active">แก้ไขคูปอง</li>
                                    </ol>
                                </div>
                            <h4 class="page-title">สร้างคูปองของคุณ</h4>
                            @if(Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                    {{ Session::get('success') }}
                            </div>
                            @endif
        
                            </div>
                        </div>
    </div>
                    <!-- end page title end breadcrumb -->

    <div class="row">
                <div class="col-12">
                    <div class="card-box">
                   
                        <div class="row">
                            <div class="col-12">
                                <div class="p-20">
                                    <form class="form-horizontal" role="form" method="POST" action="{{ url('partner/coupon/update/'.$coupon->id) }}">
                                        @csrf
                                        {{ method_field('PATCH') }} 
                                        <input type = "hidden" name = "id" value ="{{ $coupon->id }}"/>
                                        <div class="form-group row{{ $errors->has('store_id') ? ' has-error' : '' }}">
                                            <label class="col-2 col-form-label">เลือกร้านค้า<span class="text-danger">*</span></label>
                                            <div class="col-md-6">
                                                <select class="form-control"  name = "store_id" value="{{ $coupon->store_id }}">
                                                    <option value="0">---เลือกร้านค้า---</option>
                                                        @foreach ($stores as $store)
                                                            <option value="{{ $store->id }}"
                                                                @if($store->id == $coupon->store_id)
                                                                selected
                                                            @endif
                                                                >{{ $store->store_name_th }}</option>
                                                        @endforeach
                                                   
                                                </select>
                                                @if ($errors->has('store_id'))
                                                    <span class="text-danger" role="alert">
                                                {{ $errors->first('store_id') }}
                                                    </span>
                                                @endif

                                            </div>
                                        </div>

                                        <div class="form-group row{{ $errors->has('store_id') ? ' has-error' : '' }}">
                                            <label class="col-2 col-form-label">เลือกประเภทคูปอง<span class="text-danger">*</span></label>
                                            <div class="col-md-6">
                                                <select class="form-control"  name = "category_id" value="{{ $coupon->category_id }}">
                                                    <option value="0">---เลือกประเภทคูปอง---</option>
                                                        @foreach ($categories as $cat)
                                                            <option value="{{ $cat->id }}"
                                                                @if($cat->id == $coupon->category_id)
                                                                selected
                                                                @endif
                                                                >{{ $cat->name }}</option>
                                                        @endforeach
                                                   
                                                </select>
                                                @if ($errors->has('category_id'))
                                                    <span class="text-danger" role="alert">
                                                {{ $errors->first('category_id') }}
                                                    </span>
                                                @endif

                                            </div>
                                        </div>

                                        <div class="form-group row{{ $errors->has('name') ? ' has-error' : '' }}">
                                            <label class="col-2 col-form-label">ชื่อคูปอง<span class="text-danger">*</span></label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control"  name = "name" value="{{ $coupon->name }}">
                                                @if ($errors->has('name'))
                                                    <span class="text-danger" role="alert">
                                                {{ $errors->first('name') }}
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">รายละเอียด</label>
                                            <div class="col-md-6">
                                                <textarea rows="5" cols="6" class="form-control"  name = "detail" >{{ $coupon->detail }}</textarea>
                                                
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-2 col-form-label" for="">รูปคูปอง</label>
                                            <div class="col-md-6">
                                                <input type="file" id="image" name="image" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">เงื่อนไขการใช้งาน <span class="text-danger">*</span></label>
                                            <div class="col-md-6">
                                                <textarea class="form-control" rows="5" id = "termsofuse" name = "termsofuse" >{{ $coupon->termsofuse }}</textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">วันที่เริ่มขาย <span class="text-danger">*</span></label>
                                            <div class="col-md-6">
                                                <input class="form-control" type="text" name="sale_date_start" value="{{ $coupon->sale_date_start }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">วันสิ้นสุดการขาย <span class="text-danger">*</span></label>
                                            <div class="col-md-6">
                                                <input class="form-control" type="text" name="sale_date_stop" value="{{ $coupon->sale_date_stop }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">วันหมดอายุ <span class="text-danger">*</span></label>
                                            <div class="col-md-6">
                                                <input class="form-control" type="text" name="expired_date" value="{{ $coupon->expired_date }}">
                                            </div>
                                        </div>
                                        
                                       

                                        <div class="form-group row">
                                            <label class="col-2 col-form-label"></label>
                                            <div class="col-md-10">
                                                <button type="submit" class="btn btn-primary mb-2">บันทึก</button>
                                            </div>
                                        </div>


                                    </form>
                                </div>
                            </div>

                        </div>
                        <!-- end row -->

                    </div> <!-- end card-box -->
                </div><!-- end col -->
            </div>
            <!-- end row -->
    </div>

</div>

@stop

