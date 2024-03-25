<?php

use App\Models\User;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Home');
});
Route::get('/users', function () {
    // return Inertia::render('Users',[
    //     'users' => User::all()->map(fn($user)=>[
    //           'name'=>$user->name,
    //           'id'=>$user->id
    //     ])
    // ]);
//    return Inertia::render('Users',[
//         'users' => User::paginate(10)->through(fn($user)=>[
//                       'name'=>$user->name,
//                       'id'=>$user->id
//                 ])
        
//     ]);
   return Inertia::render('Users/Index',[
        'users' => User::query()
                        ->when(Request::input('search'),function($query, $search){
                             $query->where('name','like',"%{$search}%");
                        })
                        ->paginate(10)
                        ->withQueryString()
                        ->through(fn($user)=>[
                            'name'=>$user->name,
                            'id'=>$user->id
                        ]),
       'filters'=>Request::only(['search'])                 
        
    ]);
});
Route::get('/users/create', function () {
    return Inertia::render('Users/Create');
});
Route::get('/settings', function () {
    return Inertia::render('Settings');
});
Route::post('/logout', function () {
    dd(request('info'));
});
