<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEtudiantRequest extends FormRequest
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
            'name' => 'required | string',
            'first_name' => 'required | string',
            'email' => 'required | email | unique:etudiants',
            'date_born' => 'required | date',
            'lieu' => 'required | string',
            'level' => 'required | integer | in:1,2,3,4,5',
            'phone' => 'required | numeric',
            'filiere' => 'required | string | in:info_com,gestion,technology,sante',
            'cours' => 'string | in:jour,soir | nullable',
            'acte_nais' => '  | nullable',
            'bacc' => '  | nullable',
            'releve_note' => ' | nullable',
            'transaction' => 'string | required'

        ];
    }
}
