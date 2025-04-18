@extends('layout')
@section('title', 'techniciens')
@section('content')











<div class="container py-4">
    <div class="row mb-4">
        <div class="col">
            <h1 class="text-center mb-4">techniciens</h1>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <a class="btn btn-success" href="{{ route('techniciens.create') }}">
                    <i class="fas fa-plus-circle me-2"></i>Ajouter commercial
                </a>
                <span class="badge bg-primary rounded-pill">{{ count($techniciens) }} techniciens</span>
            </div>
        </div>
    </div>

    @if(count($techniciens) > 0)
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>speciality</th>
                        <th>address</th>
                        <th>Tel</th>
                        <th>Rôle</th>

                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($techniciens as $technicien)
                    <tr>
                        <td class="fw-bold">{{ $technicien['name'] }}</td>
                        <td>{{ $technicien['email'] }}</td>
                        <td>{{ $technicien['speciality'] }}</td>
                        <td>{{ $technicien->address }}</td>
                        <td>{{ $technicien->phone }}</td>
                        <td>{{ $technicien->role }}</td>
                        <td class="text-center">
                            <a href="{{ route('techniciens.show', ['technicien' => $technicien['id']]) }}" class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-info-circle me-1"></i>Détails
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
            </div>
        </div>
    @else
        <div class="alert alert-info text-center" role="alert">
            <i class="fas fa-info-circle me-2"></i>Aucun technicien trouvé
        </div>
    @endif

    <!-- Afficher les utilisateurs avec rôle 'technicien' -->
    @if(count($users) > 0)
        <div class="table-responsive mt-4">
            <h4>Liste des utilisateurs avec rôle technicien</h4>
            <table class="table table-hover table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Rôle</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td class="fw-bold">{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                        <td class="text-center">
                            <a href="{{ route('users.show', ['user' => $user->id]) }}" class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-info-circle me-1"></i>Détails
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="alert alert-info text-center" role="alert">
            <i class="fas fa-info-circle me-2"></i>Aucun utilisateur trouvé avec le rôle technicien
        </div>
    @endif
</div>




@endsection
