<?php

use Illuminate\Support\Facades\Route;

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


// ******************** Punto 1**************************//
//  Forma #2
Route::get('informacion', function(){
    $nombre = 'Caterine Ladino Galvis';
    $cc = '1053807299';

    return view('informacion')->width([
        'nombre' => $nombre,
        'cc' => $cc
    ]);    
});

// Forma #3
Route::get('informacion', function(){
    $nombre = 'Caterine Ladino Galvis';
    $cc = '1053807299';

    return view('informacion', [
        'nombre' => $nombre,
        'cc' => $cc
    ]);
});

// Forma #4
Route::get('informacion', function(){
    $nombre = 'Caterine Ladino Galvis';
    $cc = '1053807299';

    return view('informacion', compact('nombre', 'cc'));
});


// ******************** Punto 2**************************//
Route::get('frameworks', function(){
    $frameworks_backend = [
        'Laravel' => 'https://laravel.com/',
        'CakePHP' => 'https://cakephp.org/',
        'Express' => 'https://expressjs.com/es/',
        'Spring Boot' => 'https://spring.io/projects/spring-boot',
        'Django' => 'https://www.djangoproject.com/',
        'Ruby on Rails' => 'https://rubyonrails.org/',
        'Phoenix' => 'https://phoenixframework.org/'
    ];

    $frameworks_frontend = [
        'Angular' => 'https://angular.io/',
        'Ionic' => 'https://ionicframework.com/',
        'React' => 'https://es.reactjs.org/',
        'Vue Js' => 'https://vuejs.org/',            
    ];

    return view('frameworks', [
        'frameworks_backend' => $frameworks_backend,
        'frameworks_frontend' => $frameworks_frontend
    ]);
});