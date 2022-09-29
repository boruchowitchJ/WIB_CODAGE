<?php

/*est-ce-que dans l'url ->tu as a un moment quand tu page ici (donc à chaque fois que la page est chargée...)
 ?page=quelquechose */


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
    }
    else if($get["page"] == "contact")
    {
        include "./src/controller/header.php";
        include "./src/controller/contact.php";
    }
}
else
{
    include "./src/controller/LogIn.php";
}
