<?php
use PHPUnit\Framework\TestCase;


class myTest extends Testcase{
   
    /** @test */
    public function inputSettingsEmpty(){
        $result = isEmptyInfo('!null','!null','!null');
        $this -> assertEquals(false,$result);
    }
}
