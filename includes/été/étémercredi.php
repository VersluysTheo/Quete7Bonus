<?php
$étémercredi =  [
    [
        'NORD' => '19°,30°,28°,26°', 
        'SUD' => '34°,32°,35°,29°', 
        'OUEST' => '28°,20°,27°,32°', 
        'EST' => '18°,20°,19°,24°' 
    ]
];
// Affichage des Valeurs en fonction de la valeur
    foreach ($étémercredi as $meteo => $valeur){ ?>
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