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


            'weight' => 'numeric|nullable',
            'size' => 'required',
            'img_link' => 'url:http,https|nullable',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name is required!',
            'name.max' => 'Too many characters, max :max',

            'specie.required' => 'Specie is required!',
            'specie.max' => 'Too many characters, max :max',

            'weight.numeric' => 'Enter numbers followed by a "." for decimals. (weight will be assigned with Kg)',

            'size.required' => 'Size is required!',

            'img_link.url' => 'Image must be an url and must start with "http or https"',
        ];
    }
}
