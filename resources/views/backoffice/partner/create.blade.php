@extends('layouts.partner.template-partner')
@section('content')
<div class="wrapper">
    <div class="container-fluid">
                <!-- Page-Title -->
                <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="btn-group pull-right">
                                    <ol class="breadcrumb hide-phone p-0 m-0">
                                      
                                        <li class="breadcrumb-item active">ร้านค้า</li>
                                    </ol>
                                </div>
                            <h4 class="page-title">สร้างร้านค้าของคุณ</h4>
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
                                    <form class="form-horizontal" role="form" method="POST" action="{{ route('partner.save-store') }}">
                                        @csrf
                                        <div class="form-group row{{ $errors->has('category_id') ? ' has-error' : '' }}" method="POST" action="{{ route('partner-store') }}">
                                            <label class="col-2 col-form-label">หมวดหมู่ร้านค้า<span class="text-danger">*</span></label>
                                            <div class="col-md-6">
                                                <select class="form-control"  name = "category_id" value="{{ old('category_id') }}">
                                                    <option value="0">---เลือกหมวดหมู่---</option>
                                                    <option value="1">รักษาสัตว์</option>
                                                    <option value="2">กรูมมิ่ง</option>
                                                    <option value="3">รักฝากสัตว์</option>
                                                    <option value="4">กิจกรรมสัตว์</option>
                                                    <option value="5">สินค้้า</option>
                                                    <option value="6">บริการอื่นๆ</option>
                                                    <option value="7">ฟาร์ม</option>
                                                    <option value="8">ไลฟ์สไตล์</option>
                                                </select>
                                                @if ($errors->has('category_id'))
                                                    <span class="text-danger" role="alert">
                                                {{ $errors->first('category_id') }}
                                                    </span>
                                                @endif

                                            </div>
                                        </div>

                                        <div class="form-group row{{ $errors->has('store_name_th') ? ' has-error' : '' }}">
                                            <label class="col-2 col-form-label">ชื่อร้านภาษาไทย<span class="text-danger">*</span></label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control"  name = "store_name_th" value="{{ old('store_name_th') }}">
                                                @if ($errors->has('store_name_th'))
                                                    <span class="text-danger" role="alert">
                                                {{ $errors->first('store_name_th') }}
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row{{ $errors->has('store_name_en') ? ' has-error' : '' }}">
                                            <label class="col-2 col-form-label">ชื่อร้านภาษาอังกฤษ<span class="text-danger">*</span></label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control"  name = "store_name_en" value="{{ old('store_name_en') }}">
                                                @if ($errors->has('store_name_en'))
                                                    <span class="text-danger" role="alert">
                                                {{ $errors->first('store_name_en') }}
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-2 col-form-label" for="">เอกสารเกี่ยวกับร้านค้า</label>
                                            <div class="col-md-6">
                                                <input type="file" id="doc_file" name="doc_file" class="form-control" placeholder="" value="{{ old('doc_file') }}">
                                            </div>
                                        </div>

                                        <div class="form-group row{{ $errors->has('address') ? ' has-error' : '' }}">
                                            <label class="col-2 col-form-label">ที่อยู่ร้านค้า <span class="text-danger">*</span></label>
                                            <div class="col-md-6">
                                                <textarea class="form-control" rows="5" id = "address" name = "address" value="{{ old('address') }}"></textarea>
                                                @if ($errors->has('address'))
                                                    <span class="text-danger" role="alert">
                                                {{ $errors->first('address') }}
                                                    </span>
                                                @endif
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-2 col-form-label">พิกัดร้านค้า</label>
                                            <div class="col-md-6">
                                                <input class="form-control" type="text" name="coordinates">
                                            </div>
                                        </div>

                                        <div class="form-group row{{ $errors->has('tel') ? ' has-error' : '' }}">
                                            <label class="col-2 col-form-label">เบอร์โทรร้านค้า <span class="text-danger">*</span></label>
                                            <div class="col-md-6">
                                                <input class="form-control" type="tel" name="tel" value="{{ old('tel') }}">
                                                @if ($errors->has('tel'))
                                                    <span class="text-danger" role="alert">
                                                {{ $errors->first('tel') }}
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label" for="">รูปภาพร้านค้า</label>
                                            <div class="col-6">
                                                <input type="file" id="image_store" name="image_store" class="form-control" placeholder="" value="{{ old('image_store') }}">
                                            </div>
                                        </div>



                                        <div class="form-group row">
                                            <label class="col-2 col-form-label"></label>
                                            <div class="col-md-10">
                                                <button type="submit" class="btn btn-primary mb-2">สร้างร้านค้าใหม่</button>
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

