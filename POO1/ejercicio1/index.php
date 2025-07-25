<?php
require_once 'class/Employee.php';

$empleado1 = new Employee("Mikel", 6500);
$empleado2 = new Employee("Edu", 340);

$empleado2->print();
$empleado1->print();




?>