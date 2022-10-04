
<?php
// ///si les champs de mail et password remplis
// if (isset($_POST['email'])&& isset($_POST['password'])){
    
//     $email =$_POST['email'];
//     $pass=$_POST['password'];
//     //verification si les infos entrée sont correctes 
// // connexion a la DB

// $host = "remotemysql.com";
// $user = "qypIEJ70Uk";
// $db = "qypIEJ70Uk";
// $pwd = "LTkbwXTH1g";
// $port = 3306;

// $connexion = mysqli_connect($host,$user,$pwd,$db);

// //requette pour selectionner tout les users
// $req = mysqli_query($connexion,"SELECT * FROM `user` email='$email' AND password='$pass'");
// //compter le nb de ligne ds la DB
// $num_ligne= mysqli_num_rows($req);
// if($num_ligne >0){
//     header("Location: ./src/views/carte.php");
// }else{
//     echo"error";
// }


// }

include "./src/db/db.php";

$isFound = false; //connu
        $connectedUser;
        $loginAttempt = 0;

        if(isset($_POST['email'], $_POST['password'])){
            
            $loginAttempt++;

            $email = $_POST['email'];
            $pass_word = $_POST['password'];

            $sqlQuery = "
                SELECT *
                FROM user
                WHERE email = :param_email AND password = :param_password 
            ";

            $statement = $mysqlClient->prepare($sqlQuery); 
            $statement->execute(array("param_email" => $email, "param_password" => $pass_word));
            
    
            
              
                

            
            $result = $statement->fetchAll(); 
         
            if($result){
                $isFound = true;
                $connectedUser = $result[0]['name'];
                $email = $result[0]['email'];
            }

        }

        if($isFound){
        //     include "./src/controller/header.php";
        // include "./src/controller/carte.php";
            echo "Bienvenue  ! $connectedUser ($email)";
        }else {


            
            echo "error!";
        }


    include "./src/views/login.php";

?>