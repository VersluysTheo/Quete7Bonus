<?php
$étémardi =  [
    [
        'NORD' => '25°,20°,24°,26°', #orage
        'SUD' => '32°,29°,33°,29°', 
        'OUEST' => '18°,20°,19°,20°', #orage
        'EST' => '26°,29°,19°,27°' 
    ]
];
// Affichage des Valeurs en fonction de la valeur
    foreach ($étémardi as $meteo => $valeur){ ?>
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
            <?php echo $valeur ['EST']; ?>
        </div>
    </div>

    <?php } ?>