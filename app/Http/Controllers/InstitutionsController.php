<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\institution;
use App\Http\Resources\institution as institutionResource;
use App\Http\Resources\institutions as institutionsResource;
use Illuminate\Database\Eloquent\ModelNotFoundException;

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
        try{
            institution::findOrFail($id);
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
      return new institutionResource(institution::findOrFail($id));
    }

}