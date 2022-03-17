<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <h1 class="text-3xl font-bold underline">Meals</h1>

    <ul>
        @foreach ($meals as $meal)
            <li>{{ $meal->food }}</li>
            <li>{{ $meal->drink }}</li>
        @endforeach
    </ul>

</body>
</html>
