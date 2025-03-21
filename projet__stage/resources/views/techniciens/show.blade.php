@extends('layout')
@section('title', 'show technicien')
@section('content')
      


<div class="container py-4">
    <div class="row mb-4">
        <div class="col">
            <h1 class="text-center mb-4">Détails du technicien</h1>
            <div class="d-flex justify-content-start mb-3">
                <a href="{{ route('techniciens.index') }}" class="btn btn-outline-secondary">
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
                        <h2 class="border-bottom pb-2 mb-3 text-primary"> {{ $technicien->name }}</h2>
                        <h5 class="text-muted mb-3">email : {{ $technicien->email }}</h5>
                    </div>
                    <div class="col-md-4 text-md-end">
                        <div class="d-flex justify-content-md-end gap-2 mt-3">
                            <a href="{{ route('techniciens.edit', $technicien->id) }}" class="btn btn-primary">
                                <i class="fas fa-edit me-2"></i>Modifier
                            </a>
                            <form action="{{ route('techniciens.destroy', $technicien->id) }}" method="post">
                                @csrf    
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
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
                                    <th class="bg-light">
                                        <i class="fas fa-map-marker-alt me-2"></i>Adresse :
                                    </th>
                                    <td>{{ $technicien->address }}</td>
                                </tr>

                                <tr>
                                    <th class="bg-light">
                                        <i class="fas fa-map-marker-alt me-2"></i>email :
                                    </th>
                                    <td>{{ $technicien->email }}</td>
                                </tr>

                                <tr>
                                    <th class="bg-light">
                                        <i class="fas fa-calendar-alt me-2"></i>phone :
                                    </th>
                                    <td>{{ $technicien->phone }}</td>
                                </tr>


                                <tr>
                                    <th class="bg-light">
                                        <i class="fas fa-calendar-alt me-2"></i>speciality :
                                    </th>
                                    <td>{{ $technicien->speciality }}</td>
                                </tr>
                                <tr>
                                    <th class="bg-light">
                                        <i class="fas fa-calendar-alt me-2"></i>Cin :
                                    </th>
                                    <td>{{ $technicien->cin }}</td>
                                </tr>
                                <tr>
                                    <th class="bg-light">
                                        <i class="fas fa-calendar-alt me-2"></i>Rôle :
                                    </th>
                                    <td>{{ $technicien->role }}</td>
                                </tr>
                            </tbody>
                        </table>
@endsection
