
<!DOCTYPE html>
<html>
<head>
    <title>Weather Data</title>
</head>
<body>
    <h1>Weather Data</h1>
    {{ dd($weatherData) }}
    <div>

        {{-- <p>Temperature: {{ $weatherData['temperature_2m'] }}°C</p>
        <p>Precipitation: {{ $weatherData['precipitation'] }} mm/h</p>
        <p>Weather Code: {{ $weatherData['weathercode'] }}</p> --}}

        @foreach ($weatherData['hourly']['time']  as $wd )
        <p>Time: {{ $wd }} </p>
        @endforeach

        @foreach ($weatherData['current']  as $now )
        <p>Time: {{ $now }} </p>
        @endforeach

        {{-- @foreach ($weatherData['hourly']['time']  as $wd )
        <p>Time: {{ $wd }} </p>
        @endforeach --}}

    </div>
</body>
</html>
