<?php

namespace App\QuestionTypes;

use App\Answer;
use App\Question;

abstract class BaseQuestionType extends Question implements QuestionTypeInterface
{
    public function getAnswer()
    {
        $column = $this->getAnswerColumn();

        return $this->{$column};
    }

    public function saveAnswer($answer)
    {
        $column = $this->getAnswerColumn();

        return Answer::create([
            'question_type' => get_class($this),
            'question_id' => $this->id,
            $column => $answer
        ]);
    }
}