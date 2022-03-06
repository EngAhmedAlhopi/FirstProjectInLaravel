<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/second','App\Http\Controllers\MyController@action');


Route::view('about-me','about',[
    'name' => 'Ahmed',
    'age' => 22,
    'major' => 'Engineer'
]);


Route::get('data/{ids}/{mjo}',function($id,$major){

    $arr = [
        '1' => 'Ahmed',
        '2' => 'Ali',
        '3' => 'Anas'
    ];

    $arr2 = [
        'Ahmed' => 'Engineer',
        'Ali' => 'IT',
        'Anas' => 'Stauf'
    ];

    return view('data',[
        'dataId' => $arr[$id] ?? "The number entered is not correct.",
        'dataMajor' => $arr2[$major] ?? 'The name send is not found.'
    ]);




});

Route::get('/newpage',function(){
    return view('newView');
});
