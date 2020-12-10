<?php

class ErrorController
{

    private $title;

    public function __construct()
    {
        $this->title = "Oops ! Something went wrong.";
    }


    function manage()
    {
        include (__DIR__ . "./../view/error.php");
    }
}