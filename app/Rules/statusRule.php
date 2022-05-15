<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\User;
class statusRule implements Rule
{
    public $testParameter;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($testParameter)
    {
        //
        $this->testParameter = $testParameter;
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
        $user = User::find(1);
        if($user->status == $value){
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
