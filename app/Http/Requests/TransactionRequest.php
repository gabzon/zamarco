<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransactionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'date'          => 'required|date',
            'contact_id'    => 'nullable',
            'type_of_client'=> 'required',
            'description'   => 'nullable',
            'credit'        => 'required_if:type,in|numeric|min:0',
            'debit'         => 'required_if:type,out|numeric',
            'exchange'      => 'nullable|numeric',
            'currency'      => 'required',
            'bolivares'     => 'nullable|numeric',
            'invoice'       => 'nullable|string',
            'contact'       => 'nullable|string',
            'type'          => 'required',
            'source'        => 'required',
            'destinatary'   => 'nullable|string',            
            'company_id'    => 'required|numeric',
        ];
    }
}
