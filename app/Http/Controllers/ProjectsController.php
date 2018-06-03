<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\project;
use App\Http\Resources\project as projectResource;
use App\Http\Resources\projects as projectsResource;
use Illuminate\Database\Eloquent\ModelNotFoundException;
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
        try{
            project::findOrFail($id);
        }
        catch(ModelNotFoundException $e){
            return response()->json([
                'error' => [
                        'status' => '404',
                        'source'  => [
                            'pointer' => $_SERVER['REQUEST_URI']
                        ],
                        'detail' =>  'Resource not found.'
                    ]
            ], 404);  
        }
        return new projectResource(project::findOrFail($id));
    }

    
}
