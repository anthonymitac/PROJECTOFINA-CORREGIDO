<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Game;
use App\Questions;
use App\Answer;
use App\AnswerUser;
class GameController extends Controller{

    public function __construct()
    {
        $this->middleware('auth');
    }

    function verificationAnswer(Request $request,$userid,$nqr){
        //VERIFICAMOS SI LA RESPUESTA ES CORRECTA, HACIENDO UNA CONSULTA
        //EN LA BASE DE DATOS.
        $answerrpta= $this->validateAnswer($request->question); //codigo donde llamas
        //$answerrpta=Answer::find($request->question);
        //VERIFICAMOS QUE EN LA BASE DE DATOS DE GAME
        //SI EXISTE EL USUARIO O NO
        $recordGame=Game::all()->where('user_id','=',$userid)->first();

        //VEMOS Q SI LA RESPUESTA RECIBIDA ES CORRECTA O NO
        if (!empty($answerrpta)){
            //NO EXISTE REGISTRO DEL USUARIO
            if($recordGame==null){
                //SE CREARA UN NUEVO REGISTRO DEL USUARIO AÑADIENDO UN PUNTO POR QUE SU RESPUESTA ES CORRECTA
                $game= new Game;
                $game->user_id=$request->user_id;
                $game->score=1;
                $game->save();
            }
            //ESTO ESTA EN CASO DE Q EL USUARIO CIERRRE SU SESION SI ANTES AVER TERMINADO
            //DE RESPONDER LAS PREGUNTAS
            elseif($recordGame!=null &&  $nqr== 2){
                //
                $rg=Game::find($recordGame->id);
                $rg->score=1;
                $rg->save();
            }
            else{
                //EDITARA LA TABLA GAME DEL USUARIO CON ELL CODIGO $user_id
                //SIEMPRE EN CUANDO EXISTA UN REGISTRO DE ESE USUARIO
                //sacamos el id del registro (game)
                $indexGame=$recordGame->id;
                $rg=Game::find($indexGame);
                $rg->score=$rg->score+1;
                $rg->save();
            }

        }

        //LA RESPUESTA RECIBIDA NO ES LA CORRECTA
        else{
            //EN CASO DE QUE NO EXISTA UN REGISTRO DE ESE USUARIO
            if($recordGame==null){
                //SE CREARA UN NUEVO REGISTRO DEL USUARIO AÑADIENDO UN PUNTO DE
                // 0 POR QUE SU RESPUESTA ES INCORRECTA
                $game= new Game;
                $game->user_id=$request->user_id;
                $game->score=0;
                $game->save();
            }
            //ESTO ESTA EN CASO DE Q EL USUARIO CIERRRE SU SESION SI ANTES AVER TERMINADO
            //DE RESPONDER LAS PREGUNTAS CNON UNA PUNTUACION DE 0
            elseif($recordGame!=null &&  $nqr== 2){
                //
                $rg=Game::find($recordGame->id);
                $rg->score=0;
                $rg->save();
            }
            else{
                //EDITARA LA TABLA GAME DEL USUARIO CON ELL CODIGO $user_id
                //SIEMPRE EN CUANDO EXISTA UN REGISTRO DE ESE USUARIO
                //sacamos el id del registro (game)
                $indexGame=$recordGame->id;
                $rg=Game::find($indexGame);
                $rg->score=$rg->score+0;
                $rg->save();
            }

        }
        //ALEATORIO
        $numquestiorand=range(1, 15);
        shuffle($numquestiorand);
        foreach($numquestiorand as $nqr){
            //dd($nqr);
        }

        //SACAMOS LA SIGUIENTE PREGUNTA PARA ENVIARLO
        return $this->controllerQuestionsAnswerViews($userid,$nqr);
    }
    function validateAnswer($Answeruser){
        return Answer::find($Answeruser);
    }
    public function controllerQuestionsAnswerViews($userid,$nqr){
        //SACAMOS LA SIGUIENTE PREGUNTA PARA ENVIARLO
        $nextquestion=Questions::all()->where('id','=',$nqr);

        //SACAMOS LA SIGUIENTE RESPUESTA PARA LA PREGUNTA
        $nextanswer=Answer::all()->where('id','=',$nqr);

        switch ($nqr){
            case 1:
                return view('question1',compact('nextquestion','nextanswer','nqr'));
            break;
            case 2:
                return view('question2',compact('nextquestion','nextanswer','nqr'));
            break;
            case 3:
                return view('question3',compact('nextquestion','nextanswer','nqr'));
            break;
            case 4:
                return view('question4',compact('nextquestion','nextanswer','nqr'));
            break;
            case 5:
                return view('question5',compact('nextquestion','nextanswer','nqr'));
            break;
            case 6:
                return view('question6',compact('nextquestion','nextanswer','nqr'));
            break;
            case 7:
                return view('question7',compact('nextquestion','nextanswer','nqr'));
            break;
            case 8:
                return view('question8',compact('nextquestion','nextanswer','nqr'));
            break;
            case 9:
                return view('question9',compact('nextquestion','nextanswer','nqr'));
            break;
            case 10:
                return view('question10',compact('nextquestion','nextanswer','nqr'));
            break;
            case 11:
                return view('question11',compact('nextquestion','nextanswer','nqr'));
            break;
            case 12:
                return view('question12',compact('nextquestion','nextanswer','nqr'));
            break;
            case 13:
                return view('question13',compact('nextquestion','nextanswer','nqr'));
            break;
            case 14:
                return view('question14',compact('nextquestion','nextanswer','nqr'));
            break;
            case 15:
                return view('question15',compact('nextquestion','nextanswer','nqr'));
            break;

            default:
                return view('question11',compact('nextquestion','nextanswer','nqr'));

            case 21:
                $registerGame=Game::all()->where('user_id','=',$userid);
                //dd($registerGame);
                return view ('finishquestions',compact('registerGame'));
            break;
        }
    }
}
