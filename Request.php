<?php
namespace AHT;

class Request
{
    public $url;

    public function __construct()
    {
        $this->url = $_SERVER["REQUEST_URI"]; ///mvc/ mvc/tasks/create
    }
}

?>