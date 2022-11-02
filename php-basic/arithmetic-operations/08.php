<?php
/**
An employee gets paid (hours worked) × (base pay), for each hour up to 40 hours.
For every hour over 40, they get overtime = (base pay) × 1.5.
The base pay must not be less than the minimum wage ($8.00 an hour). If it is, print an error.
If the number of hours is greater than 60, print an error message.
Write a method that takes the base pay and hours worked as parameters, and prints the total pay or an error.
Write a main method that calls this method for each of these employees:
Employee	Base Pay	Hours Worked
Employee 1	$7.50	      35
Employee 2	$8.20	      47
Employee 3	$10.00	      73
 */
class fooCorporation{
    function salary(float $basePay,float $hours){
        if ($basePay<8){
            return 'Base pay is less than $8.00 an hour!';
        }
        elseif ($hours>60){
            return 'Hours worked is more then 60!';
        }
        elseif ($hours>40){
            return $basePay*40+($hours-40)*$basePay*1.5;
        }
        else{
            return $basePay*$hours;
        }
    }
    function payOut($employees){
        foreach ($employees as $key=>$employee){
            echo "Employee $key salary is: ".$this->salary($employee[0],$employee[1]).PHP_EOL;
        }
    }
}
$employees=[
    1=>[7.5,35],
    2=>[8.2,47],
    3=>[10,73]
];
$foo=new fooCorporation();
$foo->payOut($employees);
