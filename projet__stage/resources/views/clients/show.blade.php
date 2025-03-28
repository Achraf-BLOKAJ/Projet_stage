
@extends('layout')
@section('title', 'Détails du client')
@section('content')
<div class="container py-4">
    <div class="row mb-4">
        <div class="col">
            <h1 class="text-center mb-4">Détails du client</h1>
            <div class="d-flex justify-content-start mb-3">
                <a href="{{ route('clients.index') }}" class="btn btn-outline-secondary">
                    <i class="fas fa-arrow-left me-2"></i>Retour à la liste
                </a>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-12">
            <div class="bg-light p-4 rounded shadow-sm">
                <div class="row mb-4">
                    <div class="col-md-8">
                        <h2 class="border-bottom pb-2 mb-3 text-primary">Name Client : {{ $client->name }}</h2>
                        <h5 class="text-muted mb-3">Intervention : {{ $client->intervention }}</h5>
                    </div>
                    <div class="col-md-4 text-md-end">
                        <div class="d-flex justify-content-md-end gap-2 mt-3">
                            <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-primary">
                                <i class="fas fa-edit me-2"></i>Modifier
                            </a>
                            <form action="{{ route('clients.destroy', $client->id) }}" method="post">
                                @csrf    
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('voulez vous vraiment supprimer')" class="btn btn-danger">
                                    <i class="fas fa-trash me-2"></i>Supprimer
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <table class="table table-hover">
                            <tbody>

                            <tr>
                                    <th class="bg-light" style="width: 40%">
                                        <i class="fas fa-user me-2"></i>Entreprise Name :
                                    </th>
                                    <td>
                                        <a href="mailto:{{ $client->contact }}">{{ $client->entrepriseName }}</a>
                                    </td>
                                </tr>

                                <tr>
                                    <th class="bg-light" style="width: 40%">
                                        <i class="fas fa-user me-2"></i>Contact
                                    </th>
                                    <td>
                                        <a href="mailto:{{ $client->contact }}">{{ $client->contact }}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="bg-light">
                                        <i class="fas fa-map-marker-alt me-2"></i>Adresse
                                    </th>
                                    <td>{{ $client->address }}</td>
                                </tr>
                                <tr>
                                    <th class="bg-light">
                                        <i class="fas fa-calendar-alt me-2"></i>Date Demande
                                    </th>
                                    <td>{{ $client->dateDemande }}</td>
                                </tr>
                                <tr>
                                    <th class="bg-light">
                                        <i class="fas fa-calendar-check me-2"></i>Date Visite
                                    </th>
                                    <td>{{ $client->dateVisite }}</td>
                                </tr>
                                <tr>
                                    <th class="bg-light">
                                        <i class="fas fa-tags me-2"></i>Origine Demande
                                    </th>
                                    <td>{{ $client->origineDemande }}</td>
                                </tr>
                    
                            </tbody>
                        </table>
                    </div>

                    <div class="col-md-6">
                        <table class="table table-hover">
                            <tbody>
                            <tr >
                                    <th class="bg-light" >
                                        <i class="fas fa-id-card me-2"></i>Nom Commercial
                                    </th>
                                    <td colspan="2">{{ $client->nomCommerciale }}</td>
                                </tr>
                                <tr>
                                    <th class="bg-light" style="width: 40%">
                                        <i class="fas fa-tasks me-2"></i>Type Besoin
                                    </th>
                                    <td>{{ $client->typeBesoin }}</td>
                                </tr>
                                <tr>
                                    <th class="bg-light">
                                        <i class="fas fa-layer-group me-2"></i>Catégorie Besoin
                                    </th>
                                    <td>{{ $client->categorieBesoin }}</td>
                                </tr>
                                <tr>
                                    <th class="bg-light">
                                        <i class="fas fa-concierge-bell me-2"></i>Nature Service
                                    </th>
                                    <td>{{ $client->natureService }}</td>
                                </tr>
                                <tr>
                                    <th class="bg-light">
                                        <i class="fas fa-shopping-cart me-2"></i>Marchandises
                                    </th>
                                    <td>{{ $client->marchandiz }}</td>
                                </tr>
                                <tr>
                                    <th class="bg-light">
                                        <i class="fas fa-sync-alt me-2"></i>Type Cadence
                                    </th>
                                    <td>{{ $client->typeCadence }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12">
                        <div class="card bg-white">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <i class="fas fa-info-circle me-2"></i>Détails du service
                                </h5>
                            </div>
                            <div class="card-body">
                                <p>{{ $client->detailService }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
