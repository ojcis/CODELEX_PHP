<?php
class Point{
    public $x;
    public $y;
    function __construct(int $x, int $y){
        $this->x=$x;
        $this->y=$y;
    }
    function swapPoints(object $p1,object $p2){
        $x=$p1->x;
        $p1->x=$p2->x;
        $p2->x=$x;
        $y=$p1->y;
        $p1->y=$p2->y;
        $p2->y=$y;
    }
}
$p1=new point(5,2);
$p2=new point(-3,6);
$p1->swapPoints($p1, $p2);
echo "(" . $p1->x . ", " . $p1->y . ")".PHP_EOL;
echo "(" . $p2->x . ", " . $p2->y . ")".PHP_EOL;
