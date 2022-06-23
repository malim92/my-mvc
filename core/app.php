<?php

class App
{
    
    protected $arrayUrl = [];

    protected $controller = "home";

    protected $method = "denied";

    public function __construct()
    {
        $url = $this->parseUrl();
        
        //$page = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['ssid']);

        if (!empty($_GET)) {
            $arrayUrl = array_keys($_GET);
        }
        
        else $arrayUrl[0] = 'Home';


        if (file_exists("$_SERVER[DOCUMENT_ROOT]/msd/zostavax/zostravax/controllers/" . ucfirst($arrayUrl[0]) . '.php')) {
            $this->controller = $arrayUrl[0];
        }
        require_once realpath($_SERVER["DOCUMENT_ROOT"]) . '/msd/zostavax/zostravax/controllers/' . ucfirst($this->controller) . '.php';
        $this->controller = new $this->controller;

        if(method_exists($this->controller,'index'))
             {
                $this->controller->index(preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['ssid']));
             }
        else {
            $this->controller->denied();
        }
    }

    public function parseUrl()
    {
        if (isset($_GET['ssid'])) {
            $url = filter_var($_GET['ssid'], FILTER_SANITIZE_URL);
            return $url;
        } else return $url = 'home';
    }
}

