<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    use HasFactory;

    public function courses() {
        return $this->belongsToMany(Course::class, 'course_series', 'series_id', 'course_id');
    }
}
