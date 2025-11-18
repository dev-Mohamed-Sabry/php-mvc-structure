<?php

namespace Ms\Mvc;

class App
{

    private $url, $controller, $method;
    // private $get;
    public function __construct($request)
    {
        $this->url = $request->queryString();
        $this->sprintUrl();
        $this->callMethod();
    }

    public function sprintUrl()
    {
        $array =  explode("/", $this->url);
        // var_dump($array);
        $this->controller = ucfirst($array[0]) . "Controller";
        $this->method =  $array[1];
    }

    public function callMethod()
    {

        $this->controller = "Ms\\Mvc\\Controller\\" . $this->controller; // (PostController) حتى الان
        if (class_exists($this->controller)) {
            $ControllerObj = new $this->controller;
            if (method_exists($ControllerObj, $this->method)) {
                call_user_func([$ControllerObj, $this->method]);
            } else {
                die("Method Not Found");
            }
        } else {
            die("Class Not Found");
        }
    }


    // public function checkGet()
    // {
    //     echo $this->get;
    // }
};