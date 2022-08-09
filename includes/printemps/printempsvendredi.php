<?php
$printempsvendredi =  [
    [
        'NORD' => '14°,14°,14°,15°', 
        'SUD' => '19°,18°,18°,19°',
        'OUEST' => '14°,13°,14°,10°',
        'EST' => '10°,12°,10°,15°' 
    ]
];
// Affichage des Valeurs en fonction de la valeur
    foreach ($printempsvendredi as $meteo => $valeur){ ?>
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