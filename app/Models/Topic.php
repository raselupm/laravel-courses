<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    public function courses() {
        return $this->belongsToMany(Course::class, 'course_topic', 'topic_id', 'course_id');
    }
}
