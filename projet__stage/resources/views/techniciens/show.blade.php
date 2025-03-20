@extends('layout')
@section('title', 'show technicien')
@section('content')

        <h1 class="d-flex justify-content-center" >technicien</h1>

        <div>
            
            
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $technicien->name }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">email : {{ $technicien->email }}</h6>
                        <h6 class="card-subtitle mb-2 text-muted">address : {{ $technicien->address }}</h6>
                        <p class="card-text">tel : {{ $technicien->phone }}</p>
                    </div>
                    <a href="{{ route('techniciens.edit', $technicien->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('techniciens.destroy', $technicien->id) }}" method="post">
                        @csrf    
                        @method('DELETE')
                        <input type="submit" value="delete" class="btn btn-danger">
                    </form>
                    

                </div>

            
                
        </div>

@endsection