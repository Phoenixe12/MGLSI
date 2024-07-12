<?php

namespace Models\Domain;

class Category {
    private $id;
    private $libelle;

    // Getters and setters pour chaque propriété
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getLibelle() {
        return $this->libelle;
    }

    public function setLibelle($libelle) {
        $this->libelle = $libelle;
    }
}
?>
