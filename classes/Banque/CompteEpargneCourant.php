<?php

class CompteEpargneCourant extends CompteEpargne
{
    private $decouvert;

    /**
     * Constructeur de la Classe CompteEpargneCourant
     *
     * @param string $nom Nom du titulaire
     * @param float $montant Montant à l'ouverture du compte
     * @param integer $taux Taux de rémunération ou taux d'intérêt du compte
     * @param integer $decouvert Autorisation de découvert
     */
    public function __construct(string $nom, float $montant, int $taux, int $decouvert)
    {
        // Je passe au constructeur du parent les propriétés nécessaires
        parent::__construct($nom, $montant, $taux);

        // Je passe au constructeur de self l'autorisation de découvert
        $this->decouvert = $decouvert;
    }

    public function getDecouvert():int
    {
        return $this->decouvert;
    }

    public function setDecouvert(int $montant): self
    {
        $this->decouvert = $montant;
        return $this;
    }
    
    /**
     * Retirer de l'argent sans dépasser le découvert
     *
     * @param float $montant
     * @return void
     */
    public function retirer(float $montant): void
    {
        // Je vérifie si le découvert autorisé permet le retrait
        if($montant > 0 && $this->solde - $montant >= -$this->decouvert){
            $this->solde -= $montant;
        }else{
            echo 'Solde insuffiiant';
        }
    }
}