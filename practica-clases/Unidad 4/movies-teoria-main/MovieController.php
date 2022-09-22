<?php

require_once 'MovieModel.php';
require_once 'MovieView.php';

class MovieController{
    private $model;
    private $view;

    public function __construct(){
        $this->model = new MovieModel();
        $this->view = new MovieView();
    }

    public function showMoviesByGenre(){
        // verifica datos obligatorios
        if (!isset($_GET['genre']) || empty($_GET['genre'])) {
            $this->view->renderError();
            return;
        }

        // obtiene el genero enviado por GET 
        $genre = $_GET['genre'];

        //obtener peliculas por genero del modelo
        $movies = $this->model->getMoviesByGenre($genre);

        //mostrar resultados en lista
        $this->view->renderMoviesByGenre($genre, $movies);
        
    }
}