<?php
namespace itrax\controllers;
use itrax\core\controller;

use itrax\core\db;

class homeController extends controller{
      public function index(){

        $db = new db();
        echo "<pre>";
        print_r($db->select("instractur"));

        $title = "mohamed";
        //   echo "welcome home";
        return $this->view("index",['welcome' => $title]);
      }  
}