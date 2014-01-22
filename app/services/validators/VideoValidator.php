<?php

namespace App\Services\Validators;

class VideoValidator extends Validator {

  public static $rules = array(
    'title' => 'required',
    'author' => 'required',
    'year' => 'required',
  );

}