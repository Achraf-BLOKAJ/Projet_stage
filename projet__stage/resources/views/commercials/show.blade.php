@extends('layout')
@section('title', 'show commercial')
@section('content')

        <h1 class="d-flex justify-content-center" >show commercial</h1>

 {{--       <div>
            
<div class="d-flex justify-content-center"> 
    <a class="btn btn-primary" href="{{ route('commercials.index') }}">Back</a>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $commercial->name }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">email : {{ $commercial->email }}</h6>
                        <h6 class="card-subtitle mb-2 text-muted">address : {{ $commercial->address }}</h6>
                        <p class="card-text">tel : {{ $commercial->phone }}</p>
                    </div>
                    <a href="{{ route('commercials.edit', $commercial->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('commercials.destroy', $commercial->id) }}" method="post">
                        @csrf    
                        @method('DELETE')
                        <input type="submit" value="delete" class="btn btn-danger">
                    </form>
                    

                </div>

            
                
        </div>
</div> --}}









<div class="d-flex justify-content-center"> 
    <div class="card" style="width: 18rem;">
    <h3 class="card-title text-center" >{{ $commercial->name }}</h3>

        <div class="card-body">
            <h5 class="card-title text-center">email : {{ $commercial->email }}</h5> <!-- Titre centré -->
            <p class="card-text">address : {{ $commercial->address }}</p>
            <p class="card-text">tel : {{ $commercial->phone }}</p>
            



            <div class="d-flex justify-content-between">
                <a href="{{ route('commercials.edit', $commercial->id) }}" class="btn btn-primary">modifier</a>
                
                <form action="{{ route('commercials.destroy', $commercial->id) }}" method="post">
                        @csrf    
                        @method('DELETE')
                        <input type="submit" value="supprimer" class="btn btn-danger">
                    </form>
            </div>
        </div>
    </div>
</div>





@endsection