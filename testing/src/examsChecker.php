<?php


class ExamsChecker {

    public function __construct(private int $nota){}

    function notilla() {

        if ($this->nota > 60 && $this->nota < 100) {
            return "Enhorabuena eres de Primera Division.";
        } else if ($this->nota > 45 && $this->nota < 60) {
            return "Bien, eres de Segunda Division.";
        } else if ($this->nota > 33 && $this->nota < 45) {
            return "Eres de Tercera Division.";
        } else if ($this->nota > 0 && $this->nota <= 33) {
            return "Losiento, has suspendido.";
        } else {
            return "Nota introducida no es correcta.";
        }
    }
}
