<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snacks Blocco 1</title>
</head>
<body>

    <section>

        <h2>Snack 3</h2>
        <hr>
        <i>Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta</i>
        <hr>

        <?php
            $numbers = [];

            while (count($numbers) < 15) {
                $randomNumber = rand(1, 50);
                if (!in_array($randomNumber, $numbers)){
                    $numbers[] = $randomNumber;
                }
            }

            var_dump($numbers);
        ?>
        

    </section>
     
</body>
</html>