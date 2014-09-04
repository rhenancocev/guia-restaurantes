<?php

    function mostra ($resultado){
        echo "Resultado: ".$resultado;
    }

    function soma ($x,$y){
        $t=$x+$y;
        return $t;
    }

    function subtração($x, $y){
     $t = $x - $y;
      return $t;
      }
    function multiplicação($x, $y){
     $t = $x * $y;
     return $t;
     }
     function divisão ($x, $y){
     $t = $x / $y;
     return $t;
     }
            
    $n1 = 10;
    $n2 = 5;
    
   $resultado = soma($n1, $n2);

   mostra($resultado);
            
   echo "<br><br>";
            
   $resultado = subtração($n1, $n2);

   mostra($resultado);
            
   echo "<br><br>";
            
   $resultado = multiplicação($n1, $n2);

   mostra($resultado);
            
   echo "<br><br>";
            
   $resultado = divisão($n1, $n2);

   mostra($resultado);
            
            
            echo "<br><br>";

?>
