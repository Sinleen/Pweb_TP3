<?php

namespace IutLens\Tache\BD;

use \PDO;
use IutLens\Tache\BD\IBDMapper;
use IutLens\Tache\Modele\Tache;


class MyBDMapper implements IBDMapper
{
    private $connexion;
    private $queryInsertTask;
    private $queryUpdateTask;
    private $queryDeleteTask;
    private $querySelectTask;
    private $querySelectAllTasks;

    public function __construct(PDO $connexion) {
        $this->connexion = $connexion;
        $this->queryInsertTask = $this->connexion->prepare(
            'insert into tache (expiration,categorie,description,accomplie) values (?,?,?,?)'
        );

        $this->queryUpdateTask = $this->connexion->prepare(
            "update tache set accomplie = ? where id = ?"
        );

        $this->querySelectTask = $this->connexion->prepare(
            'select * from tache where id = ?'
        );

        $this->queryDeleteTask = $this->connexion->prepare(
            'delete from tache where id = ?'
        );

        $this->querySelectTask->setFetchMode(
            PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, '\IutLens\Tache\Modele\Tache');

        $this->querySelectAllTasks = $this->connexion->prepare(
            'select * from tache'
        );
        $this->querySelectAllTasks->setFetchMode(
            PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, '\IutLens\Tache\Modele\Tache');

    }

    function insertTask(Tache $tache){
        $this->queryInsertTask->execute([$tache->expiration,$tache->categorie,$tache->description,$tache->accomplie]);
        return $this->connexion->lastInsertId();
    }

    function updateTask(Tache $task)
    {
        $this->queryUpdateTask->execute(['O',$task->id]);
    }

    function deleteTask($id)
    {
        $this->queryDeleteTask->execute( [$id] );
    }

    function fetchTaskById($id)
    {
        $this->querySelectTask->execute( [$id] );
        return $this->querySelectTask->fetch ( );
        //echo $row['id'] . " " . $row['expiration'] . " " . $row['categorie'] . " " . $row['description'] . " " . $row['accomplie'] ;
    }

    function fetchAllTask()
    {
        $this->querySelectAllTasks->execute();
        return $this->querySelectAllTasks->fetchAll();
        //$tab =  $this->querySelectAllTasks->fetchAll(PDO::FETCH_OBJ); (marche pas)
        //foreach($this->querySelectAllTasks->fetchAll(PDO::FETCH_OBJ) as $enr){
            //echo $enr->id . " | " . $enr->expiration . " | " . $enr->categorie . " | " . $enr->description . " | " . $enr->accomplie . "\n" . PHP_EOL;
        //}
    }


    // ...
}