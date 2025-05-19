<?php

$estudiantes = ["juan", "maria", "pedro", "ana", "luis" ];


foreach ($estudiantes as $estudiante) {
    echo "hola, $estudiante, bienvenido a clase. <br>";
    
}




$animales = [
    "perro" => 'guaoo',
    "gato" => 'miauu' ];

    foreach ($animales as $animal => $sonido){
        echo "el $animal hace: $sonido <br>";
        echo "<hr>";
    }




$estudiantes = [
    "pedro" => 3.4,
    "luis" => 4.0,
    "martha" => 2.8,
    "camilo" => 2.9,
    "esteban" => 3.0,
    "junior" => 2.0
];

foreach($estudiantes as $alumno => $calificacion){

    echo "$alumno saco $calificacion - ";
    echo "<hr>";
    if($calificacion >= 3.0){
        echo "aprobo <br>";
    } else {
        echo "reprobo <br>";
    }

    
}
 



$productos = [

    "queso" => 7,
    "arina" => 10,
    "azucar" => 3,
    "arroz" => 6,
    "platano" => 8,
    "limon" => 9,
    "cafe" => 1
    
];

foreach($productos as $inventario => $cantidad){
    echo "$inventario: $cantidad Unidades - ";
    

    if($cantidad > 0){
        echo "Disponible <br>";
    } 
    else {
        echo "Agotado <br>";
       
    }
}















$notas = [
    
    "Beimar" => ["materia 1" => 3.8,  "materia 2" => 2.1 ],
    "Luis"  => ["materia 1" => 4.8, "materia 2"=>  4.3],
    "Maria" => ["materia 1" => 1.2, "materia 2" => 2.2],
    "Carlos" =>[ "materia 1" => 4.3, "materia 2" => 2.0] 
];

$aprobados = 0;
$reprobados = 0;
     foreach($notas as $estudiante => $calificacion){
        $materia1 = $calificacion['materia 1'];
        $materia2 = $calificacion['materia 2'];

        $promedio = ($materia1 + $materia2) / 2;

        if ($promedio >= 3.0 ){
            $aprobados++;
            echo "$estudiante: promedio $promedio - Aprobro, felicitaciones<br>";

        } else{
            $reprobados++;
            echo"$estudiante: promedio $promedio - Reprobo, Ezfuerzate mas<br>";
        }




     }
     echo "<br><strong>Total que aprobaron $aprobados<strong><br>";
     echo "<strong>Total que reprobaron $reprobados<strong>";









$tienda =  [
    "pan" => ["precio" => 3500, "cantidad" => 21],
    "leche" => ["precio" => 6500, "cantidad" => 7],
    "avena" => ["precio" => 3234, "cantidad" => 0],
    "cafe" => ["precio" => 9783, "cantidad" => 33]
];

$disponible = 0;
$agotado = 0;

            foreach($tienda as $inventario => $datos){

                $precio = $datos ["precio"];
                $cantidad = $datos ["cantidad"];
                echo "$inventario - precio: $precio, cantidad: $cantidad ";

                if($cantidad >0){
                    $disponible++;

                    echo "Disponible <br>";
                }else{
                    $agotado++;
                    echo "Agotado<br>";
                }

            }
            echo "<strong>total de productos disponibles: $disponible</strong><br>";
            echo "<strong>total de productos agotados: $agotado</strong>";









class Notas {
    private $estudiantes = [
        "Beimar" => ["materia 1" => 3.8, "materia 2" => 2.1],
        "Luis"   => ["materia 1" => 4.8, "materia 2" => 4.3],
        "Maria"  => ["materia 1" => 1.2, "materia 2" => 2.2],
        "Carlos" => ["materia 1" => 4.3, "materia 2" => 2.0]
    ];

    

    public function evaluarEstudiantes(){
        $reprobados = 0;
        $aprobados = 0;

        foreach($this->estudiantes as $estudiante => $calificacion ){

        $materia1 = $calificacion["materia 1"];
        $materia2 = $calificacion["materia 2"];

        $promedio = ($materia1 + $materia2) / 2;

        echo "$estudiante - promedio final $promedio - ";
        if($promedio > 3.0){
            $aprobados++;
            echo"Aprobado <br>";
        }else{
            $reprobados++;
            echo"Reprobado <br>";
        }

    }
    echo"Total de estudiantes reprobados: $reprobados <br>";
    echo "Totalde estudiantes aprobados: $aprobados";
}
}


$nota = new Notas();
$nota->evaluarEstudiantes();







class Control {

    private $ciudades = [
        "medellin" => ["mañana" => 40, "tarde" => 24],
        "pereira" => ["mañana" => 28, "tarde" => 22],
        "quibdo" => ["mañana" => 33, "tarde" => 38]

    ];
    

    public function calcularTemperatura(){

        $alta = 0;
        $normal = 0;

        foreach($this->ciudades as $ciudad => $datos){

         $mañana =    $datos ["mañana"];
          $tarde =   $datos ["tarde"];


            $temp = ($mañana + $tarde) / 2;

            echo "Temperatura de $ciudad en la mañana: $mañana, en la tarde: $tarde ";

            if($temp > 30 ){
                $alta++;
                echo "Alta <br>";
            }else{
                $normal++;
                echo " Normal <br>";
            }


           
        } echo "<strong>Total de ciudades con temperaturas altas: $alta</strong>";
    }

}

$controles = new Control();
$controles->calcularTemperatura(); 




class Inventario {
    private $productos = [ 
        "frutas" =>  ["mango" => 8, "lulo" => 11, "pera" => 23],
        "verduras" => ["cebolla" => 6, "pimenton" => 3, "ajo" => 8],
        "granos" =>   ["lentejas" =>11, "frijoles" => 6,]

    ];
        public function gestorDeInventario(){
            
            
            
            $disponibles = 0;
            $agotados = 0;

            
            foreach($this->productos as $categoria => $productos ){
                    echo "$categoria";
                    

                foreach($productos as $nombre => $cantidad){
                    echo "$nombre: $cantidad";

                }

                   

                     
                    if($cantidad > 0){
                        $disponibles++;
                         echo "Disponibles <br>";
                    }else{
                        $agotados++;
                         echo "Agotado";
                    }


                }
                 echo "Total de productos disponibles $disponibles <br>";
                 echo "Total de productos agotados $agotados";
        }
}

$inventarios = new Inventario();
$inventarios->gestorDeInventario();





class Dulceria{

    public $dulces = [
        "bombombun" => ["valor" =>20],
        "tumis" =>     ["valor" =>0],
        "menta" =>     ["valor" =>16],
        "hall" =>      ["valor" =>0]
        
    ];
    
 

    public function verificarInventario(){

        
        $disponibles = 0;
        $agotado = 0;

        foreach($this->dulces as $dulce => $cantidad ){
            $canti = $cantidad["valor"];
            echo "$dulce: $canti ";




           if($canti >0 ){
                $disponibles++;
                echo "Disponible <br>";
            }else{
            $agotado++;
            echo "Agotado <br>";
        }
         }echo "<strong>total de disponibles $disponibles</strong><br>";
         echo "<strong>total de agotados $agotado</strong>";

    } 
}

$dul = new Dulceria();
$dul ->verificarInventario();



 