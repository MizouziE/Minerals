<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <h1 class="text-3xl font-bold underline">Food</h1>
    <p>{{ $meal->food }}</p>
    <h1>Drink</h1>
    <p>{{ $meal->drink }}</p>

</body>
</html>
