@extends('layouts.main-layout')

@section('content')
    
    <h1>New Person</h1>
    <form method="POST" action="{{ route('person.store') }}">
        @csrf
        <label for="firstname">First Name</label>
        <input type="text" name="firstname">
        <br>
        <label for="lastname">Last Name</label>
        <input type="text" name="lastname">
        <br>
        <label for="birthday">Birthday</label>
        <input type="date" name="birthday">
        <br>
        <label for="height">Height</label>
        <input type="number" name="height">
        <br>
        <input type="submit" value="ADD NEW PERSON">
    </form>

@endsection