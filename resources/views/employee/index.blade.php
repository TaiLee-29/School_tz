@extends('layout')

@section('content')
    @auth<p> {{ auth()->user()->name }}</p>@endauth
    @foreach($employees as $employee)
        <h1><a href="{{route('employees.show', $employee->id)}}">{{$employee->first_name }}{{ $employee->last_name}}</a></h1>

        <p>{{$employee->email}}</p>
        <p>{{$employee->phone}}</p>
        <a class="bottom-button text-center" href="{{route('employees.create')}}">Create</a>
        <a class="bottom-button text-center" href="{{route('employees.edit', $employee->id)}}">Edit</a>
        <a class="bottom-button text-center" href="{{route('employees.destroy',$employee->id)}}">Delete</a>
    @endforeach
@endsection