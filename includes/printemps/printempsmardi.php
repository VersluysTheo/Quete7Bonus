<?php
$printempsmardi =  [
    [
        'NORD' => '11°,11°,14°,13°', 
        'SUD' => '20°,23°,22°,22°',
        'OUEST' => '14°,13°,14°,14°', #orage
        'EST' => '12°,13°,10°,15°' 
    ]
];
// Affichage des Valeurs en fonction de la valeur
    foreach ($printempsmardi as $meteo => $valeur){ ?>
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
            <?php echo $valeur ['OUEST'] . ' ' . '<img class="orage" src="./images/orage.png" height="60px" width"60px">'; ?>
        </div>
    </div>
    <div class="text-right">
        <div>
            <?php echo $valeur ['EST']; ?>
        </div>
    </div>

    <?php } ?>