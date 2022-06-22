<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60  -->

<?php 

$games = [
    [
        'homeTeam' => 'Chicago Bulls',
        'guestTeam' => 'Milwaukee Bucks',
        'homeScore' => 90,
        'guestScore' => 103,
    ],
    [
        "homeTeam" => 'Toronto Raptors',
        'guestTeam' => "Orlando Magic",
        'homeScore' => 99,
        'guestScore' => 77,
    ],
    [
        'homeTeam' => 'Detroit Pistons',
        'guestTeam' => 'Indiana Pacers',
        'homeScore' => 109,
        'guestScore' => 88,
    ],
];

for ($i = 0; $i < count($games); $i++) {
    echo $games[$i]["homeTeam"]. " - ".  $games[$i]["guestTeam"]. " | ".  $games[$i]["homeScore"]."-". $games[$i]["guestScore"]. " ";
};

?>

