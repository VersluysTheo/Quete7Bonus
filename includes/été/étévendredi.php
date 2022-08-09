<?php
$étévendredi =  [
    [
        'NORD' => '27°,30°,27°,26°', 
        'SUD' => '32°,33°,34°,33°', 
        'OUEST' => '28°,30°,29°,30°', 
        'EST' => '26°,27°,29°,31°'
    ]
];
// Affichage des Valeurs en fonction de la valeur
    foreach ($étévendredi as $meteo => $valeur){ ?>
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
            <?php echo $valeur ['EST']; ?>
        </div>
    </div>

    <?php } ?>