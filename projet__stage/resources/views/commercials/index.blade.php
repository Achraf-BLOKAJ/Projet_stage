@extends('layout')
@section('title', 'Commercials')
@section('content')

<div class="container py-4">
    <div class="row mb-4">
        <div class="col">
            <h1 class="text-center mb-4">Commercials</h1>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <a class="btn btn-success" href="{{ route('commercials.create') }}">
                    <i class="fas fa-plus-circle me-2"></i>Ajouter commercial
                </a>
                <span class="badge bg-primary rounded-pill">{{ count($commercials ?? []) }} commercials</span>
            </div>
        </div>
    </div>

    <!-- Afficher les commerciaux -->
    @if(count($commercials) > 0)
        <div class="table-responsive">
            <h4>Liste des commerciaux</h4>
            <table class="table table-hover table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Adresse</th>
                        <th>Téléphone</th>
                        <th>Rôle</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($commercials as $commercial)
                    <tr>
                        <td class="fw-bold">{{ $commercial->name }}</td>
                        <td>{{ $commercial->email }}</td>
                        <td>{{ $commercial->address }}</td>
                        <td>{{ $commercial->phone }}</td>
                        <td>{{ $commercial->role }}</td>
                        <td class="text-center">
                            <a href="{{ route('commercials.show', ['commercial' => $commercial->id]) }}" class="btn btn-sm btn-outline-primary">
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
            <i class="fas fa-info-circle me-2"></i>Aucun commercial trouvé
        </div>
    @endif

    <!-- Afficher les utilisateurs avec rôle 'commercial' -->
    @if(count($users) > 0)
        <div class="table-responsive mt-4">
            <h4>Liste des utilisateurs avec rôle Commercial</h4>
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
            <i class="fas fa-info-circle me-2"></i>Aucun utilisateur trouvé avec le rôle commercial
        </div>
    @endif
</div>

@endsection
