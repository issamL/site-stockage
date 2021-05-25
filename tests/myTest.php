<?php
use PHPUnit\Framework\TestCase;

class myTest extends Testcase{
   
    /** @test */
    public function testInput(){

        $funct = new myfunctions\Basicfunctions;
        $result = $funct ->isEmptyInfo('!null','!null','!null');

        $this -> assertEquals(false,$result);
    }
}
