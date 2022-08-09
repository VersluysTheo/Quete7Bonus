<?php
$automnevendredi =  [
    [
        'NORD' => '9°,10°,11°,11°',
        'SUD' => '12°,16°,11°,13°', 
        'OUEST' => '9°,8°,8°,7°', 
        'EST' => '10°,4°,10°,4°' 
    ]
];
// Affichage des Valeurs en fonction de la valeur
    foreach ($automnevendredi as $meteo => $valeur){ ?>
    <div class="text-center">
        <div>
            <?php echo $valeur ['NORD']; ?>
        </div>
    </div>
    <div class="text-bottom">
        <div>
            <?php echo $valeur ['SUD']; ?>
        </div>
    </div>
    <div class="text-left">
        <div>
            <?php echo $valeur ['OUEST']; ?>
        </div>
    </div>
    <div class="text-right">
        <div>
            <?php echo $valeur ['EST']; ?>
        </div>
    </div>

    <?php } ?>