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

        <h2>Snack 5</h2>
        <hr>
        <i> Creare un array contenente qualche alunno di un'ipotetica classe. 
            Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
            Stampare Nome, Cognome e la media dei voti di ogni alunno.
        </i>
        <hr>

        <?php 
            $classes = [
                [
                    "first_name" => "Lucio",
                    "last_name" => "Dalla",
                    "votes" => [
                        "italiano" => 8,
                        "matematica" => 6,
                        "storia" => 7,
                        "geografia" => 6,
                    ]
                ],
                [
                    "first_name" => "Tiziano",
                    "last_name" => "Ferro",
                    "votes" => [
                        "italiano" => 9,
                        "matematica" => 5,
                        "storia" => 6,
                        "geografia" => 7,
                    ]
                ],
                [
                    "first_name" => "Renato",
                    "last_name" => "Zero",
                    "votes" => [
                        "italiano" => 10,
                        "matematica" => 8,
                        "storia" => 8,
                        "geografia" => 9,
                    ]
                ],
                [
                    "first_name" => "Piero",
                    "last_name" => "Angela",
                    "votes" => [
                        "italiano" => 10,
                        "matematica" => 10,
                        "storia" => 10,
                        "geografia" => 10,
                    ]
                ],
                [
                    "first_name" => "Giusy",
                    "last_name" => "Ferrei",
                    "votes" => [
                        "italiano" => 6,
                        "matematica" => 7,
                        "storia" => 8,
                        "geografia" => 6,
                    ]
                ],
            ];

            var_dump($classes);
        ?>

    </section>
     
</body>
</html>