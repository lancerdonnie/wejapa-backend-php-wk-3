<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wejapa SignUp</title>
</head>
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }
</style>
<?php
session_start();
?>

<body style="background-color:<?php echo $_SESSION["color"] ?>">
    <h1>You have successfully signed up</h1>
</body>

</html>