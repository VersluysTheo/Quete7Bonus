<?php
$printempsmercredi =  [
    [
        'NORD' => '11°,15°,14°,16°', #ovni
        'SUD' => '18°,18°,19°,20°', #ovni
        'OUEST' => '14°,16°,16°,15°', #ovni
        'EST' => '17°,16°,16°,18°' #ovni
    ]
];
// Affichage des Valeurs en fonction de la valeur
    foreach ($printempsmercredi as $meteo => $valeur){ ?>
    <div class="text-center">
        <div>
            <?php echo $valeur ['NORD'] . ' ' . '<img class="ovni" src="./images/ovni.png" height="60px" width"60px">'; ?>
        </div>
    </div>
    <div class="text-bottom">
        <div>
            <?php echo $valeur ['SUD'] . ' ' . '<img class="ovni" src="./images/ovni.png" height="60px" width"60px">'; ?>
        </div>
    </div>
    <div class="text-left">
        <div>
            <?php echo $valeur ['OUEST'] . ' ' . '<img class="ovni" src="./images/ovni.png" height="60px" width"60px">'; ?>
        </div>
    </div>
    <div class="text-right">
        <div>
            <?php echo $valeur ['EST'] . ' ' . '<img class="ovni" src="./images/ovni.png" height="60px" width"60px">'; ?>
        </div>
    </div>

    <?php } ?>