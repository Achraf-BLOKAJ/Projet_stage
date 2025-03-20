@extends('layout')
@section('title', 'techniciens')
@section('content')

        <h1 class="d-flex justify-content-center" >techniciens</h1>

        <a class="btn btn-success" href="{{ route('techniciens.create')}} ">ajouter client</a>
        <div>
            @if(count($techniciens)> 0)
            @foreach ($techniciens as $technicien)
            <div class="card">
                <div class="card-header">
                    <H3>{{ $technicien['name'] }}</H3>
                </div>
                <div class="card-body">
                    <h5 class="card-title">email : {{ $technicien['email'] }}</h5>
                    <h5 class="card-title">address : {{ $technicien['address'] }}</h5>
                    <p class="card-text">tel : {{ $technicien['phone'] }}</p>
                    <a href="{{ route('techniciens.show', ['technicien' => $technicien['id']]) }}" class="btn btn-primary">Details</a>
                </div>
            </div>
            @endforeach
            @else
            <p>No technicien found</p>
            @endif
        </div>
@endsection




