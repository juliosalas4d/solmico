<?php

use Illuminate\Database\Seeder;

class EdoFisicoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
	{
	   DB::table('edofisico')->insert(array(
	     array(
	       'edofisico' => 'Sólido',
	       'obs' => 'Los objetos en estado sólido se presentan como cuerpos de forma definida; sus átomos a menudo se entrelazan formando estructuras estrechas definidas, lo que les confiere la capacidad de soportar fuerzas sin deformación aparente. Son calificados generalmente como duros así como resistentes, y en ellos las fuerzas de atracción son mayores que las de repulsión.',
	       'created_at' => NOW(),
	     ),
	     array(
	       'edofisico' => 'Semisólido',
	       'obs' => 'Una sustancia que tiene los atributos tanto de los materiales sólidos como de los líquidos. Similar a semi-líquido, pero relacionado más con sólidos que con líquidos. Más generalmente, cualquier sustancia en que la fuerza requerida para producir una deformación, depende tanto de la magnitud como de la tasa de deformación.',
	     ),
	     array(
	       'edofisico' => 'Líquido',
	       'obs' => 'Si se incrementa la temperatura de un sólido, este va perdiendo forma hasta desaparecer la estructura cristalina, alcanzando el estado líquido. Característica principal: la capacidad de fluir y adaptarse a la forma del recipiente que lo contiene. En este caso, aún existe cierta unión entre los átomos del cuerpo, aunque mucho menos intensa que en los sólidos.',
	     ),
		array(
	       'edofisico' => 'Gaseoso',
	       'obs' => 'Se denomina gas al estado de agregación de la materia compuesto principalmente por moléculas no unidas, expandidas y con poca fuerza de atracción, lo que hace que los gases no tengan volumen ni forma definida, y se expandan libremente hasta llenar el recipiente que los contiene. Su densidad es mucho menor que la de los líquidos y sólidos, y las fuerzas gravitatorias y de atracción entre sus moléculas resultan insignificantes.',
	     ),
		array(
	       'edofisico' => 'Plasmático',
	       'obs' => 'El plasma es un gas ionizado, es decir, que los átomos que lo componen se han separado de algunos de sus electrones. De esta forma el plasma es un estado parecido al gas pero compuesto por aniones y cationes (iones con carga negativa y positiva, respectivamente), separados entre sí y libres, por eso es un excelente conductor. Un ejemplo muy claro es el Sol.',
	     ),
		array(
	       'edofisico' => 'Polvo',
	       'obs' => 'Polvo es un nombre genérico para las partículas sólidas con un diámetro menor a los 500 micrómetros y, en forma más general, materia fina.',
	     ),
		array(
	       'edofisico' => 'Otro',
	       'obs' => 'Otros estados de la materia, no contemplados en las categorías anteriores.',
	     ),
	   ));
	}
}
