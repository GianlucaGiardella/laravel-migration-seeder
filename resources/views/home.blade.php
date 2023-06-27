<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    <title>Laravel Migration Seeder</title>
</head>
<body data-bs-theme="dark">
    <h1 class="mb-4">Laravel Trains</h1>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Treno</th>
            <th scope="col">Numero</th>
            <th scope="col">Cabine</th>
            <th scope="col">Partenza</th>
            <th scope="col">Arrivo</th>
            <th scope="col">Ritardo</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
                <tr>
                    <td>{{$train->brand}}</td>
                    <td>{{$train->train_code}}</td>
                    <td>{{$train->carriages}}</td>
                    <td>{{$train->departure_station}} alle {{$train->departure_time}}</td>
                    <td>{{$train->arrival_station}} alle {{$train->arrival_time}}</td>
                    <td>{{$train->in_time ? "Si" : "No"}}</td>
                </tr>
            @endforeach
        </tbody>
      </table>
</body>
</html>