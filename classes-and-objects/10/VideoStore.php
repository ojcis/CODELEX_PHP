<?php
require_once 'Video.php';
class VideoStore
{
    private array $films=[];

    public function getFilms(): array
    {
        return $this->films;
    }

    public function addMovie(string $filmName)
    {
        $film=new Video($filmName);
        array_push($this->films,$film);
    }

    public function rentVideo(Video $film)
    {
        $key=array_search($film,$this->films);
        $this->films[$key]->setAvailability(false);
    }

    public function returnVideo(Video $film)
    {
        $key=array_search($film,$this->films);
        $this->films[$key]->setAvailability(true);
    }

    public function listInventory():string
    {
        $listInventory='';
        foreach ($this->films as $key=>$film){
            $listInventory=$listInventory."[$key] - ".$film->getVideo().PHP_EOL;
        }
        return $listInventory;
    }
}
