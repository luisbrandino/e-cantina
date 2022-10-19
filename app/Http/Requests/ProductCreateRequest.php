<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
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
            'image' => 'required|image|mimes:png,jpg,jpeg',
            'name' => 'required|string|max:20',
            'price' => 'required|numeric|between:0,1000',
            'ingredients' => 'nullable|array|max:10'
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
