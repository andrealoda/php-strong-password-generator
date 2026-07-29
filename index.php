<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .container {
            width: 500px;
            margin: 0 auto;
            text-align: center;
            color: white;
            background-color: #491d6d;
            padding: 50px;
            margin-top: 50px;
        }

        .title {
            margin-bottom: 20px;
        }

        .subtitle {
            margin-bottom: 20px;
        }

        .form {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #6a1b9a;
            padding: 20px;
        }

        .label {
            margin-bottom: 10px;
        }

        .input {
            margin-bottom: 20px;
            padding: 10px;
            width: 200px;
        }

        .button {
            padding: 10px 20px;
            background-color: #f0a500;
            border: none;
            color: white;
            cursor: pointer;
        }

        .error {
            color: red;
        }

        .password {
            font-weight: bold;
            margin-top: 30px;
        }
    </style>

</head>

<body>

    <div class="container">
        <h1 class="title">Strong Password Generator</h1>
        <h2 class="subtitle">Genera una password sicura</h2>
        <form class="form" action="" method="GET">
            <label for="length" class="label">Lunghezza password</label>
            <input type="number" name="length" id="length" class="input" placeholder="quanti caratteri vuoi?" min="1" required>
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
        echo "<h3 class='password'>La tua password generata è: </h3>" . "<br>" . $password;

        ?>

    </div>

</body>

</html>