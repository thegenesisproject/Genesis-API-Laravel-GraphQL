<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        return [
            'id' => $this->id,
            'name' => $this->name,
            'username' => $this->username,
            'email' => $this->email,

            // include relationship data if relation exists
            $this->mergeWhen($this->userable_id > 0, [
                'userable_type' => $this->userable_type,
                'userable_id' => $this->userable_id,
            ]),

            // include linked model
            'userable' => new AdminResource($this->userable),
        ];
    }
}
