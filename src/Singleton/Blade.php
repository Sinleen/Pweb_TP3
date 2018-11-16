<?php

namespace IutLens\Tache\Singleton;
use eftec\bladeone\BladeOne;

class Blade {
    private static $instance;
    private static $blade;

    private function __construct() {
        $views = __DIR__.'/../../views';
        $cache = __DIR__.'/../../cache';
        self::$blade = new BladeOne($views, $cache, BladeOne::MODE_AUTO);
    }
    public static function getBlade(): BladeOne {
        if (!isset(self::$instance)) {
            self::$instance = new Blade();
        }
        return self::$blade;
    }

    /**
     * rend impossible le clonage
     */
    private function __clone() {
    }

}