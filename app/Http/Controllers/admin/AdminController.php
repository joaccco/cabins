<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AdminController extends Controller
{

    public function index()
    {
        date_default_timezone_set('America/Argentina/Buenos_Aires');
        $now = Carbon::now('America/Argentina/Buenos_Aires');
        $formattedDate = $now->translatedFormat('l j \de F');
        $currentTime = $now->format('H:i');

        // Weather API call
        $apiKey = '4eb017fd3584fc1e33ce24ef2f3dad38';
        $city = 'Corrientes';
        $encodedCity = urlencode($city);
        $url = "https://api.openweathermap.org/data/2.5/weather?q={$encodedCity}&units=metric&appid={$apiKey}";

        $response = file_get_contents($url);
        $weatherData = json_decode($response);

        $temperature = null;
        $description = null;
        $emoji = null;
        $errorMessage = null;

        if ($weatherData && isset($weatherData->main, $weatherData->weather)) {
            $temperature = $weatherData->main->temp;
            $description = strtolower($weatherData->weather[0]->description);

            if (strpos($description, 'clear') !== false || strpos($description, 'sunny') !== false) {
                $emoji = '☀️';
            } elseif (strpos($description, 'rain') !== false || strpos($description, 'shower') !== false) {
                $emoji = '🌧️';
            } elseif (strpos($description, 'cloud') !== false || strpos($description, 'overcast') !== false) {
                $emoji = '☁️';
            } elseif (strpos($description, 'storm') !== false || strpos($description, 'thunderstorm') !== false) {
                $emoji = '⛈️';
            }
        } else {
            $errorMessage = 'No se pudo obtener la información del clima en este momento.';
            if ($response) {
                $errorMessage .= " Respuesta de la API: {$response}";
            }
        }

        // Pass variables to the view
        return view('admin.index', compact('formattedDate', 'currentTime', 'temperature', 'description', 'emoji', 'errorMessage'));
    }
}
