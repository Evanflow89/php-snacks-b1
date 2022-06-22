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