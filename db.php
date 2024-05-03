<?php

  require_once __DIR__ . '/Models/Movie.php';

  $movies_array = [
    new Movie('The Fall Guy', 'David Leitch', ['action', 'comedy'], 2024),
    new Movie('The Garfield Movie', 'Mark Dindal', ['family'], 2024),
    new Movie('Pulp Fiction', 'Quentin Tarantino', ['Crime', 'Drama'], 1994 ),
    new Movie('The Dark Knight', 'Christopher Nolan', ['Action', 'Crime', 'Drama'], 2008),
    new Movie('The Prestige', 'Christopher Nolan', ['Drama', 'Mystery', 'Sci-Fi'], 2006),
    new Movie('Fight Club', 'David Fincher', ['Drama'], 1999),
    new Movie('Forrest Gump', 'Robert Zemeckis', ['Drama', 'Romance'], 1994),
    new Movie('Interstellar', 'Christopher Nolan', ['Adventure', 'Drama', 'Sci-Fi'], 2014),
    new Movie('La La Land', 'Damien Chazelle', ['Comedy', 'Drama', 'Music'], 2016),
    new Movie('Shutter Island', 'Martin Scorsese', ['Mystery', 'Thriller'], 2010)
  ];

?>