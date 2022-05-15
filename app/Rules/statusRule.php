<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\User;
class statusRule implements Rule
{
    public $testParameter, $model, $acceptedStatuses;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($model, $acceptedStatuses)
    {
        //
        // $this->testParameter = $testParameter;
        $this->model = $model;
        $this->acceptedStatuses = $acceptedStatuses;
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
        //
        /**
         * case 1
         */
       
        $test = "App\\".$this->model;
        $user = $test::find(1);
        if(in_array($user->status, $this->acceptedStatuses)){
            return true;
        }else{
            return false;
        }

        /**
         * case 2 with parametrs
         */
        // return ($this->testParameter == 200 ? true : false);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The validation error message.';
    }
}
