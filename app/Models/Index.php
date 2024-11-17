<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Index extends Model
{
    use HasFactory;

    protected $table = 'pages';

    protected $fillable = ['title', 'description', 'slug', 'meta_description', 'meta_keywords', 'status', 'created_at', 'image', 'excerpt', 'body'];

    public function scopeActive($query)
    {
        return $query->where('status', 'ACTIVE');
    }

}
