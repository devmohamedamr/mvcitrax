<?php
namespace itrax\controllers;

use itrax\core\controller;
use itrax\models\userModel;
use itrax\core\helper;
class userController extends controller{
      public function index(){
        return $this->view("home");
      } 


      public function login(){
          session_start();
          if(isset($_SESSION['user'])){
            helper::redirect("category/index");
          }
          return $this->view("website/login");
      }


      public function loginReq(){
        session_start();
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = new userModel();
        $userdata = $user->GetUserInfoByEmailAndPassword($email,$password);
        if(!empty($userdata)){
          $_SESSION['user'] = $userdata;
          $_SESSION['error'] = [];
          helper::redirect("dashboard/index");
        }else{
          $_SESSION['error'][] = "user and password not valid";
          helper::redirect("user/login");
        }

      }

      public function logout(){
        session_start();
        session_destroy();
        helper::redirect("user/login");
      }
      
  
}