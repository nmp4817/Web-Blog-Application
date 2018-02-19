<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostModel extends Model {
  // Table Name
    protected $table = 'post_models';
  // Primary Key
    public $primaryKey = 'id';
  // Timestamps
    public $timestamps = true;

    public function user() {
      return $this->belongsTo('App\User');
    }
}
