@extends('layout')
@section('title', 'show commercial')
@section('content')

<div class="container py-4">
    <div class="row mb-4">
        <div class="col">
            <h1 class="text-center mb-4">Détails du commercial</h1>
            <div class="d-flex justify-content-start mb-3">
                <a href="{{ route('commercials.index') }}" class="btn btn-outline-secondary">
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
                        <h2 class="border-bottom pb-2 mb-3 text-primary"> {{ $commercial->name }}</h2>
                        <h5 class="text-muted mb-3">email : {{ $commercial->email }}</h5>
                    </div>
                    <div class="col-md-4 text-md-end">
                        <div class="d-flex justify-content-md-end gap-2 mt-3">
                            <a href="{{ route('commercials.edit', $commercial->id) }}" class="btn btn-primary">
                                <i class="fas fa-edit me-2"></i>Modifier
                            </a>
                            <form action="{{ route('commercials.destroy', $commercial->id) }}" method="post">
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
                                        <i class="fas fa-map-marker-alt me-2"></i>Adresse
                                    </th>
                                    <td>{{ $commercial->address }}</td>
                                </tr>

                                <tr>
                                    <th class="bg-light">
                                        <i class="fas fa-map-marker-alt me-2"></i>email:
                                    </th>
                                    <td>{{ $commercial->email }}</td>
                                </tr>

                                <tr>
                                    <th class="bg-light">
                                        <i class="fas fa-calendar-alt me-2"></i>phone :
                                    </th>
                                    <td>{{ $commercial->phone }}</td>
                                </tr>

                                <tr>
                                    <th class="bg-light">
                                        <i class="fas fa-calendar-alt me-2"></i>Cin :
                                    </th>
                                    <td>{{ $commercial->cin }}</td>
                                </tr>
                                <tr>
                                    <th class="bg-light">
                                        <i class="fas fa-calendar-alt me-2"></i>Rôle :
                                    </th>
                                    <td>{{ $commercial->role }}</td>
                                </tr>
                            </tbody>
                        </table>





@endsection
