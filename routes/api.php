<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::view('/', 'welcome');
Route::resource('institutions', 'InstitutionsController')->only([
    'index', 'show'
]);
Route::resource('projects', 'ProjectsController')->only([
    'index', 'show'
]);
Route::resource('roles', 'RolesController')->only([
    'index', 'show'
]);
//Route::apiResources([
    //'institutions' => 'InstitutionsController',
    //'institutions/id' => 'InstitutionsController',
    //'projects' => 'ProjectsController',
    //'projects/id' => 'ProjectsController',
    //'roles' => 'RolesController',
   // 'roles/id' => 'RolesController',
//]);
Route::fallback(function(){
    return response()->json([
        'error' => [
                'status' => '404',
                'source'  => [
                    'pointer' => $_SERVER['REQUEST_URI']
                ],
                'detail' =>  'Resource not found.'
            ]
    ], 404);  
});
