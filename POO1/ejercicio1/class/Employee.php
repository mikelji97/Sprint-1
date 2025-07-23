<?php
    class Employee
    {
        private string $nombre;
        private int $salario;

        function __construct( string $nombre, int $salario){
            $this->nombre = $nombre;
            $this->salario = $salario;
        
        }
        public function print(): void
        {
            echo "Nombre: " . $this->nombre . ",\n";
            if ($this->salario > 600) {
                echo "A pagar impuestos.";
            } else {
                echo "Te has librado.<br>";
            }
        }
    
    }
    ?>
