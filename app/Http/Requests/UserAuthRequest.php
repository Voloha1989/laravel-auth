<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserAuthRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'id' => 'integer|digits_between:1,9|required',
            'first_name' => 'string|required',
            'last_name' => 'string|required',
            'city' => 'string|required',
            'country' => 'string|required',
            'sig' => 'string|required',
        ];
    }
}
