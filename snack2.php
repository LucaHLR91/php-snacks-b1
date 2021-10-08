<!-- Passare come parametri GET name, mail e age e verificare
(cercando i metodi che non conosciamo nella documentazione) che name
sia più lungo di 3 caratteri,
che mail contenga un punto e una chiocciola e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php 
    $name = $_GET['name'];
    $email = $_GET['email'];
    $age = $_GET['age'];

    echo $name . '</br>';
    echo $email . '</br>';
    echo $age . '</br>';

    // SE LA LUNGHEZZA DI NAME E MAGGIORE DI 3, SE @ E . SONO DIVERSI DA FALSO, QUINDI PRESENTI E SE AGE E UN NUMERO ALLORA MI DAI ACCESSO
    if (strlen($name) > 3 && strpos($email, '@') != false && strpos($email, '.') != false && is_numeric($age) != false ) {
        echo 'Access granted';
    } else {
        echo 'Access denied';
    }
?>