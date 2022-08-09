<?php
$automnesamedi =  [
    [
        'NORD' => '8°,12°,11°,9°', #orage
        'SUD' => '14°,14°,13°,13°', 
        'OUEST' => '11°,11°,11°,12°',
        'EST' => '8°,10°,9°,12°' 
    ]
];
// Affichage des Valeurs en fonction de la valeur
    foreach ($automnesamedi as $meteo => $valeur){ ?>
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