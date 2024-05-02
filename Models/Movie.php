<?php
  class Movie {
    public $title;
    public $direction;
    public $genre;
    public $release_date;

    public function __construct(string $_title, string $_direction, string $_genre, int $_release_date) {
      $this->title = $_title;
      $this->direction = $_direction;
      $this->genre = $_genre;
      $this->release_date = $_release_date;
    }

    public function getFullInfo() {
      return "Title: $this->title, direction: $this->direction, genre: $this->genre, release date:  $this->release_date";
    }
  }