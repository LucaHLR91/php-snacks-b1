<?php
    $list = [
        'luca',
        'marco',
        'giacomo',
        'paolo',
        'dario'
    ];

    $name = $_GET['name'];

    
    if (in_array($name, $list)) {
        echo 'ok';
    }else {
        echo 'ko';
    }
    


?>