<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    //admin
    public function index()
    {
        return view('backoffice.index');
    }

    public function partner(){
        return view('home.partner.landing-page');
    }

    //เลือกประเภทบัญชี
    public function partnerselect(){
        return view('home.partner.select');
    }


    public function member(){
        return view('home.index');
    }


}
