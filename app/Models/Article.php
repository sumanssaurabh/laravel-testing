<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    public function author()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
