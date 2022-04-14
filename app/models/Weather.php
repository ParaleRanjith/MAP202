<?php

class Weather {

    public function get_weather ($city) {
    $query_url = "https://api.openweathermap.org/data/2.5/weather?units=metric&q=". $city ."&appid=" . API_KEY;
    $json = file_get_contents($query_url);
    $phpObj = json_decode($json);
    $weather = (array) $phpObj;

    $array = json_decode(json_encode($weather), true);

    return $array;
    }

}