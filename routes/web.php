<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/motDirecteur', 'motDirecteur')->name('motDirecteur');
    Route::get('/Presentation', 'Presentation')->name('Presentation');
    Route::get('/Press', 'Press')->name('Press');
    Route::get('/Technique', 'Technique')->name('Technique');
    Route::get('/Formation', 'Formation')->name('Formation');
    Route::get('/News', 'News')->name('News');
    Route::get('/Reportage', 'Reportage')->name('Reportage');
    Route::get('/Couverture', 'Couverture')->name('Couverture');
    Route::get('/Emission', 'Emission')->name('Emission');
    Route::get('/Magazine', 'Magazine')->name('Magazine');
    Route::get('/Podcast', 'Podcast')->name('Podcast');
    Route::get('/Making', 'Making')->name('Making');
    Route::get('/Court', 'Court')->name('Court');
    Route::get('/Documentaire', 'Documentaire')->name('Documentaire');
    Route::get('/Autres', 'Autres')->name('Autres');
    Route::get('/inscription', 'inscription')->name('inscription');
    Route::get('/Agenda', 'Agenda')->name('Agenda');
    Route::get('/Gallery', 'Gallery')->name('Gallery');
    Route::get('/Contacter', 'Contacter')->name('Contacter');
});
