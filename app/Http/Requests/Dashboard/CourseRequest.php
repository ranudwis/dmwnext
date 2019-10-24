<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
            'code' => 'required',
            'name' => 'required',
            'coursegroup_id' => 'required|exists:coursegroups,id',
            'credit' => 'required|numeric|min:1',
            'slug' => 'required|regex:/^\S+$/',
            'description' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'slug.regex' => 'Nilai nama singkat tidak boleh terdapat spasi',
        ];
    }
}
