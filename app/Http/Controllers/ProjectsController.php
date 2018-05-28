<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\project;
use App\Http\Resources\project as projectResource;
use App\Http\Resources\projects as projectsResource;
class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return projectsResource::collection(project::all());
    }

   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new projectResource(project::find($id));
    }

    
}
