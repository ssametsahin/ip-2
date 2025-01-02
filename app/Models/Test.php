<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Test extends Model
{
    protected $table = 'tests';
    public $fillable = [
        'name',
        'topic_id',
    ];

    public function questions(): HasMany
    {
        return $this->hasMany(Question::class, 'test_id');
    }
    public function topic()
    {
        return $this->belongsTo(Topic::class, 'topic_id');
    }
}
