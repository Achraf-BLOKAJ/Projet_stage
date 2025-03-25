@extends('layout')
@section('title', 'Modifier techniciens')
@section('content')


<div class="container mt-4">
    <h1 class="text-center mb-4">Modifier technicien</h1>
    
    <div class="card">
        <div class="card-body">
            <form action="{{ route('techniciens.update', ['technicien' => $technicien['id']]) }}" method="post">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label">technicien Name</label>
                        <input type="text" name="technicien-name" id="name" class="form-control" value="{{ $technicien->name }}">
                        @error('technicien-name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="col-md-6">
                        <label for="entreprise-name" class="form-label">Email</label>
                        <input type="mail" name="technicien-email" id="text" class="form-control" value="{{ $technicien->email }}">
                        @error('technicien-email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="date-demande" class="form-label">Address</label>
                        <input type="text" name="technicien-address" id="date-demande" class="form-control" value="{{ $technicien->address }}">
                        @error('technicien-address')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    
                
                    <div class="col-md-4">
                        <label for="contact" class="form-label">Phone</label>
                        <input type="number" name="technicien-phone" id="name" class="form-control" value="{{ $technicien->phone }}">
                        @error('commercial-phone')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>


                    <div class="col-md-4">
                        <label for="origine-demande" class="form-label">speciality</label>
                        <select name="technicien-speciality" id="status" class="form-select">
                            <option value="electricien">Electricien</option>
                            <option value="plombier">Plombier</option>
                            <option value="menuisier">Menuisier</option>
                            <option value="peintre">Peintre</option>
                        </select>
                        @error('technicien-speciality')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>



                    <div class="col-md-12">
                        <label for="nature-service" class="form-label">technicien experience</label>
                        <input type="number" name="technicien-experience" id="name" class="form-control" value="{{ $technicien->experience }}">
                        @error('technicien-experience')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>



                    <div class="col-md-4">
                        <label for="origine-demande" class="form-label">technicien status</label>
                        <select name="technicien-status" id="status" class="form-select">
                            <option value="active">ACTIVE</option>
                            <option value="inactive">INACTIVE</option>
                        </select>
                        @error('technicien-status')
                            <p class="text-danger">{{$message}}</p>
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
                        <input type="text" name="cin" id="name" class="form-control" value="{{ $technicien->cin }}">
                        @error('cin')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </div>
            </form>
<<<<<<< HEAD
        </div>
    </div>
</div> 


=======
>>>>>>> c1885523a995663a2aaec06ecf48b63ed4cb7691
        </div>
    </div>
</div> 

<<<<<<< HEAD
=======
        </div>
>>>>>>> c1885523a995663a2aaec06ecf48b63ed4cb7691
@endsection
