@extends('layouts.main-layout')

@section('head')
    <title>Laravel DC Comics</title>
@endsection

@section('content')
    <h1>People</h1>

    <a href="{{ route('person.create') }}">ADD NEW PERSON</a>
    
    <ul>
        @foreach ($people as $person)
            <li>
                {{ $person -> firstName }} {{ $person -> lastName }}
                <a href="{{ route('person.delete', $person) }}">X</a>
            </li>
        @endforeach
    </ul>
@endsection