<?php
// resume the session
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator Result</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="container">
        <?php
        // retrieve the password from the session
        if (isset($_SESSION['password'])) {
            $password = $_SESSION['password'];
            echo "<h3>La tua password generata è: </h3>" . "<br>" . "<h2 class='password'>$password</h2>";
        } else {
            echo "<h3>Nessuna password generata.</h3>";
        }

        unset($_SESSION['password']);


        echo '<button class="button" onclick="window.location.href=\'index.php\'">BACK</button>';

        ?>
        
    </div>
</body>

</html>