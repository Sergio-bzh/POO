<?php
require_once __DIR__ . ('/classes/Compte.php');

// J'instancie le compte
$compte1 = new Compte('Benoit');

// J'écris dans la propriété titulaire du compte1
// $compte1->titulaire = 'Toto';

// On dépose 500
$compte1->deposer(500);

echo('<pre>');
var_dump($compte1);

// $compte2 = new Compte('Rober');

// var_dump($compte2);
echo('</pre>');
?>

<p><?=$compte1->voirSolde();?></p>

<?php
$compte1->retirer(900);