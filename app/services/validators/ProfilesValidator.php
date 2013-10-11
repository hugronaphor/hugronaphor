<?php

namespace App\Services\Validators;

class ProfileValidator extends Validator {

  public static $rules = array(
    'f_name' => 'required',
    'l_name' => 'required',
    'body' => 'required',
  );

}