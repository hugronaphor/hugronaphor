<?php

namespace App\Models;

class Video extends \Eloquent {

  public $timestamps = true;
  protected $table = 'video';
  protected $primaryKey = 'vid';

//  public function image()
//  {
//    return $this->hasOne('File', 'fid', 'image');
//  }

}
