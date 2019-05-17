<?php

namespace App\QuestionTypes;

class SingleLineText extends BaseQuestionType
{
    public function getAnswerColumn()
    {
        return 'answer_string';
    }

    public function getViewName()
    {
        return 'questionnaire.singleLine';
    }
}