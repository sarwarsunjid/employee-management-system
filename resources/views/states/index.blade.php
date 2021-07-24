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
            <form method="GET" action="{{ route('states.index') }}">
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
                <a href="{{ route('states.create') }}">Create State</a>
            </div>
        </div>
        <div class="card-body">
            <h4 class="card-title">States</h4>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">

                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Country Code</th>
                            <th>Name</th>
                            <th>Manage</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($states as $state)
                            <tr>
                                <th scope="row">{{ $state->id }}</th>
                                <td>{{ $state->country->country_code }}</td>
                                <td>{{ $state->name }}</td>
                                <td>
                                    <a href="{{ route('states.edit', $state->id) }}" class="btn btn-success">Edit</a>
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