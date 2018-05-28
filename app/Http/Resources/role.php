<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class role extends JsonResource
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
            'type' => 'role', 
            'id' => $this->id,
            "attributes"=>
            [
              'name' => $this->name,
              'description' => $this ->description,
              'startdate' => $this->startdate,
              'endDate' => $this->endDate,
              'contactEmail' => $this->contactEmail
            ],
           
            
        ];
    }
}
