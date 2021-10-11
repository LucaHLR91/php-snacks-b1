<!-- ## Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php 
    $paragraph = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa facere, deserunt esse voluptatum rerum sed odio cumque quisquam quasi iusto fugit nisi ullam! Delectus odio ab error, repellat sint blanditiis! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias ipsam hic, eveniet laudantium nam, dolorem fuga nobis doloribus, facilis vel architecto? Ipsum architecto facere hic, tempora eveniet vel alias debitis. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione totam, veniam quod, aperiam fugiat dignissimos amet voluptates architecto asperiores debitis rem voluptate sint eos natus sed omnis officia, facere modi? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam dolor error perferendis sapiente tempore eos reprehenderit illo? Corporis, explicabo perspiciatis natus quae quia totam sunt voluptates minus provident voluptatibus minima? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis officia tempore hic quia! Impedit rem pariatur, fugiat quia dolorum veritatis enim iusto quisquam quasi, earum cum, recusandae corrupti molestias officia!';

    $array_paragraph = explode('.', $paragraph);
    var_dump($array_paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paragrafi</title>
</head>
<body>
    <?php 
        foreach ($array_paragraph as $item) {
            echo '<p>' . $item . '</p>';
        }
    ?>
</body>
</html>


<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione totam, veniam quod, aperiam fugiat dignissimos amet voluptates architecto asperiores debitis rem voluptate sint eos natus sed omnis officia, facere modi? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam dolor error perferendis sapiente tempore eos reprehenderit illo? Corporis, explicabo perspiciatis natus quae quia totam sunt voluptates minus provident voluptatibus minima? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis officia tempore hic quia! Impedit rem pariatur, fugiat quia dolorum veritatis enim iusto quisquam quasi, earum cum, recusandae corrupti molestias officia!</p>