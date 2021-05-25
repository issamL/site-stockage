<?php
namespace functions;

function isEmptyInfo($name,$email,$password){
    $result=false;
    if (empty($password) || empty($email) || empty($name)){
        $result = true;
    }
    return $result;
    }
?>
