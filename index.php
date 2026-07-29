<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <h1 class="title">Strong Password Generator</h1>
        <h2 class="subtitle">Genera una password sicura</h2>
        <form action="" method="GET">
            <label for="length" class="label">Lunghezza password</label>
            <input type="number" name="length" id="length" class="input" placeholder="inserisci la lunghezza della password">
            <button type="submit" class="button">Genera</button>
        </form>



        <?php

        $length = $_GET['length'] ?? 0;

        function passwordGenerator($length)
        {
            $numbers = '0123456789';
            $letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $symbols = '!@#$%^&*()_+-=';
            $characters = $numbers . $letters . $symbols;
            $password = '';

            if ($length < 1) {
                echo "<p class='error'>Inserisci un numero maggiore di 0</p>";
            } else {

                for ($i = 0; $i < $length; $i++) {
                    $password .= $characters[random_int(0, strlen($characters) - 1)];
                }
                return $password;
            }
        }

        $password = passwordGenerator($length);
        echo "<p class='password'>La tua password generata è: $password</p>";

        ?>

    </div>

</body>

</html>