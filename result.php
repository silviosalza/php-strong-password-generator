<?php
session_start();
var_dump(($_SESSION["my_password"]))

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
    <h1>Password consigliata:
    <?php
    echo $_SESSION['my_password'] ;
    ?>
    </h1>
</body>
</html>
