<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransportRequest extends FormRequest
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

        'address'=>'required|max:255',
        'car'=>'required|max:255',
        'priority'=>'required|max:1',
        'time_of_day'=>'required|max:1',
        'comments'=>'required|max:255',
        'delivry_date'=>'required|max:255',
        'DD'=>'required|max:255'
        //     //
        ];
    }
}
