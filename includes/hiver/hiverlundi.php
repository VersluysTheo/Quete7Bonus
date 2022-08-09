<?php
$hiverlundi =  [
    [
    'NORD' => '0°,2°,0°,5°', #orage
    'SUD' => '210°,12°,10°,9°',
    'OUEST' => '2°,3°,4°,5°', #orage
    'EST' => '1°,4°,4°,4°' #orage
    ]
];
// Affichage des Valeurs en fonction de la valeur
    foreach ($hiverlundi as $meteo => $valeur){ ?>
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
            <?php echo $valeur ['OUEST'] . ' ' . '<img class="orage" src="./images/orage.png" height="60px" width"60px">'; ?>
        </div>
    </div>
    <div class="text-right">
        <div>
            <?php echo $valeur ['EST'] . ' ' . '<img class="orage" src="./images/orage.png" height="60px" width"60px">'; ?>
        </div>
    </div>

    <?php } ?>