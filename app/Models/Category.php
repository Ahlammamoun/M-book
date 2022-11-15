<?php

use mbook\Utils\Database;

class Category extends CoreModel
{

    private $subtitle;
    private $picture;
    private $home_order;
  

    /**
     * Get the value of subtitle
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * Set the value of subtitle
     *
     * @return  self
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    /**
     * Get the value of picture
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set the value of picture
     *
     * @return  self
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get the value of home_order
     */
    public function getHome_order()
    {
        return $this->home_order;
    }

    /**
     * Set the value of home_order
     *
     * @return  self
     */
    public function setHome_order($home_order)
    {
        $this->home_order = $home_order;

        return $this;
    }


    public function findAll()
    {
        //connexion a la bdd 
        $pdoDBConnexion = Database::getPDO();

        //ecriture de la requête
        $sql = 'SELECT * FROM `category`';

        //execution de la requête
        $pdoStatement = $pdoDBConnexion->query($sql);

        //on récupère les datas
        $categoriesList = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Category');

        return $categoriesList;
    }

    public function find($id)
    {
        $pdoDBConnexion = Database::getPDO();

        $sql = 'SELECT * FROM `category` WHERE `id` = ' . $id;

        $pdoStatement = $pdoDBConnexion->query($sql);

        $category = $pdoStatement->fetchObject('Category');

        return $category;
    }
}



