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

Route::get('/', [\App\Http\Controllers\HomeController::class, "returnViewIndex"])->name("index");
Route::get('/quem-somos', [\App\Http\Controllers\QuemSomosController::class, "returnViewQuemsomos"])->name("quem-somos");
Route::get('/a-diretoria', [\App\Http\Controllers\DiretoriaController::class, "returnViewDiretoria"])->name("a-diretoria");
Route::get('/show-roma-negra', [\App\Http\Controllers\ShowRomaNegraController::class, 'returnViewRoma'])->name('show-roma-negra');
Route::prefix('aulas')->group(function () {
    Route::get('/', [\App\Http\Controllers\AulasController::class,'returnViewAulas'])->name('aulas.index');
    Route::get('/capoeira', [\App\Http\Controllers\CapoeiraController::class, 'returnViewCapoeira'])->name('aulas.capoeira');
    Route::get('/percussao', [\App\Http\Controllers\PercussaoController::class, 'returnViewPercussao'])->name('aulas.percussao');
    Route::get('/danca-afro', [\App\Http\Controllers\DancaAfroController::class, 'returnViewDancaAfro'])->name('aulas.danca-afro');
})->name('aulas');
Route::prefix('fotos')->group(function () {
    Route::get('/', [\App\Http\Controllers\FotosController::class,'returnViewFotos'])->name('fotos.index');
    Route::get('/role-cultural', [\App\Http\Controllers\RoleCulturalController::class, 'returnViewRoleCultural'])->name('fotos.role-cultural');
    Route::get('/medalha-zumbi-capoeira', [\App\Http\Controllers\MedalhaZumbiController::class, 'returnViewMedalhaZumbi'])->name('fotos.medalha-zumbi-capoeira');    
})->name('fotos');
Route::get('/videos', [\App\Http\Controllers\VideosController::class, "returnViewVideos"])->name("videos");