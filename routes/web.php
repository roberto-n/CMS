<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\DowloadController;
use App\Http\Controllers\AdmController;

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

route::resource('cadastro', CadastroController::class);

route::get('dowloadpdf',[DowloadController::class,'dowloadpdf'])->name('dowloadpdf');
route::get('dowload',[DowloadController::class,'dowload'])->name('dowload');

route::get('adm',[AdmController::class,'index'])->middleware(['auth'])->name('adm');
route::post('adm/salvar',[AdmController::class,'store'])->middleware(['auth'])->name('salvar');
route::get('adm/relatorio',[AdmController::class,'relatorio'])->middleware(['auth'])->name('relatorio');

Route::get('dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
