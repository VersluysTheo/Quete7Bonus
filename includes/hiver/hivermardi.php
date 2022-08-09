<?php
$hivermardi =  [
    [
        'NORD' => '1°,1°,4°,3°', #orage
        'SUD' => '0°,3°,2°,2°',
        'OUEST' => '4°,3°,4°,4°',
        'EST' => '2°,3°,0°,5°'
    ]
];
// Affichage des Valeurs en fonction de la valeur
    foreach ($hivermardi as $meteo => $valeur){ ?>
    <div class="text-center">
        <div>
            <?php echo $valeur ['NORD'] . ' ' . '<img class="orage" src="./images/orage.png" height="60px" width"60px">'; ?>
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