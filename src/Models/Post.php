<?php

namespace Ms\Mvc\Models;

use Ms\Mvc\Model;

class Post extends Model
{

    public function setTableName()
    {
        return $this->table = "posts";
    }
}