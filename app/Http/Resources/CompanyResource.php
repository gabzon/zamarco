<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
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
            'id'        => $this->id,
            'name'      => $this->name,
            'address'   => $this->address,
            'city'      => $this->city,
            'state'     => $this->state,
            'manager'   => $this->manager,
            'usd'       => $this->usd,
            'eur'       => $this->eur,
        ];
    }
}