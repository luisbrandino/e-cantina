<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductEditRequest extends FormRequest
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
            'image_url' => 'nullable|image|mimes:png,jpg,jpeg',
            'name' => 'nullable|string|max:20',
            'price' => 'nullable|numeric|between:0,1000',
            'ingredients' => 'nullable|array|max:10',
            'on_menu' => 'nullable|boolean'
        ];
    }

    public function getValidatorInstance()
    {
        $this->formatIngredients();

        return parent::getValidatorInstance();
    }

    public function formatIngredients()
    {
        $this->merge([
            'ingredients' => json_decode($this->request->get('ingredients'))
        ]);
    }
}
