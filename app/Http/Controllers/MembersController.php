<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PartnerProfileRequest;
use App\User;
use App\Models\Profile;
use Session;
use Hash;
use Auth;
use File;
use Image;
class MembersController extends Controller
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

    public function myaccount(){
        return view('home.member.my-account');
    }

    public function editprofile($id){
        $user = User::with('profile')->findOrFail($id);
        
        return view('home.member.edit-profile',compact('user'));
    }

    public function updateprofile(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $user->username = $request->username;
        $user->name = $request->name;
        $user->email = $request->email;
        
        $user->save();
        
        $profiles = Profile::whereRaw('user_id = ?',[$id])->first();

        if (isset($profiles)) {
            $profiles->firstname = $request->firstname;
            $profiles->lastname = $request->lastname;
            $profiles->user_id = $id;
            $profiles->sex = $request->sex;
            $profiles->birthdate = $request->birthdate;
            $profiles->address = $request->address;
            $profiles->mailaddress = $request->mailaddress;
            $profiles->phone = $request->phone;
            $profiles->avatar = $request->avatar;
            $profiles->wallet = $request->wallet;
            $profiles->point = $request->point;
            $profiles->referral = $request->referral;

            //upload image
            if ($request->hasFile('avatar')) {
                //delete file            
                if ($profiles->avatar != NULL) {
                    File::delete(public_path('uploads/profiles/'.$profiles->avatar));
                    File::delete(public_path('uploads/profiles/resize/'.$profiles->picture));
                }
                
                $newfilename = str_random(10).'.'.
                $request->file('avatar')->getClientOriginalExtension();
                $request->file('avatar')->move(public_path().'/uploads/profiles/', $newfilename);
                //resize image
                Image::make(public_path('uploads/profiles/'.$newfilename))->resize(128,128)->save(public_path('uploads/profiles/resize/'.$newfilename));
                
                $profiles->avatar = $newfilename;
            }else{
                $profiles->avatar = $profiles->avatar; //ชื่อเดิม
            }


            $profiles->save();

        } else {
            $profiles = new Profile();
            $profiles->firstname = $request->firstname;
            $profiles->lastname = $request->lastname;
            $profiles->user_id = $id;
            $profiles->sex = $request->sex;
            $profiles->birthdate = $request->birthdate;
            $profiles->address = $request->address;
            $profiles->mailaddress = $request->mailaddress;
            $profiles->phone = $request->phone;
            $profiles->wallet = $request->wallet;
            $profiles->point = $request->point;
            $profiles->referral = $request->referral;

            $profiles->save();

        }



        Session::flash('success','แก้ไขข้อมูลส่วนตัวเรียบร้อยแล้ว');
        return redirect()->back();
    }

    public function updateprofilepartner(PartnerProfileRequest $request, $id)
    {
        $user = User::findOrFail($id);

        $user->username = $request->username;
        $user->name = $request->name;
        $user->email = $request->email;
        
        $user->save();
        
        $profiles = Profile::whereRaw('user_id = ?',[$id])->first();

        if (isset($profiles)) {
            $profiles->firstname = $request->firstname;
            $profiles->lastname = $request->lastname;
            $profiles->user_id = $id;
            $profiles->sex = $request->sex;
            $profiles->birthdate = $request->birthdate;
            $profiles->address = $request->address;
            $profiles->mailaddress = $request->mailaddress;
            $profiles->phone = $request->phone;
            $profiles->wallet = $request->wallet;
            $profiles->point = $request->point;
            $profiles->referral = $request->referral;

            //upload image
            if ($request->hasFile('avatar')) {
                //delete file            
                if ($profiles->avatar != NULL) {
                    File::delete(public_path('uploads/profiles/'.$profiles->avatar));
                    File::delete(public_path('uploads/profiles/resize/'.$profiles->picture));
                }
                
                $newfilename = str_random(10).'.'.
                $request->file('avatar')->getClientOriginalExtension();
                $request->file('avatar')->move(public_path().'/uploads/profiles/', $newfilename);
                //resize image
                Image::make(public_path('uploads/profiles/'.$newfilename))->resize(128,128)->save(public_path('uploads/profiles/resize/'.$newfilename));
                
                $profiles->avatar = $newfilename;
            }else{
                $profiles->avatar = $profiles->avatar; //ชื่อเดิม
            }


            $profiles->save();

        } else {
            $profiles = new Profile();
            $profiles->firstname = $request->firstname;
            $profiles->lastname = $request->lastname;
            $profiles->user_id = $id;
            $profiles->sex = $request->sex;
            $profiles->birthdate = $request->birthdate;
            $profiles->address = $request->address;
            $profiles->mailaddress = $request->mailaddress;
            $profiles->phone = $request->phone;
            $profiles->avatar = $request->avatar;
            $profiles->wallet = $request->wallet;
            $profiles->point = $request->point;
            $profiles->referral = $request->referral;

            $profiles->save();

        }



        Session::flash('success','แก้ไขข้อมูลส่วนตัวเรียบร้อยแล้ว');
        return redirect()->back();
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
        $add = new User();
        $add->name = $request->name;
        $add->username = Null;
        $add->role_id = 2;
        $add->email = $request->email;
        $add->password = Hash::make($request->password);
        $add->save();
 
        $user = User::orderBy('id','desc')->first();
 
        $profile = new Profile();
        $porfile->user_id = $user->id;
        $profile->save();

        Auth::loginUsingId($user->id);


        return redirect()->route('homepage');
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
