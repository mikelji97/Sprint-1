<?php 

use PHPUnit\Framework\TestCase;

require_once "examschecker";


class ExamsCheckerTest extends TestCase{

    function testPrimeraDivision(){
        $examsChecker = new ExamsChecker(99);
        $this->assertEquals("Enhorabuena eres de Primera Division.",$examsChecker->notilla()) ;
    }
    
    function testSegundaDivision(){
        $examsChecker = new ExamsChecker(58);
        $this->assertEquals("Bien, eres de Segunda Division.",$examsChecker->notilla());
    }  
    
    function testTerceraDivision(){
        $examsChecker = new ExamsChecker(37);
        $this->assertEquals("Eres de Tercera Division.",$examsChecker->notilla());
    }
    function testSuspenso(){
        $examsChecker = new ExamsChecker(15);
        $this->assertEquals("Lo siento, has suspendido.",$examsChecker->notilla());
    }

    function testOutOfRange(){
        $examsChecker = new ExamsChecker(-2);
        $this->assertEquals("Nota introducida no es correcta.",$examsChecker->notilla());
    }

}

?>
