<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Product extends Resource
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
           'name' => $this->name,
           // 'price' => $this->price,
           'test' => 'Hola',
           'created_at' => (string) $this->created_at,
           'updated_at' => (string) $this->updated_at,
        ];
        // return parent::toArray($request);
    }
}
