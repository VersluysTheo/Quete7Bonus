<?php
$vendredi =  [
    [
    'NORD' => '14°,14°,14°,15°',
    'SUD' => '19°,18°,18°,19°',
    'OUEST' => '14°,13°,14°,10°',
    'EST' => '10°,12°,10°,15°',
    ]
];
// Affichage des Valeurs en fonction de la valeur
    foreach ($vendredi as $meteo => $valeur){ ?>
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