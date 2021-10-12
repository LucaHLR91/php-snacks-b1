<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php 
    require __DIR__ . '/database/db_snack7.php';
    require __DIR__ . '/utilities/functions_snack7.php';

    foreach ($students as $student) {
        echo $student['name'] . ' ' . $student['lastname'];
        for ($i = 0; $i < count($student['grades']); $i++) {
            $sum = $sum + $student['grades'][$i];

        };
        $average_grades = average($sum);
        echo $average_grades;
        $sum = 0;
    };
?>