<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateUser extends FormRequest
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
        $rules = [
            'name'     => ['required', 'string', 'min:3', 'max:255'],
            'email'    => ['required', 'string', 'email', 'min:3', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'max:16'],
        ];
        if ($this->method() == 'PUT') {
            $rules['password'] = ['nullable', 'string', 'min:8', 'max:16'];
        }

        return $rules;
    }
}
