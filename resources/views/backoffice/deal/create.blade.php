@extends('layouts.partner.template-partner')
@section('content')
<div class="wrapper">
    <div class="container-fluid">
        @if(Auth::user()->status == 0)
                <!-- Page-Title -->
                <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="btn-group pull-right">
                                    <ol class="breadcrumb hide-phone p-0 m-0">
                                      
                                        <li class="breadcrumb-item active">Deal</li>
                                    </ol>
                                </div>
                                <div class="card m-b-20 text-white bg-danger text-xs-center">
                                
                                        <div class="card-body">
                                            <h4 class="card-title">คุณไม่สามารถสร้างดีลได้ กรุณา ยืนยันบัญชี ก่อนนะคะ</h4>
                                            
                                        <a href="{{ route('partner.account') }}" class="btn btn-info">ยืนยันบัญชี</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title end breadcrumb -->
           

            @else
    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="btn-group pull-right">
                                    <ol class="breadcrumb hide-phone p-0 m-0">
                                      
                                        <li class="breadcrumb-item active">Deal</li>
                                    </ol>
                                </div>
                            <h4 class="page-title">สร้างดีลของคุณ</h4>
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
                                    <form class="form-horizontal" role="form" method="POST" action="{{ route('partner.save-deal') }}">
                                        @csrf
                                        <div class="form-group row{{ $errors->has('store_id') ? ' has-error' : '' }}">
                                            <label class="col-2 col-form-label">เลือกร้านค้า<span class="text-danger">*</span></label>
                                            <div class="col-md-6">
                                                <select class="form-control"  name = "store_id" value="{{ old('store_id') }}">
                                                    <option value="0">---เลือกร้านค้า---</option>
                                                        @foreach ($stores as $store)
                                                            <option value="{{ $store->id }}">{{ $store->store_name_th }}</option>
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
                                            <label class="col-2 col-form-label">เลือกประเภทดีล<span class="text-danger">*</span></label>
                                            <div class="col-md-6">
                                                <select class="form-control"  name = "category_id" value="{{ old('category_id') }}">
                                                    <option value="0">---เลือกประเภทดีล---</option>
                                                        @foreach ($categories as $cat)
                                                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
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
                                            <label class="col-2 col-form-label">ชื่อดีล<span class="text-danger">*</span></label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control"  name = "name" value="{{ old('name') }}">
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
                                                <textarea rows="5" cols="6" class="form-control"  name = "detail" value="{{ old('detail') }}"></textarea>
                                                
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-2 col-form-label" for="">รูปดีล</label>
                                            <div class="col-md-6">
                                                <input type="file" id="image" name="image" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">เงื่อนไขการใช้งาน <span class="text-danger">*</span></label>
                                            <div class="col-md-6">
                                                <textarea class="form-control" rows="5" id = "termsofuse" name = "termsofuse" value="{{ old('termsofuse') }}"></textarea>
                                            </div>
                                        </div>



                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">จำนวนครั้งในการใช้งาน <span class="text-danger">*</span></label>
                                            <div class="col-md-6">
                                                <input class="form-control" type="text" name="countuse" value="{{ old('countuse') }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">วันที่เริ่มขาย <span class="text-danger">*</span></label>
                                            <div class="col-md-6">
                                                <input class="form-control" type="text" name="sale_date_start" value="{{ old('sale_date_start') }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">วันสิ้นสุดการขาย <span class="text-danger">*</span></label>
                                            <div class="col-md-6">
                                                <input class="form-control" type="text" name="sale_date_stop" value="{{ old('sale_date_stop') }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">วันหมดอายุ <span class="text-danger">*</span></label>
                                            <div class="col-md-6">
                                                <input class="form-control" type="text" name="expired_date" value="{{ old('expired_date') }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">จำนวนดีลที่เปิดขาย <span class="text-danger">*</span></label>
                                            <div class="col-md-6">
                                                <input class="form-control" type="text" name="count_deal_sale" value="{{ old('count_deal_sale') }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">จำนวนดีลคงเหลือ</label>
                                            <div class="col-md-6">
                                                <input class="form-control" type="text" name="deal_balance" value="{{ old('deal_balance') }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">ราคาปกติ <span class="text-danger">*</span></label>
                                            <div class="col-md-6">
                                                <input class="form-control" type="text" name="normal_price" value="{{ old('normal_price') }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">ราคาพิเศษ <span class="text-danger">*</span></label>
                                            <div class="col-md-6">
                                                <input class="form-control" type="text" name="special_price" value="{{ old('special_price') }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">ของแถม</label>
                                            <div class="col-md-6">
                                                <input class="form-control" type="text" name="freegift" value="{{ old('freegift') }}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-2 col-form-label"></label>
                                            <div class="col-md-10">
                                                <button type="submit" class="btn btn-primary mb-2">สร้างดีลใหม่</button>
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

    @endif
</div>

@stop

