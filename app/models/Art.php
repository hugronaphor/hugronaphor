<?php

namespace App\Models;

class Art extends \Eloquent {

  public $timestamps = true;
  protected $table = 'art';
  protected $primaryKey = 'aid';

//  public function image()
//  {
//    return $this->hasOne('File', 'fid', 'image');
//  }

}
