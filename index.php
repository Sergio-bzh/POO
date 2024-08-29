<?php

use App\Autoloader;
use App\Client\Compte as CompteClient;
use App\Banque\{CompteCourant, CompteEpargne};

require_once __DIR__ . ('/classes/Autoloader.php');
Autoloader::register();


// J'instancie le compte
$compteCourant1 = new CompteCourant('Benoit', 500, 200);
$compteEpargne1 = new CompteEpargne('Rober', 300, 10);
$compteClient1 = new CompteClient();

echo('<pre>');
    var_dump($compteCourant1);

    var_dump($compteEpargne1);

    var_dump($compteClient1);

echo('</pre>');