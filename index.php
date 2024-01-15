  <?php

  class Movie
  {
    public $title;
    public $year;
    public $original_language;
    function __construct($title, $year, $original_language)
    {
      $this->title = $title;
      $this->year = $year;
      $this->original_language = $original_language;
    }
    public function helloMovie()
    {
      echo "Sono un film dal titolo $this->title , uscito nel $this->year in lingua $this->original_language";
    }
  }

  $padrino = new Movie('Il Padrino', 1972, 'inglese');
  $predatori = new Movie('Predatori dell\'arca perduta', 1981, 'inglese');

  echo $padrino->title;
  echo '<br>';
  echo $padrino->year;
  echo '<br>';
  echo $padrino->original_language;
  echo '<br>';
  $padrino->helloMovie();

  echo '<hr>';

  echo $predatori->title;
  echo '<br>';
  echo $predatori->year;
  echo '<br>';
  echo $predatori->original_language;
  echo '<br>';
  $predatori->helloMovie();







  ?>