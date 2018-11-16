<?php

namespace IutLens\Tache;

require "vendor/autoload.php";
require_once "src/Config.php";

use IutLens\Tache\BD\AccesBD;
use IutLens\Tache\BD\MyBDMapper;
use IutLens\Tache\Modele\Tache;
use IutLens\Tache\Singleton\Blade;

$connexion = AccesBD::getConnexion();
$req = new MyBDMapper($connexion);
$tache = $req->fetchAllTask();

echo Blade::getBlade()->run("listeTaches",["taches" => $tache]);

if(isset($_POST['bouton'])){
    header('location: /creeTache.php');
}

?>

