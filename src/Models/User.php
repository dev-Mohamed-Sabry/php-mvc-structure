<?php

namespace Ms\Mvc\Models;

use Ms\Mvc\Model;

class User extends Model
{

    public function setTableName()
    {
        return $this->table = "users";
    }
}