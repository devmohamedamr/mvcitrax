<?php
namespace itrax\core;

interface dbhandler{

    public function insert($table,$data);

    public function update($table,$data);

    public function delete($table,$id);

    public function select($table);

    public function sqlquery($sql);
}