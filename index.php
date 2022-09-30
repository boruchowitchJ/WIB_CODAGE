<?php
session_start();
include './src/db/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/carte.css">
    <link rel="stylesheet" href="./assets/css/container.css">
    <link rel="stylesheet" href="./assets/css/create.css">
    <link rel="stylesheet" href="./assets/css/logIn.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    

    


    <title>Walk in Brussels</title>
</head>

<body>
    <?php include './src/router/route.php'; ?>

    <script src="./assets/scripts/create.js"></script>
</body>

</html>