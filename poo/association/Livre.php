<?php

require_once 'Auteur.php';
require_once 'Categorie.php';
require_once 'Editeur.php';
class Livre {
    private string $isbn;
    private string $titre;
    private DateTime $dateParution;
    private int $nbPages;
    //Association avec la classe Auteur (1..1)
    private Auteur $auteur;
    private Editeur $editeur;
    private Categorie $categorie;

    /**
     * @param string $isbn
     * @param string $titre
     * @param string $dateParution
     * @param int $nbPages
     * @param Auteur $auteur
     * @param Categorie $categorie
     * @param Editeur $editeur
     */
    public function __construct(string $isbn, string $titre, string $dateParution, int $nbPages, Auteur $auteur, Categorie $categorie, Editeur $editeur)
    {
        $this->isbn = $isbn;
        $this->titre = $titre;
        $this->dateParution = DateTime::createFromFormat("d/m/Y",$dateParution);
        $this->nbPages = $nbPages;
        $this->auteur = $auteur;
        $this->categorie = $categorie;
        $this->editeur = $editeur ;
    }

    /**
     * @return Editeur
     */
    public function getEditeur(): Editeur
    {
        return $this->editeur;
    }

    /**
     * @return Categorie
     */
    public function getCategorie(): Categorie
    {
        return $this->categorie;
    }



    /**
     * @return string
     */
    public function getIsbn(): string
    {
        return $this->isbn;
    }

    /**
     * @return string
     */
    public function getTitre(): string
    {
        return $this->titre;
    }

    /**
     * @return DateTime
     */
    public function getDateParution(): DateTime
    {
        return $this->dateParution;
    }

    /**
     * @return int
     */
    public function getNbPages(): int
    {
        return $this->nbPages;
    }

    /**
     * @return Auteur
     */
    public function getAuteur(): Auteur
    {
        return $this->auteur;
    }

    public function setAuteur(Auteur $auteur): void
    {
        $this->auteur = $auteur;
    }


}