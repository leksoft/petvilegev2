<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PartnerRequest;
use App\Http\Requests\companyRequest;
use App\Models\Profile;
use Auth;
use Hash;
use App\User;
class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


     //สำหรับ partner  บุคคลธรรมดา
    public function partnerCreate(){
        return view('home.partner.create');
    }

    //สำหรับ partner  บุคคลธรรมดา
    public function partnerCreateCompany(){
        return view('home.partner.company');
    }

    public function partnerStore(PartnerRequest $request)
    {
        $partner = new User();
        $partner->account_type = 1; //บุคคล
        $partner->corporation_name = NULL;
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


        return redirect()->route('partner.main');
    }


    public function companyStore(CompanyRequest $request)
    {
        $partner = new User();
        $partner->account_type = 2; //นิติบุคคล
        $partner->corporation_name = $request->corporation_name;
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


        return redirect()->route('partner.main');
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
