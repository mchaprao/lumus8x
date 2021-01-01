<?php

namespace App\Http\Requests;

use App\Tenant\Rules\UniqueTenant;
use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateParameter extends FormRequest
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

        return [
            'name' => [
                'required',
                'min:2',
                'max:255',
                "unique:parameter_analyzes,name,{$id},id",
            ],
            'unit' => ['required', 'min:2', 'max:255'],
            'reference_name' => ['required', 'min:3', 'max:255'],
            'reference' => "required|regex:/^\d+(\.\d{1,2})?$/",
            'description' => ['nullable', 'min:3', 'max:10000'],
        ];
    }
}
