<?php

class Article {
    private $id_art;
    private $pays;
    private $type_trip;
    private $auteur;
    private $recit;
    private $recit1;
    private $recit2;
    private $recit3;
    private $image;
    private $imageHD1;
    private $imageHD2;
    private $imageHD3;
    private $id_cont;

    /**
     * Get the value of id_art
     */ 
    public function getId_art()
    {
        return $this->id_art;
    }

    /**
     * Set the value of id_art
     *
     * @return  self
     */ 
    public function setId_art($id_art)
    {
        $this->id_art = $id_art;

        return $this;
    }

    /**
     * Get the value of pays
     */ 
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set the value of pays
     *
     * @return  self
     */ 
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get the value of type_trip
     */ 
    public function getType_trip()
    {
        return $this->type_trip;
    }

    /**
     * Set the value of type_trip
     *
     * @return  self
     */ 
    public function setType_trip($type_trip)
    {
        $this->type_trip = $type_trip;

        return $this;
    }

    /**
     * Get the value of auteur
     */ 
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set the value of auteur
     *
     * @return  self
     */ 
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get the value of recit
     */ 
    public function getRecit()
    {
        return $this->recit;
    }

    /**
     * Set the value of recit
     *
     * @return  self
     */ 
    public function setRecit($recit)
    {
        $this->recit = $recit;

        return $this;
    }

    /**
     * Get the value of recit1
     */ 
    public function getRecit1()
    {
        return $this->recit1;
    }

    /**
     * Set the value of recit1
     *
     * @return  self
     */ 
    public function setRecit1($recit1)
    {
        $this->recit1 = $recit1;

        return $this;
    }

    /**
     * Get the value of recit2
     */ 
    public function getRecit2()
    {
        return $this->recit2;
    }

    /**
     * Set the value of recit2
     *
     * @return  self
     */ 
    public function setRecit2($recit2)
    {
        $this->recit2 = $recit2;

        return $this;
    }

    /**
     * Get the value of recit3
     */ 
    public function getRecit3()
    {
        return $this->recit3;
    }

    /**
     * Set the value of recit3
     *
     * @return  self
     */ 
    public function setRecit3($recit3)
    {
        $this->recit3 = $recit3;

        return $this;
    }

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of imageHD1
     */ 
    public function getImageHD1()
    {
        return $this->imageHD1;
    }

    /**
     * Set the value of imageHD1
     *
     * @return  self
     */ 
    public function setImageHD1($imageHD1)
    {
        $this->imageHD1 = $imageHD1;

        return $this;
    }

    /**
     * Get the value of imageHD2
     */ 
    public function getImageHD2()
    {
        return $this->imageHD2;
    }

    /**
     * Set the value of imageHD2
     *
     * @return  self
     */ 
    public function setImageHD2($imageHD2)
    {
        $this->imageHD2 = $imageHD2;

        return $this;
    }

    /**
     * Get the value of imageHD3
     */ 
    public function getImageHD3()
    {
        return $this->imageHD3;
    }

    /**
     * Set the value of imageHD3
     *
     * @return  self
     */ 
    public function setImageHD3($imageHD3)
    {
        $this->imageHD3 = $imageHD3;

        return $this;
    }

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
}