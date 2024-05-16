<?php

// Définition de la classe
class Phrase {
    // Attributs
    private string $phrase;

    /**
     * @param string $phrase
     */
    public function __construct(string $phrase)
    {
        $this->phrase = $phrase;
    }

    /**
     * @return string
     */
    public function getPhrase(): string
    {
        return $this->phrase;
    }

    /**
     * @param string $phrase
     */
    public function setPhrase(string $phrase): void
    {
        $this->phrase = $phrase;
    }

    public function calculNombreMots(): int
    {
        $mots = explode(" ",$this->phrase);
         return count($mots);
    }

    public function calculNombreCaracteres(): int
    {
        $mots = explode(" ",$this->phrase);
        $lettres = implode($mots);
        return strlen($lettres);
    }

    public function getMotPosition(int $position): ?string
    {
        $mots = explode(" ",$this->phrase);
        if (!isset($mots[$position-1])) {
            return null;
        }
        return $mots[$position-1];
    }

    public function getTypePhrase(): string
    {
        $caracteres = str_split($this->phrase);
        if (end($caracteres)=="!") {
            return "Phrase exclamative";
        } elseif (end($caracteres)=="?") {
            return "Phrase interrogative";
        } else {
            return "Phrase déclarative";
        }
    }

    public function getOccurenceMot(string $motCherche): int
    {
        $nombreOccurence=0;
        $mots = trim($this->phrase,"?.!");
        $mots = explode(" ",$mots);
        foreach ($mots as $mot) {
            if (strtolower($mot)==strtolower($motCherche)) {
                $nombreOccurence++;
            }
        }
        return $nombreOccurence;
    }

    public function remplacerMot(string $motARemplacer, string $nouveauMot): string
    {
        return str_replace($motARemplacer,$nouveauMot,$this->phrase);
    }

    public function reformaterPhrase(): string
    {
        $this->phrase=ucfirst($this->phrase);
        if (substr($this->phrase,-1)!="."||"?"||"!") {
            return $this->phrase.=".";
        }
    }

    public function getNombreVoyelles(): int
    {
        $nbVoyelles=0;
        $caracteres = str_split($this->phrase);
        foreach ($caracteres as $caractere) {
            if ($caractere=="a"||"e"||"y"||"u"||"i"||"o") {
                $nbVoyelles++;
            }
        }
        return $nbVoyelles;
    }

}