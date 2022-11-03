<?php
class geometry{
    function areaCircle(float $circleR):float{
        if ($circleR<=0){
            return error_log('invalid input!');
        }
        return 2*pi()*$circleR;
    }
    function areaRectangle(float $length,float $width):float{
        if ($length<=0 || $width<=0){
            return error_log('invalid input!');
        }
        return $length*$width;
    }
    function areaTriangle(float $base,float $height):float{
        if ($base<=0 || $height<=0){
            return error_log('invalid input!');
        }
        return $base*$height/2;
    }
}
CHOICE:
echo 'Geometry calculator:'.PHP_EOL;
echo '1. Calculate the Area of a Circle'.PHP_EOL;
echo '2. Calculate the Area of a Rectangle'.PHP_EOL;
echo '3. Calculate the Area of a Triangle'.PHP_EOL;
echo '4. Quit'.PHP_EOL;

$choice=readline('Enter your choice (1-4): ');
if ($choice==1){
    $circleR=new geometry();
    echo 'Area of your circle is '.$circleR->areaCircle(readline('enter circle R: '));
}else if ($choice==2){
    $rectangle=new geometry();
    echo 'Area of your rectangle is '.$rectangle->areaRectangle(readline('enter rectangle length: '),readline('enter rectangle width: '));
}else if ($choice==3){
    $triangle=new geometry();
    echo 'Area of your triangle is '.$triangle->areaTriangle(readline('enter triangle base: '),readline('enter triangle height: '));
}else if ($choice==4){
    exit('BYE'.PHP_EOL);
}else{
    echo PHP_EOL.PHP_EOL;
    error_log('WRONG INPUT!');
}
echo PHP_EOL;
goto CHOICE;

