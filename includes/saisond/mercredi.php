<?php
$mercredi =  [
    [
    'NORD' => '11°,15°,14°,16°,',
    'SUD' => '18°,18°,19°,20°,',
    'OUEST' => '14°,16°,16°,15°',
    'EST' => '17°,16°,16°,18°',
    ]
];
// Affichage des Valeurs en fonction de la valeur
    foreach ($mercredi as $meteo => $valeur){ ?>
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