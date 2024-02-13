@extends('layout.app')

@section('content')
    <h1 class="text-center">List Students Page</h1>
    <div class="container col-6">
        @if (Session::has('done'))
        <div class="alert alert-success mx-auto text-center">
            {{ Session::get('done') }}
        </div>
        @endif
        <div class="card">
            <div class="card-body">
                <table class="table table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Grade</th>
                        <th colspan="2">Action</th>
                    </tr>
                   @forelse ($allStudent as $item )
                       <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->grade }}</td>
                        <td><a href="{{ route('student.destroy' , $item->id) }}">Delete</a></td>
                        <td><a href="{{ route('student.edit' , $item->id) }}">Edit</a></td>
                       </tr>
                   @empty
                       <div class="alert alert-danger text-center">
                        You Dont Have Data
                       </div>
                   @endforelse
                </table>
            </div>
        </div>
    </div>
@endsection
