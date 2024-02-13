@extends('layout.app')

@section('content')
    <h1 class="text-center">Create Students Page</h1>
    <div class="container col-6">
        @if (Session::has('done'))
        <div class="alert alert-success mx-auto text-center">
            {{ Session::get('done') }}
        </div>
        @endif
        <div class="card">
            <div class="card-body">
                <form action="{{ route('student.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Student Name</label>
                        <input type="text" class="form-control" name="stName">
                    </div>
                    <div class="form-group">
                        <label>Student Grade</label>
                        <input type="text" class="form-control" name="stGrade">
                    </div>
                    <button class="btn btn-info mt-1">Send Data</button>
                </form>
            </div>
        </div>
    </div>
@endsection
