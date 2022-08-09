<?php
$hivervendredi =  [
    [
        'NORD' => '4°,4°,4°,5°', 
        'SUD' => '9°,8°,8°,9°',
        'OUEST' => '4°,3°,4°,0°',
        'EST' => '0°,2°,0°,5°' #Ovni
    ]
];
// Affichage des Valeurs en fonction de la valeur
    foreach ($hivervendredi as $meteo => $valeur){ ?>
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
            <?php echo $valeur ['EST'] . ' ' . '<img class="ovni" src="./images/ovni.png" height="60px" width"60px">'; ?>
        </div>
    </div>

    <?php } ?>