<?php

namespace IutLens\Tache;

require "vendor/autoload.php";
require_once 'src/Config.php';

use IutLens\Tache\BD\AccesBD;
use IutLens\Tache\BD\MyBDMapper;
use IutLens\Tache\Modele\Tache;
use IutLens\Tache\Singleton\Blade;

$connexion = AccesBD::getConnexion();
$mapper = new MyBDMapper($connexion);

if (isset($_POST['ajouter'])) {
    $tache = new Tache($_POST['expiration'],$_POST['categorie'],$_POST['description'],$_POST['accomplie']);
    $mapper -> insertTask($tache);

    header('location: /listeTaches.php');
}
elseif (isset($_POST['retour'])) {
    header('location: /listeTaches.php');
}
else {
    $tache = new Tache();
    echo Blade::getBlade()->run("create", ["tache" => $tache]);
}