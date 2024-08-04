<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model {
  use HasUuids;

  protected $fillable = [
    'name',
  ];

  public function user() {
    return $this->belongsTo(User::class);
  }

  public function images() {
    return $this->hasMany(Image::class);
  }
}
