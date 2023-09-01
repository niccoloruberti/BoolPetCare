@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Dashboard') }}
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('User Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 d-flex justify-content-center my-5">
        <a href="{{route('admin.animals.index')}}" class="btn btn-primary btn-md me-2">Animals list</a>
        <a href="{{route('admin.animals.index')}}" class="btn btn-primary btn-md">Owners list</a>
    </div>
</div>
@endsection
