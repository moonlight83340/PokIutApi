<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Api_Spell
 *
 * @author Gaëtan
 */
namespace App\Model;
class Api_Spell extends \PoireauFramework\Arch\Model{ 
    public function getSpellById($id){
        $query = $this->database->prepare('SELECT SPELL_NAME,SPELL_DESCRIPTION,SPELL_TYPE,SPELL_PP,SPELL_PUIS,SPELL_PREC,SPELL_CLASS,SPELL_CT_CS_DPPL,SPELL_CT_CS_HGSS,SPELL_CT_CS_NB,SPELL_CT_CS_N2B2 FROM SPELL WHERE SPELL_ID = :id');
        $query->bindValue('id', $id, \PDO::PARAM_INT);
        $query->execute();
        $data = $query->fetchAll();
        if(!$data)
            return null;
        return $data;
    }
    public function getSpellByName($name){
        $query = $this->database->prepare('SELECT SPELL_NAME,SPELL_DESCRIPTION,SPELL_TYPE,SPELL_PP,SPELL_PUIS,SPELL_PREC,SPELL_CLASS,SPELL_CT_CS_DPPL,SPELL_CT_CS_HGSS,SPELL_CT_CS_NB,SPELL_CT_CS_N2B2 FROM SPELL WHERE SPELL_NAME = :name');
        $query->bindValue('name', $name, \PDO::PARAM_STR);
        $query->execute();
        $data = $query->fetchAll();
        if(!$data)
            return null;
        return $data;
    }
}
