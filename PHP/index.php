<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <!--  Stampare la data di oggi in italiano in modo dinamico.
            Es: Mercoledì, 16 dicembre 2020
        -->
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Esercizio 1</h2>
                <?php

                    $giorno = date('l');
                    $numero = date('j');
                    $mese = date('F');
                    $anno = date('Y');

                    switch ($mese) {
                        case 'January':
                            $mese = 'Gennaio';
                            break;
                        
                        default:
                            # code...
                            break;
                    }

                    switch ($giorno) {
                        case 'Wednesday':
                            $giorno = 'Mercoledì'
;                            break;
                        
                        default:
                            # code...
                            break;
                    }

                    $str = '<p class="card-text">Oggi è il giorno: ';
                    $str .= $giorno .  ',  ' . $numero .' ' . $mese . ' ' . $anno . '</p>';
                    echo $str;
                ?>
                <p class="card-text">Oggi è il giorno: Mercoledì, 16 dicembre 2020</p>
            </div>
        </div>

        <!-- Crea l'array delle squadre di serie A e della relativa formazione. 
                Usa i cicli per stampare i dati 
        -->

        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Esercizio 2</h2>
                <?php 
                    $serieA = [
                        "Milan" => [
                            "Marco Pellegrino",
                            "Malick Thiaw",
                            "Mattia Caldara",
                            "Fikayo Tomori"], 
                        "Juventus" => [
                            "Manuel Locatelli",
                            "Adrien Rabiot ",
                            "Weston McKennie ",
                            "Fabio Miretti "], 
                        "Napoli" => [
                            "Alex Meret",
                            "Nikita Contini",
                            "Hubert Dawid Idasiak",
                            "Pierluigi Gollini"], 
                        "Roma" => [
                            "Gianluca Mancini",
                            "Angeliño",
                            "Rasmus Kristensen",
                            "Leandro Paredes"]]
                ?>
                <p class="card-text">
                    <?php 
                        foreach($serieA as $key => $value) {
                            //print_r($value);
                            echo '<h3>' . $key . '</h3>';
                            echo '<ul>';
                                foreach($value as $player) {
                                    echo '<li>' . $player . '</li>';
                                }
                            echo '</ul>';
                        }
                    ?>
                </p>
            </div>
        </div>


        <!-- Crea l'array delle partite e delle squadre di serie A e 
            della relativa formazione. Usa i cicli per stampare i dati
        -->

        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Esercizio 3</h2>
                <?php 
                    $serieA = [
                        "Milan" => ["MAIGNAN", "CALABRIA", "KJAER", "GABBIA", "HERNANDEZ", "ADLI", "REIJNDERS", "PULISIC", "LOFTUS-CHEEK", "LEAO", "GIROUD"], 
                        "Lecce" => ['FALCONE', 'GENDREY', 'PONGRACIC', 'BASCHIROTTO', 'GALLO', 'KABA', 'RAFIA', 'GONZALEZ', 'ALMQVIST', 'KRSTOVIC', 'OUDIN'],
                        "Napoli" =>  ["TERRACCIANO", "KAYODE", "MILENKOVIC", "QUARTA", "BIRAGHI", "ARTHUR", "DUNCAN", "GONZALEZ", "BONAVENTURA", "SOTTIL", "BELTRAN"],
                        "Bologna" =>  ["SKORUPSKI", "POSCH", "BEUKEMA", "CALAFIORI", "KRISTIANSEN", "FREULER", "AEBISCHER", "ORSOLINI", "FERGUSON", "KARLSSON", "ZIRKZEE"]
                    ];
                    $calendario = [["Milan", "Lecce"], ["Napoli", "Bologna"]]
                ?>
                <p class="card-text">
                    <?php 
                        foreach($calendario as $team) { ?>
                            
                            <div class="row align-items-start">
                                <div class="col">
                                    <h2><?= $team[0] ?></h2>
                                    <ul>
                                    <?php foreach($serieA[$team[0]] as $player) {
                                        echo '<li>' . $player . '</li>';
                                    }?>
                                    </ul>
                                </div>
                                <div class="col">
                                    <h2><?= $team[1] ?></h2>
                                    <ul>
                                    <?php foreach($serieA[$team[1]] as $player) {
                                        echo '<li>' . $player . '</li>';
                                    }?>
                                    </ul>
                                </div>
                            </div>

                        <?php } ?>
                </p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>