<!-- Creare un array con 15 numeri casuali ( da 1 a 100), tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php 
    $rndNumbers = [];

    // for ($i = 0; $i < 15; $i++) {
    //     $rndNumber = rand(1, 100);
    //     if ($rndNumber != count($rndNumbers)) {
    //         $rndNumbers = $rndNumber;
    //     }
    //     echo $rndNumbers . '</br>';
    // }

    while (count($rndNumbers) < 15) {
        $rndNumber = rand(1, 100);
        if (!in_array($rndNumber, $rndNumbers)) {
            $rndNumbers[] = $rndNumber;
        }
        
    }

    var_dump($rndNumbers);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista di numeri</title>
</head>
<body>
    <ul>
        <?php 
           while (count($rndNumbers) < 15) {
            $rndNumber = rand(1, 100);
            if (!in_array($rndNumber, $rndNumbers)) {
                $rndNumbers[] = $rndNumber;
            };
        }
        ?>
    </ul>
</body>
</html>