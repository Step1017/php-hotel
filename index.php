<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

    echo '<ul>';
    foreach ($hotels as $index => $hotel) {
        ?>
            <!-- <li>
                <?php /*var_dump($hotel);*/ ?>
                <h3><?php echo ($index + 1).') '.$hotel['name']; ?></h3>
                <p><?php echo $hotel["description"]; ?></p>
                <div>
                    <span>
                        <?php echo ($hotel['parking'] ? 'Parcheggio incluso' : 'Parcheggio non incluso'); ?>
                    </span>
                    <span>
                        | <?php echo $hotel["vote"]; ?> ★ | 
                    </span>
                    <span>
                        A <?php echo $hotel['distance_to_center']; ?> km dal centro
                    </span>
                </div>
            </li> -->
        <?php
    }
    //echo '</ul>';

    // stampiamo come nomi delle colonne le chiavi dell'array
    $tableHeaders = null;
    if (count ($hotels) > 0) {
        $tableHeaders = array_keys($hotels[0]);
    }

    // var_dump($tableHeaders);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1>
                            PHP HOTEL
                        </h1>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <?php
                                        if (isset($tableHeaders)) {
                                            for ($i - 0; $i < count($tableHeaders); $i++) {
                                                echo '<th scope="col">'.$tableHeaders[$i].'</th>';
                                            }
                                        }
                                    ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($hotels as $index => $hotel) {
                                ?>
                                    <tr>
                                        <th scope="row"><?php echo ($index + 1); ?></th>
                                        <td><?php echo $hotel["name"]; ?></td>
                                        <td><?php echo $hotel["description"]; ?></td>
                                        <td><?php echo ($hotel['parking'] ? 'Incluso' : 'NON incluso'); ?></td>
                                        <td><?php echo $hotel["vote"]; ?> ★</td>
                                        <td><?php echo $hotel["distance_to_center"]; ?> km</td>
                                    </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>

