<?php

namespace App\Services\Validators;

class VideoValidator extends Validator {

  public static $rules = array(
    'title' => 'required',
    'url' => 'required',
    'author' => 'required',
    //'year' => 'required|integer',
    'width' => 'integer',
    'height' => 'integer',
    'image' => 'image|max:15500'
  );

}
