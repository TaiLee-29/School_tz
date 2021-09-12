@extends('layout')
@section('content')
    <br><br><br>
    <form action="{{route('employees.update',$employee)}}" method="post">@csrf
        @method('PUT')




        <div class="mb-3">
            <label for="first_name" class="first_name">First Name</label>
            <input type="text" class="form-control" name="first_name" id="first_name" value="{{$employee->first_name}}" >
        </div>
        <div class="mb-3">
            <label for="last_name" class="last_name">Last Name</label>
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
        <div class="mb-3">
            <label for="school_id" class="school_id">Chose school</label>
            <select class="form-control" name="school_id" id="school_id" required="required">
                <option value="{{$employee->school->id}}">{{$employee->school->name}}</option>
                @foreach($schools as $school)
                    <option value="{{$school->id}}">{{$school->name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
