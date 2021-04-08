<?php

class App {
    protected $controllers = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseUrl();

        //check & inisiazation controller
        if(isset($url) && file_exists('../app/controllers/'.$url[0].'.php')){
            $this->controllers = $url[0];
            unset($url[0]);
        }
        require_once '../app/controllers/'.$this->controllers.'.php';
        $this->controllers = new $this->controllers;

        //method
        if(isset($url[1]) && method_exists($this->controllers, $url[1])){
            $this->method = $url[1];
            unset($url[1]);
        }

        //params
        if( !empty($url)){
            $this->params = array_values($url);
        }

        //run class & function or method
        call_user_func_array([$this->controllers, $this->method], $this->params);
    }

    private function parseUrl(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}