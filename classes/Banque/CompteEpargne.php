<?php
namespace App\Banque;

/**
 * Compte avec taux d'intérêts
 */
class CompteEpargne extends Compte
{
    /**
     * Taux d'intérrêts du compte
     *
     * @var int
     */
    private $taux_interets;

    /**
     * Constructeur de compte épargne
     *
     * @param string $nom Nom du titulaire
     * @param float $montant Montant du solde à l'ouverture
     * @param integer $taux_interets Taux d'intérêt à la création du compte
     */
    public function __construct(string $nom, float $montant, int $taux)
    {
        // Je passe au constructeur du parent les paramètres $nom et $montant
        parent::__construct($nom, $montant);

        // Je passe à ce contructeur le taux d'intérêt
        $this->taux_interets = $taux;
    }

     public function getTauxInterets():int
     {
        return $this->taux_interets;
     }
     
     public function setTauxInterets(int $taux):self
     {
        if($taux > 0){
            $this->taux_interets = $taux;
        }
        return $this;
     }

     /**
      * Verser les intérêts
      *
      * @return void
      */
     public function verserInterets()
     {
        $this->solde = $this->solde + ($this->solde * $this->taux_interets / 100);
     }
}