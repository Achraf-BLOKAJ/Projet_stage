@extends('layout')
@section('title', 'create commercial')
@section('content')

        <h1 class="d-flex justify-content-center" >Ajouter Nouveau Commercial</h1>

        <div>
            
            
                <form action="{{ route('commercials.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" name="commercial-name" id="name" class="form-control" value="{{ old('commercial-name') }}">
                        @error('commercial-name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group
                    ">
                        <label for="email">Email</label>
                        <input type="email" name="commercial-email" id="email" class="form-control" value="{{ old('commercial-email') }}">
                        @error('commercial-email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror   
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="commercial-address" id="address" class="form-control" value="{{ old('commercial-address') }}">
                        @error('commercial-address')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="commercial-phone" id="phone" class="form-control" value="{{ old('commercial-phone') }}">
                        @error('commercial-phone ')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
                </div>

            
                
        </div>

@endsection