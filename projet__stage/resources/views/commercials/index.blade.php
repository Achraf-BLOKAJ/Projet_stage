@extends('layout')
@section('title', 'commercials')
@section('content')

        <h1 class="d-flex justify-content-center" >Commercials</h1>

        <a class="btn btn-primary" href="{{ route('commercials.create')}} ">ajouter commercial</a>
        <div>
            @if(count($commercials)> 0) 
            @foreach ($commercials as $commercial)
            <div class="card">
                <div class="card-header">
                    <H3>{{ $commercial['name'] }}</H3>
                </div>
                <div class="card-body">
                    <h5 class="card-title">email : {{ $commercial['email'] }}</h5>
                    <h5 class="card-title">address : {{ $commercial['address'] }}</h5>
                    <p class="card-text">tel : {{ $commercial['phone'] }}</p>
                    <a href="{{ route('commercials.show', ['commercial' => $commercial['id']]) }}" class="btn btn-primary">Details</a>
                </div>
            </div>
            @endforeach
            @else
            <p>No client found</p>
            @endif
        </div>
@endsection




