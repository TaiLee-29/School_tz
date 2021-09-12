@extends('layout')
@section('link')
   <b> <a class="bottom-button text-center" href={{route('employees.create')}}>Create</a></b>
@endsection
@section('content')
    @auth<p> {{ auth()->user()->name }}</p>@endauth

    @foreach($employees as $employee)
        <h1><a href="{{route('employees.show', $employee)}}">{{$employee->first_name }}{{ $employee->last_name}}</a></h1>
        <h2>School: {{$employee->email}}</h2>
        <p>{{$employee->email}}</p>
        <p>{{$employee->phone}}</p>

        <a class="bottom-button text-center" href="{{route('employees.edit', $employee)}}">Edit</a>
        <form action="{{route('employees.destroy',$employee)}}" method="post">@csrf @method('DELETE') <input type="submit" value="Delete" ></form>

    @endforeach
    <br><br>
    <div class="navbarforpaginate">
    {{$employees->links('pagination::bootstrap-4')}}
    </div>
@endsection
