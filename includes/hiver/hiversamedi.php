<?php
$hiversamedi =  [
    [
        'NORD' => '4°,2°,4°,4°', 
        'SUD' => '8°,7°,7°,7°',
        'OUEST' => '3°,1°,3°,3°',
        'EST' => '0°,2°,0°,5°'
    ]
];
// Affichage des Valeurs en fonction de la valeur
    foreach ($hiversamedi as $meteo => $valeur){ ?>
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