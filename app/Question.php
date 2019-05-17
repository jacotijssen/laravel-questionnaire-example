<?php

namespace App;

use App\Traits\BaseQuestionTrait;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use BaseQuestionTrait;

    protected $guarded = ['id', 'created_at', 'updated_at'];
}
