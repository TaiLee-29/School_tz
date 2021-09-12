@extends('layout')

@section('content')
    <br><br><br>
    <form action="{{route('schools.store',$school)}}" method="post" enctype="multipart/form-data" >@csrf
        <div class="mb-3">
            <label for="name" class="name">Name</label>
            <input type="text" class="form-control" name="name" id="name"  >
        </div>
        <div class="mb-3">
            <label for="email" class="email">Email</label>
            <input type="text" class="form-control" name="email" id="email"  >
        </div>
        <div class="mb-3">
            <label for="website" class="website">Website</label>
            <input type="text" class="form-control" name="website" id="website" >
        </div>
        <div class="mb-3">
            <label for="logo" class="logo">Logo</label>
            <input type="file" class="form-control" name="logo" id="logo" >
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
