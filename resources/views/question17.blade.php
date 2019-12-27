<!DOCTYPE html>
<html>
    <head>
        <link href="{{ asset('Estilos/stylos.css') }}" rel="stylesheet">
    </head>

    <body>
        @extends('layouts.app')

        @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            {{ 'WELCOME USER ' }} {{ Auth::user()->name }}
                        </div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <h1>QUESTION 17:</h1>
                    <!-- ESTE FOREACH MUESTRA LA SEGUNDA PREGUNTA-->
                            <label>
                                @foreach ($nextquestion as $ques )
                                    <h2>{{ $ques->questionname }}</h2>
                                @endforeach
                            </label>

                            <!-- ESTE FORM ENVIA LAS RESPUESTAS AL CONTROLLADOR GAMECONTROLLER -->

                            <form action="../../../home/verification/{{ Auth::user()->id }}/{{ 18 }}" method="POST" >
                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}
                                {{ method_field('POST') }}

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="POST">

                                <p class="questions1">
                                    <label class="answer">ALTERNATIVES:
                                        <br>
                                        <br>
                                        <input type="radio" name="question" value="867"> Principio Abierto Cerrado.
                                        <br>
                                        <br>
                                        <!-- MOSTRAR LA RESPUESTA DE LA CUARTA PREGUNTA DE LA TABLA QUUESTION   -->
                                        <input type="radio" name="question" value="17">
                                                @foreach ($nextanswer as $ans)
                                                    {{ $ans->answername }}
                                                @endforeach
                                        <br>
                                        <br>
                                        <input type="radio" name="question" value="123"> Patrón de Separación de Preocupaciones/Responsabilidades.
                                        <br>
                                        <br>
                                        <input type="radio" name="question" value="929"> Patrón de no repetición(DRY).
                                        <br>
                                        <br>
                                    </label>
                                </p>
                                <input type="submit" value="SEND"></p>
                              </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection

    </body>
</html>
