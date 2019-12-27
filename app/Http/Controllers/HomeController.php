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
        $game=Game::all();
        $ordergame=$game->sortBy('score');
        //dd($game);
        return view('home',compact('ordergame'));
    }

    function startGame(REQUEST $request){
        //ENVIAR LOS DATOS DE LAS PREGUNTAS Y RESPUESTAS A LA  VISTA QUESTIONS
        $nextquestion=Questions::all()->where('id','=',1);
        $nextanswer=Answer::all()->where('id','=',1);
        return view('question1',compact('nextquestion','nextanswer'));
    }

}
