<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequest extends FormRequest
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
            // 'name'=>'required|string|max:45',
            // 'email'=>'required|string|max:45',
            // 'phone'=>'required|string|max:45',
            // 'status'=>'in:active,inactive',
        ];
    }
}
