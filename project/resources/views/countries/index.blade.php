<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страны и города</title>
</head>

<body>
    <h1>Страны и их города</h1>

    @foreach ($countries as $country)
    <h2>{{ $country->name }}</h2>
    <ul>
        @foreach ($country->cities as $city)
        <li>{{ $city->name }} - {{ $city->population }}</li>
        @endforeach
    </ul>
    @endforeach
</body>

</html>