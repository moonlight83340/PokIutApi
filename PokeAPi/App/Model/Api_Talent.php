<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Api_Talent
 *
 * @author Gaëtan
 */
namespace App\Model;
class Api_Talent extends \PoireauFramework\Arch\Model{ 
    public function getTalentById($id){
        $query = $this->database->prepare('SELECT TALENT_NAME,TALENT_FIGHT_EFFECT,TALENT_FIELD_EFFECT FROM TALENT WHERE TALENT_ID = :id');
        $query->bindValue('id', $id, \PDO::PARAM_INT);
        $query->execute();
        $data = $query->fetchAll();
        if(!$data)
            return null;
        return $data;
    }

    public function getTalentByName($name){
        $query = $this->database->prepare('SELECT TALENT_NAME,TALENT_FIGHT_EFFECT,TALENT_FIELD_EFFECT FROM TALENT WHERE TALENT_NAME = :name');
        $query->bindValue('name', $name, \PDO::PARAM_STR);
        $query->execute();
        $data = $query->fetchAll();
        if(!$data)
            return null;
      
}
