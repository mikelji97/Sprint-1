<?php
$nota = readline("Introduzca la nota del alumno(con valores de 0 a 100):");

function notilla(int $nota) : string{

if ($nota > 60 && $nota <100){
    return "Enhorabuena eres de Primera Division.";
} else if ($nota >45 && $nota <60) {
    return "Bien, eres de Segunda Division.";
} else if ($nota >33 && $nota <45) {
    return "Eres de Tercera Division.";
}else if ($nota <0 && $nota <=33){
    return "Losiento, has suspendido.";
}else{    
    return "Nota introducida no es correcta.";
}
}
echo notilla($nota);
?>