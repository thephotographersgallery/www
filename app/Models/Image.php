<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
  use HasUuids;

  protected $fillable = [
    'image',
    'gallery_id',
  ];

  public function gallery() {
    return $this->belongsTo(Gallery::class);
  }
}
