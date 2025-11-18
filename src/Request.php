<?php

namespace Ms\Mvc;

class Request
{
    public function queryString()
    {
        return $_SERVER['QUERY_STRING'];
    }
}
