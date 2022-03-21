<?php



class Film {

    public $title;
    public $year;
    public $language;
    public $genre;

    function __construct($title, $year, $language, $genre)
    {
        $this -> title = $title;
        $this -> year = $year;
        $this -> language = $language;
        $this -> genre = $genre;

    }

    public function ageFilm($year){
        if ($year > 2022){
            echo 'il film deve ancora uscire';
        } elseif ($year == 2022) {
            echo "Il film è uscito quest'anno";
        } else {
            $this->ageFilm =  2022  - $year;
        }
        return $this ->ageFilm;
    }



};




$listaFilm = [
    new Film("Rush", 2013, "inglese", "Azione"),
    new Film ("Giorni di tuono", 1990, "Americano", "azione"),
    new Film ("Top gun", 1986, "Americano", "Azione")
];


foreach ($listaFilm as $film) {
    echo '<h1> Titolo del fim: ' . $film->title . '</h1>';
    echo '<p> Uscito nel : ' . $film->year . '</p>';
    echo '<p> Lingua : ' . $film->language . '</p>';
    echo '<p> Genere: ' . $film->genre . '</p>';
    echo '<p> Il film ha ' . $film->ageFilm($film->year) . " anni" . '</p>';
}