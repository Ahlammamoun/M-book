<?php

namespace Mbook\Models;

use Mbook\Utils\Database;
use PDO;


class language extends CoreModel
{

    private $footer_order;


    public function getFooter_order()
    {
        return $this->footer_order;
    }
    public function setFooter_order($footer_order)
    {
        $this->footer_order = $footer_order;
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


    public function findFooterLanguages()
    {
        //connexion a la bdd 
        $pdoDBConnexion = Database::getPDO();

        //ecriture de la requête
        $sql = 'SELECT *
                FROM `language`
                WHERE `footer_order` > 0
                ORDER BY `footer_order` 
                LIMIT 5';

        //execution de la requête
        $pdoStatement = $pdoDBConnexion->query($sql);

        //dump($pdoDBConnexion);


        //on récupère les datas
        $languageList = $pdoStatement->fetchAll(PDO::FETCH_CLASS, '\\Mbook\\Models\\Language');
        //dump($languageList);
        return $languageList;
    }
}
