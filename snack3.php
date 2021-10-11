<!-- Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore
un array di post associati a quella data. Stampare ogni data con i relativi post. -->

<?php 
    $dates = [
        '09/10/2021' => [
            [
                'title' => 'Post-1',
                'author' => 'Philip Sony',
                'text' => 'testo post 1'
            ]
        ],
        '10/10/2021' => [
            [
                'title' => 'Post-2',
                'author' => 'Philip Sony',
                'text' => 'testo post 2'
            ],
            [
                'title' => 'Post-3',
                'author' => 'Philip Sony',
                'text' => 'testo post 3'
            ],
        ],
        '11/10/2021' => [
            [
                'title' => 'Post-4',
                'author' => 'Philip Sony',
                'text' => 'testo post 4'
            ],
            [
                'title' => 'Post-5',
                'author' => 'Philip Sony',
                'text' => 'testo post 5'
            ],
            [
                'title' => 'Post-6',
                'author' => 'Philip Sony',
                'text' => 'testo post 6'
            ],
        ]
        ];

//         foreach ($dates as $key => $date) {
//             echo $key;
//             foreach ($date as $post) {
//                 var_dump($post);
//             };
//             foreach ($post as $item_key => $item) {
//                 echo $item_key . ' ' . ':' . ' ' . $item . '</br>';
//             }
//         }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Forum</title>
</head>
<body>
    
    <?php foreach ($dates as $key => $date) {
            
    }
    ?>
    <!-- DA TERMINARE -->
</body>
</html>