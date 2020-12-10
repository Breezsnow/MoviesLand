<?php

class SearchMovieController
{

    private $title;

    public function __construct()
    {
        $this->title = "Search for movies";
    }


    function manage()
    {
        include (__DIR__ . "./../view/search.php");

    }
}