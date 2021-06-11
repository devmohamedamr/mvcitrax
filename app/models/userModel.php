<?php

namespace itrax\models;

use itrax\core\db;


class userModel extends db
{
    public function GetUserInfoByEmailAndPassword($email,$password){
      return  $this->all("SELECT * FROM `user` WHERE  `email` = '$email' AND `password` = '$password'");
    }
}