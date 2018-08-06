<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DealRequest;
use App\Models\Deal;
use Session;
use Auth;
use App\User;
use App\Models\Store;
use App\Models\Category;
class DealsController extends Controller
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
        return view('backoffice.deal.create',compact('stores','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DealRequest $request)
    {
        $deal = new Deal();
        $deal->user_id = Auth::id();
        $deal->store_id = $request->store_id ; 
        $deal->category_id = $request->category_id;
        $deal->name = $request->name; 
        $deal->detail = $request->detail;
        $deal->termsofuse = $request->termsofuse;
        $deal->countuse = $request->countuse;
        $deal->sale_date_start = $request->sale_date_start;
        $deal->sale_date_stop = $request->sale_date_stop;
        $deal->expired_date  = $request->expired_date;
        $deal->count_deal_sale = $request->count_deal_sale;
        $deal->deal_balance = $request->deal_balance;
        $deal->normal_price = $request->normal_price;
        $deal->special_price = $request->special_price;
        $deal->freegift = $request->freegift;
        $deal->status = NULL;
        $deal->save();
        
        Session::flash('success','สร้างดีลสำเร็จ !!!');
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
        $deals = Deal::whereRaw('user_id = ? ',[Auth::id()])->get();
        return view('backoffice.deal.deal-list',compact('deals'));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
