<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\role;
use App\Http\Resources\role as roleResource;
use App\Http\Resources\roles as rolesResource;
class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return rolesResource::collection(role::all());
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new roleResource(role::find($id));
    }

   
}
