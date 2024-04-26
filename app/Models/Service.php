<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['link','title', 'description', 'url_image', 'name_image', 'status', 'visible'];

    public function scopeActiveDestacado($query)
  {
      return $query->where('status', true)->where('visible', true);
  }
}
