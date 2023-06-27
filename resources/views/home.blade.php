<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    <title>Laravel Migration Seeder</title>
</head>
<body>
    <h1>Laravel Trains</h1>

    @foreach ($trains as $train)
        <li>
            {{$train->brand}} {{$train->train_code}} - Partenza: {{$train->departure_station}} alle {{$train->departure_time}} - Arrivo: {{$train->arrival_station}} alle {{$train->arrival_time}}
        </li>
    @endforeach
</body>
</html>