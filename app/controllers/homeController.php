<?php
namespace itrax\controllers;
use itrax\core\controller;

class homeController extends controller{
      public function index(){
        
        $title = "mohamed";
        //   echo "welcome home";
        return $this->view("index",['welcome' => $title]);
      }  
}