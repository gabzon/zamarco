<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyRequest extends FormRequest
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
            'name'      => 'required|string',
            'address'   => 'nullable|string',
            'city'      => 'nullable|string',
            'state'     => 'nullable|string',
            'manager'   => 'nullable|string',
            'usd'       => 'nullable|numeric',
            'eur'       => 'nullable|numeric',
        ];        
    }
}
