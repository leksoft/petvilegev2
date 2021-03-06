<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CouponRequest;
use App\Models\Coupon;
use Session;
use Auth;
use App\User;
use App\Models\Store;
use App\Models\Category;
class CouponsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stores = Store::whereRaw('user_id',Auth::id())->get();
        $categories = Category::all();
        return view('backoffice.coupon.create',compact('stores','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CouponRequest $request)
    {
        $coupon = new Coupon();
        $coupon->user_id = Auth::id();
        $coupon->store_id = $request->store_id ; 
        $coupon->category_id = $request->category_id;
        $coupon->name = $request->name; 
        $coupon->detail = $request->detail;
        $coupon->termsofuse = $request->termsofuse;
        $coupon->sale_date_start = $request->sale_date_start;
        $coupon->sale_date_stop = $request->sale_date_stop;
        $coupon->expired_date  = $request->expired_date;
        $coupon->count_coupon_sale = $request->count_coupon_sale;
        $coupon->status = NULL;
        $coupon->save();
        
        Session::flash('success','สร้างคูปองสำเร็จ !!!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $coupons = Coupon::whereRaw('user_id = ? ',[Auth::id()])->get();
        return view('backoffice.coupon.coupon-list',compact('coupons'));
    }
    public function show($id){
        
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coupon = Coupon::findOrFail($id);
        $stores = Store::whereRaw('user_id',Auth::id())->get();
        $categories = Category::all();
        return view('backoffice.coupon.coupon-edit',compact('coupon','stores','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $coupon =  Coupon::findOrFail($id);
        $coupon->user_id = Auth::id();
        $coupon->store_id = $request->store_id ; 
        $coupon->category_id = $request->category_id;
        $coupon->name = $request->name; 
        $coupon->detail = $request->detail;
        $coupon->termsofuse = $request->termsofuse;
        $coupon->sale_date_start = $request->sale_date_start;
        $coupon->sale_date_stop = $request->sale_date_stop;
        $coupon->expired_date  = $request->expired_date;
        $coupon->count_coupon_sale = $request->count_coupon_sale;
        $coupon->status = NULL;
        $coupon->save();
        
        Session::flash('success','แก้ไขคูปองสำเร็จ !!!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coupon = Coupon::findOrFail($id);
        $coupon->delete();
       
        Session::flash('success','ลบรายการเรียบร้อยแล้ว');
        return redirect()->route('partner.coupon-list');

    }
}
