@extends('layout')
@section('title', 'create techniciens')
@section('content')

<h3 class="text-center mb-4">Modifier</h3>

    @if ($errors->any())
        
            <ul>
                <h6>Errors : </h6>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        
    @endif

    <form method="POST" action="{{ route('users.update', $user->id) }}">
        @csrf
        @method('put')

        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}" />
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" />
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">CIN</label>
            <input type="text" name="cin" class="form-control" value="{{ old('cin', $user->cin) }}" />
            @error('cin')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Numéro de téléphone</label>
            <input type="tel" name="phone" class="form-control" value="{{ old('phone', $user->phone) }}" />
            @error('phone')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" />
        </div>

        <div class="mb-3">
            <label class="form-label">Confirmation du Password</label>
            <input type="password" name="password_confirmation" class="form-control" />
        </div>

        <div class="mb-3">
            <label class="form-label">Rôle</label>
            <select type="text" id="role" name="role" class="form-control">
                <option value="commercial" {{ $user->role == 'commercial' ? 'selected' : '' }}>Commercial</option>
                <option value="technicien" {{ $user->role == 'technicien' ? 'selected' : '' }}>Technicien</option>
            </select>
            @error('role')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div id="technicien-form" style="display: {{ $user->role == 'technicien' ? 'block' : 'none' }};">
            <div class="mb-3">
                <label class="form-label">Adresse</label>
                <input type="text" name="address" class="form-control" value="{{ old('address', $user->address) }}" />
                @error('address')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Spécialité</label>
                <select name="speciality" class="form-control">
                    <option value="electricien" {{ $user->speciality == 'electricien' ? 'selected' : '' }}>Electricien</option>
                    <option value="plombier" {{ $user->speciality == 'plombier' ? 'selected' : '' }}>Plombier</option>
                    <option value="menuisier" {{ $user->speciality == 'menuisier' ? 'selected' : '' }}>Menuisier</option>
                    <option value="peintre" {{ $user->speciality == 'peintre' ? 'selected' : '' }}>Peintre</option>
                </select>
                @error('speciality')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="experience">Expérience</label>
                <input type="number" name="experience" id="experience" class="form-control" value="{{ old('experience', $user->experience) }}">
                @error('experience')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="status">Statut</label>
                <select name="status" id="status" class="form-control">
                    <option value="Active" {{ $user->status == 'Active' ? 'selected' : '' }}>Active</option>
                    <option value="Inactive" {{ $user->status == 'Inactive' ? 'selected' : '' }}>Inactive</option>
                </select>
                @error('status')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="d-grid my-2">
            <button type="submit" class="btn btn-primary btn-block">
                Modifier
            </button>
        </div>

    </form>

    <script>
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