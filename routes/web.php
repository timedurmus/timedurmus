<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    $links = App\Models\Link::all();
    return view('welcome', ['links'=>$links]);
});
Route::get('/submit', function (){
    return view('submit');
});
Route::post('/submit',function (Request $request){
    $data = $request->validate([
        'title' =>'required | max:255 | min:3',
        'description'=>'required | max:255',
        'url'=>'required | max:55',
        ]);
    $link = tap(new \App\Models\Link($data))->save();
    return redirect('/');
});

//-------------

Route::get('/', IndexController::class );



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
