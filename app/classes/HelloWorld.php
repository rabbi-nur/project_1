<?php

namespace App\classes;
class HelloWorld
{
    public $message;
    public function __construct()
    {
        $this->message = "Hello PHP";
    }
    public function index()
    {
//        echo $this->message;
        header('Location: action.php?page=home');
    }
}