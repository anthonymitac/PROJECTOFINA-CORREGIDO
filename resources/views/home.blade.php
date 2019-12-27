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
                            {{ 'WELCOME USER :' }} {{ Auth::user()->name }}
                            <br>
                            {{ 'TU ID DE GAMER ES EL SIGUIENTE: ' }} {{ Auth::user()->id }}
                        </div>
                        <div class="card-body-home">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            
                            <form action="home/startedGame"  method="POST">
                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}
                                {{ method_field('POST') }}

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="POST">
                                
                                <button name="answer" value="1" class="buttonStarted">
                                    STARTED QUESTIONS GAME
                                    <br>
                                    (CLICK AQUI)
                                </button>


                                <!-- MOSTRAREMOS LA LISTA DE LOS USUARIOS EN ORDEN DE LOS PUNTOS DE -->
                                <!-- DE MAYOR A MENOR -->
                                <table border="2" class="tablescore">
                                    <tr>
                                      <th scope="row" >GAMER ID</th>
                                      <th > SCORE</th>
                                    </tr>
                                    
                                    <tr>
                                        @foreach ($ordergame as $og )
                                        <td>{{ $og->id }}</td>
                                        <td>{{ $og->score }} Puntos</td>
                                        @endforeach
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection

    </body>
</html>
