<?php

/**
 * Created by PhpStorm.
 * User: hsu
 * Date: 02/10/18
 * Time: 22:43
 */
namespace IutLens\Tache\BD;

use PDO;
use PDOException;
use IutLens\Tache\Config;
use IutLens\Tache\MyLogger;

class AccesBD {
    /**
     * @var $instance AccesBD
     * instance unique
     */
    private static $instance;

    /**
     * @var PDO
     * connexion unique avec la base de données
     */
    private static $connexion;

    /**
     * AccesBD constructor. (privé)
     */
    private function __construct() {
        try {
            $options = array(
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
            );
            self::$connexion = new PDO(
                DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME,
                DB_USER, DB_PASS, $options
            );
        } catch (PDOException $e) {
            echo "ERREUR : ".$e->getMessage().PHP_EOL;
            die();
        }
    }

    /**
     * @return PDO
     * Unique accès de l'extérieur à une connexion vers la base de données
     */
    public static function getConnexion(): PDO {
        if (!isset(self::$instance)) {
            self::$instance = new AccesBD();
        }

        return self::$connexion;
    }

    /**
     * rend impossible le clonage de la connexion avec la base de données
     */
    private function __clone() {
    }
}