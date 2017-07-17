<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PrefabrykacjaRequest extends FormRequest
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
            'company' => 'required|max:250',
            'product' => 'required|max:250',
            'many' =>   'required|integer',
            'reciveData' => 'required|date_format:Y-m-d',   
            'notes' => 'required|max:400'
          
        ];
    }
public function messages()
{
        return [
            'company.required' => 'Nazwa firmy jest wymagana',
            'product.required' => 'Nazwa produktu jest wymagana',
            'many.required' => 'Ilość jest wymagana',
            'many.integer' => 'Proszę podać ilość w liczbach',
            'reciveData.required' => 'Data jest wymagana',
            'reciveData.date_format' => 'Format daty to Rok-miesiąc-dzien (1970-06-08)',
            'notes.required' => 'Uwagi są wymagane'
        ];
}

}
