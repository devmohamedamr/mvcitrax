<?php
namespace itrax\controllers;

use itrax\core\controller;

class userController extends controller{
      public function index(){
        //   echo "mohamed amr";
        // echo $x;
        // echo $y;
        // echo $name;
        return $this->view("home");
      } 
      
  
}