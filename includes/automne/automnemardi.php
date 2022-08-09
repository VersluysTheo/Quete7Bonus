<?php
$automnemardi =  [
    [
        'NORD' => '6°,5°,6°,8°', 
        'SUD' => '12°,10°,14°,10°', #orage
        'OUEST' => '11°,6°,8°,4°', 
        'EST' => '9°,9°,8°,10°' 
    ]
];
// Affichage des Valeurs en fonction de la valeur
    foreach ($automnemardi as $meteo => $valeur){ ?>
    <div class="text-center">
        <div>
            <?php echo $valeur ['NORD']; ?>
        </div>
    </div>
    <div class="text-bottom">
        <div>
            <?php echo $valeur ['SUD'] . ' ' . '<img class="orage" src="./images/orage.png" height="60px" width"60px">'; ?>
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