<?php

namespace itrax\models;

use itrax\core\db;


class site_settingModel extends db
{
    public function GetSetting($key){
    $setting =  $this->all("SELECT `site_value` FROM `site_setting` WHERE  `sitekey` = '$key' ");
     return $setting[0]['site_value'];  
    }

    public function UpdateSetting($value,$id){
        // print_r($value);die;
        $setting =  $this->update($value,$id);
        return $setting;      
    }
}