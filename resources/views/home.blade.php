@extends('layout')

@section('body')
    <form action="{{ route('submit') }}" method="post">
        {!! csrf_field() !!}
        <label>Enter a number between 1 and 100:</label>
        <input type="number" name="number" min="1" max="100" required>
        <button>Submit</button>
    </form>
@stop