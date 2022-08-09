<?php
$printempssamedi =  [
    [
        'NORD' => '14°,12°,14°,14°', 
        'SUD' => '18°,17°,17°,17°', #météorite
        'OUEST' => '13°,11°,13°,13°', 
        'EST' => '10°,12°,10°,15°' 
    ]
];
// Affichage des Valeurs en fonction de la valeur
    foreach ($printempssamedi as $meteo => $valeur){ ?>
    <div class="text-center">
        <div>
            <?php echo $valeur ['NORD']; ?>
        </div>
    </div>
    <div class="text-bottom">
        <div>
            <?php echo $valeur ['SUD'] . ' ' . '<img class="meteorite" src="./images/meteorite.png" height="60px" width"60px">'; ?>
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