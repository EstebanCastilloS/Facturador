<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDepartmentRequest extends FormRequest
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
            //REGLA PARA RESTRICCIÓN
            'name'=>'required|string|max:45',
            'dane_code'=>'required|string|max:6',
            'iso_code'=>'required|string|max:6'
        ];
    }
}
