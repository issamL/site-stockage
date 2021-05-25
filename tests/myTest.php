<?php
use PHPUnit\Framework\TestCase;
require __DIR__ . "/../functions.php";

class myTest extends Testcase{
   
    /** @test */
    public function testInput(){

        $funct = new myfunctions\Basicfunctions;
        $result = $funct ->isEmptyInfo('!null','!null','!null');

        $this -> assertEquals(false,$result);
    }
}
