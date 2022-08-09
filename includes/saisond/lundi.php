<?php
$lundi =  [
    [
    'NORD' => '10°,12°,10°,15°',
    'SUD' => '20°,22°,20°,25°',
    'OUEST' => '12°,13°,14°,15°',
    'EST' => '11°,14°,14°,14°',
    ]
];
// Affichage des Valeurs en fonction de la valeur
    foreach ($lundi as $meteo => $valeur){ ?>
    <div class="text-center">
        <div>
            <?php echo $valeur ['NORD']; ?>
        </div>
    </div>
    <div class="text-bottom Bottom">
        <div>
            <?php echo $valeur ['SUD']; ?>
        </div>
    </div>
    <div class="text-left Left">
        <div>
            <?php echo $valeur ['OUEST']; ?>
        </div>
    </div>
    <div class="text-right Right">
        <div>
            <?php echo $valeur ['EST']; ?>
        </div>
    </div>

    <?php } ?>