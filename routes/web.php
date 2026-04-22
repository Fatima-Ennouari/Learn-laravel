<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ResponseController;
use Illuminate\Http\Request;


// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/formations', function () {
//     return view('formations');
// });
// Route::get('/equipes', function(){
//     return view('equipes');
// });
// Route::get('/contact', function(){
//     return view('contact');
// });


//Q1 --  Route::get('/home', function(){
//     return "Bonjour Laravel";
// });
// Q3 -- Route::get('/accueil', function(){
//     return view('accueil');
// });
// Q6 --  Route::get('/test', [TestController::class , 'index']);
// Q8 -- Route::get('/test' , [TestController::class , 'show']);
// Q10 -- Route::view('/view' , 'accueil', [   'name' => 'Fatima']);
// Q11--Route::view('/accueil' , 'accueil')->name('accueil');
// Route::view('/test', 'test');
// Route::get('/welcome', function(){
//     $name = "Ennouari";
//     return view('welcome',[
//         'name' => $name
//         ]
//     );
// });
// Route::get('/welcome', function(){
//     return view('welcome', [
//         'name' => 'Fatima',
//         'course' => ['PHP', 'LARAVEL', 'MY SQL', 'REACT']
//     ]);
// });
// Route::get('/welcome/{name}', function($name){
//     return view('welcome', [
//         'name' =>  $name
//     ]);
// });
// Route::get('/welcome/{name}/{prenom}', function(Request $request){
//     return view('welcome', [
//         'name' =>  $request ->name,
//         'prenom' => $request->prenom
//     ]);
// });
// Route::get('/stagiaire', function () {
//     return view('stagiaire', [
//         'prenom' => 'Sara',
//         'filiere' => 'Développement Digital',
//         'groupe' => 'DD201',
//         'annee' => '2024-2025'
//     ]);
// });
// Route::get('/accueil', [TestController::class , 'view']);
// Route::get('/stagiaire', function(){
//     return view('stagiaire')
//            ->with('name', 'Fatima')
//            ->with('prenom' , 'Ennouari')
//            ->with('filiere', 'DD201')
//            ->with('annee', '2025-2026');
// });
// Route::get('/stagiaire', function(){
//     $name = 'Fatima';
//     $prenom = 'Ennouari';
//     $filiere = 'DD201';
//     $annee = '2025-2026';
//     return view('stagiaire', compact('name', 'prenom', 'filiere', 'annee'));
// });
// hadi list + Data
// Route::get('/admin/formations', function () {

//     $formations = [
//         ['nom' => 'Laravel', 'duree' => '2 mois'],
//         ['nom' => 'JavaScript', 'duree' => '1 mois'],
//     ];
//         // $formations = [];

//     return view('admin.formations', compact('formations'));
// });
// Route::prefix('admin')->group(function(){
//     Route::get('/dashboard', function(){
//         return view('admin.dashboard');
//     })->name('admin.dashboard');
// });
// Route::get('/response/text', [ResponseController::class, 'textResponse']);
// Route::get('/response/view', [ResponseController::class, 'viewResponse']);
// Route::get('/response/array', [ResponseController::class, 'arrayResponse']);
// Route::get('/response/json', [ResponseController::class, 'jsonResponse']);
// Route::get('/response/json-header', [ResponseController::class, 'jsonWithHeader']);
// Route::get('/response/redirect-route', [ResponseController::class, 'redirectToRoute']);
// Route::get('/response/redirect-method', [ResponseController::class, 'redirectToMethod']);
// Route::get('/response/redirect-external', [ResponseController::class, 'redirectExternal']);

Route::resource('users', UserController::class);