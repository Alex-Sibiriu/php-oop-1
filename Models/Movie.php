<?php
  class Movie {
    private $title;
    private $direction;
    private $genres;
    public $release_date;

    public function __construct(string $_title, string $_direction, array $_genres, int $_release_date) {
      $this->setTitle($_title);
      $this->setDirection($_direction);
      $this->setGenres($_genres);
      $this->release_date = $_release_date;
    }

    //Set Functions
    public function setTitle($_title) {
      $this->title = $_title;
    }

    public function setDirection($_direction) {
      $this->direction = $_direction;
    }

    public function setGenres($_genres) {
      $this->genres = $_genres;
    }

    //Get Functions
    public function getTitle() {
      return $this->title;
    }

    public function getDirection() {
      return $this->direction;
    }

    public function getGenres() {
      return $this->genres;
    }

    //Other Functions
    public function getFullInfo() {
      $genresString = implode(' - ', $this->genres);
      echo "Title: $this->title, direction: $this->direction, genres: $genresString, release date:  $this->release_date";
    }
  }