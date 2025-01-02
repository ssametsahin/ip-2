<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Question extends Model
{
    protected $table = 'questions';
    public $fillable = [
        'question_text',
        'test_id',
    ];

    public function test()
    {
        return $this->belongsTo(Test::class);
    }

    public function answer()
    {
        return $this->hasOne(Answer::class);
    }
}
