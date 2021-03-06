@extends('layout')

@section('content')
    <br><br><br>
    <form action="{{route('schools.update',$school)}}" method="post" enctype="multipart/form-data">@csrf
        @method('PUT')
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
        <div class="mb-3">
            <label for="logo" class="logo">Logo</label>
            <input type="file" class="form-control" name="logo" id="logo" value="{{$school->logo}}" >
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
