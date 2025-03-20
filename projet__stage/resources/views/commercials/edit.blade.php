@extends('layout')
@section('title', 'Modifier commercial')
@section('content')

        <h1 class="d-flex justify-content-center" >Modifier commercial</h1>

        <div>
            
            
                {{-- <form action="{{ route('commercials.update', ['commercial' => $commercial['id']]) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group --}}
            <form action="{{ route('commercials.update',['commercial'=> $commercial->id]) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" name="commercial-name" id="name" class="form-control" value="{{ $commercial->name }}">
                        @error('commercial-name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="commercial-email" id="email" class="form-control" value="{{ $commercial->email }}">
                        @error('commercial-email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror   
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="commercial-address" id="address" class="form-control" value="{{ $commercial->address }}">
                        @error('commercial-address')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="commercial-phone" id="phone" class="form-control" value="{{ $commercial->phone }}">
                        @error('commercial-phone ')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
                </div>

            
                
        </div>

@endsection