<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\institution;
use App\Http\Resources\institution as institutionResource;
use App\Http\Resources\institutions as institutionsResource;

class InstitutionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return institutionsResource::collection(institution::all());
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      return new institutionResource(institution::find($id));
    }

}