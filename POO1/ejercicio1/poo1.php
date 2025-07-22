  <?php
  class Employee {
     private $nombre;
     private $salario;

   public function initialize($nombre,$salario) {
    $this -> nombre = $nombre;
    $this -> salario = $salario;
   }

   public function print() : void {
    echo "nombre: " . $this->nombre . "\n";
    if ($this -> salario >600) {
        echo "A pagar impuestos";
    } else {
        echo "Te has librado.";
    }
}
}
?>

