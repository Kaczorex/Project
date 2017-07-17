<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EfakturyRequest extends FormRequest
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
            
            'producer'=>'required|max:255',
            'nip'=>'required|max:10',
            'start_date'=>'required|max:10',
            'address'=>'required|max:255'
        ];
    }
}
