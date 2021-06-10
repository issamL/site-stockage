<?php
try {
    $conn = new PDO("mysql:host=database-2.cpjphvxsypnw.eu-west-3.rds.amazonaws.com;dbname=userlogin;",
        "admin",
        "kharabacha2021");
}catch (PDOException $e){
    echo $e->getMessage();
}
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>