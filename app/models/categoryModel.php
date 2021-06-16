<?php

namespace itrax\models;

use itrax\core\db;


class categoryModel extends db
{
   public function addNewCategory($data){
     return  $this->Insert($data);
   }
   public function getAllCategory(){
    $category =  $this->All("SELECT * FROM `category`");
      return $category;
    }

   public function deleteCategory($id){
     return $this->delete($id);
   }
   public function GetCategoryById($id){
      return $this->All("SELECT * FROM `category` WHERE `id` = $id");
   }

   public function UpdateCategory($data,$id){
      return $this->update($data,$id);
   }
   public function numcategory(){
     return $this->select_count();
   }
}