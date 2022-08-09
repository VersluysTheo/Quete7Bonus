<?php
$automnejeudi =  [
    [
        'NORD' => '12°,12°,12°,12°', 
        'SUD' => '18°,18°,17°,17°', 
        'OUEST' => '14°,14°,14°,15°',
        'EST' => '10°,14°,10°,14°' 
    ]
];
// Affichage des Valeurs en fonction de la valeur
    foreach ($automnejeudi as $meteo => $valeur){ ?>
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