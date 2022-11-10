<?php
require_once 'Video.php';
require_once 'VideoStore.php';

$videoStore=new VideoStore();
$videoStore->addMovie("The Matrix");
$videoStore->addMovie("Godfather II");
$videoStore->addMovie("Star Wars Episode IV: A New Hope");
$videoStore->getFilms()[0]->setRating(9);
$videoStore->getFilms()[0]->setRating(5);
$videoStore->getFilms()[0]->setRating(8);
$videoStore->getFilms()[1]->setRating(10);

while (true) {
    echo "Choose 0 for EXIT".PHP_EOL;
    echo "Choose 1 to fill video store".PHP_EOL;
    echo "Choose 2 to rent video (as user)".PHP_EOL;
    echo "Choose 3 to return video (as user)".PHP_EOL;
    echo "Choose 4 to list inventory".PHP_EOL;
    echo "Choose the operation you want to perform".PHP_EOL;

    $command = (int)readline();

    switch ($command){
        case 0:
            echo "Bye!".PHP_EOL;
            die;
        case 1:
            $name=readline('enter movies name: ');
            $videoStore->addMovie($name);
            break;
        case 2:
            foreach ($videoStore->getFilms() as $key=>$film){
                if ($film->getAvailability()){
                    echo "[$key] - ".$film->getVideo().PHP_EOL;
                }
            }
            $key=readline('chose film number: ');
            $videoStore->rentVideo($videoStore->getFilms()[$key]);
            break;
        case 3:
            foreach ($videoStore->getFilms() as $key=>$film){
                if (! $film->getAvailability()){
                    echo "[$key] ".$film->getVideo().PHP_EOL;
                }
            }
            $key=readline('chose film number: ');
            $videoStore->returnVideo($videoStore->getFilms()[$key]);
            $rating=readline('enter film rating 0-10 (optimal): ');
            if ($rating){
                $videoStore->getFilms()[$key]->setRating($rating);
            }
            break;
        case 4:
            echo $videoStore->listInventory();
            break;
        default:
            echo "Sorry, I don't understand you..".PHP_EOL;
    }
}

