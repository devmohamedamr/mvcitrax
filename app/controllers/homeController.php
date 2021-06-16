<?php
namespace itrax\controllers;
use itrax\core\controller;
use itrax\models\site_settingModel;
use itrax\models\categoryModel;
class homeController extends controller{
      public function index(){
        $setting = new site_settingModel();
        $theam =  $setting->GetSetting('theam');   
        $headline =  $setting->GetSetting('headline');   
        $category= new categoryModel();
        $menu =  $category->getAllCategory();
        $title = "mohamed";
        // $headline = ;
        //   echo "welcome home";
        return $this->view("website/".$theam."/index",['welcome' => $title,'headline'=> $headline , 'menu'=>$menu]);
      }  
}