<?php

namespace App\Http\Requests;

use App\Entities\Employee;
use App\Rules\DateRule;
use Illuminate\Foundation\Http\FormRequest;

class AppointmentValidation extends FormRequest
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
        if($this->employee_id==null)
            return [
              'employee_id'=>'required'
            ];

        return [
            'employee_id' => 'required',
            'user_id' => 'required',
            'comments' => 'required',
            'service_id' => 'required',
            'date' => ['required','date', new DateRule()],
            'start_time' => 'required|after_or_equal:'.date('g:ia',strtotime(Employee::find($this->employee_id)->workingHour->first()->start_time)),
            'finish_time' => 'required|after:start_time|before_or_equal:'.date('g:ia',strtotime(Employee::find($this->employee_id)->workingHour->first()->finish_time)),
        ];
    }

    public function messages()
    {
        return [
            'finish_time.after' => 'The finish time cannot be less than start time'
        ];
    }
}
