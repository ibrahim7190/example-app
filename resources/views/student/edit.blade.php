@extends('layout.app')

@section('content')
    <h1 class="text-center">Create Student {{ $student->name }}</h1>
    <div class="container col-6">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('student.update' , $student->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Student Name</label>
                        <input type="text" class="form-control" name="stName" value="{{ $student->name }}">
                    </div>
                    <div class="form-group">
                        <label>Student Grade</label>
                        <input type="text" class="form-control" name="stGrade" value="{{ $student->grade }}">
                    </div>
                    <button class="btn btn-info mt-1">Update Data</button>
                </form>
            </div>
        </div>
    </div>
@endsection