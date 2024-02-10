@extends('students.layout')

@section('content')
<div class="card">
    <div class="card-header">Students Page</div>
    <div class="card-body">
        <form action="{{ route('students.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name</label><br>
                <input type="text" name="name" id="name" class="form-control"><br>
            </div>
            <div class="form-group">
                <label for="address">Address</label><br>
                <input type="text" name="address" id="address" class="form-control"><br>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile</label><br>
                <input type="text" name="mobile" id="mobile" class="form-control"><br>
            </div>
            <input type="submit" value="Save" class="btn btn-success"><br>
        </form>
    </div>
</div>
@stop
