<?php


Route::get('/', function () {
    return view('auth.login');
});

Route::get('last',function(){
    $user = App\User::orderBy('id','desc')->first();

    dd($user->id);
});

/**
 * Member
 */

//Register  Member 
Route::post('member-create',[
    'uses' => 'Auth\RegisterController@store',
    'as' => 'member-create'
]);


/**
 * End Member
 */


/**
 * 
 * Partner
 */

Route::get('/partner', 'HomeController@partner')->name('partner');
Route::get('/partner-select', 'HomeController@partnerselect')->name('partner-select');
//Register Partner
Route::get('partner-create',[
    'uses' => 'PagesController@partnerCreate',
    'as' => 'partner-create'
]);

//Save Partner
Route::post('partner-store',[
    'uses' => 'PagesController@partnerStore',
    'as' => 'partner-store'
]);

/**
 * End Partner
 */

Route::get('facebook/login', 'Auth\LoginController@redirectToProvider')->name('facebook.login');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');


Auth::routes();

Route::get('/homepage', 'HomeController@index')->name('homepage');
//Main
Route::get('/dashboards',[
        'uses' => 'HomeController@index',
        'as' => 'dashboards'
]);
Route::get('/home', 'HomeController@index')->name('home');

//Member , User  , Partner
Route::get('my-account',[
    'uses' => 'MembersController@myaccount',
    'as' => 'members.my-account'
]);
Route::get('edit-profile/{id}',[
    'uses' => 'MembersController@editprofile',
    'as' => 'members.edit-profile'
]);
//Update Profile
Route::patch('member/update/{id}','MembersController@updateprofile');


//Main
Route::get('/main', function () {
    return view('backoffice.index');
});



Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

});

Route::group(['prefix'=>'partner','middleware'=>'auth'],function(){

    Route::get('partner-main',[
        'uses' => 'PartnersController@index',
        'as' => 'partner.main'
    ]);

    Route::get('my-partner',[
        'uses' => 'PartnersController@index',
        'as' => 'partner.my-partner'
    ]);

    //สร้างร้านค้าใหม่
    Route::get('new-store-partner',[
        'uses' => 'StoresController@create',
        'as' => 'partner.new-store'
    ]);

    //บันทึกร้านค้า
    Route::post('save-store',[
        'uses' => 'StoresController@store',
        'as' => 'partner.save-store'
    ]);

    //รายละเอียดร้าน้า
    Route::get('store-detail/{id}',[
        'uses' => 'StoresController@show',
        'as' => 'partner.store-detail'
    ]);


});

Route::group(['prefix'=>'member','middleware'=>'auth'],function(){


});