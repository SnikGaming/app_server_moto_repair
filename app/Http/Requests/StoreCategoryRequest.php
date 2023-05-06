<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // return false;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        if (request()->isMethod('post')) {
            return [
                'name' => 'required|string|max:255', 'image' => 'mimes:png,jpg'
            ];
        } else {
            return [
                'name' => 'required|string|max:255', 'image' => 'mimes:png,jpg'
            ];
        }
    }
    public function messages(): array
    {
        return ['name.required' => 'Name is required', 'image.required' => 'Image is required', 'description.required' => 'Description is required'];
    }
}
