<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LeadRequest extends FormRequest {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            //'nome' => 'required',
            //'email' => 'required',
        ];
    }

    public function messages(){
        return [
            //'nome.required' => 'Preencha o campo NOME',
            //'email.required' => 'Preencha o campo EMAIL',
        ];
    }
}
