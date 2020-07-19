<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProfile extends FormRequest
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
            'job' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'url' => ['required', 'string', 'max:255','url'],
            'image' => ['required'],
            'description' => ['required', 'string',],
        ];
    }
}
