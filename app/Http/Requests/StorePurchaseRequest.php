<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePurchaseRequest extends FormRequest
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
        return
        [
            'generation_date'=>'required',
            'due_date'=>'required',
            'subtotal'=>'',
            'iva'=>'required',
            'total'=>'required|numeric',
            'pay'=>'',
            'balance'=>'numeric',
            'retention'=>'required',
            'status'=>'in:active,inactive',

        ];
    }
}
