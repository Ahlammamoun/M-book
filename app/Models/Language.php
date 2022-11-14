<?php

use mbook\Utils\Database;

class language
{
    private $id;
    private $name;
    private $footer_order;
    private $created_at;
    private $updated_at;

    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getFooter_order()
    {
        return $this->footer_order;
    }
    public function setFooter_order($footer_order)
    {
        $this->footer_order = $footer_order;
    }
    public function getCreated_at()
    {
        return $this->created_at;
    }
    public function getUpdated_at()
    {
        return $this->updated_at;
    }
    public function setUpdated_at($updated_at)
    {
        $this->updated_at = $updated_at;
    }

    public function findAll()
    {
        //connexion a la bdd 
        $pdoDBConnexion = Database::getPDO();

        //ecriture de la requête
        $sql = 'SELECT * FROM `language`';

        //execution de la requête
        $pdoStatement = $pdoDBConnexion->query($sql);

        //dump($pdoDBConnexion);


        //on récupère les datas
        $languageList = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'language');
        //dump($languageList);
        return $languageList;
    }
    public function find($id)
    {
        // On récupère la connexion PDO
        $pdoDBConnexion = Database::getPDO();

        // On écrit notre requête SQL
        $sql = 'SELECT * FROM `language` WHERE `id` = ' . $id;

        // On exécute la requête
        $pdoStatement = $pdoDBConnexion->query($sql);

        // On récupère les données
        $language = $pdoStatement->fetchObject('language');

        // On retourne le résultat
        return $language;
    }
}
