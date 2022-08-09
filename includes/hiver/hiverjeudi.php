<?php
$hiverjeudi =  [
    [
        'NORD' => '8°,7°,7°,8°', #Ovni
        'SUD' => '8°,8°,7°,9°',
        'OUEST' => '7°,9°,0°,8°',
        'EST' => '6°,6°,6°,5°'
    ]
];
// Affichage des Valeurs en fonction de la valeur
    foreach ($hiverjeudi as $meteo => $valeur){ ?>
    <div class="text-center">
        <div>
            <?php echo $valeur ['NORD'] . ' ' . '<img class="ovni" src="./images/ovni.png" height="60px" width"60px">'; ?>
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