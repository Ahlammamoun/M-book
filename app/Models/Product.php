<?php

namespace Mbook\Models;

use Mbook\Utils\Database;
use PDO;

class Product extends CoreModel
{


    private $description;
    private $picture;
    private $price;
    private $rate;
    private $status;
    private $language_id;
    private $category_id;
    private $etat_id;


    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setDescription($description)
    {
        $this->description = $description;

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
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of rate
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set the value of rate
     *
     * @return  self
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get the value of status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of created_at
     */
    public function getCreated_at()
    {
        return $this->created_at;
    }

    /**
     * Get the value of updated_at
     */
    public function getUpdated_at()
    {
        return $this->updated_at;
    }

    /**
     * Set the value of updated_at
     *
     * @return  self
     */
    public function setUpdated_at($updated_at)
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    /**
     * Get the value of language_id
     */
    public function getLanguage_id()
    {
        return $this->language_id;
    }

    /**
     * Set the value of language_id
     *
     * @return  self
     */
    public function setLanguage_id($language_id)
    {
        $this->language_id = $language_id;

        return $this;
    }

    /**
     * Get the value of category_id
     */
    public function getCategory_id()
    {
        return $this->category_id;
    }

    /**
     * Set the value of category_id
     *
     * @return  self
     */
    public function setCategory_id($category_id)
    {
        $this->category_id = $category_id;

        return $this;
    }

    /**
     * Get the value of etat_id
     */
    public function getEtat_id()
    {
        return $this->etat_id;
    }

    /**
     * Set the value of etat_id
     *
     * @return  self
     */
    public function setEtat_id($etat_id)
    {
        $this->etat_id = $etat_id;

        return $this;
    }




    public function findAll()
    {
        //connexion a la bdd 
        $pdoDBConnexion = Database::getPDO();

        //ecriture de la requête
        $sql = 'SELECT * FROM `product`';

        //execution de la requête
        $pdoStatement = $pdoDBConnexion->query($sql);

        //dump($pdoDBConnexion);


        //on récupère les datas
        $productList = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Product');

        return $productList;
    }

    public function find($id)
    {
        $pdoDBConnexion = Database::getPDO();

        $sql = 'SELECT * FROM `product` WHERE `id` = ' . $id;

        $pdoStatement = $pdoDBConnexion->query($sql);

        $product = $pdoStatement->fetchObject('Product');

        return $product;
    }



    public function findProductWithCategoryAndLanguageNAme($id)
    {
        $pdoDBConnexion = Database::getPDO();

        $sql =      'SELECT `product`.*, `language`.`name` AS `language_name`, `category`.`name` AS `category_name`
                    FROM   `product`
                    INNER JOIN `language` ON `product`.`language_id` = `language`.`id`
                    INNER JOIN `category` ON `product` .`category_id` = `category`.`id`
                    WHERE  `product`.`id` = ' . $id;

        $pdoStatement = $pdoDBConnexion->query($sql);


        //pusique c'est un requête jointe
        //Fetch_assoc retourne un tableau associatif avec les mêmes key que les propriétées du model, fetch object nous retourne un objet avec des key rajouté à la volé par php qui font que le tableau d'objet ne correspond plus au model et ses propriétés
        //il faut que les objets respect leurs plan de fabrication (fabriqué dan le model)
        $product = $pdoStatement->fetch(pdo::FETCH_ASSOC);


        return $product;
    }



    public function findProductsWithNameAndEtatByCategoryID($id)
    {
        $pdoDBConnexion = Database::getPDO();

        $sql = 'SELECT `product`.*,`etat`.`name` AS `etat_name`
                FROM `product`
                INNER JOIN `etat` ON `product`.`etat_id` = `etat`.`id`
                WHERE `category_id` = ' . $id;

        $pdoStatement = $pdoDBConnexion->query($sql);


        //pusique c'est un requête jointe
        //Fetch_assoc retourne un tableau associatif avec les mêmes key que les propriétées du model, fetch object nous retourne un objet avec des key rajouté à la volé par php qui font que le tableau d'objet ne correspond plus au model et ses propriétés
        //il faut que les objets respect leurs plan de fabrication (fabriqué dan le model)
        $productListWithNameAndEtatByCategoryId = $pdoStatement->fetchAll(pdo::FETCH_ASSOC);


        return $productListWithNameAndEtatByCategoryId;
    }
}
