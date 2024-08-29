<?php
/**
 * Objet compte bancaire 
 */
abstract class Compte
{
    /**
     * Titulaire du compte
     *
     * @var string
     */
    private $titulaire;
    
    /**
     * Solde du compte
     *
     * @var float
     */
    protected $solde;

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
        $this->solde = $montant;
    }

    /**
     * Retourne la valeur du titulaire du compte
     *
     * @return string
     */
    public function getTitulaire(): string
    {
        return $this->titulaire;
    }

    /**
     * Modifie le nom du titulaire et retourne l'objet
     *
     * @param string $nom
     * @return self c'est à dire l'objet Compte
     */
    public function setTitulaire(string $nom): self
    {
        if($nom =! ''){
            $this->titulaire = $nom;
        }
        return $this;
    }

    /**
     * Retourne le solde du compte
     *
     * @return float
     */
    public function getSolde():float
    {
        return $this->solde;
    }

    /**
     * Modifie le solde du compte
     *
     * @param float $montant Montant du solde
     * @return self ou Compte
     */
    public function setSolde(float $montant): self
    {
        if($montant >= 0){
            $this->solde = $montant;
        }
        return $this;
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

    /**
     * Convertit l'objet en string et retourne une chaine de caratères avec des valeurs de l'objet
     *
     * @return string
     */
    public function __toString()
    {
        return "Vous visualisez le compte de {$this->titulaire} qui a un solde de {$this->solde}";
    }
}