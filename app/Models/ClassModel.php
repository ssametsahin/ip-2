<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ClassModel extends Model
{
    protected $table = 'classes';
    public $fillable = [
        'name',
    ];

    public function subjects(): HasMany
    {
        return $this->hasMany(Subject::class, 'class_id');
    }
    public function students()
    {
        return $this->hasManyThrough(User::class, ClassStudent::class, 'class_id', 'id', 'id', 'student_id');
    }

    public function teachers()
    {
        return $this->hasManyThrough(User::class, ClassTeacher::class, 'class_id', 'id', 'id', 'teacher_id');
    }
}
