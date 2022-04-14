<?php 

namespace App\Model;

use CoffeeCode\DataLayer\DataLayer;

class User extends DataLayer
{
     /**
     * User constructor.
     */
    public function __construct()
    {
        //string "TABLE_NAME", array ["REQUIRED_FIELD_1", "REQUIRED_FIELD_2"], string "PRIMARY_KEY", bool "TIMESTAMPS"
        parent::__construct("users", [], "id", true);   
    }

}