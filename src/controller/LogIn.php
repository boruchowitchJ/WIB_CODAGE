<?php



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
