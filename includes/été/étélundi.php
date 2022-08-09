<?php
$étélundi =  [
    [
        'NORD' => '19°,17°,15°,16°', 
        'SUD' => '24°,27°,29°,30°', 
        'OUEST' => '28°,26°,27°,27°', 
        'EST' => '26°,26°,29°,31°' 
    ]
];
// Affichage des Valeurs en fonction de la valeur
    foreach ($étélundi as $meteo => $valeur){ ?>
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