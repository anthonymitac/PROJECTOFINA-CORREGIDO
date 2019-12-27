<?php

use Illuminate\Database\Seeder;
use App\Answer;
class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Answer::create([
            'answername'=>'Principio de Inversión de Dependencias.'
        ]);
        Answer::create([
            'answername'=>'Patrón de Abstracción y Separación de Código Transversal.'
        ]);
        Answer::create([
            'answername'=>'Principio de Única Responsabilidad.'
        ]);
        Answer::create([
            'answername'=>'Patrón de Disminución de Diseño Top-Down.'
        ]);
        Answer::create([
            'answername'=>'Principio Abierto Cerrado.'
        ]);
        Answer::create([
            'answername'=>'Principio de Sustitución de LisKov.'
        ]);
        Answer::create([
            'answername'=>'Principio de Segregación de Interfaces.'
        ]);
        Answer::create([
            'answername'=>'Una estructura es una "miniarquitectura" 
            reutilizable, que sirve como base desde la que se pueden 
            aplicar a otros patrones de diseño.'
        ]);
        Answer::create([
            'answername'=>'Un patrón de diseño describe un problema 
            que ocurre una y otra vez en un ambiente de desarrollo de 
            software, y luego describe el núcleo de su solución en forma 
            tal que es posible usarla un millón de veces sin elaborarla 
            dos veces de la misma forma.'
        ]);
        Answer::create([
            'answername'=>'Los patrones creacionales se centran en la 
            "creación, composición y representación" de objetos.'
        ]);
        Answer::create([
            'answername'=>'Se debe comenzar con el estudio del modelo
             de requerimientos a fin de detectar los problemas, definir
              el contexto, y describir el sistema de fuerzas.'
        ]);

        Answer::create([
            'answername'=>'Un conjunto de Patrones'
        ]);
        Answer::create([
            'answername'=>'Un patrón "generativo" describe el problema,
             el contexto y las fuerzas, y también una solución práctica
              para el problema'
        ]);
        Answer::create([
            'answername'=>'Programación por componentes'
        ]);
        Answer::create([
            'answername'=>'Estrategia'
        ]);
        Answer::create([
            'answername'=>'La ciclogénesis arquitectónica, que
             indica que una parte de al estructura define ahora un ciclo.'
        ]);
        Answer::create([
            'answername'=>'Unified Modeling Language'
        ]);
        Answer::create([
            'answername'=>'Flujo de acciones secuenciales'
        ]);
        Answer::create([
            'answername'=>'Vista Física '
        ]);
        Answer::create([
            'answername'=>'Es una plantilla donde se definen los 
            elementos, referencias a hojas de estilo y javascript 
            que regularmente existen siempre en todo el sitio.'
        ]);
    }
}
