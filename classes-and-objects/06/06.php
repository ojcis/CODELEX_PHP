<?php
$surveyed = 12467;
$purchased_energy_drinks = 0.14;
$prefer_citrus_drinks = 0.64;

$surveyedEnergyDrink=$surveyed*$purchased_energy_drinks;
$surveyedCitrusDrink=$surveyedEnergyDrink*$prefer_citrus_drinks;
echo "Total number of people surveyed " . $surveyed.PHP_EOL;
echo "Approximately " .floor($surveyedEnergyDrink). " bought at least one energy drink".PHP_EOL;
echo floor($surveyedCitrusDrink) . " of those " . "prefer citrus flavored energy drinks.".PHP_EOL;