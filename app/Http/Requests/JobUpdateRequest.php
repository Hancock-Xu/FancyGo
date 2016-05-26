<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class JobUpdateRequest extends Request
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
            'job_title'=>'required',
            'responsibility'=>'required',
            'salary_and_other_welfare'=>'required'
        ];
    }
}
