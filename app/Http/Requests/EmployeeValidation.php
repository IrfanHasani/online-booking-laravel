<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EmployeeValidation extends FormRequest
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
        switch ($this->method()) {
            case 'POST':
                {
                    return [
                        'first_name' => 'required',
                        'last_name' => 'required',
                        'email' => 'required|email|unique:employees',
                        'phone' => 'required|numeric'
                    ];
                    break;
                }
            case 'PATCH':
            case 'PUT':
                {
                    return [
                        'first_name' => 'required',
                        'last_name' => 'required',
                        'email' => ['required','email',Rule::unique('employees')->ignore($this->route('employee'))],
                        'phone' => 'required|numeric'
                    ];
                    break;
                }
        }

    }
}
