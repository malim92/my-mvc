<?php

class Controller {

    public function model($model, $data=[]) {
        if (file_exists("$_SERVER[DOCUMENT_ROOT]/msd/zostavax/zostravax/models/" . $model . '.php')) {
            require_once realpath($_SERVER["DOCUMENT_ROOT"]) . '/msd/zostavax/zostravax/models/' . $model . '.php';
            return new $model();
        }
    }

    public function view($view, $data=[]){
        require_once realpath($_SERVER["DOCUMENT_ROOT"]) . '/msd/zostavax/zostravax/view/' . $view . '.php';
    }
    
}