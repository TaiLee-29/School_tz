@extends('layout')
@section('content')
    <br><br><br>
    <form action="" method="post">@csrf
        <div class="mb-3">
            <label for="first_name" class="first_name">Name</label>
            <input type="text" class="form-control" name="first_name" id="first_name" value="{{$employee->first_name}}" >
        </div>
        <div class="mb-3">
            <label for="last_name" class="last_name">Name</label>
            <input type="text" class="form-control" name="last_name" id="last_name" value="{{$employee->last_name}}" >
        </div>
        <div class="mb-3">
            <label for="email" class="email">Email</label>
            <input type="text" class="form-control" name="email" id="email" value="{{$employee->email}}" >
        </div>
        <div class="mb-3">
            <label for="phone" class="phone">Phone</label>
            <input type="text" class="form-control" name="phone" id="phone" value="{{$employee->phone}}" >
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
