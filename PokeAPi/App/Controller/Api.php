<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Api
 *
 * @author Gaëtan
 */
namespace App\Controller;
class Api extends \PoireauFramework\Arch\Controller{
    
    /**
     *
     * @var \App\Model\Api_Type
     */
    private $model;
    public function __construct(\PoireauFramework\PoireauFramework $app) {
        parent::__construct($app);
    }
    
    public function indexAction(){
        $this->output->setDefaultView(false);
    }
    
    public function typeAction($id = 1){
        header('Cache-Control: no-cache, must-revalidate');
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
        header('Content-type: application/json');
        $this->model = $this->app->loader->load(\App\Model\Api_Type::class);
        $obj = new \stdClass;
        if(is_numeric($id))
            $obj->type = $this->model->getTypeById($id);
        else if(is_string($id))
            $obj->type = $this->model->getTypeByName($id);
        echo json_encode($obj);
        $this->output->setDefaultView(false);
    }
    
    public function spellAction($id = 1){
        header('Cache-Control: no-cache, must-revalidate');
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
        header('Content-type: application/json');
        $this->model = $this->app->loader->load(\App\Model\Api_Spell::class);
        $obj = new \stdClass;
        if(is_numeric($id))
            $obj->type = $this->model->getTypeById($id);
        else if(is_string($id))
            $obj->type = $this->model->getTypeByName($id);
        echo json_encode($obj);

        $this->output->setDefaultView(false);
    }
    
    public function talentAction($name){
        header('Cache-Control: no-cache, must-revalidate');
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
        header('Content-type: application/json');
        if($name){
            $this->model = $this->app->loader->load(\App\Model\Api_Talent::class);
            $obj = new \stdClass;
            //ToDo something
            echo json_encode($obj);
        }   
        $this->output->setDefaultView(false);
    }
    
    public function pokemonAction($id){
        header('Cache-Control: no-cache, must-revalidate');
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
        header('Content-type: application/json');
        if($name){
            $this->model = $this->app->loader->load(\App\Model\Api_Pokemon::class);
            $obj = new \stdClass;
            if(is_numeric($id))
                $obj->type = $this->model->getPokemonById($id);
            else if(is_string($id))
                $obj->type = $this->model->getPokemonByName($id);
            echo json_encode($obj);
        }   
        $this->output->setDefaultView(false);
    }
}
