<?php

use App\Http\Controllers\TestController;
use App\Models\User;
use Illuminate\Support\Facades\DB;
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
    // fetch all users
    //$users = User::all();
    //$users = DB::select('select * from users');
    // $users = DB::table('users')
    // ->where('name', "fatema")
    // ->where("id", 1)
    // ->first();
    
    //create new user
    // $user = DB::insert('insert into users (name,email,password) values (?,?,?)', [
    //     "mim",
    //     "mim@gmail.com",
    //     "123",
    // ]);

    //$user = User::where("id", 2)->first();
    $user = User::find(3);
    $user->update([
       "email" => "lamiiya@gmail.com"
    ]);
    dd($user);

    //return view('welcome');
});

Route::get('about', [TestController::class, "getAbout"])->name('about');
