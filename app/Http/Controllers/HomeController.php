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
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    //admin
    public function index()
    {


        if (Auth::user()->role_id == 1) { // 1 = admin
            return view('backoffice.index');

        } elseif (Auth::user()->role_id == 2) {  // 2 = member
            return view('home.index');

        } elseif (Auth::user()->role_id == 3) { // 3 = partner
            return view('backoffice.partner');

        }

    }


}
