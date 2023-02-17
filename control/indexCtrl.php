<?php
session_start();
include_once("../model/Commande.php");


function add()
{
   
    if (isset($_POST["add"])) {
        $erreur = [];
        if (isset($_POST["nom"]) && !empty($_POST["nom"])) {
            $nom = $_POST["nom"];
        } else {
            $erreur['nom'] = "Veuillez selectionner le kebab que vous voulais ";
        }

        if (isset($_POST["name"]) && !empty($_POST["name"])) {
            $name = $_POST["name"];
        } else {
            $erreur['name'] = "veuillez rentré un nom";
        }
        if (isset($_POST["quantite"]) && !empty($_POST["quantite"])) {
            $quantite = $_POST["quantite"];
        } else {
            $erreur['quantite'] = "veuiller rentré un nom";
        }


        if (empty($erreur)) {
            if (isset($_SESSION['afficher'])) {
                unset($_SESSION['afficher']);
            }
            $ajoue = new Commande();
            $ajoue->setNombre($quantite);
            $ajoue->setNomKebab($nom);
            $ajoue->setNomClient($name);
            $_SESSION['afficher'] = $ajoue->afficherCommande();
        }
    }
    if (isset($_SESSION['afficher'])) {
        return $_SESSION['afficher'];
    }
}
function remove()
{

    if (isset($_POST["remove"])) {

        $supression = new Commande();
        $supression->setNombre(null);
        $supression->setNomKebab(null);
        $supression->setNomClient(null);
        unset($_SESSION['afficher']);
        echo $supression->removeKebabe();
    }
}
