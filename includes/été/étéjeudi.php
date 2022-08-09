<?php
$étéjeudi=  [
    [
        'NORD' => '29°,30°,28°,26°', 
        'SUD' => '30°,32°,34°,33°', 
        'OUEST' => '18°,17°,19°,20°', #tornade #OVNI
        'EST' => '21°,22°,26°,25°' 
    ]
];
// Affichage des Valeurs en fonction de la valeur
    foreach ($étéjeudi as $meteo => $valeur){ ?>
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
            <?php echo $valeur ['OUEST'] . ' ' . '<img class="tornade" src="./images/tornade.png" height="60px" width"60px">' . '<img class="ovni" src="./images/ovni.png" height="60px" width"60px">'; ?>
        </div>
    </div>
    <div class="text-right">
        <div>
            <?php echo $valeur ['EST']; ?>
        </div>
    </div>

    <?php } ?>