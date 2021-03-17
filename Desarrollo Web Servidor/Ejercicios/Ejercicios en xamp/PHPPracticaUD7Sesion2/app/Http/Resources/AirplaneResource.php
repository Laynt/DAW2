<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AirplaneResource extends JsonResource
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
            'id' => $this->id,
            'serial' => $this->serial,
            'model' => $this->model,
            'length' => $this->length,
            'capacity' => $this->capacity,
            'speed' => $this->speed,
            'range' => $this->range,
            'manufacturer_id' => $this->manufacturer_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
