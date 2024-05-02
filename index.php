<?php

  require_once __DIR__ . '/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP 1</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="bg-dark text-white">

  <div class="container text-center pt-5">
    <h1>Movies</h1>
    <div class="row row-cols-3 py-3">

      <?php foreach ($movies_array as $movie): ?>
        <div class="col text-center mb-2">
          <div class="card bg-secondary text-white py-2">
            <h2><?php echo $movie->getTitle() ?></h2>
            <h4>Direction: <?php echo $movie->getDirection() ?></h4>
            <p>Genres: <?php echo implode(', ', $movie->getGenres()) ?></p>
            <p>Year: <?php echo $movie->release_date ?></p>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
  
</body>
</html>