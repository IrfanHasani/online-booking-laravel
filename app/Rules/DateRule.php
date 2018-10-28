<?php

namespace App\Rules;

use Carbon\Carbon;
use Illuminate\Contracts\Validation\Rule;

class DateRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $today = Carbon::now()->format('Y-m-d');
        if($value<$today)
            return false;
        return true;
    }
//
    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'You cannot make an appointment on this date';
    }
}
