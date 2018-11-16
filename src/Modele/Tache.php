<?php

namespace IutLens\Tache\Modele;


class Tache {
    /** @var  int */
    public $id;
    /** @var  string */
    public $expiration;
    /** @var  string */
    public $categorie;
    /** @var  string */
    public $description;
    /** @var  string */
    public $accomplie;

    public function __construct(
        $expiration = "",
        $categorie = "",
        $description = "",
        $accomplie = "N",
        $id = false
    ) {
        $this->id = $id;
        $this->expiration = $expiration;
        $this->categorie = $categorie;
        $this->description = $description;
        $this->accomplie = $accomplie;
    }

    /**
    * @return int
    */
    public function getId(): int {
        return $this->id;
    }

    /**
    * @param int $id
    */
    public function setId(int $id) {
        $this->id = $id;
    }

    /**
    * @return string
    */
    public function getExpiration(): string {
        return $this->expiration;
    }

    /**
    * @param string $expiration
    */
    public function setExpiration(string $expiration) {
        $this->expiration = $expiration;
    }

    /**
    * @return string
    */
    public function getCategorie(): string {
        return $this->categorie;
    }

    /**
    * @param string $categorie
    */
    public function setCategorie(string $categorie) {
        $this->categorie = $categorie;
    }

    /**
    * @return string
    */
    public function getDescription(): string {
        return $this->description;
    }

    /**
    * @param string $description
    */
    public function setDescription(string $description) {
        $this->description = $description;
    }

    /**
    * @return string
    */
    public function getAccomplie(): string {
        return $this->accomplie;
    }

    /**
    * @param string $accomplie
    */
    public function setAccomplie(string $accomplie) {
        $this->accomplie = $accomplie;
    }

    function __toString() {
        return sprintf(
        "%d: %s %s %s %",
        $this->id,
        $this->expiration,
        $this->categorie,
        $this->description,
        $this->accomplie
        );
    }

}