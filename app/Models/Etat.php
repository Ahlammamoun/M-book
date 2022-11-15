<?php

use mbook\Utils\Database;

class Etat extends CoreModel
{
 
    private $footer_order;
  


    /**
     * Get the value of footer_order
     */
    public function getFooter_order()
    {
        return $this->footer_order;
    }

    /**
     * Set the value of footer_order
     *
     * @return  self
     */
    public function setFooter_order($footer_order)
    {
        $this->footer_order = $footer_order;

        return $this;
    }


    public function findAll()
    {
        //connexion a la bdd 
        $pdoDBConnexion = Database::getPDO();

        //ecriture de la requête
        $sql = 'SELECT * FROM `etat`';

        //execution de la requête
        $pdoStatement = $pdoDBConnexion->query($sql);

        //dump($pdoDBConnexion);


        //on récupère les datas
        $etatList = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Etat');

        return $etatList;
    }

    public function find($id)
    {
        $pdoDBConnexion = Database::getPDO();

        $sql = 'SELECT * FROM `etat` WHERE `id` = ' . $id;

        $pdoStatement = $pdoDBConnexion->query($sql);

        $etat  = $pdoStatement->fetchObject('Etat');

        return $etat;
    }
}
