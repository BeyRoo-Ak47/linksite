<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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
    $site_list = DB::table('site_category')->limit(12)->get();
    $site__bt_list = DB::table('site_category')
    ->skip(12) // Skip the first 12 rows
    ->take(10) // Limit the number of rows to fetch (e.g., 10 rows)
    ->get();
    $sites = DB::table('site_url')->get();
    return view('welcome', compact('site_list', 'sites', 'site__bt_list'));
});