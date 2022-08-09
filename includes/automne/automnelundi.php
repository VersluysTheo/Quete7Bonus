<?php
$automnelundi =  [
    [
        'NORD' => '5°,9°,9°,10°', 
        'SUD' => '11°,11°,12°,11°', #tornade
        'OUEST' => '14°,14°,14°,15°', 
        'EST' => '10°,14°,10°,14°' 
    ]
];
// Affichage des Valeurs en fonction de la valeur
    foreach ($automnelundi as $meteo => $valeur){ ?>
    <div class="text-center">
        <div>
            <?php echo $valeur ['NORD']; ?>
        </div>
    </div>
    <div class="text-bottom">
        <div>
            <?php echo $valeur ['SUD'] . ' ' . '<img class="tornade" src="./images/tornade.png" height="60px" width"60px">'; ?>
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