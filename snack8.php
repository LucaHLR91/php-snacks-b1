<!-- Ad ogni refresh della pagina visualizzare una pubblicità a schermo, tenendo conto che possono essere sorteggiate solo quelle is_active true. -->

<?php 
    require __DIR__ . '/database/db_snack8.php';

    function displayrndPhoto($ads) {
        $rndNumb = rand(0, count($ads) - 1);
        if($ads[$rndNumb]['is_active']) {
            echo '<img src="' . $ads[$rndNumb]['image_path'] . '" alt = "foto">';
        }
        
    }

    $img = displayrndPhoto($ads);
?>