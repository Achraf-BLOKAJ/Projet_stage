
@extends('layout')
@section('title', 'Modifier client')
@section('content')


<div class="container mt-4">
    <h1 class="text-center mb-4">Ajouter Nouveau Client</h1>
    
    <div class="card">
        <div class="card-body">
            <form action="{{ route('clients.update' , ['client' => $client['id']]) }}" method="post">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Client Name</label>
                        <input type="text" name="client-name" id="name" class="form-control" value="{{ $client->name }}">
                        @error('client-name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="col-md-6">
                        <label for="entreprise-name" class="form-label">Entreprise Name</label>
                        <input type="text" name="entreprise-name" id="text" class="form-control" value="{{ $client->entrepriseName }}">
                        @error('entreprise-name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="date-demande" class="form-label">Date Demande</label>
                        <input type="date" name="date-demande" id="date-demande" class="form-control" value="{{ $client->dateDemande }}">
                        @error('date-demande')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="col-md-4">
                        <label for="origine-demande" class="form-label">Origine de Demande</label>
                        <select name="origine-demande" id="status" class="form-select">
                            <option value="whatsapp">WhatsApp</option>
                            <option value="mail">Mail</option>
                            <option value="direct">Direct</option>
                        </select>
                        @error('origine-demande')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                
                
                
                    <div class="col-md-4">
                        <label for="contact" class="form-label">Contact</label>
                        <input type="text" name="contact" id="name" class="form-control" value="{{ $client->contact }}">
                        @error('contact')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
   <div class="row mb-3">   
                    <div class="col-md-3" mt-2>
                        <label for="type-besoin" class="form-label">Type De Besoin</label>
                        <select name="type-besoin" id="status" class="form-select">
                            <option value="service1">Service</option>
                            <option value="service2">service2</option>
                            <option value="service3">service3</option>
                        </select>
                        @error('type-besoin')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
               
                
                
                    <div class="col-md-3">
                        <label for="categorie-besoin" class="form-label">Categories de besoin</label>
                        <select name="categorie-besoin" id="status" class="form-select">
                            <option value="besoin1">Nettoyage</option>
                            <option value="besoin2">besoin 2</option>
                            <option value="besoin3">besoin 3</option>
                        </select>
                        @error('categorie-besoin')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    
                    <div class="col-md-3">
                        <label for="nature-service" class="form-label">Nature De Service</label>
                        <input type="text" name="nature-service" id="name" class="form-control" value="{{ $client->natureService }}">
                        @error('nature-service')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <label for="marchandiz" class="form-label">Marchandiz</label>
                        <input type="text" name="marchandiz" id="name" class="form-control" value="{{ $client->marchandiz }}">
                        @error('marchandiz')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                
                </div>

            <div class="row mb-3">         
                    
                    <div class="col-md-6">
                        <label for="nom-commerciale" class="form-label">Nom De Commercial</label>
                        <input type="text" name="nom-commerciale" id="name" class="form-control" value="{{ $client->nomCommerciale }}">
                        @error('nom-commerciale')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                
                
                
                    <div class="col-md-6">
                        <label for="date-visite" class="form-label">Date Visite</label>
                        <input type="date" name="date-visite" id="name" class="form-control" value="{{ $client->dateVisite }}">
                        @error('date-visite')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                
                </div>
                <div class="col-md-6">
                        <label for="type-cadence" class="form-label">Précisez la Type de cadence</label>
                        <select name="type-cadence" id="status" class="form-select">
                            <option value="besoin1">Ponctuelle</option>
                            <option value="besoin2">besoin 2</option>
                            <option value="besoin3">besoin 3</option>
                        </select>
                        @error('type-cadence')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                
                
                
                    <div class="col-md-6">
                        <label for="client-address" class="form-label">Address</label>
                        <input type="text" name="client-address" id="name" class="form-control" value="{{ $client->address }}">
                        @error('client-address')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="col-md-3" mt-2>
                        <label for="type-besoin" class="form-label">intervention</label>
                        <select name="intervention" id="status" class="form-select">
                            <option value="interventionEnCours">intervention en cours</option>
                            <option value="interventionTerminer">intervention terminé</option>
                            <option value="interventionNonConfirmer ">intervention non confirmer </option>
                        </select>
                        @error('type-besoin')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    
                
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="detail-service" class="form-label">Détail du service</label>
                        <textarea name="detail-service" id="name" class="form-control" rows="4">{{ $client->detailService }}</textarea>
                        @error('detail-service')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Modifier</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection