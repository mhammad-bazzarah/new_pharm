<?php

namespace App\services;

use GuzzleHttp\Client;

class WeatherService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function getWeather($latitude, $longitude)
    {
        $url = "https://api.open-meteo.com/v1/forecast?latitude=".$latitude."&longitude=".$longitude."&current=temperature_2m,wind_speed_10m&hourly=temperature_2m,relative_humidity_2m,wind_speed_10m&timezone=Africa%2FCairo";

        try {
            $response = $this->client->request('GET', $url);

            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }
}
