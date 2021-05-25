<?php
use PHPUnit\Framework\TestCase;
include 'functions.php';

class myTest extends Testcase{
   
    /** @test */
    public function inputSettingsEmpty(){
        include('functions.php');
        $result = isEmptyInfo('!null','!null','!null');
        $this -> assertEquals(false,$result);
    }
}
