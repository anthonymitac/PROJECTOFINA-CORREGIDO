<?php

use Illuminate\Database\Seeder;
use App\Questions;
use App\Answer;
class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Questions::create([
            'questionname'=>'¿Cuál es el principio SOLID
            que indica que las abstracciones no deben
            depender de los detalles – los detalles
            deben depender de las abstracciones?',

            'answer_id'=>Answer::where('id',1)->value('id')
        ]);

        Questions::create([
            'questionname'=>'Patrón de diseño que indica
            que todo aquel código que hace referencia a
            seguridad, gestión de operaciones y logging,
            debe de ser encapsulado muy aparte de la lógica
            de la aplicación con el fin de lograr extensión y
            fácil mantenimiento de la misma',

            'answer_id'=>Answer::where('id',2)->value('id')
        ]);
        Questions::create([
            'questionname'=>'¿Cuál es el principio SOLID que
            indica que una clase debe de tener una única
             responsabilidad o característica?',

            'answer_id'=>Answer::where('id',3)->value('id')
        ]);
        Questions::create([
            'questionname'=>'Patrón de diseño que indica
            que se debe diseñar solamente lo que es necesario
            con el fin de evitar “sobre-ingenierías‟.',

            'answer_id'=>Answer::where('id',4)->value('id')
        ]);

        Questions::create([
            'questionname'=>'¿Cuál es el principio SOLID que
             indica que una clase debe estar abierta para la
              extensión y cerrada para la modificación?',

            'answer_id'=>Answer::where('id',5)->value('id')
        ]);

        Questions::create([
            'questionname'=>'Cuál es el principio SOLID que
            indica que los subtipos deben de ser sustituibles
            por sus tipos base (interfaz o clase base)?',

            'answer_id'=>Answer::where('id',6)->value('id')
        ]);
        Questions::create([
            'questionname'=>'¿Cuál es el principio SOLID que
             indica que los implementadores de interfaces de
             clases no deben de estar obligados a implementar
             métodos que no usan?',

            'answer_id'=>Answer::where('id',7)->value('id')
        ]);
        Questions::create([
            'questionname'=>'¿Qué es una estructura ?',

            'answer_id'=>Answer::where('id',8)->value('id')
        ]);
        Questions::create([
            'questionname'=>'¿Cómo se puede definir un patrón de diseño?',

            'answer_id'=>Answer::where('id',9)->value('id')
        ]);

        Questions::create([
            'questionname'=>'¿Qué son los patrones creacionales?',

            'answer_id'=>Answer::where('id',10)->value('id')
        ]);
        Questions::create([
            'questionname'=>'¿Qué se debe hacer en primera
            instancia para buscar un patrón de diseño que
            genere una solución?',

            'answer_id'=>Answer::where('id',11)->value('id')
        ]);
        Questions::create([
            'questionname'=>'¿Qué incluye un lenguaje de Patrón?',

            'answer_id'=>Answer::where('id',12)->value('id')
        ]);
        Questions::create([
            'questionname'=>'¿Cómo se define un patrón generativo?',

            'answer_id'=>Answer::where('id',13)->value('id')
        ]);

        Questions::create([
            'questionname'=>'¿Qué modelo de desarrollo vino después
            de la programación orientada a objetos',

            'answer_id'=>Answer::where('id',14)->value('id')
        ]);
        Questions::create([
            'questionname'=>'Permite definir una familia de
             algoritmos, encapsulándolos de manera que se
             pueda intercambiar uno por otro',

            'answer_id'=>Answer::where('id',15)->value('id')
        ]);
        Questions::create([
            'questionname'=>'Las formas negativas de evolución
            de un diseño arquitectónico no incluyen.',

            'answer_id'=>Answer::where('id',16)->value('id')
        ]);
        Questions::create([
            'questionname'=>'UML, por sus siglas en ingles es:',

            'answer_id'=>Answer::where('id',17)->value('id')
        ]);

        Questions::create([
            'questionname'=>'El Diagrama de secuencia describe',

            'answer_id'=>Answer::where('id',18)->value('id')
        ]);
        Questions::create([
            'questionname'=>'En esta vista se muestra desde
            la perspectiva de un ingeniero de sistemas todos
            los componentes físicos del sistema así como las
            conexiones físicas entre esos componentes que
            conforman la solución',

            'answer_id'=>Answer::where('id',19)->value('id')
        ]);
        Questions::create([
            'questionname'=>'¿Qué es y para que se utiliza una Master Page?',

            'answer_id'=>Answer::where('id',20)->value('id')
        ]);

        Questions::create([
            'questionname'=>'UML se utiliza para',

            'answer_id'=>Answer::where('id',21)->value('id')
        ]);
        Questions::create([
            'questionname'=>'El Diagrama de casos de uso pertenece a los Diagramas de Comportamiento',

            'answer_id'=>Answer::where('id',22)->value('id')
        ]);
        Questions::create([
            'questionname'=>'El Diagrama de secuencia describe',

            'answer_id'=>Answer::where('id',23)->value('id')
        ]);
        Questions::create([
            'questionname'=>'
            En esta vista se representa la funcionalidad que el sistema proporcionara a los usuarios finales.
           ',

            'answer_id'=>Answer::where('id',24)->value('id')
        ]);
        Questions::create([
            'questionname'=>'En esta vista se muestra el sistema desde la perspectiva de un programador y se ocupa de la gestión del software
           ',

            'answer_id'=>Answer::where('id',25)->value('id')
        ]);
        Questions::create([
            'questionname'=>'En esta vista se muestran los procesos que hay en el sistema y la forma en la que se comunican estos procesos; es decir,
            se representa desde la perspectiva de un integrador de sistemas
           ',

            'answer_id'=>Answer::where('id',26)->value('id')
        ]);
        Questions::create([
            'Esta vista va a ser representada por los casos de uso  software y
             va a tener la función de unir y relacionar las otras 4 vistas
           ',

            'answer_id'=>Answer::where('id',27)->value('id')
        ]);
        Questions::create([
            'Capa que encapsula la lógica del negocio.
           ',

            'answer_id'=>Answer::where('id',28)->value('id')
        ]);
        Questions::create([
            'Capa que representa a los objetos del modelo como interfaz gráfica,
            cuya responsabilidad principal reside en que el usuario a través de la GUI pueda interactuar con sus respectivos controladores para realizar solicitudes y recibir respuestas en forma gráfica.


           ',

            'answer_id'=>Answer::where('id',29)->value('id')
        ]);
        Questions::create([
            'Estamos desarrollando una funcionalidad de listado de facturas, donde deben mostrarse en rojo todas aquellas facturas que no hayan sido pagadas y en negro las restantes.
            ¿Dónde implementarías la lógica para realizar ese cambio de colores?

           ',

            'answer_id'=>Answer::where('id',30)->value('id')
        ]);
        Questions::create([
            'Capa que contiene los objetos que representan la información del negocio,
            así como también contiene mecanismos para acceder a la información y cambiar su estado.

           ',

            'answer_id'=>Answer::where('id',31)->value('id')
        ]);
        Questions::create([
            '¿Para qué se utilizan las áreas en MVC?

           ',

            'answer_id'=>Answer::where('id',32)->value('id')
        ]);
        Questions::create([
            '

           ',

            'answer_id'=>Answer::where('id',33)->value('id')



    }
}
