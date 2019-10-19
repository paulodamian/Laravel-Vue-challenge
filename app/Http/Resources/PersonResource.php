<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PersonResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $val = [
            'id' => $this->id,
            'lastName' => $this->lastName, 
            'firstName' => $this->firstName,
            'link' => route('people.person', ['person' => $this->id])
        ];

        if ($this->relationLoaded('aliases')) {
            $val['aliases'] = $this->aliases;
        }

        if ($this->relationLoaded('roles')) {
            $val['roles'] = RolResource::collection($this->roles);
        }

        return $val;
    }
}
