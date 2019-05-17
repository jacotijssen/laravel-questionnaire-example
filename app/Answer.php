<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function getValueAttribute()
    {
        $savesTo = (new $this->attributes['question_type']);

        return $this->{$savesTo->getAnswerColumn()};
    }
}
