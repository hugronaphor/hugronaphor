<?php

namespace App\Models;

class File extends \Eloquent {

  public $timestamps = true;
  protected $table = 'files';
  protected $primaryKey = 'fid';

}
