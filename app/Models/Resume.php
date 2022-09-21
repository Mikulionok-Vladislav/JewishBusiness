<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $table = 'resumes';
    protected $fillable = ['id','name', 'email', 'profession_title', 'location', 'web', 'pre_hour', 'age'];
    use HasFactory;
}
