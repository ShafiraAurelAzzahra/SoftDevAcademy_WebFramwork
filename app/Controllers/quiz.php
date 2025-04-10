<?php

namespace App\Controllers;

class Quiz extends BaseController
{
    public function QuizVariabel()
    {
        return view('quiz/QuizVariabel');
    }

    public function QuizKondisiPercabangan()
    {
        return view('quiz/QuizKondisiPercabangan');
    }

    public function QuizLooping()
    {
        return view('quiz/QuizLooping');
    }

    public function QuizFungsidanProsedur()
    {
        return view('quiz/QuizFungsidanProsedur');
    }

    public function QuizArray()
    {
        return view('quiz/QuizArray');
    }

    public function QuizStack()
    {
        return view('quiz/QuizStack');
    }

    public function QuizQueue()
    {
        return view('quiz/QuizQueue');
    }

    public function QuizLinkedList()
    {
        return view('quiz/QuizLinkedList');
    }

    public function QuizSortingandSearching()
    {
        return view('quiz/QuizSortingandSearching');
    }

    public function QuizMatriks()
    {
        return view('quiz/QuizMatriks');
    }

    public function QuizPointer()
    {
        return view('quiz/QuizPointer');
    }

    public function QuizTree()
    {
        return view('quiz/QuizTree');
    }
}
