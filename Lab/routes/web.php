<?php
use App\Http\controllers\NHTAccountController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/user',function(Request $request){
    return $request->path();
});

Route::get('/NHT-login',[LoginController::class,'index'])->name('login.index');
Route::post('/NHT-login',[LoginController::class,'submit'])->name('login.submit');
route::get('/NHT-login',function(){
    return view('NHT-login');
});

route::get('/NHT-register',function(){
    return view('NHT-register');
});

route::get('/NHT-forgot-password',function(){
    return view('NHT-forgot-password');
});
route::get('/NHT-home',function(){
    return view('NHT-home');
});
<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});
route::get('/greeting', function (){
    return 'Hello, World!';
});
route::redirect('/here','/there');
route::get('/there', function(){
    return 'redirect to here';
});
#route view
route::get('/NHT', function(){
    return view('NHT');
});
#route view with parameter
route::get('/Nguyentra/{id}', function($id){
    return  "Nguyentra".$id;
});

#optional parameter 
route::get('/Ntra/{name?}', function($name= "Nguyen Tra"){
    return 'xin chao'.$name;
});

route::get('/NHT-account',[NHTAccountController::class,'index'])->name('NHTAccount.index');
route::get ('/NHT-account-create',[NHTAccountController::class, 'create'])->name('NHTAccount.create');
route::get ('/NHT-account-showdata',[NHTAccountController::class, 'showdata'])->name('NHTAccount.NHT-account-showdata');

route::get('/NHT-view', function (){
    return view('NHT-view',['name'=>'Nguyen Tra']);
});

route::get('/NHT-view2', function (){
    return view('NHT-view2',['name'=>'Nguyen Tra', 'array'=>[1,2,3,4,5,6,7,8,9,10]]);
});

route::get('/NHT-view3', function (){
    return view('NHT-view3',['name'=>'Nguyen Tra',
    'array'=>[1,2,3,4,5,6,7,8,9,10]]);
});

