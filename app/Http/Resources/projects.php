<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class projects extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'type' => 'project', 
            'id' => $this->id,
            "attributes"=>
            [
              'name' => $this->name,
            ],
           
            
        ];
    }
}
