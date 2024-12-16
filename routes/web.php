<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Spatie\Honeypot\ProtectAgainstSpam;

Route::get('/', function () {
    $site_list = DB::table('clone_category')
        ->where('id', '!=', 7)
        ->limit(12)
        ->get();

    // Retrieve sites with ranking 1 to 3 (do not shuffle)
    $fixed_sites = DB::table('clone_url')
        ->whereBetween('ranking', [1, 3])
        ->orderBy('ranking')
        ->get();

    // Retrieve sites with ranking 4 and above
    $shuffle_sites = DB::table('clone_url')
        ->where('ranking', '>=', 4)
        ->orderBy('ranking')
        ->get()
        // ->shuffle()
        // ->take(7)
        ;

    // Shuffle the sites with ranking 4 and above
    $shuffled = $shuffle_sites->shuffle();

    // Merge the fixed sites and shuffled sites
    $sites = $fixed_sites->merge($shuffled);

    return view('index', compact('site_list', 'sites'));
});

Route::get('/category', function (Request $request) {
    $id = $request->input('id');
    $site_list = DB::table('clone_category')
    ->where('id','!=',7)
    ->limit(12)->get();
    $sites = DB::table('clone_url')
    ->where('site_category_id','=',$id)
    ->orderBy('ranking')
    ->get();
    return view('card', compact('site_list', 'sites'));
})->name('category');
Route::get('looking', function(Request $request){
    $search = $request->input('s');
    $site_list = DB::table('clone_category')
    ->where('id','!=',7)
    ->limit(12)->get();
    $sites = DB::table('clone_url')
    ->where('name','like',"%{$search}%")
    ->orderBy('ranking')
    ->get();
    return view('card', compact('site_list', 'sites'));
});

Route::get('inquiry', function(){
    $site_list = DB::table('clone_category')
    ->where('id','!=',7)
    ->limit(12)->get();
    return view('inquiry', compact('site_list'));
});

Route::post('sent', function(Request $request){
    $name = $request->input('name');
    $type = $request->input('type');
    $tel  = $request->input('tel');
    $telegram = $request->input('telegram');
    $message = $request->input('message');
    $logo = $request->input('logo');

    DB::table('cms_notifications')->insert([
        'nickname' => $name,
        'subject' => $type,
        'telegram_id' => $telegram,
        'phone_number' => $tel,
        'content' => $message,
        'logourl' => $logo,

    ]);
    return Redirect::back()->with('success', '성공적으로 보냈습니다 우리는 가능한 한 빨리 응답할 것입니다');
})->middleware(ProtectAgainstSpam::class);

Route::get('search', function(Request $request) {
    $query = $request->query('q', '');
    $sites = DB::table('clone_url')
                ->where('name', 'like', "%{$query}%")
                ->limit(6)
                ->get();
    return response()->json($sites);
});
