<?php

namespace Ms\Mvc\Controller;


use Ms\Mvc\Models\User;
use Ms\Mvc\View;


class UserController
{

    public function all()
    {

        $post = new User();
        $data[$post->setTableName()] = $post->getAll();
        View::render("allUsers.php", $data);
    }
}
