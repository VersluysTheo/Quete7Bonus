<?php
$printempsdimanche =  [
    [
        'NORD' => '12°,12°,12°,12°', #tornade #ovni
        'SUD' => '18°,18°,17°,17°', #tornade
        'OUEST' => '14°,14°,14°,15°', #tornade
        'EST' => '10°,14°,10°,14°' #tornade
    ]
];
// Affichage des Valeurs en fonction de la valeur
    foreach ($printempsdimanche as $meteo => $valeur){ ?>
    <div class="text-center">
        <div>
            <?php echo $valeur ['NORD'] . ' ' . '<img class="tornade" src="./images/tornade.png" height="60px" width"60px">'; ?>
        </div>
    </div>
    <div class="text-bottom">
        <div>
            <?php echo $valeur ['SUD'] . ' ' . '<img class="tornade" src="./images/tornade.png" height="60px" width"60px">'; ?>
        </div>
    </div>
    <div class="text-left">
        <div>
            <?php echo $valeur ['OUEST'] . ' ' . '<img class="tornade" src="./images/tornade.png" height="60px" width"60px">' . '<img class="ovni" src="./images/ovni.png" height="60px" width"60px">'; ?>
        </div>
    </div>
    <div class="text-right">
        <div>
            <?php echo $valeur ['EST'] . ' ' . '<img class="tornade" src="./images/tornade.png" height="60px" width"60px">'; ?>
        </div>
    </div>

    <?php } ?>