<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class create_blogs_table extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description'
    ];
}
