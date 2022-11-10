<?php
class Video
{
    private string $name;
    private bool $availability;
    private float $rating;

    public function __construct(string $name)
    {
        $this->name=$name;
        $this->availability=true;
        $this->rating=0;
    }

    public function getName():string
    {
        return $this->name;
    }
    public function getAvailability():bool
    {
        return $this->availability;
    }

    public function getVideo():string
    {
        $availability='not available';
        $rating='has no rating jet';
        if ($this->availability){
            $availability='available';
        }
        if ($this->rating){
            $rating="$this->rating/10";
        }
        return "'{$this->name}' - $availability (movies rating: $rating)";
    }

    public function setAvailability(bool $availability)
    {
        $this->availability=$availability;
    }

    public function setRating(int $rating)
    {
        if ($this->rating){
        $this->rating=($this->rating+$rating)/2;
        }else{
            $this->rating=$rating;
        }
    }
}