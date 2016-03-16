<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Api_Type
 *
 * @author Gaëtan
 */
namespace App\Model;
class Api_Type extends \PoireauFramework\Arch\Model{ 
    public function getTypeById($id){
        $query = $this->database->prepare('SELECT TYPE_NAME, (SELECT TYPE_NAME FROM TYPE WHERE TYPE_ID = WEAKNESS_ID) AS WEAKNESS_NAME,WEAKNESS_COEFF FROM TYPE, WEAKNESS WHERE WEAKNESS.TYPE_ID = :id AND TYPE.TYPE_ID = WEAKNESS.TYPE_ID');
        $query->bindValue('id', $id, \PDO::PARAM_INT);
        $query->execute();
        $data = $query->fetchAll();
        if(!$data)
            return null;
        return $data;
    }
    public function getTypeByName($name){
        $query = $this->database->prepare('SELECT TYPE_NAME, (SELECT TYPE_NAME FROM TYPE WHERE TYPE_ID = WEAKNESS_ID) AS WEAKNESS_NAME,WEAKNESS_COEFF FROM TYPE, WEAKNESS WHERE TYPE.TYPE_NAME = :name AND TYPE.TYPE_ID = WEAKNESS.TYPE_ID');
        $query->bindValue('name', strtoupper($name), \PDO::PARAM_STR);
        $query->execute();
        $data = $query->fetchAll();
        if(!$data)
            return null;
        return $data;
    }
}
