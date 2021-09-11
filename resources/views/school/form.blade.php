@extends('layout')

@section('content')
    <br><br><br>
    <form action="" method="">@csrf
        <div class="mb-3">
            <label for="name" class="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{$school->name}}" >
        </div>
        <div class="mb-3">
            <label for="email" class="email">Email</label>
            <input type="text" class="form-control" name="email" id="email" value="{{$school->email}}" >
        </div>
        <div class="mb-3">
            <label for="website" class="website">Website</label>
            <input type="text" class="form-control" name="website" id="website" value="{{$school->website}}" >
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
