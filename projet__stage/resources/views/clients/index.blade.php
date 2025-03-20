
@extends('layout')
@section('title', 'Clients')
@section('content')
<div class="container py-4">
    <div class="row mb-4">
        <div class="col">
            <h1 class="text-center mb-4">Clients</h1>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <a class="btn btn-success" href="{{ route('clients.create') }}">
                    <i class="fas fa-plus-circle me-2"></i>Ajouter Client
                </a>
                <span class="badge bg-primary rounded-pill">{{ count($clients) }} clients</span>
            </div>
        </div>
    </div>

    @if(count($clients) > 0)
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Nom</th>
                        <th>Contact</th>
                        <th>Adresse</th>
                        <th>Date de Visite</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                    <tr>
                        <td class="fw-bold">{{ $client['name'] }}</td>
                        <td>{{ $client['contact'] }}</td>
                        <td>{{ $client->address }}</td>
                        <td>{{ $client->dateVisite }}</td>
                        <td class="text-center">
                            <a href="{{ route('clients.show', ['client' => $client['id']]) }}" class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-info-circle me-1"></i>Détails
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Alternative avec liste -->
        <div class="d-none d-md-none">
            <div class="list-group">
                @foreach ($clients as $client)
                <div class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{ $client['name'] }}</h5>
                        <small>{{ $client->dateVisite }}</small>
                    </div>
                    <p class="mb-1"><i class="fas fa-user me-2"></i>{{ $client['contact'] }}</p>
                    <p class="mb-1"><i class="fas fa-map-marker-alt me-2"></i>{{ $client->address }}</p>
                    <div class="mt-2 text-end">
                        <a href="{{ route('clients.show', ['client' => $client['id']]) }}" class="btn btn-sm btn-outline-primary">
                            <i class="fas fa-info-circle me-1"></i>Détails
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    @else
        <div class="alert alert-info text-center" role="alert">
            <i class="fas fa-info-circle me-2"></i>Aucun client trouvé
        </div>
    @endif
</div>
@endsection