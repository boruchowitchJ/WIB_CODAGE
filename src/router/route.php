<?php

if(!isset($_SESSION))
{
    session_start();
}


if(isset($_SESSION['message'])) {
?>
    <script>
        toastr.info('<?= $_SESSION['message'] ?>');
    </script>
<?php
    $_SESSION['message'] = null;
}



/*est-ce-que dans l'url ->tu as a un moment quand tu page ici (donc à chaque fois que la page est chargée...)
 ?page=quelquechose */

 if(!isset($_SESSION['name']) && $_GET["page"] != "login" && $_GET["page"] != "createAccount") {
    header('location:http://localhost/WIB_CODAGE?page=login');
 }


if (isset($_GET["page"]))
{
    $get = $_GET;

    if ($get["page"] == "createAccount")
    {
        include "./src/controller/create.php";

    }
    else if ($get["page"] == "carte")
    {
        include "./src/controller/header.php";
        include "./src/controller/carte.php";

        if(isset($get["poi"]))
        {
            include "./src/controller/carteSlide.php";

        }
    }
    else if($get["page"] == "contact")
    {
        include "./src/controller/header.php";
        include "./src/controller/contact.php";
    }

    else if($get["page"] == "login")
    {
        include "./src/controller/LogIn.php";
    }
}
else
{
    include "./src/controller/LogIn.php";
}
