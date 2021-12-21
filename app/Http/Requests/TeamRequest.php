<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize():bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules():array
    {
        return [
            'member_name' => 'required',
            'member_duty' => 'required',
            'member_info' => 'required',
            'member_photo' => 'image|mimes:png,jpg,jpeg,svg'
        ];
    }
}