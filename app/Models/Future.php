<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Future extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_name',
        'course_description',
        'course_price'
    ];
}
