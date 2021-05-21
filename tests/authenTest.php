<?php
class authenTest extends PHPunit\Framework\Testcase{
    /*
     * testing some functions
     */

    public function inputSettingsEmpty(){
        include('functions.php');
        $result = isEmptyInfo('!null','!null','!null');
        $this -> assertEquals(false,$result);
    }
}

