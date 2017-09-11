<?php

namespace App;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    protected $dates = ['birthdate'];
    public $timestamps = false;

    public function account(){
        return $this->hasOne('App\Account');
    }

    public function getAge(){
        return Carbon::parse($this->birthdate)->age;
    }

    public static function validationRule(){
        $rule = array(
            'first_name'    => 'required|min:2|max:50',
            'middle_name'   => 'required|min:2|max:50',
            'last_name'     => 'required|min:2|max:50',
            'sex'           => 'required|size:1',
            'civil_status'  => 'required',
            'birthdate'     => 'required|date',
            'contact_number'=> 'required|nullable',
            'address'       => 'required|nullable',
            'position'      => 'required',
            'active'        => 'required|boolean',
        );

        return $rule;
    }

    public static function validationMessage(){
        $message = array(
            'first_name.required'           => 'Firstname must not be empty.',
            'middle_name.required'          => 'Middlename must not be empty.',
            'last_name.required'            => 'Lastname must not be empty.',
            'sex.required'                  => 'Sex field is required.',
            'civil_status.required'         => 'Civil Status field is required.',
            'birthdate.required'            => 'Birthdate must not be empty.',
            'position.required'             => 'Position field is required.',
            'contact_number.required'       => 'Contact number field is required.',
            'address.required'              => 'Address number field is required.',
            'active.required'               => 'Status field is required.',

            'first_name.min'                => 'Firstname must not be less than 2 characters.',
            'middle_name.min'               => 'Middlename must not be less than 2 characters.',
            'last_name.min'                 => 'Lastname must not be less than 2 characters.',

            'first_name.max'                => 'Firstname must not be more than 50 characters.',
            'middle_name.max'               => 'Middlename must not be more than 50 characters.',
            'last_name.max'                 => 'Lastname must not be more than 50 characters.',
            'birthdate.date'                => 'Birthdate given was not a valid date.',
        );

        return $message;
    }
}
