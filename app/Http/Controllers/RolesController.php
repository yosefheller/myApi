<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\role;
use App\Http\Resources\role as roleResource;
use App\Http\Resources\roles as rolesResource;
use Illuminate\Database\Eloquent\ModelNotFoundException;
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
        try{
            role::findOrFail($id);
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
        return new roleResource(role::findOrFail($id));
    }

   
}
