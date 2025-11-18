<?php

namespace Ms\Mvc\Controller;


use Ms\Mvc\Models\Post;
use Ms\Mvc\View;


class PostController
{

    public function all()
    {

        $post = new Post();
        $data[$post->setTableName()] = $post->getAll();
        View::render("allPosts.php", $data);
    }
}