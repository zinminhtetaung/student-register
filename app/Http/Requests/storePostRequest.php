<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:posts|max:255',
            'description' => 'required|max:255',
        ];
    }

    public function message()
    {
        return [
            'name.required' => 'A name is required',
            'name.max:255' => 'A name is required',
            'description.required' => 'A description is required',
        ];
    }
}
