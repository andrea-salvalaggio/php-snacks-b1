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

        <h2>Snack 1</h2>
        <hr>
        <i>Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema. <b>Milano - Cantù | 55-60</b></i>
        <hr>

        <?php 
            $matches = [
                [
                    "team1" => "LA Lakers",
                    "team2" => "GS Warrios",
                    "team1_result" => 70,
                    "team2_result" => 55,
                ],
                [
                    "team1" => "Chicago Bulls",
                    "team2" => "Miami Heat",
                    "team1_result" => 90,
                    "team2_result" => 105,
                ],
                [
                    "team1" => "Boston Celtics",
                    "team2" => "NY Knicks",
                    "team1_result" => 82,
                    "team2_result" => 60,
                ],
                [
                    "team1" => "Detroit Pistons",
                    "team2" => "SA Spurs",
                    "team1_result" => 110,
                    "team2_result" => 105,
                ],
            ];
        ?>

        <?php for ($i=0; $i < count($matches); $i++) { ?>
            <h4>
                <?php
                    echo $matches[$i]['team1'] . ' - ' . $matches[$i]['team2'] . ' | ' . $matches[$i]['team1_result'] . ' - ' . $matches[$i]['team2_result'];
                ?> 
            </h4>
        <?php } ?>

    </section>
     
</body>
</html>