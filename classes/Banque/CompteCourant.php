<?php
namespace App\Banque;

class CompteCourant extends Compte
{
    private $decouvert;

    /**
     * Constructeur de compte courant
     *
     * @param string $nom
     * @param float $montant
     * @param integer $decouvert
     */
    public function __construct(string $nom, float $montant, int $decouvert)
    {
        // Je transfère les informations nécessaires au contructeur du parent ($nom et $montant)
        parent::__construct($nom, $montant);

        // Je passe aux constructeur de CompteCourant (celuici) les autres proriété à implémenter 
        // lors de l'instanciation des objets
        $this->decouvert = $decouvert;
    }

    public function getDecouvert():int
    {
        return $this->decouvert;
    }

    public function setDecouvert(int $montant):self
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
        if($montant > 0 && $this->solde - $montant >= -$this->decouvert){
            $this->solde -= $montant;
        }else{
            echo 'Solde insuffiiant';
        }
    }
}