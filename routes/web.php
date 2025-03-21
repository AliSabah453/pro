<?php
use Illuminate\Support\Facades\Route;
use App\Models\User;
require base_path('routes/system.php');






Route::get('/', function () {
    // \DB::statement("CREATE DATABASE IF NOT EXISTS `dwdaw`");

//    dd( User::all('name'));
    // User::create([
    //     'name'=>1,
    //     'email'=>'dadwa@gmail.com',
    //     'password'=>1,

    // ]);
});


