<?php

class Model
{
    private $handle;

    public function __construct()
    {
        $db = DbAcces::getInstance();
        $this->handle = $db->getHandle();
    }

    public function addNewMovie($title, $poster, $year)
    {
        try {
            $request = $this->handle->prepare('INSERT INTO movies (title, poster, year) VALUES (?, ?, ?)');
            $request->execute(array($title, $poster, $year));
        } catch (PDOException $e) {
            var_dump('erreur requette sql :' . $e->getMessage());
        }
    }

    public function getAllMovies()
    {
        try {
            $request = $this->handle->prepare('SELECT * FROM movies');
            $request->execute();
            $data = $request->fetchAll();
            return $data;
        } catch (PDOException $e) {
            var_dump('erreur requette sql :' . $e->getMessage());
        }
    }
}
