<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <div class="container">
        <h1 class="title">Strong Password Generator</h1>
        <h2 class="subtitle">Genera una password sicura</h2>
        <form class="form" action="" method="GET">
            <label for="length" class="label">Quanti caratteri deve avere la password?</label>
            <input type="number" name="length" id="length" class="input" placeholder="" min="1" required>
            <button type="submit" class="button">Genera</button>
        </form>



        <?php

        $length = $_GET['length'] ?? 0;

        include './function.php';

        $password = passwordGenerator($length);
        echo "<h3 class='password'>La tua password generata è: </h3>" . "<br>" . $password;

        ?>

    </div>

</body>

</html>