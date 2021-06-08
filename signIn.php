<?php
//include 'dbConfig.php';
include 'functions.php';
//connection
$conn = new PDO("mysql:host=database-2.cpjphvxsypnw.eu-west-3.rds.amazonaws.com;dbname=userlogin;port=3306", "admin", "kharabacha2021");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//script
$exists=false;

$existingUser = $_POST['username'];
$password = $_POST['pwd'];

$funct = new myfunctions\Basicfunctions();
if($funct -> isEmptyInfo($existingUser,$password,'not null')){
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
    exit();
}else{
    header("location: login.html?user=false");
    exit();
}
