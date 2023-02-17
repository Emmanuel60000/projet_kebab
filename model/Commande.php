<?php
class Commande
{
    private $nomKebab;
    private $prixAmericain = 10;
    private $prixBufallo = 12;
    private $nomClient;
    private $nombre;

    public function getNomClient()
    {
        return $this->nomClient;
    }
    public function setNomClient($kebab)
    {
        return $this->nomClient = $kebab;
    }
    public function getNomKebab()
    {
        return $this->nomKebab;
    }
    public function setNomKebab($kebab)
    {
        return $this->nomKebab = $kebab;
    }
    public function setNombre($nombre)
    {
        return $this->nombre = $nombre;
    }
    public function  addKebab()
    {

        return "J'ai ajouté le kebab " . $this->nomKebab;
    }
    public function  removeKebabe()
    {

        return " vous venez de supprime votre liste";
    }
    public function calculerPrix()
    {
        if ($this->nomKebab === "Americain") {
            return $this->prixAmericain *  $this->nombre;
        } else {
            return $this->prixBufallo *  $this->nombre;
        }
    }

    public function afficherCommande()
    {
        return "<p> Nom:  " . $this->nomClient . "</p>"."<p> Choix: " . $this->nomKebab . "</p>"."<p> Quantité: " . $this->nombre . "</p>"."<p> Prix: ". $this->calculerPrix(). "</p>";
    }
}
