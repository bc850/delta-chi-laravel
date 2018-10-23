<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // restricts entries to values in the $fillable array
    protected $fillable = [
      'title',
      'body',
      'image_url',
      'blurb'
    ];

    public function user() {
      return $this->belongsTo('App\User');
    }

    // To use a local scope, prefix with 'scope' in method name return $query
    // builder instance
    public function scopePublished($query) {
      return $query->where('published', true)->get();
    }
}
