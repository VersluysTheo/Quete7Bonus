<?php
$étédimanche =  [
    [
        'NORD' => '51°,55°,47°,42°', #orage
        'SUD' => '57°,56°,69°,48°', 
        'OUEST' => '51°,50°,49°,52°', 
        'EST' => '51°,41°,39°,58°' 
    ]
];
// Affichage des Valeurs en fonction de la valeur
    foreach ($étédimanche as $meteo => $valeur){ ?>
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