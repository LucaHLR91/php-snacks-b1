<!-- Creiamo due pagine php. La prima farà una chiamata GET alla seconda attraverso un form. Il form avrà un input di testo in cui inserire il nome di un invitato. Inseriamo nell’altro file una lista di invitati. Se la nostra query è contenuta nella lista degli invitati stampare ok, altrimenti ko. -->

<?php 
require __DIR__ . '/database/db_snack10.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack10</title>
</head>
<body>
    <form action="database/db_snack10.php" method="get">
        <input type="text" id="name" name="name">
        <input type="submit" value="submit">
    </form>
</body>
</html>