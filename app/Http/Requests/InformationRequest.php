<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InformationRequest extends FormRequest
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
            "info_title" => "nullabe",
            "info_subtitle" => "nullable",
            "info_description" => "nullable",
            "info_image" => "image|required|mimes:png,jpeg,jpg",
            "info_section_title" => "nullabel",
            "info_section_subtitle" => "nullable",
            "info_section_description" => "nullable",
            "info_section_image" => "image|required|mimes:png,jpeg,jpg",
        ];
    }
}
