<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//    Route::any('login', 'LoginController@login');
//    Route::any('check', 'LoginController@check');
Route::group(['middleware'=>['web']],function (){
    //登陆
    Route::any('login', 'LoginController@login');
    Route::any('loginout', 'LoginoutController@loginout');
    Route::any('check', 'LoginController@check');
    //经营单位
    Route::any('jydwmain', 'JydwController@main');
    Route::any('logo', 'JydwController@logo');
    Route::any('jydw', 'JydwController@show');
    Route::any('jydwsearchall', 'JydwController@searchall');
    Route::any('jinfo', 'JydwController@info');
    Route::any('refer', 'JydwController@refer');
    Route::any('consearch', 'JydwController@consearch');
    Route::any('detail/{order}','JydwController@detail');
    Route::any('rejected','JydwController@rejected');
    Route::any('rejectedetails/{order}','JydwController@rejectedetails');
    Route::any('alterject','JydwController@alterject');
    Route::any('downloadfile/{filename}/{name}','JydwController@downloadfile');
    //经营单位经理室
    Route::any('jydwjlsmain','JydwjlsController@main');
    Route::any('jydwjlssearchx','JydwjlsController@searchx');
    Route::any('jydwjlssearchy','JydwjlsController@searchy');
    Route::any('jydwjlsdetailx/{order}','JydwjlsController@detailx');
    Route::any('jydwjlsdetaily/{order}','JydwjlsController@detaily');
    Route::any('jydwjlsconsearch','JydwjlsController@consearch');
    Route::any('jydwjlsconsearched','JydwjlsController@consearched');
    Route::any('jydwjlspass','JydwjlsController@pass');
    Route::any('jydwjlsrejected','JydwjlsController@rejected');
    Route::any('jydwjlsrejectedetails/{order}','JydwjlsController@rejectedtails');
    Route::any('jydwjlsalterrejected','JydwjlsController@alterrejected');
    //销售部综合岗
    Route::any('xsbmain','XsbController@main');
    Route::any('xsbsearchx','XsbController@searchx');
    Route::any('xsbsearchy','XsbController@searchy');
    Route::any('xsbconsearch','XsbController@consearch');
    Route::any('xsbconsearched','XsbController@consearched');
    Route::any('xsbdetailx/{order}','XsbController@detailx');
    Route::any('xsbdetaily/{order}','XsbController@detaily');
    Route::any('xsbpass','XsbController@pass');
    Route::any('xsbrejected','XsbController@rejected');
    Route::any('xsbrejectedetails/{order}','XsbController@rejectedtails');
    Route::any('xsbalterrejected','XsbController@alterrejected');
    //车险部经理
    Route::any('cxbjlmain','CxbjlController@main');
    Route::any('cxbjlsearchx','CxbjlController@searchx');
    Route::any('cxbjlsearchy','CxbjlController@searchy');
    Route::any('cxbjlconsearch','CxbjlController@consearch');
    Route::any('cxbjlconsearched','CxbjlController@consearched');
    Route::any('cxbjldetailx/{order}','CxbjlController@detailx');
    Route::any('cxbjldetaily/{order}','CxbjlController@detaily');
    Route::any('cxbjlpass','CxbjlController@pass');
    Route::any('cxbjlrejected','CxbjlController@rejected');
    Route::any('cxbjlrejectedetails/{order}','CxbjlController@rejectedtails');
    Route::any('cxbjlalterrejected','CxbjlController@alterrejected');

    //财务中心主任
    Route::any('cwzxzrmain','CwzxzrController@main');
    Route::any('cwzxzrsearchx','CwzxzrController@searchx');
    Route::any('cwzxzrdetailx/{order}','CwzxzrController@detailx');
    Route::any('cwzxzrsearchy','CwzxzrController@searchy');
    Route::any('cwzxzrdetaily/{order}','CwzxzrController@detaily');
    Route::any('cwzxzrrejected','CwzxzrController@rejected');
    Route::any('cwzxzrrejectedetails/{order}','CwzxzrController@rejectedtails');
    Route::any('cwzxzrconsearch','CwzxzrController@consearch');
    Route::any('cwzxzrconsearched','CwzxzrController@consearched');
    Route::any('cwzxzrpass','CwzxzrController@pass');
    Route::any('cwzxzralterrejected','CwzxzrController@alterrejected');



    //分管副总经理
    Route::any('fgfzjlmain','FgfzjlController@main');
    Route::any('fgfzjlsearchx','FgfzjlController@searchx');
    Route::any('fgfzjldetailx/{order}','FgfzjlController@detailx');
    Route::any('fgfzjlsearchy','FgfzjlController@searchy');
    Route::any('fgfzjldetaily/{order}','FgfzjlController@detaily');
    Route::any('fgfzjlrejected','FgfzjlController@rejected');
    Route::any('fgfzjlrejectedetails/{order}','FgfzjlController@rejectedtails');
    Route::any('fgfzjlconsearch','FgfzjlController@consearch');
    Route::any('fgfzjlconsearched','FgfzjlController@consearched');
    Route::any('fgfzjlpass','FgfzjlController@pass');
    Route::any('fgfzjlalterrejected','FgfzjlController@alterrejected');
    //总经理
    Route::any('zjlmain','ZjlController@main');
    Route::any('zjlsearchx','ZjlController@searchx');
    Route::any('zjlsearchy','ZjlController@searchy');
    Route::any('zjlconsearch','ZjlController@consearch');
    Route::any('zjldetailx/{order}','ZjlController@detailx');
    Route::any('zjlconsearched','ZjlController@consearched');
    Route::any('zjldetaily/{order}','ZjlController@detaily');
    Route::any('zjlpass','ZjlController@pass');
});