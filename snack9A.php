<!-- Stampare tutti i nostri hotel con tutti i dati disponibili.
Avremo un file PHP con il nostro “database” e un file con tutta la logica. -->

<?php 
    require __DIR__ . '/database/db_snack9A.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack9A</title>
</head>
<body>
    <?php 
        foreach ($hotels as $hotel) {
    ?>
        <div class="hotel">
            <h2><?php echo $hotel['name'];?></h2>
            <p><?php echo $hotel['description'];?></p>
            <p>Parking: <?php echo $hotel['parking'];?></p>
            <p>Vote: <?php echo $hotel['vote'];?></p>
            <p>Distance to center: <?php echo $hotel['distance_to_center'];?> km</p>
        </div>
    <?php
    };
    ?>
</body>
</html>