<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class post extends Model
{
    use HasFactory;
    /**
     * @var array
     */
    protected $fillable = [
        'image',
        'title',
        'content',
    ];
}
