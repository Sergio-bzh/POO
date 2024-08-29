<?php
require_once __DIR__ . ('/classes/Compte.php');
require_once __DIR__ . ('/classes/CompteCourant.php');
require_once __DIR__ . ('/classes/CompteEpargne.php');

// J'instancie le compte
$compteCourant1 = new CompteCourant('Benoit', 500, 200);
$compteEpargne1 = new CompteEpargne('Rober', 300, 10);

// J'écris dans la propriété titulaire du compte1

// On dépose 500
$compteCourant1->deposer(500);

echo('<pre>');
    var_dump($compteCourant1);

    var_dump($compteEpargne1);

echo('</pre>');