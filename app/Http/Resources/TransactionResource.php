<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TransactionResource extends JsonResource
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
            'id'                => $this->id,
            'date'              => $this->date,
            'contact_id'        => $this->contact_id,
            'type_of_client'    => $this->type_of_client,
            'description'       => $this->description,
            'credit'            => $this->credit,
            'debit'             => $this->debit,
            'exchange'          => $this->exchange,
            'currency'          => $this->currency,
            'bolivares'         => $this->bolivares,
            'invoice'           => $this->invoice,
            'contact'           => $this->contact,
            'type'              => $this->type,
            'source'            => $this->source,
            'destinatary'       => $this->destinatary,
            'user_id'           => $this->user_id,
            'company_id'        => $this->company_id,
            'company_name'      => $this->company->name,
        ];
    }
}
