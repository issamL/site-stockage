<?php
use PHPUnit\Framework\TestCase;
require __DIR__ . "/../functions.php";

class myTest extends Testcase{
   
    /** @test */
    public function testInputTrue(){

        $funct = new myfunctions\Basicfunctions;
        $result = $funct ->isEmptyInfo('!null','!null','!null');

        $this -> assertEquals(false,$result);
    }

    /** @test */
    public function testInputFalse(){

        $funct = new myfunctions\Basicfunctions;
        $result = $funct ->isEmptyInfo('','!null','!null');

        $this -> assertEquals(true,$result);
    }

}
