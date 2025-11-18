<?php

namespace Ms\Mvc;

class View
{
    public static function render($file, $data)
    {
        $path = __DIR__ . "/views//" . $file;

        if (file_exists($path)) {
            extract($data);
            require $path;
        } else {
            die("File Not Exist");
        }
    }
}