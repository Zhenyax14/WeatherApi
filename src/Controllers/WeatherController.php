<?php


namespace App\Controllers;


class WeatherController
{
    public $url = API_URL;

    public $result;
    public $options = [];


    public function __construct($city, $API_ID, $units){
        $this->city = $city;
        $this->API_ID = API_ID;
        $this->units = $units;
        $this->lang = LANGUAGE;
    }


    public function getWeather(){

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, "$this->url"."?q=$this->city"."&appid=$this->API_ID");

        $this->result = json_decode(curl_exec($ch), true);



    }
    public function run(){

    }
}
