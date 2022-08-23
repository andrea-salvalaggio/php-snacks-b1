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

        <h2>Snack 4</h2>
        <hr>
        <i>Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.</i>
        <hr>

        <h4>Paragrafo intero</h4>
        <?php
            $paragraph = "  2012. Robert Neville sembra essere l'unico sopravvissuto ad una spaventosa pandemia iniziata 3 anni prima, generata dal virus del morbillo geneticamente modificato, originariamente concepito dalla dottoressa Alice Krippin per combattere il cancro. L'epidemia ha infettato quasi tutti gli esseri umani e gli animali domestici con risultati diversi: la stragrande maggioranza è morta, mentre una piccola percentuale ha subìto una degenerazione simile a quella provocata dalla rabbia, che li ha condotti allo stato di zombi che devono nascondersi dai raggi solari. Meno dell'1% della popolazione è risultato immune agli effetti dell'epidemia, ma è stato cacciato e ucciso dagli infetti.
                            Brillante virologo militare, il dottor Neville si è barricato nella sua casa di New York, costruendovi un laboratorio sotterraneo in cui conduce degli esperimenti su animali infetti per trovare una cura all'epidemia; solo di giorno può aggirarsi per le strade in cerca di cibo e rifornimenti, dato che gli infetti rimangono nascosti nel buio all'interno degli edifici abbandonati, poiché se si espongono alla luce solare il loro corpo brucia. La sua unica compagnia sono la cagna Sam e dei manichini coi quali parla; assalito dai ricordi della moglie e della figlia che sono morte 3 anni prima per un incidente in elicottero durante l'evacuazione, passa ore a guardare DVD e programmi televisivi registrati, e attende che qualcuno risponda al suo continuo messaggio radio che invita ogni sopravvissuto a raggiungerlo al porto: ogni giorno Robert si presenta al luogo stabilito nel messaggio aspettando inutilmente qualcuno. ";
            echo $paragraph;

            $paragraphSplit = explode(".", $paragraph);
        ?>

        <h4>Paragrafo diviso</h4>
        <?php for ($i = 0; $i < count($paragraphSplit); $i++) {?>
            <p>
                <?php
                    echo $paragraphSplit[$i];
                ?>
            </p>
        <?php } ?>

    </section>
     
</body>
</html>