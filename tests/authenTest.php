<?php
use PHPUnit\Framework\TestCase;

class authenTest extends Testcase{
    /*
     * testing some functions
     */

    public function inputSettingsEmpty(){
        include('functions.php');
        $result = isEmptyInfo('!null','!null','!null');
        $this -> assertEquals(false,$result);
    }
}

