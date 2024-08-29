<?php
use App\Banque\{CompteCourant, CompteEpargne};
use App\Client\Compte as CompteClient;

require_once __DIR__ . ('/classes/Banque/Compte.php');
require_once __DIR__ . ('/classes/Banque/CompteCourant.php');
require_once __DIR__ . ('/classes/Banque/CompteEpargne.php');
require_once __DIR__ . ('/classes/Client/Compte.php');

// J'instancie le compte
$compteCourant1 = new CompteCourant('Benoit', 500, 200);
$compteEpargne1 = new CompteEpargne('Rober', 300, 10);
$compteClient1 = new CompteClient();

// J'écris dans la propriété titulaire du compte1

// On dépose 500
$compteCourant1->deposer(500);

echo('<pre>');
    var_dump($compteCourant1);

    var_dump($compteEpargne1);

    var_dump($compteClient1);

echo('</pre>');