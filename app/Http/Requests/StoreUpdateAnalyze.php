<?php

namespace App\Http\Requests;

use App\Tenant\Rules\UniqueTenant;
use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateAnalyze extends FormRequest
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
        $id = $this->segment(2);

        $rules = [            
             'date_analyzes' => ['required'],
             'arquivo' => ['nullable'],
        ];
        
        if ($this->method() == 'PUT') {
            $rules['arquivo'] = ['nullable'];
        }

        return $rules;
    }
}
