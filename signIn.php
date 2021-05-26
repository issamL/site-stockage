<?php
include 'dbConfig.php';
include 'functions.php';

$exists=false;
$existingUser = $_POST['username'];
$funct = new myfunctions\Basicfunctions;
$password = $_POST['pwd'];
$result = $funct -> isEmptyInfo(isEmptyInfo($existingUser,$password,'not null'));
if($result){
    header("location: login.html?error=emptyinput");
    exit();
}
$verifUser = "SELECT username, password from users";
$result = $conn->prepare($verifUser);
//returns an array containing all usernames
$result->execute();
while (($row = $result->fetch(PDO::FETCH_NUM)) && $exists==false) {
    if($row[0]==$existingUser && password_verify($password, $row[1])){
            $exists = true;
    }
}
if($exists==true){
    header("location: index.html?user=true");
}else{
    echo "username or password incorrect :)";
}
