<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostMes extends Model
{
    use HasFactory;
    protected $fillable = [
        'FileImg',
        'PostMes',
        'username',
        
    ];
}
