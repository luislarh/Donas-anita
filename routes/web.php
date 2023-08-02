<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



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

Auth::routes();

//Route::get('login/{driver}', 'Auth\LoginController@redirectToProvider');
//Route::get('login/{driver}/callback', 'Auth\LoginController@handleProviderCallback');
//Route::get('login/{driver}', [LoginController::class, 'redirectToProvider']);
//Route::get('login/{driver}/callback', [LoginController::class, 'handleProviderCallback']);

//para el log in con google
Route::get('/login-google', function () {
    return Socialite::driver('google')->redirect();
});
 
Route::get('/google-callback', function () {
    $user = Socialite::driver('google')->user();
    $userExists = User::where('external_id', $user->id)->where('external_auth','google')->first();

    if($userExists){
        Auth::login($userExists);
    }else{
       $userNew = User::create([
            'name' => $user->name,
            'email' => $user->email,
            'avatar' => $user->avatar,
            'external_id' => $user->id,
            'external_auth' => 'google',
        ]);
        Auth::login($userNew);
    }
    return redirect('/');
});

// para inicion con gitHub
Route::get('/auth/github/redirect', function () {
    return Socialite::driver('github')->redirect();
});
 
Route::get('/auth/github/callback', function () {
    $user = Socialite::driver('github')->user();
    $userExists = User::where('external_id', $user->id)->where('external_auth','github')->first();

    if($userExists){
        Auth::login($userExists);
    }else{
       $userNew = User::create([
            'name' => $user->nickname,
            'email' => $user->email,
            'avatar' => $user->avatar,
            'external_id' => $user->id,
            'external_auth' => 'github',
        ]);
        Auth::login($userNew);
    }
    return redirect('/');
 
    // $user->token
});

Route::group(['prefix'=>'admin', 'middleware' => 'auth'], function(){
    // rutas de administrador
    
    Route::resource('/configuracion', App\Http\Controllers\Admin\ConfiguracionController::class); 
    Route::resource('/categoria', App\Http\Controllers\Admin\CategoriaController::class); 
    Route::resource('/producto', App\Http\Controllers\Admin\ProductoController::class); 
    Route::resource('/post', App\Http\Controllers\Admin\PostController::class); 
    Route::resource('/carrucel', App\Http\Controllers\Admin\CarrucelController::class); 
    Route::resource('/empresa', App\Http\Controllers\Admin\EmpresaController::class); 
    /*
    

    Route::resource('/empresa', [App\Http\Controllers\EmpresaController::class]); 

    Route::resource('/carrucel', [App\Http\Controllers\CarrucelController::class]); 

    Route::resource('/suscriptores', [App\Http\Controllers\SuscriptoresController::class]); 
*/
});

// rutas publicas
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/', function () { return view('welcome');});

Route::get('/', [App\Http\Controllers\FrontController::class, 'index']);


Route::get('/empresa', [App\Http\Controllers\FrontController::class, 'empresa']);
Route::get('/donas', [App\Http\Controllers\FrontController::class, 'donas']);
Route::get('/donas/{categoria}', [App\Http\Controllers\FrontController::class, 'categoria']);
Route::get('/donas/{categoria}/{producto}', [App\Http\Controllers\FrontController::class, 'producto']);


Route::get('/blog', [App\Http\Controllers\FrontController::class, 'blog']);
Route::get('/blog/{post}', [App\Http\Controllers\FrontController::class, 'post']);

Route::get('/contacto', [App\Http\Controllers\FrontController::class, 'contacto']);
Route::post('/contacto', [App\Http\Controllers\FrontController::class, 'contactoenvio']);


