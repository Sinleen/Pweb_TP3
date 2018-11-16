<?php

namespace IutLens\Tache\BD;
use IutLens\Tache\Modele\Tache;


interface IBDMapper {
    /**
    * @return mixed la liste des tâches
    */
    function fetchAllTask();

    /**
    * @param $id
    * @return mixed la tâche qui a pour clé <code>$id</code> ou <code>false</code>
    */
    function fetchTaskById($id);

    /**
    * @param Tache $tache instance de la classe <code>Tache</code>
    * @return mixed l'id de la tâche créée
    */
    function insertTask(Tache $tache);

    /**
    * @param Tache $task instance de la classe <code>Tache</code>
    * $id étatnt la clé de la tâche à modifier
    * @return mixed le nombre de lignes impactées (0 ou 1)
    */
    function updateTask(Tache $task);

    /**
    * @param $id la clé de la tâche à supprimer
    * @return mixed le nombre de lignes impactées (0 ou 1)
    */
    function deleteTask($id);
}