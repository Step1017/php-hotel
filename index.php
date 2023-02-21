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
            <li>
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
            </li>
        <?php
    }
    echo '</ul>';
?>

