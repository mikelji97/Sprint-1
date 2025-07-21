<?php
$nota = readline("Introduzca la nota del alumno(con valores de 0 a 100):");

function notilla($nota){

if ($nota > 60 && $nota <100){
    return "Enhorabuena eres de Primera Division.";
} else if ($nota >45 && $nota <60) {
    return "Bien, eres de Segunda Division.";
} else if ($nota >33 && $nota <45) {
    return "Eres de Tercera Division.";
}else if ($nota <0 || $nota >100){
    return "Nota introducida no es correcta.";
} else if ($nota >= 0 && $nota <= 33) {    
}else{
    return "Losiento, has suspendido.";
}
}
echo notilla($nota);
?>