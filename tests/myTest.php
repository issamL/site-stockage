<?php
class myTest extends PHPunit_Framework_Testcase{
    /*
     * testing some functions
     */

    public function inputSettingsEmpty(){
        include('functions.php');
        $result = isEmptyInfo('!null','!null','!null');
        $this -> assertEquals(false,$result);
    }
}