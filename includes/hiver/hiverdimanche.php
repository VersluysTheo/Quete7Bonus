<?php
$hiverdimanche =  [
    [
        'NORD' => '2°,2°,2°,2°', 
        'SUD' => '8°,8°,7°,7°',
        'OUEST' => '4°,4°,4°,5°',
        'EST' => '0°,4°,0°,4°' #Météorite
    ]
];
// Affichage des Valeurs en fonction de la valeur
    foreach ($hiverdimanche as $meteo => $valeur){ ?>
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
            <?php echo $valeur ['EST'] . ' ' . '<img class="meteorite" src="./images/meteorite.png" height="60px" width"60px">'; ?>
        </div>
    </div>

    <?php } ?>