@extends('layout')

@section('title', 'Inscription')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        {{-- <div class="col-md-6"> --}}
            <div class="card">
                <div class="card-header">Inscription</div>
                @if($errors->any())
                    <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body">
                    <form method="POST" action="{{ route('register.submit') }}">
                        @csrf
                        <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label">User Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="col-md-6">
                        <label for="entreprise-name" class="form-label">Email</label>
                        <input type="mail" name="email" id="text" class="form-control" value="{{ old('email') }}">
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="date-demande" class="form-label">CIN</label>
                        <input type="text" name="cin" id="date-demande" class="form-control" value="{{ old('cin') }}">
                        @error('cin')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    
                
                    <div class="col-md-4">
                        <label for="contact" class="form-label">Phone</label>
                        <input type="tel" name="phone" id="name" class="form-control" value="{{ old('phone') }}">
                        @error('phone')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Mot de Passe</label>
                        <input type="password" name="password" class="form-control" />
                    </div>
                
                    <div class="col-md-6">
                        <label class="form-label">Confirmation de Mot de Passe</label>
                        <input type="password" name="password_confirmation" class="form-control" />
                    </div>


                    <div class="col-md-6">
                        <label for="origine-demande" class="form-label">Rôle</label>
                        <select name="role" id="role" class="form-select">
                            <option>Choisissez le Rôle</option>
                            <option value="admin">Admin</option>
                            <option value="commercial">Commercial</option>
                            <option value="technicien">Technicien</option>
                        </select>
                        @error('role')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>


                <div id="technicien-form" style="display: none;">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="nature-service" class="form-label">Address</label>
                        <input type="number" name="address" id="name" class="form-control" value="{{ old('address') }}">
                        @error('address')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>



                    <div class="col-md-6">
                        <label for="origine-demande" class="form-label">Speciality</label>
                        <select name="speciality" id="speciality" class="form-select">
                            <option value="electricien">Electricien</option>
                            <option value="plombier">Plombier</option>
                            <option value="menuisier">Menuisier</option>
                            <option value="peintre">Peintre</option>
                        </select>
                        @error('speciality')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="contact" class="form-label">experience</label>
                        <input type="number" name="experience" id="experience" class="form-control" value="{{ old('experience') }}">
                        @error('experience')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="origine-demande" class="form-label">status</label>
                        <select name="status" id="status" class="form-select">
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>
                        @error('status')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    
                    {{--<div class="col-md-12">
                        <label for="nature-service" class="form-label">cin</label>
                        <input type="text" name="cin" id="name" class="form-control" value="{{ old('cin') }}">
                        @error('cin')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>--}}
                
                    <div class="d-flex justify-content-end">
                 </div>
                    </div>
                    
                </div>
                <button type="submit" class="btn btn-primary">s'inscrire</button>

                    </form>
            </div>
        </div>
    </div>
</div>
<script>
        // Afficher ou cacher le formulaire supplémentaire pour technicien
        document.getElementById('role').addEventListener('change', function () {
            const role = this.value;
            if (role === 'technicien') {
                document.getElementById('technicien-form').style.display = 'block';
            } else {
                document.getElementById('technicien-form').style.display = 'none';
            }
        });
</script>

@endsection