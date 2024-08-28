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
echo '<br>';
echo ('<br>Le titulaire du compte est '.$compte1->getTitulaire());
echo '<br>';
$compte1->getSolde();
echo '<br>';
var_dump($compte1->getSolde());
echo '<br>';
echo $compte1;
echo '<br>';

$compte3 = new Compte('Sergio');
// var_dump($compte3);
echo "$compte3";