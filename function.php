<?php



function passwordGenerator(int $length): string
{
    $numbers = '0123456789';
    $letters = 'abcdefghijklmnopqrstuvwxyz';
    $capitalLetter = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $symbols = '!@#$%^&*()_+-=';

    if ($length < 1 || !is_numeric($length) || $length > 20) {
        echo "<p class='error'>Inserisci un numero maggiore di 0 e minore o uguale a 20</p>";
        return '';
    }

    $characters = $numbers;

    if (isset($_GET['include_letters']) && $_GET['include_letters'] === 'on') {
        $characters .= $letters;
    }

    if (isset($_GET['include_capital_letters']) && $_GET['include_capital_letters'] === 'on') {
        $characters .= $capitalLetter;
    }
    if (isset($_GET['include_symbols']) && $_GET['include_symbols'] === 'on') {
        $characters .= $symbols;
    }

    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[random_int(0, strlen($characters) - 1)];
    }
    return $password;
}
