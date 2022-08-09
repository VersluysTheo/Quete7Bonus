<?php
$automnedimanche =  [
    [
        'NORD' => '9°,10°,8°,6°', 
        'SUD' => '12°,12°,14°,13°', 
        'OUEST' => '8°,10°,9°,10°', 
        'EST' => '666°,666°,666°,666°' #méteorite #OVNI #orage #tornade
    ]
];
// Affichage des Valeurs en fonction de la valeur
    foreach ($automnedimanche as $meteo => $valeur){ ?>
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
            <?php echo $valeur ['EST'] . '<br>' . '<img class="meteorite" src="./images/meteorite.png" height="60px" width"60px">' . '<img class="ovni" src="./images/ovni.png" height="60px" width"60px">' . '<br>' . '<img class="orage" src="./images/orage.png" height="60px" width"60px">' . '<img class="tornade" src="./images/tornade.png" height="60px" width"60px">' ; ?>
        </div>
    </div>

    <?php } ?>