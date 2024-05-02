<?php

  require_once __DIR__ . '/Models/Movie.php';

  $the_fall_guy = new Movie('The Fall Guy', 'David Leitch', ['action', 'comedy'], 2024);

  $the_garfield_movie = new Movie('The Garfield Movie', 'Mark Dindal', ['family'], 2024);

  $pulp_fiction = new Movie('Pulp Fiction', 'Quentin Tarantino', ['Crime', 'Drama'], '1994');

  $the_dark_knight = new Movie('The Dark Knight', 'Christopher Nolan', ['Action', 'Crime', 'Drama'], '2008');

  $the_prestige = new Movie('The Prestige', 'Christopher Nolan', ['Drama', 'Mystery', 'Sci-Fi'], '2006');

  $fight_club = new Movie('Fight Club', 'David Fincher', ['Drama'], '1999');

  $forrest_gump = new Movie('Forrest Gump', 'Robert Zemeckis', ['Drama', 'Romance'], '1994');

  $interstellar = new Movie('Interstellar', 'Christopher Nolan', ['Adventure', 'Drama', 'Sci-Fi'], '2014');

  $la_la_land = new Movie('La La Land', 'Damien Chazelle', ['Comedy', 'Drama', 'Music'], '2016');

  $shutter_island = new Movie('Shutter Island', 'Martin Scorsese', ['Mystery', 'Thriller'], '2010');

  // Array dei Film
  $movies_array = [$the_fall_guy, $the_garfield_movie, $pulp_fiction, $the_dark_knight, $the_prestige, $fight_club, $forrest_gump, $interstellar, $la_la_land, $shutter_island];
?>