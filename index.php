<?php

  require_once __DIR__ . '/Models/Movie.php';

  $the_fall_guy = new Movie('The Fall Guy', 'David Leitch', ['action', 'comedy'], 2024);

  $the_garfield_movie = new Movie('The Garfield Movie', 'Mark Dindal', ['family'], 2024);

  var_dump($the_fall_guy);
  var_dump($the_garfield_movie);
  var_dump($the_fall_guy->getFullInfo())

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP 1</title>
</head>

<body>
  
</body>
</html>