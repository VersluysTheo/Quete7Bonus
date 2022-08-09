<?php
$hivermercredi =  [
    [
        'NORD' => '1°,5°,4°,6°', 
        'SUD' => '8°,8°,9°,0°',
        'OUEST' => '4°,6°,6°,5°',
        'EST' => '7°,6°,6°,8°'
    ]
];
// Affichage des Valeurs en fonction de la valeur
    foreach ($hivermercredi as $meteo => $valeur){ ?>
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