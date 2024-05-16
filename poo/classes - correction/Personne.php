<?php

class Personne {
    private string $nom;
    private array $prenoms = [];
    // $dateNaissance est une référence sur un objet (instance) de la classe DataTime
    private DateTime $dateNaissance;

    /**
     * @param string $nom
     * @param string $prenom
     * @param string $dateNaissance
     */
    public function __construct(string $nom, string $prenom, string $dateNaissance)
    {
        $this->nom = strtoupper($nom);
        $this->prenoms[] = ucfirst(strtolower($prenom));
        $this->dateNaissance = DateTime::createFromFormat("d/m/Y",$dateNaissance);
    }

    public function getIdentite() : string {
        return $this->prenoms[0] . " " . $this->nom;
    }

    public function ajouterPrenom(string $prenom) : bool {
        if (count($this->prenoms) === 3) {
            return false;
        }
        $this->prenoms[] = $prenom;
        return true;
    }
    public function getIdentiteAdministrative() : string {
        $prenoms = implode(" ",$this->prenoms);
        return $prenoms . " " . $this->nom;
    }

    public function getAge() : int {
        $now = new DateTime();
        $interval = $this->dateNaissance->diff($now);
        return $interval->y;
    }

    public function getDateNaissance() : DateTime {
        return $this->dateNaissance;
    }

    public function getDateNaissanceToString() : string {
        return $this->dateNaissance->format("d/m/Y");
    }

}
