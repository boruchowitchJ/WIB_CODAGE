<?php



if (isset($_GET["page"])) {
    $get = $_GET;

    if ($get["page"] == "login") {
        include "./src/controller/LogIn.php";
    } else if ($get["page"] == "createAccount") {
        include "./src/controller/create.php";
    } else if ($get["page"] == "carte") {
        include "./src/controller/carte.php";
    }
} else {
    include "./src/controller/homePage.php";
}
