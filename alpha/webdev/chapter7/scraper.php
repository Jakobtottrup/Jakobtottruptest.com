<?php


$contents=file_get_contents("http://www.weather-forecast.com/locations/Copenhagen/forecasts/latest");

preg_match('3 Day Weather Forecast Summary:</b><span class="phrase">(.*?)</s', $contents, $matches);
print_r($matches);






?>
