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
            //
            'name'=>'required|string|max:45',
            'nit'=>'required|string|max:45',
            'dv'=>'string|max:1',
            'address'=>'string|max:100',
            'email'=>'string|max:45',
            'phone'=>'string|max:10',
            'contact'=>'string|max:45'
        ];
    }
}
