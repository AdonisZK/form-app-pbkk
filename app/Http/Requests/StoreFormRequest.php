<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'field1' => 'required',
            'field2' => 'required',
            'field3' => 'required',
            'field4' => 'required|numeric|between:2.50,99.99',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ];
    }
}