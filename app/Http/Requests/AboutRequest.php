<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
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
        return [
            'page_subtitle' => 'nullable',
            'about_title' => 'nullable',
            'about_subtitle' => 'nullable',
            'about_image' => 'image|required|mimes:png,jpeg,jpg',
            'about_description' => 'nullable',
            'about_backgorund_image' => 'image|required|mimes:png,jpeg,jpg',
        ];
    }
}
