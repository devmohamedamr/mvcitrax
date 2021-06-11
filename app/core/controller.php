<?php

namespace itrax\core;

class controller{

    public function view($path,$param = []){
        // print_r($param);die;
        extract($param);
        require VIEWS.$path.".php";
    }
}