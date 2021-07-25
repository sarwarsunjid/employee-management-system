@extends('layouts.main')

@section('content')
<div class="row">
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <div class="card">
        <div class="card-header">
            <form method="GET" action="{{ route('departments.index') }}">
            <div class="float-start">
                <div class="input-group">
                    <input type="search" name="search" class="form-control rounded" 
                    placeholder="Search" aria-label="Search"
                        aria-describedby="search-addon" />
                    <button type="submit" class="btn btn-outline-primary">search</button>
                </div>
            </form>
            </div>
                <div class="float-end">
                <a href="{{ route('departments.create') }}">Create Department</a>
            </div>
        </div>
        <div class="card-body">
            <h4 class="card-title">Departments</h4>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">

                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Manage</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($departments as $department)
                            <tr>
                                <th scope="row">{{ $department->id }}</th>
                                <td>{{ $department->name }}</td>
                                <td>
                                    <a href="{{ route('departments.edit', $department->id) }}"
                                        class="btn btn-success">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
</div>
</div>
@endsection