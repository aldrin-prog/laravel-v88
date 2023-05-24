<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    //
    private $questions = [
        [
          "id" => 1,
          "question" => "The Great Wall of China is visible from space.",
          "answer" => "bluff"
        ],
        [
          "id" => 2,
          "question" => "The shortest war in history lasted only 38 minutes.",
          "answer" => "fact"
        ],
        [
          "id" => 3,
          "question" => "The world's largest desert is the Sahara Desert.",
          "answer" => "fact"
        ],
        [
          "id" => 4,
          "question" => "The first computer mouse was made out of wood.",
          "answer" => "fact"
        ],
        [
          "id" => 5,
          "question" => "The world's largest ocean is the Atlantic Ocean.",
          "answer" => "bluff"
        ]
      ];
    public function game(){
        return view('game',$this->questions[rand(0,count($this->questions)-1)]);
    }
    public function check( Request $request){
        $answer=$request->input('ans');
        $correctAnswer=$request->input('correctAnswer');
        if($answer==$correctAnswer){
            return redirect(route('correct'));
        }
        return redirect(route('fail'));
    }
    public function correct(){
        return view('correct');
    }
    public function fail(){
        return view('fail');
    }

}
