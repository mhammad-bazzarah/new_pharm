<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgriPharm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/weather.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}" style="color: white">Agri Pharm</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('home') }}"style="color: white">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('aboutUs') }}"style="color: white">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('Offers') }}"style="color: white">Offers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('shop') }}"style="color: white">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('team') }}"style="color: white">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}"style="color: white">Contact Us</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    {{-- <header id="header">
    <div class="container">
        <div id="logo" class="pull-left">
            <h1><a href="{{ route('home') }}" class="scrollto">Agri Pharm</a></h1>

        </div>
        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('aboutUs') }}">About Us</a></li>
                <li><a href="{{ route('Offers') }}">Offers</a></li>
                <li><a href="{{ route('shop') }}">Products</a></li>
                <li><a href="{{ route('team') }}">Team</a></li>
                <li><a href="/#gallery">Gallery</a></li>
                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                @auth
                    <li><a href="{{ route('weather') }}">weather</a></li>

                @endauth
                @guest
                    <li><a href="{{ route('register') }}">signUp</a></li>
                @endguest

            </ul>
        </nav>
    </div>
</header> --}}

    {{-- {{ dd($weatherData) }} --}}
    <div class="container mt-5">
        <h1 class="text-center mb-4">Weather Forecast</h1>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="weather-card">
                    <div class="row">
                        <div class="col">
                            @php
                                use Carbon\Carbon;
                                $dateString = $weatherData['current']['time'];
                                $carbonDate = Carbon::parse($dateString);
                                // Format the date as you like
                                $formattedDate = $carbonDate->format('F j, \a\t g:i A'); // Example: July 29, 2024 6:15 PM
                                // Output the formatted date
                            @endphp
                            {{-- <p id="current-time">{{ $weatherData['current']['time'] }}</p> --}}
                            <p id="current-time">{{ $formattedDate }}</p>
                            <span>GMT+3</span>
                        </div>
                        <div class="col">
                            <p id="current-temp">{{ $weatherData['current']['temperature_2m'] }}</p>
                            <span>°C</span>
                        </div>
                        <div class="col">
                            <p id="current-wind">{{ $weatherData['current']['wind_speed_10m'] }}</p>
                            <span>km/h</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-8 offset-md-2">
                <div class="weather-card">
                    <h2 class="mb-4">24-Hour Forecast</h2>
                    <table id="forecast-table" class="table">
                        <thead>
                            <tr>
                                <th>Time</th>
                                <th>Temp (°C)</th>
                                <th>Humidity %</th>
                                <th>Wind (km/h)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < 24; $i++)
                                @php
                                    $date = $weatherData['hourly']['time'][$i];
                                    $carbon = Carbon::parse($date);
                                    $hourlyDate = $carbon->format('l g:i A');
                                @endphp
                                <tr>
                                    <td> {{ $hourlyDate }}</td>
                                    <td> {{ $weatherData['hourly']['temperature_2m'][$i] }}</td>
                                    <td> {{ $weatherData['hourly']['relative_humidity_2m'][$i] }}</td>
                                    <td> {{ $weatherData['hourly']['wind_speed_10m'][$i] }}</td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-8 offset-md-2">
                <div class="weather-card">
                    <h2 class="mb-4">Weekly Forecast</h2>
                    <table id="weekly-forecast-table" class="table">
                        <thead>
                            <tr>
                              <th>Time</th>
                                <th>Temp (°C)</th>
                                <th>Humidity %</th>
                                <th>Wind (km/h)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $temp =0;
                                $hum =0;
                                $win =0;
                            for ($i = 0; $i < 168; $i++){
                                $temp += $weatherData['hourly']['temperature_2m'][$i];
                                $hum += $weatherData['hourly']['relative_humidity_2m'][$i];
                                $win +=$weatherData['hourly']['wind_speed_10m'][$i];
                                if( ($i+1) % 24 == 0 ){
                                    $temperature = $temp / 24;
                                    $humidity = $hum / 24;
                                    $wind = $win/24;
                                    $temp =0;
                                    $hum =0;
                                    $win =0;
                                    $date = $weatherData['hourly']['time'][$i];
                                    $carbon = Carbon::parse($date);
                                    $dailyDate = $carbon->format(' l \a\t : F j, Y ');
                                  @endphp
                                    <tr>
                                    <td> {{ $dailyDate }}</td>
                                    <td> {{ round($temperature) }}</td>
                                    <td> {{ round($humidity,2) }}</td>
                                    <td> {{ round($wind,2) }}</td>
                                </tr>
                            @php
                                }
                            }
                            @endphp
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="sun"></div> --}}
    {{-- <div class="containerc">
        <div id="cloud">
            <span class="shadow"></span>
            <div class="rain">
                <div class="drop d1"></div>
                <div class="drop d2"></div>
                <div class="drop d3"></div>
                <div class="drop d4"></div>
                <div class="drop d5"></div>
                <div class="drop d6"></div>
                <div class="drop d7"></div>
                <div class="drop d8"></div>
                <div class="drop d9"></div>
                <div class="drop d10"></div>
                <div class="drop d11"></div>
                <div class="drop d12"></div>
                <div class="drop d13"></div>
                <div class="drop d14"></div>
                <div class="drop d15"></div>
            </div>
        </div>
    </div> --}}
    </div>

    <a href="#" class="back-to-top"><i class="fas fa-chevron-up"></i></a>

    <script src="{{ asset('frontend/assets/js/weather.js') }}"></script>
</body>

</html>
