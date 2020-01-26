<?php

$classe = [
    [
        'nome' => 'Pippo',
        'cognome' => 'Rossi',
        'voti' => [
            8, 7, 5, 6
        ],
    ],
    [
        'nome' => 'Paperino',
        'cognome' => 'Neri',
        'voti' => [
            9, 4, 8, 9
        ]
    ],

];

foreach ($classe as $alunno) {
    echo '<br>';
    echo $alunno ['nome'] . ' ';
    echo $alunno ['cognome'] . ' - ';

    $somma = 0;
    foreach ($alunno['voti'] as $voto) {
        $somma = $somma + $voto ;
    }
    $nVoti = count($alunno['voti']);
    if ($nVoti != 0 ) {
        $media = $somma / $nVoti;
        echo 'Media voti: ' . ' ' . $media;
    }else{
        echo 'non hai nessun voto';
    }
}






?>
