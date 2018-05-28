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

Route::apiResources([
    'institutions' => 'InstitutionsController',
    'institutions/id' => 'InstitutionsController',
    'projects' => 'ProjectsController',
    'projects/id' => 'ProjectsController',
    'roles' => 'RolesController',
    'roles/id' => 'RolesController',
]);
