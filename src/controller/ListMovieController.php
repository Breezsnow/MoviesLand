<?php

class ListMovieController
{
    private $title;
    private $model;
    private $movieList;

    public function __construct()
    {
        $this->title = "All my movies";
        $this->model = new Model();

    }

    function manage()
    {

        $this->movieList = $this->model->getAllMovies();

        include (__DIR__ . "./../view/listMovie.php");

    }
}