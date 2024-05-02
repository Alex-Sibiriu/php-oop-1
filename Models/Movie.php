<?php
  class Movie {
    public $title;
    public $direction;
    public $genres;
    public $release_date;

    public function __construct(string $_title, string $_direction, array $_genres, int $_release_date) {
      $this->title = $_title;
      $this->direction = $_direction;
      $this->genres = $_genres;
      $this->release_date = $_release_date;
    }

    public function getFullInfo() {
      $genresString = implode(' - ', $this->genres);
      echo "Title: $this->title, direction: $this->direction, genres: $genresString, release date:  $this->release_date";
    }
  }