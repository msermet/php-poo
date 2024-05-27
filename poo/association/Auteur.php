<?php

class Auteur {
    private string $nom;
    private string $prenom;

    /**
     * @param string $nom
     * @param string $prenom
     */
    public function __construct(string $nom, string $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @return string
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }


}