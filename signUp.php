
<?php
include 'dbConfig.php';
include 'functions.php';
//sign up procedure

//checking if user already exists
$userN = $_POST['name'];
$funct = new myfunctions\Basicfunctions;
if($funct -> isEmptyInfo($userN,$_POST['password'],$_POST['email'])){
    header("location: login.html?error=emptyinput");
    exit();
}
$doublonVerif = "SELECT username from users";
$result = $conn->prepare($doublonVerif);
//returns an array containing all usernames
$result->execute();
$doublon = false;
while (($row = $result->fetch(PDO::FETCH_NUM)) && $doublon == false) {
    if (in_array($userN, $row)) {
        $doublon = true;
    }
}

//inserting data to database
if ($doublon != true) {
    $data = array($_POST['name'], password_hash($_POST['password'], PASSWORD_DEFAULT), $_POST['email']);
    $createUser = "INSERT INTO users (username, password, email)  VALUES (?,?,?)";
    $stmt = $conn->prepare($createUser);
    $stmt->execute($data);
    header("location: index.html?user=true");
    exit();
} else {
    header("location: login.html?error=username_exists");
    exit();
}










?>


