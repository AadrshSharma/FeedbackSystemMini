<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    protected $table = 'feedback';
    protected $guarded = [];

    public function hobbies(){
        return $this->belongsToMany(Hobbies::class,'student_hobbies','student_id','hobby_id');
    }

    public function course(){
        return $this->belongsTo(Courses::class,'course_id','id');
    }
    public function subject(){
        return $this->belongsTo(Subjects::class,'subject_id','id');
    }
    public function faculty(){
        return $this->belongsTo(Faculties::class,'faculty_id','id');
    }
}
