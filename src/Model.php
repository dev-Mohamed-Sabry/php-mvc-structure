<?php

namespace Ms\Mvc;

abstract class Model
{

    private $conn;
    protected $table;
    public function __construct()
    {
        $this->conn = mysqli_connect("localhost", "root", "", "mvc");
        $this->setTableName();
    }

    public abstract function setTableName();


    public function getAll()
    {
        $query = "SELECT * FROM $this->table";
        $res = mysqli_query($this->conn, $query);
        if (!empty($res) && mysqli_num_rows($res) > 0) {
            $output = mysqli_fetch_all($res, MYSQLI_ASSOC);
            return $output;
        }
    }
}