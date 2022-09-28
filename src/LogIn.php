<?php
use LDAP\Result;
include_once './Connect_db-walk_in_Brussels.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

// Vérification du nom d'utilisateur

$isFound = false; // connu

if(isset($_POST['username'], $_POST['password'])){
    $user_name = $_POST['username'];
    $pass_word = $_POST['password'];


    $sqlQuery = "
        SELECT *
        FROM members
        WHERE username = :param_username AND :param_password

    ";

    $statement = $mysqldb ->prepare($sqlQuery);
    $statement->execute(array("param_username" => $user_name, "param_password" => $pass_word));
    $result = $statement ->fetchAll();

    if($result){
        $db_usrName = $result[0]['username'];
        $db_passwd = $result[0]['password'];

        if($result){
            $isFound = true;
        }
    }

}

if($isFound){
    echo "Welcome, Start your adventure with us !";
}else {
    include_once('./views/login.php');
}

?>
</body>
</html>
