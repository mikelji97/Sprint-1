<?php
/*Ejercicio 6
Charlie me mordió el dedo! Charlie te morderá el dedo exactamente el 50% del tiempo.

Escribe La función isBitten () que devuelve TRUE con un 50% de probabilidad y FALSE de lo contrario.
Importante

Consejo: puede que la función rand () te resulte útil. */

      function isBitten() : bool {
    
        $resultado = rand(0,1);
    
      if ($resultado == 1) {
          return true;
      } else {
      return false;
      }
    }
      
      $resultado = isBitten();
      
      if ($resultado) {
          echo "Charlie te ha mordido el dedo.";
      } else {
          echo "Has tenido suerte.";
      }

?>
