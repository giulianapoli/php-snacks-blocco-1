<!-- PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->


<?php

$matches = [
    
    0 => [
        'squadra_casa' => 'valore',
        'squadra_ospite' => 'valore',
        'punti_squadracasa' => 1,
        'punti_squadraospite' => 2,
    ],
    1 => [
        'squadra_casa' => 'valore',
        'squadra_ospite' => 'valore',
        'punti_squadracasa' => 1,
        'punti_squadraospite' => 2,
    ],
    2 => [
        'squadra_casa' => 'valore',
        'squadra_ospite' => 'valore',
        'punti_squadracasa' => 1,
        'punti_squadraospite' => 2,
    ],
    3 => [
        'squadra_casa' => 'valore',
        'squadra_ospite' => 'valore',
        'punti_squadracasa' => 1,
        'punti_squadraospite' => 2,
    ],
    4 => [
        'squadra_casa' => 'valore',
        'squadra_ospite' => 'valore',
        'punti_squadracasa' => 1,
        'punti_squadraospite' => 2,
    ],

];

// var_dump($matches);



?>

<h1>Calendario e risultati</h1>

<ul> 

<?php 


for ($i = 0; $i < count($matches); ++$i) {

    echo '<li>'.$matches[$i]['squadra_casa'].' - '.$matches[$i]['squadra_ospite'].' | '.$matches[$i]['punti_squadracasa'].' - '.$matches[$i]['punti_squadraospite'].'</li>';
};




?>
</ul>