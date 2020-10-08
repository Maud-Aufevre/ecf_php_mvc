<?php

class Continents {
    private $id_cont;
    private $nom_cont;
    private $visu_cont;

    

    /**
     * Get the value of id_cont
     */ 
    public function getId_cont()
    {
        return $this->id_cont;
    }

    /**
     * Set the value of id_cont
     *
     * @return  self
     */ 
    public function setId_cont($id_cont)
    {
        $this->id_cont = $id_cont;

        return $this;
    }

    /**
     * Get the value of nom_cont
     */ 
    public function getNom_cont()
    {
        return $this->nom_cont;
    }

    /**
     * Set the value of nom_cont
     *
     * @return  self
     */ 
    public function setNom_cont($nom_cont)
    {
        $this->nom_cont = $nom_cont;

        return $this;
    }

    /**
     * Get the value of visu_cont
     */ 
    public function getVisu_cont()
    {
        return $this->visu_cont;
    }

    /**
     * Set the value of visu_cont
     *
     * @return  self
     */ 
    public function setVisu_cont($visu_cont)
    {
        $this->visu_cont = $visu_cont;

        return $this;
    }
}