<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($city)
    {
        $coordinates = config('app.cities', $city);
        return Cache::remember('city' . $city, 60 * 5, function () use ($coordinates) {
            // $response = Http::get("https://api.open-meteo.com/v1/forecast?latitude=" . $coordinates['lat'] . "&longitude=" . $coordinates['long'] . "&current=temperature_2m,wind_speed_10m&hourly=temperature_2m,relative_humidity_2m,wind_speed_10m");
            $response = Http::get("https://api.open-meteo.com/v1/forecast?latitude=".$coordinates['lat']."&longitude=".$coordinates['lng']."&daily=temperature_2m_max,temperature_2m_min&timezone=UTC+03");
            if ($response->successful()) {
                return $response->json('daily');
            }
            return response()->json([]);
        });
    }
}
