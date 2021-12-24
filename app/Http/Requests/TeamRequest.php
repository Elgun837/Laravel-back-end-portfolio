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
            'team_member_name' => 'required',
            'team_member_duty' => 'required',
            'team_member_about' => 'required',
            'team_member_image' => 'nullable|mimes:png,jpg,jpeg,svg',
        ];
    }
}
