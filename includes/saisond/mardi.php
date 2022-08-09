<?php
$mardi =  [
    [
    'NORD' => '11°,11°,14°,13°',
    'SUD' => '20°,23°,22°,22°',
    'OUEST' => '14°,13°,14°,14°',
    'EST' => '12°,13°,10°,15°',
    ]
];
// Affichage des Valeurs en fonction de la valeur
    foreach ($mardi as $meteo => $valeur){ ?>
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