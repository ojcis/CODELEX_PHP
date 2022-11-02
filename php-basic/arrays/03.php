<?php
$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];
$key=array_search(readline("Enter the value to search for: "),$numbers);
echo "key of searched value is $key".PHP_EOL;

