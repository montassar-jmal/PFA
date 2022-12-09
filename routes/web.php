<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CommandeController;

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


Route::middleware(['auth'])->group(function () {


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/produits', function () {
    return view('produits/produits');
});

Route::get('/tproduits', function () {
    return view('produits/tproduits');
});

Route::get('/settings', function () {
    return view('settings/settings');
});

Route::get('/commande', function () {
    return view('commande/commande');
});

Route::get('/tcommande', function () {
    return view('commande/tcommande');
});


Route::get('/index', function () {
    return view('settings/index');
});

Route::get('/categories', function () {
    return view('categories/categories');
});


Route::get('/tcategories', function () {
    return view('categories/tcategories');
});



}); 
require __DIR__.'/auth.php';


route::resource('/tcommande',CommandeController::class);
route::resource('tcommande',CommandeController::class);
route::resource('show',CommandeController::class);
route::resource('edit/{id}',CommandeController::class,['parameters'
=> ['{id}' => 'your_id']]);
route::resource('update/{id}',CommandeController::class,['parameters'
=> ['{id}' => 'your_id']]);
route::resource('delete',CommandeController::class);



route::resource('/tproduits',ProduitController::class);
route::resource('tproduits',ProduitController::class);
route::resource('show',ProduitController::class);
route::resource('edit/{idpr}',ProduitController::class,['parameters'
=> ['{idpr}' => 'your_id']]);
route::resource('update/{idpr}',ProduitController::class,['parameters'
=> ['{idpr}' => 'your_id']]);
route::resource('delete',ProduitController::class);


route::resource('/tcategories',CategorieController::class);
route::resource('tcategories',CategorieController::class);
route::resource('show',CategorieController::class);
route::resource('edit',CategorieController::class);
route::resource('update',CategorieController::class);
route::resource('delete',CategorieController::class);
?>