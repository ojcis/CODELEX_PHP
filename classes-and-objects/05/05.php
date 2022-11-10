<?php
class Date
{
    private int $month;
    private int $day;
    private int $year;
    public function __construct(int $month, int $day, int $year)
    {
        if ($month<1 || $month>12 || $day<1 || $day>31 || $year<0){
            error_log('invalid input!');
        }else{
            $this->month=$month;
            $this->day=$day;
            $this->year=$year;
        }
    }

    public function getMonth():int
    {
        return $this->month;
    }

    public function getDay():int
    {
        return $this->day;
    }

    public function getYear():int
    {
        return $this->year;
    }

    public function setMonth(int $month)
    {
        if ($month<1 || $month>12) return;
        $this->month = $month;
    }

    public function setDay(int $day)
    {
        if ($day<1 || $day>31) return;
            $this->day = $day;
    }

    public function setYear(int $year)
    {
        if ($year<1) return;
            $this->year = $year;
    }

    public function DisplayDate():string
    {
        return "$this->month/$this->day/$this->year";
    }
}