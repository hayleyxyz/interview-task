@extends('layout')

@section('body')
    <p>
        The number you entered was: {{ $missingNumber }}
    </p>

    <p>
        <a href="{{ route('home') }}">Try again</a>
    </p>
@stop