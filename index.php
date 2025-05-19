
<?php


class Frutas{
    public function comer($manzana, $pera) {
        echo "comer una $manzana por la mañana y la $pera por la tarde " . "\n";
    }
}
$frutas = new frutas();
$frutas->comer("manza", "pera");



class Persona{
    public function saludar($vecina1, $vecina2){
        echo "buen dia $vecina1 y $vecina2, como estan?";
    }
}
$persona = new Persona();
$persona->saludar("camila", "marcela");

class Inventario{
    public function registroDeCompras($leche, $avena, $azucar, $arroz){
        echo "Compras de la semana: ";
        echo "leche comprada:  $leche unidades ";
        echo "avenas comprada: $avena unidades ";
        echo "azucar comprada: $azucar unidades ";
        echo "arroz comprado:  $arroz unidades ";
    }
}

$inventario = new Inventario();
$inventario->registroDeCompras('4','19','1','3');




class Colegio{

    public function cantidadDeEstudiantes($sexto, $septimo, $octavo, $noveno, $decimo, $once){
        $total = $sexto + $septimo + $octavo + $noveno + $decimo + $once;

        echo "la cantidad de estudiantes del colegio I.E.M.A:" ;
        echo "Toltal de estudiantes de 6° : $sexto  ";
        echo "Total de estudiantes de 7° :  $septimo";
        echo "Total de estudiantes de 8° :  $octavo ";
        echo "Total de estudiantes de 9° :  $noveno ";
        echo "Total de estudiantes de 10° : $decimo ";
        echo "Total de estudiantes de 11° : $once ";
        return $total;

    }
}

$school = new Colegio();
$total = $school->cantidadDeEstudiantes(41, 32, 39, 29, 22, 20);
echo "El total de estudiantes es: $total";




class Libro{
    public $titulo;
    public $autor;
    public $año;
}

$miLibro = new Libro();



$miLibro->titulo = 'Cien años de soledad';
$miLibro->autor = 'Gabriel García Márquez';
$miLibro->año = '1967';


echo "titulo" . $miLibro->titulo ;






$frutas = ["Manzana", "Banana", "Pera"];

foreach ($frutas as $fruta) {
    echo "Fruta: $fruta <br>";
}

?>


















