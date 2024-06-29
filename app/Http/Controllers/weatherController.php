<?php

namespace App\Http\Controllers;

use App\services\WeatherService;
use Illuminate\Support\Facades\Auth;

class weatherController extends Controller
{
    protected $weatherService;

    public function __construct(WeatherService $weatherService)
    {
        $this->weatherService = $weatherService;
    }

    public function getWeatherData()
    {
        $user = Auth::user();
        $latitude = $user->latitude;
        $longitude = $user->longitude;
        $weatherData = $this->weatherService->getWeather($latitude, $longitude);

        return view('frontend.weather' , compact('weatherData'));
        // response()->json($weatherData);
    }
}
