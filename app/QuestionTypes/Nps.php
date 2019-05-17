<?php

namespace App\QuestionTypes;

use App\Question;

class Nps extends BaseQuestionType
{
    public function getAnswerColumn()
    {
        return 'answer_integer';
    }

    public function getViewName()
    {
        return 'questionnaire.nps';
    }
}