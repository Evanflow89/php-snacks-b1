<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
(


<?php

$userName = $_GET["name"];
$userMail = $_GET["email"];
$userAge = $_GET["age"];

if (strlen($userName) >= 3 && (!filter_var($userMail, FILTER_VALIDATE_EMAIL) === false) && is_numeric($userAge)){
    echo "Accesso Riuscito";
} else {
    echo "Accesso Negato";
}

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
<form>
        <label for="name">Inserisci l'username</label>
        <input name="name" type="text">
        <label for="email">Inserisci l'indirizzo email</label>
        <input name="email" type="email">
        <label for="age">Inserisci la tua età</label>
        <input name="age" type="text">
        <button>Submit</button>
    </form>
</body>
</html>