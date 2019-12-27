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
                            
                            <!-- ESTE FOREACH MUESTRA LA PRIMERA PREGUNTA -->
                            <label class="userscore">
                                    <h1>{{ Auth::user()->name }} HAS OBETNIDO:
                                    @foreach ($registerGame as $regGame)
                                        {{ $regGame->score }}
                                    @endforeach
                                    SCORE</h1>
                            </label>

                            <!-- ESTE FORM ENVIA LAS RESPUESTAS AL CONTROLLADOR GAMECONTROLLER -->

                            <form action="../../../home" method="GET">
                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}
                                {{ method_field('POST') }}
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="POST">
                                <button class="buttonStarted">
                                    BACK TO HOME
                                    <br>
                                    (CLICK AQUI)
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection

    </body>
</html>
