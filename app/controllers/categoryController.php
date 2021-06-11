<?php
namespace itrax\controllers;
use itrax\core\controller;
use itrax\models\categoryModel;
use itrax\core\helper;
class categoryController extends controller{

      private $model;

      public function __construct(){
        $this->model = new categoryModel();
          session_start();
          if(empty($_SESSION['user'])){
            exit("this method not allowed");
          }
      }  
      public function index(){
        
        $categories =  $this->model->getAllCategory();
        $title = "Category";
        //   echo "welcome home";
        return $this->view("dashboard/category/index",['title' => $title , 'categories' => $categories]);
      }
      
      public function add(){
        $title = "Add New Category";
        //   echo "welcome home";
        return $this->view("dashboard/category/add",['title' => $title]);

      }

      public function postadd(){
        if($this->model->addNewCategory($_POST)){
          helper::redirect("category/index");
        }
      }

      public function delete($id){
         if($this->model->deleteCategory($id)){
          helper::redirect("category/index");
         }
      }

      public function update($id){
        $category =  $this->model->GetCategoryById($id);
        $title = "Update Category";
        $action =  helper::url("category/postupdate");
        return $this->view("dashboard/category/update",['title' => $title , "category"=>$category,"action"=>$action ]);
      }

      public function postupdate(){
        if($this->model->UpdateCategory($_POST,$_POST['id'])){
          helper::redirect("category/index");
        }
      }
}