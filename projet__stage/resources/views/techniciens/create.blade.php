@extends('layout')
@section('title', 'create techniciens')
@section('content')

        <h1 class="d-flex justify-content-center" >Ajouter Nouveau techniciens</h1>

        <div>
            
            
                <form action="{{ route('techniciens.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" name="technicien-name" id="name" class="form-control" value="{{ old('technicien-name') }}">
                        @error('technicien-name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group
                    ">
                        <label for="email">Email</label>
                        <input type="email" name="technicien-email" id="email" class="form-control" value="{{ old('technicien-email') }}">
                        @error('technicien-email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror   
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="technicien-address" id="address" class="form-control" value="{{ old('technicien-address') }}">
                        @error('technicien-address')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="technicien-phone" id="phone" class="form-control" value="{{ old('technicien-phone') }}">
                        @error('technicien-phone ')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="speciality">Speciality</label>
                        <select name="technicien-speciality" id="speciality" class="form-control">
                            <option value="electricien">Electricien</option>
                            <option value="plombier">Plombier</option>
                            <option value="menuisier">Menuisier</option>
                            <option value="peintre">Peintre</option>
                        </select>
                        @error('technicien-speciality')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group
                    ">
                    <label for="experience">Experience</label>
                    <input type="number" name="technicien-experience" id="experience" class="form-control" value="{{ old('technicien-experience') }}">
                    @error('technicien-experience')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                    </div>
                    <div class="form-group
                    ">
                    <label for="status">status</label>
                    <select name="technicien-status" id="status" class="form-control">
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                    </select>
                    @error('technicien-status')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
            </div>
        </div>

@endsection