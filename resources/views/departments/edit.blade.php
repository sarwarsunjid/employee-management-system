@extends('layouts.main')

@section('content')
<div class="row">
    <div class="card">
    <div class="card-header">
    <div class="float-end">
                <a href="{{ route('departments.index') }}">Back</a>
            </div>
    </div>
        <div class="card-body">
            <h4 class="card-title">Create Department</h4>
                <form method="POST" action="{{ route('departments.update', $department->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label for="name"
                            class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name', $department->name) }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                        </div>
                    </div>


                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Update') }}
                            </button>
                        </div>
                    </div>
                </form>
    
        </div>
    </div>
    </div>
    <!-- end col -->
    <div class="m-2 p-2">
        <form method="POST" action="{{ route('departments.destroy', $department->id) }}">
            @csrf
            @method('DELETE')
                <button class="btn btn-danger">Delete {{ $department->name }}</button>
        </form>
    </div>
</div>
@endsection
