<?php
class Movie
{
    private string $title;
    private string $studio;
    private string $rating;

    public function __construct(string $title, string $studio, string $rating)
    {
        $this->title=$title;
        $this->studio=$studio;
        $this->rating=$rating;
    }

    public function GetTitle():string
    {
        return $this->title;
    }

    public function GetPG(array $movies):array
    {
        $PGMovies=[];
        foreach ($movies as $movie){
            if ($movie->rating=='PG'){
                array_push($PGMovies,$movie);
            }
        }
        return $PGMovies;
    }
}
$movies=[
    $CasinoRoyale=new Movie('Casino Royale','Eon Productions','PG13'),
    $Glass=new Movie('Glass','Buena Vista International','PG13'),
    $SpiderMan=new Movie('Spider-Man: Into the Spider-Verse','Columbia Pictures','PG')
];
$PGMovies=$Glass->GetPG($movies);
echo 'PG rated movies is: '.PHP_EOL;
foreach ($PGMovies as $PGMovie){
    echo $PGMovie->Gettitle().PHP_EOL;
}
