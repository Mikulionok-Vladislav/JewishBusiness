<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $fillable = ['id','name', 'username', 'content', 'image', 'post_add_at', 'user_id'];
    use HasFactory;
}
