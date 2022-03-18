@extends('layouts.app')

@section('content')

    <ul>
        @foreach ($meals as $meal)
            <li>{{ $meal->food }}</li>
            <li>{{ $meal->drink }}</li>
        @endforeach
    </ul>

@endsection
