<?php
$étésamedi =  [
    [
        'NORD' => '29°,30°,28°,18°', 
        'SUD' => '28°,41°,51°,46°', 
        'OUEST' => '41°,20°,29°,30°', 
        'EST' => '32°,31°,31°,31°' 
    ]
];
// Affichage des Valeurs en fonction de la valeur
    foreach ($étésamedi as $meteo => $valeur){ ?>
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