<?php

namespace App\QuestionTypes;

interface QuestionTypeInterface
{
    public function getAnswerColumn();

    public function getAnswer();

    public function saveAnswer($answer);

    public function getViewName();
}