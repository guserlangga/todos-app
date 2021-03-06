@extends('layouts.app')
@section('content')
    <h1 class="text-center">TODOS PAGE</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">
                    Todos
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach($todos as $todo)
                            <li class="list-group-item">
                                {{ $todo->name }}
                                <a href="/todos/{{ $todo->id }}" class="btn btn-primary btn-sm float-end">View</a>
                                <a href="{{ route('destroy.todo', $todo->id) }}" class="btn btn-danger btn-sm float-end">Delete</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection