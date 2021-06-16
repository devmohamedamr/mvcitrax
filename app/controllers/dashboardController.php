<?php
namespace itrax\controllers;
use itrax\core\controller;
use itrax\models\categoryModel;

class dashboardController extends controller{

    public function __construct(){
        session_start();
        if(empty($_SESSION['user'])){
          exit("this method not allowed");
        }
    }  
      public function index(){
        $category = new categoryModel();
        $numberOfCategoy =  $category->numcategory();
        // echo $numberOfCategoy;die;
        $title = "dashboard";
        //   echo "welcome home";
        return $this->view("dashboard/dashboard",['title' => $title , 'numberOfCategoy'=>$numberOfCategoy]);
      }  
}