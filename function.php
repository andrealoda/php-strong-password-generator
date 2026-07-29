<?php



function passwordGenerator(int $length)
{
    $numbers = '0123456789';
    $letters = 'abcdefghijklmnopqrstuvwxyz';
    $capitalLetter = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $symbols = '!@#$%^&*()_+-=';
    $characters = $numbers . $letters . $capitalLetter . $symbols;
    $password = '';

    if ($length < 1 || !is_numeric($length) || $length > 20) {
        echo "<p class='error'>Inserisci un numero maggiore di 0 e minore o uguale a 20</p>";
    } else {

        for ($i = 0; $i < $length; $i++) {
            $password .= $characters[random_int(0, strlen($characters) - 1)];
        }
        return $password;
    }
}



?>