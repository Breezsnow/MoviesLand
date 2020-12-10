<?php

class AddMovieController
{
    private $title;
    private $model;

    public function __construct()
    {
        $this->title = "Add a new movie";
        $this->model = new Model();
    }

    function manage()
    {
        if (isset($_POST['title']) AND $_POST['title'] != ''){
            $this->model->addNewMovie($_POST['title'], $_POST['poster'], $_POST['year']);
        }

        include (__DIR__ . "./../view/addMovie.php");
    }
}