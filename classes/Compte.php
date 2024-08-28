<?php
/**
 * Objet compte bancaire 
 */
class Compte
{
    /**
     * Titulaire du compte
     *
     * @var strin g
     */
    public $titulaire;
    
    /**
     * Solde du compte
     *
     * @var float
     */
    public $solde;

    /**
     * Constructeur du compte bancaire 
     *
     * @param string $nom
     * @param float $solde
     */
    public function __construct(string $nom, float $montant = 100)
    {
        // J'attribue le nom à la propriété titulaire
        $this->titulaire = $nom;
        // J'attribue le montant à la propriaté solde
        $this->solde = $montant ;        
    }

    /**
     * Déposer de l'argent sur le compte
     *
     * @param float $montant Montant déposé
     * @return void
     */
    public function deposer(float $montant)
    {
        // On vérifie si le montant est positif
        if($montant > 0){
            $this->solde += $montant;
        }
    }

    /**
     * Retourne une chaine de caratère affichant le solde
     *
     * @return string
     */
    public function voirSolde():string
    {
        return ('Le solde du compte est de '.$this->solde.' €');
    }

    /**
     * Retire un montant du solde du compte
     *
     * @param float $montant
     * @return float|string
     */
    public function retirer(float $montant): void
    {
        // on vérifie le montant et le solde
        if($montant > 0 && $this->solde >= $montant)
        {
            $this->solde -= $montant;
        } else {
            echo ('Montant invalide ou solde insuffisant.');
        }
    }
}