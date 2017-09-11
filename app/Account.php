<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = 'accounts';
    public    $timestamps = false;

    public function addAccessType($access_type){
        $newAccessType = new AccessType;
        $newAccessType->access_type = $access_type;
        $this->accessType()->save($newAccessType);
    }

    public function removeAccessType($access_type){
        AccessType::where([
                        'account_id'  => $this->id,
                        'access_type' => $access_type
                        ])->delete();
    }

    public function accessType(){
        return $this->hasMany('App\AccessType');
    }

    public static function validationRule(){
        $rule = array(
            'username'      => 'required|min:6|max:50',
            'password'      => 'bail|required|min:6|max:50|same:password2|regex:^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])^',
            'account_access'=> 'required',
            'active'        => 'size:1',
        );

        return $rule;
    }

    public static function validationMessage(){
        $message = array(
            'username.required'     => 'Username must not be empty.',
            'password.required'     => 'Password must not be empty.',

            'username.min'          => 'Username must be more than 6 characters.',
            'password.min'          => 'Password must be more than 6 characters.',

            'username.max'          => 'Username must be less than 50 characters.',
            'password.max'          => 'Password must be less than 50 characters.',

            'password.regex'        => 'Password must contain at least 1 lowercase, 1 uppercase and 1 numeric character.',
            'password.same'         => 'New password and confirm password do not match.',

            'account_access.required' => 'You must choose at least one Account Access.',
        );

        return $message;
    }

    public static function validationRuleNoPassword(){
        $rule = array(
            'username'      => 'required|min:6|max:50',
            'account_access'=> 'required',
            'active'        => 'size:1',
        );

        return $rule;
    }

    public static function validationMessageNoPassword(){
        $message = array(
            'username.required'     => 'Username must not be empty.',
            'username.min'          => 'Username must be more than 6 characters.',
            'username.max'          => 'Username must be less than 50 characters.',
            'account_access.required' => 'You must choose at least one Account Access.',
        );

        return $message;
    }
}
