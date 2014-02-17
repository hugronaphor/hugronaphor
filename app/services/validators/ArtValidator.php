<?php

namespace App\Services\Validators;

class ArtValidator extends Validator {

  public static $rules = array(
    'title' => 'required',
     // 'url' => 'required',
    'author' => 'required',
    'credit' => 'required',
    'order' => 'required|integer',
    'image' => 'image|max:15500'
  );

}
