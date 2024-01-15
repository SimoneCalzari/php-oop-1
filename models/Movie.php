<?php

class Movie
{
  public $original_title;
  public $year;
  public $languages;
  public $genres;
  public $img;
  function __construct($original_title, $year, array $languages, array $genres, $img)
  {
    $this->original_title = $original_title;
    $this->year = $year;
    $this->languages = $languages;
    $this->genres = $genres;
    $this->img = $img;
  }
  public function helloMovie()
  {
    echo "Sono un film dal titolo $this->original_title , uscito nel $this->year in lingua $this->languages";
  }
  public function showGenres($array)
  {
    $phrase = "";
    foreach ($array as $index => $element) {
      if ($index === (count($array) - 1)) {
        $phrase .= "$element";
      } else {
        $phrase .= "$element, ";
      }
    }
    echo $phrase;
  }
}
