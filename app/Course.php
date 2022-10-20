<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name',
        'period',
        'description',
        'year',
        'cfu',
        'website',
    ];
}
