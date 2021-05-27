<?php
namespace itrax\core;


class app{

    private $controller;
    private $method;
    private $params = [];

    public function __construct(){
        $this->url();
        $this->render();
    }

    private function url(){
        if(!empty($_SERVER['QUERY_STRING'])){
            $url = explode("/",$_SERVER['QUERY_STRING']);
        
            // controller 
            $this->controller = isset($url[0]) ? $url[0] : "home";
            
            // method 
            $this->method = isset($url[1]) ? $url[1] : "index";
            // params
            $this->params = isset($url[2]) ? $url[2] : [];
        }
    }


    private function render(){
        $controller = "itrax\\controllers\\".$this->controller."Controller";
    
        if(class_exists($controller)){
            $controller = new $controller;
            if(method_exists($controller,$this->method)){
                call_user_func_array([$controller,$this->method],$this->params);
            }
        }
    }

}