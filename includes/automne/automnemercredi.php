<?php
$automnemercredi =  [
    [
        'NORD' => '9°,5°,6°,5°', 
        'SUD' => '13°,12°,10°,13°', 
        'OUEST' => '10°,10°,10°,9°',
        'EST' => '11°,13°,6°,8°' 
    ]
];
// Affichage des Valeurs en fonction de la valeur
    foreach ($automnemercredi as $meteo => $valeur){ ?>
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