@extends('layout')
@section('title', 'create commercial')
@section('content')

        <div class="container mt-4">
    <h1 class="text-center mb-4">Ajouter Nouveau commercial</h1>
    
    <div class="card">
        <div class="card-body">
            <form action="{{ route('commercials.store') }}" method="post">
                @csrf
                
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label">commercial Name</label>
                        <input type="text" name="commercial-name" id="name" class="form-control" value="{{ old('commercial-name') }}">
                        @error('commercial-name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="col-md-6">
                        <label for="entreprise-name" class="form-label">Email</label>
                        <input type="mail" name="commercial-email" id="text" class="form-control" value="{{ old('commercial-email') }}">
                        @error('commercial-email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="date-demande" class="form-label">Address</label>
                        <input type="text" name="commercial-address" id="date-demande" class="form-control" value="{{ old('commercial-address') }}">
                        @error('commercial-address')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    
                
                    <div class="col-md-4">
                        <label for="contact" class="form-label">Phone</label>
                        <input type="number" name="commercial-phone" id="name" class="form-control" value="{{ old('commercial-phone') }}">
                        @error('commercial-phone')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>


                    <div class="col-md-4">
                        <label for="origine-demande" class="form-label">Rôle</label>
                        <select name="role" id="status" class="form-select">
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                            <option value="superAdmin">Super Admin</option>
                        </select>
                        @error('role')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    
                    <div class="col-md-12">
                        <label for="nature-service" class="form-label">cin</label>
                        <input type="text" name="cin" id="name" class="form-control" value="{{ old('cin') }}">
                        @error('cin')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
