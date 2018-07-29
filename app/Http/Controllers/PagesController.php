<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PartnerRequest;
use App\Models\Profile;
use Auth;
use Hash;
use App\User;
class PagesController extends Controller
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


     //สำหรับ partner 
     public function partnerCreate(){
        return view('home.partner.create');
    }

    public function partnerStore(PartnerRequest $request)
    {
        $partner = new User();
        $partner->name = NULL;
        $partner->username = Null;
        $partner->role_id = 3; //partner
        $partner->email = $request->email;
        $partner->password = Hash::make($request->password);
        $partner->save();

        $user = User::get()->last();

        $profile = new Profile();
        $profile->user_id = $user->id;
        $profile->firstname = $request->firstname;
        $profile->lastname = $request->lastname;
        $profile->save();

        Auth::loginUsingId($user->id);


        return redirect()->route('homepage');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
