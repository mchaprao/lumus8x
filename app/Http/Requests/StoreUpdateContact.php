<?php

namespace App\Http\Requests;

use App\Tenant\Rules\UniqueTenant;
use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateContact extends FormRequest
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
                'required', 'min:3', 'max:255',
//                new UniqueTenant('categories', $id),
            ],
            'email' => ['required', 'min:3', 'max:255'],
            'telephone' => ['required'],
            'message' => ['required', 'min:3', 'max:10000'],
        ];
    }
}
