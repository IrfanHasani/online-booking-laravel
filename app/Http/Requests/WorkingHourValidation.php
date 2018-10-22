<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkingHourValidation extends FormRequest
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
            'employee_id' => 'required',
            'date' => 'required|date',
            'start_time' => 'required',
            'finish_time' => 'required|after:start_time'
        ];
    }

    public function messages()
    {
        return [
            'finish_time.after' => 'The finish time cannot be less than start time'
        ];
    }
}
