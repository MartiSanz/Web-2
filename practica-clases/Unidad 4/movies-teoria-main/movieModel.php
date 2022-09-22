<?php

class MovieModel{
    
    function getMoviesByGenre($genre){
        // Obtiene la lista de peliculas de la DB según género
        $db = new PDO('mysql:host=localhost;'.'dbname=db_movies;charset=utf8', 'root', '');
        $query = $db->prepare('SELECT * FROM movies WHERE genre = ?');
        $query->execute([$genre]); 
        $movies = $query->fetchAll(PDO::FETCH_OBJ);
        return $movies;
    }



}