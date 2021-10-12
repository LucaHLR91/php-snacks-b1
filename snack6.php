<!-- Stampiamo poi il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style_snack6.css">
    <title>Snack6</title>
</head>
<body>
    <div>
        <?php 
            require __DIR__ . '/database/db_snack6.php';

            foreach ($db as $key => $profession) {
                if ($key == 'teachers') {
                    for($i = 0; $i < count($profession); $i++) {
                        echo '<div class="grey">';
                        echo $profession[$i]['name'] . ' ' . $profession[$i]['lastname'];
                        echo '</div>';
                    }
                };
                if($key == 'pm') {
                    for($i = 0; $i < count($profession); $i++) {
                        echo '<div class="green">' . $profession[$i]['name'] . ' ' . $profession[$i]['lastname'] . '</div>';
                    }
                }
            }
        ?>
    </div>
</body>
</html>