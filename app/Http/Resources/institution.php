<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class institution extends JsonResource
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
            'type' => 'institution', 
            'id' => $this->id,
            "attributes"=>
            [
              'name' => $this->name,
              'startdate' => $this->startdate,
              'endDate' => $this->endDate,
              'contactEmail' => $this->contactEmail
            ],
           
            
        ];
    }
}
