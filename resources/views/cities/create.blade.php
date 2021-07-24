@extends('layouts.main')

@section('content')
<div class="row">
    <div class="card">
    <div class="card-header">
    <div class="float-end">
                <a href="{{ route('cities.index') }}">Back</a>
            </div>
    </div>
        <div class="card-body">
            <h4 class="card-title">City</h4>
                <form method="POST" action="{{ route('cities.store') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="country_code"
                            class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                        <div class="col-md-6">
                        <select name="state_id" class="form-control" aria-label="Default select example">
                                        <option selected>Select State</option>
                                        @foreach ($states as $state)
                                            <option value="{{ $state->id }}">{{ $state->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('country_code')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

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
                                {{ __('Create') }}
                            </button>
                        </div>
                    </div>
                </form>
    
        </div>
    </div>
    </div>
    <!-- end col -->
</div>
@endsection
