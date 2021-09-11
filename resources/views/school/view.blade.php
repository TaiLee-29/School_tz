@extends('layout')

@section('content')
    @auth<p> {{ auth()->user()->name }}</p>@endauth

        <img src="{{$school->logo}}" width="200 px" height="200 px"><h1>{{$school->name}}</h1>

        <p>{{$school->email}}</p>
        <a href="#"><p>{{$school->website}}</p></a>
        <a class="bottom-button text-center" href="{{route('schools.create')}}">Create</a>
        <a class="bottom-button text-center" href="{{route('schools.edit', $school)}}">Edit</a>
        <a class="bottom-button text-center" href="{{route('schools.destroy',$school)}}">Delete</a>

@endsection

