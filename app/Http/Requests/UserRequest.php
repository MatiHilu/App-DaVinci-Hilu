<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name'          => 'required | min:5 | max:64',
            'slug'          => 'required | min:3 | max:64',
            'presentation'  => 'required | min:4 | max:20',
            'title_job'     => 'required | min:5 | max:64',
            'tel'           => 'required | numeric | min:6',
            'address'       => 'required | min:10 | max:128',
            'file'          => 'dimensions:min_width=100,min_height=200',
            'file_about_me' => 'dimensions:min_width=100,min_height=200',
            'titulo_about_me'  => 'required | min:5 | max:64',
            'about_me' => 'required | min:5 | max:500',
            'titulo_what_i_do' => 'required | min:5 | max:64',
            'titulo_skills'    => 'required | min:5 | max:64',
            'titulo_professional_skills'   => 'required | min:5 | max:64',
        ];
    }
}