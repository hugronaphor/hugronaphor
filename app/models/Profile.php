<?php

namespace App\Models;

class Profile extends \Eloquent {

  protected $table = 'profiles';

  public function author() {
    return $this->belongsTo('App\Models\User', 'user_id');
  }

}
