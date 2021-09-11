@extends('layout')

@section('content')
    @auth<p> {{ auth()->user()->name }}</p>@endauth

    <h1>{{$employee->first_name}}{{$employee->last_name}}</h1>
    <h1></h1>
    <p>{{$employee->email}}</p>
    <a href="#"><p>{{$employee->phone}}</p></a>
    <a class="bottom-button text-center" href="{{route('employees.create')}}">Create</a>
    <a class="bottom-button text-center" href="{{route('employees.edit', $employee)}}">Edit</a>
    <a class="bottom-button text-center" href="{{route('employees.destroy',$employee)}}">Delete</a>

@endsection
