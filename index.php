  <?php

  class Movie
  {
    public $title;
    public $year;
    public $original_language;
    public $genres;
    function __construct($title, $year, $original_language, array $genres)
    {
      $this->title = $title;
      $this->year = $year;
      $this->original_language = $original_language;
      $this->genres = $genres;
    }
    public function helloMovie()
    {
      echo "Sono un film dal titolo $this->title , uscito nel $this->year in lingua $this->original_language";
    }
    // caso array generi formato da istanze della classe Genre
    public function showGenres()
    {
      $phrase = "I generi del film $this->title sono: ";
      foreach ($this->genres as $index => $element) {
        if ($index === (count($this->genres) - 1)) {
          $phrase .= "$element->genre. ";
        } else {
          $phrase .= "$element->genre, ";
        }
      }
      echo $phrase;
    }
    // caso array generi formato da stringhe inserite manualmente 
    //   public function showGenres()
    //   {
    //     $phrase = "I generi del film $this->title sono: ";
    //     foreach ($this->genres as $index => $element) {
    //       if ($index === (count($this->genres) - 1)) {
    //         $phrase .= "$element. ";
    //       } else {
    //         $phrase .= "$element, ";
    //       }
    //     }
    //     echo $phrase;
    //   }
  }

  // array di istanze della classe Genre
  require_once __DIR__ . '/Models/Genre.php';
  $padrino = new Movie('Il Padrino', 1972, 'inglese', [new Genre('noir'), new Genre('drammatico'), new Genre('gangster')]);
  $predatori = new Movie('Predatori dell\'arca perduta', 1981, 'inglese', [new Genre('avventura'), new Genre('azione'), new Genre('fantastico'), new Genre('commedia')]);

  // array inserito manualmente 
  // $padrino = new Movie('Il Padrino', 1972, 'inglese', ['noir', 'drammatico', 'gangster']);
  // $predatori = new Movie('Predatori dell\'arca perduta', 1981, 'inglese', ['avventura', 'azione', 'fantastico', 'commedia']);


  // stampo dati in pagina
  echo $padrino->title;
  echo '<br>';
  echo $padrino->year;
  echo '<br>';
  echo $padrino->original_language;
  echo '<br>';
  $padrino->helloMovie();
  echo '<br>';
  $padrino->showGenres();

  echo '<hr>';

  echo $predatori->title;
  echo '<br>';
  echo $predatori->year;
  echo '<br>';
  echo $predatori->original_language;
  echo '<br>';
  $predatori->helloMovie();
  echo '<br>';
  $predatori->showGenres();







  ?>