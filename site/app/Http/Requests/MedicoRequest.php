<?php

namespace Marcus\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedicoRequest extends FormRequest
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

             'nome' => 'required|min:10',
             'celular' => 'required|min:2',
             'image' => 'required|image|max:3000'
            //
        ];
    }

    public function attributes()
{
    return[
        'image' => 'Foto do médico', 
    ];

}

   
}