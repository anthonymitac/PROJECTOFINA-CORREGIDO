<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questions;
use App\User;
use App\Answer;
use App\Game;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $ordergame=Game::orderBy('score','desc')->get();
        //dd($game);
        return view('home',compact('ordergame'));
    }

    function startGame(){
        //ENVIAR LOS DATOS DE LAS PREGUNTAS Y RESPUESTAS A LA  VISTA QUESTIONS

        $numquestiorand=range(1, 15);
        shuffle($numquestiorand);
        foreach($numquestiorand as $nqr){
            //dd($nqr);
        }

        $nextquestion=Questions::all()->where('id','=',$nqr);
        $nextanswer=Answer::all()->where('id','=',$nqr);
        return view('question1',compact('nextquestion','nextanswer','nqr'));
    }

}
