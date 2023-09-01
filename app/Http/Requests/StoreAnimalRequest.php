<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAnimalRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:50',
            'specie' => 'required|max:50',
            'owner' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name is required!',
            'name.max' => 'Too many characters, max :max',

            'specie.required' => 'Specie is required!',
            'specie.max' => 'Too many characters, max :max',

            'owner.required' => 'Owner\'s name and surname are required',
        ];
    }
}
