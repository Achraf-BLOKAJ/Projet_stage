{{--@extends('layout')
@section('title', 'Modifier client')
@section('content')

        <h1 class="d-flex justify-content-center" >Modifier Client</h1>

        <div>
            
            
                
            <form action="{{ route('clients.update',['client'=> $client->id]) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Client Name</label>
                        <input type="text" name="client-name" id="name" class="form-control" value="{{ $client->name }}">
                        @error('client-name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="name">Entreprise Name</label>
                        <input type="text" name="entreprise-name" id="name" class="form-control" value="{{ $client->entrepriseName }}">
                        @error('entreprise-name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="date-demande">Date Demande </label>
                        <input type="date" name="date-demande" id="name" class="form-control" value="{{ $client->dateDemande }}">
                        @error('date-demande')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>


                    </div>
                    <div class="form-group
                    ">
                    <label for="origine-demande">Origine de Demande</label>
                    <select name="origine-demande" id="status" class="form-control">
                        <option value="whatsapp">WhatsApp</option>
                        <option value="mail">mail</option>
                        <option value="direct">direct</option>
                    </select>
                    @error('origine-demande')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                    </div>


                    <div class="form-group">
                        <label for="contact">Contact </label>
                        <input type="text" name="contact" id="name" class="form-control" value="{{ $client->contact }}">
                        @error('contact')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>




                    </div>
                    <div class="form-group
                    ">
                    <label for="type-besoin">Type de besoin</label>
                    <select name="type-besoin" id="status" class="form-control">
                        <option value="service1">service1</option>
                        <option value="service2">service2</option>
                        <option value="service3">service3</option>
                    </select>
                    @error('type-besoin')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                    </div>





                    </div>
                    <div class="form-group">
                    <label for="categorie-besoin">Categories de besion</label>
                    <select name="categorie-besoin" id="status" class="form-control">
                        <option value="besoin1">besoin 1</option>
                        <option value="besoin2">besoin 2</option>
                        <option value="besoin3">besoin 3</option>
                    </select>
                    @error('categorie-besoin')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                    </div>




                    <div class="form-group">
                        <label for="nature-service">Nature De Service </label>
                        <input type="text" name="nature-service" id="name" class="form-control" value="{{ $client->natureService }}">
                        @error('nature-service')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="marchandiz">marchandiz </label>
                        <input type="text" name="marchandiz" id="name" class="form-control" value="{{ $client->marchandiz }}">
                        @error('marchandiz')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>



                    <div class="form-group">
                        <label for="nom-commerciale">Nom De Commerciale </label>
                        <input type="text" name="nom-commerciale" id="name" class="form-control" value="{{ $client->nomCommerciale }}">
                        @error('nom-commerciale')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>



                    <div class="form-group">
                        <label for="date-visite">Date Visite </label>
                        <input type="date" name="date-visite" id="name" class="form-control" value="{{ $client->dateVisite }}">
                        @error('date-visite')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>



                    </div>
                    <div class="form-group">
                    <label for="type-cadence">Categories de besion</label>
                    <select name="type-cadence" id="status" class="form-control">
                        <option value="besoin1">besoin 1</option>
                        <option value="besoin2">besoin 2</option>
                        <option value="besoin3">besoin 3</option>
                    </select>
                    @error('type-cadence')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                    </div>



                    <div class="form-group">
                        <label for="client-address">Address </label>
                        <input type="text" name="client-address" id="name" class="form-control" value="{{ $client->address }}">
                        @error('client-address')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>



                    <div class="form-group">
                        <label for="detail-service">detail-service </label>
                        
                        <textarea type="text" name="detail-service" id="name" class="form-control" value="{{ $client->detailService }}" >{{ $client->detailService }}</textarea>

                        @error('detail-service')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>


                    <button type="submit" class="btn btn-primary">Modifier</button>
            </form>
        </div>

                 




                   

            
                
        </div>

@endsection--}}





















@extends('layout')
@section('title', 'Modifier client')
@section('content')

<div class="container mt-4">
    <h1 class="text-center mb-4">Modifier Client</h1>
    
    <div class="card">
        <div class="card-body">
            <form action="{{ route('clients.update',['client'=> $client->id]) }}" method="post">
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
                        <input type="text" name="entreprise-name" id="name" class="form-control" value="{{ $client->entrepriseName }}">
                        @error('entreprise-name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="date-demande" class="form-label">Date Demande</label>
                        <input type="date" name="date-demande" id="name" class="form-control" value="{{ $client->dateDemande }}">
                        @error('date-demande')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="col-md-6">
                        <label for="origine-demande" class="form-label">Origine de Demande</label>
                        <select name="origine-demande" id="status" class="form-select">
                            <option value="whatsapp" {{ $client->origineDemande == 'whatsapp' ? 'selected' : '' }}>WhatsApp</option>
                            <option value="mail" {{ $client->origineDemande == 'mail' ? 'selected' : '' }}>Mail</option>
                            <option value="direct" {{ $client->origineDemande == 'direct' ? 'selected' : '' }}>Direct</option>
                        </select>
                        @error('origine-demande')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="contact" class="form-label">Contact</label>
                        <input type="text" name="contact" id="name" class="form-control" value="{{ $client->contact }}">
                        @error('contact')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="col-md-6">
                        <label for="type-besoin" class="form-label">Type De Besoin</label>
                        <select name="type-besoin" id="status" class="form-select">
                            <option value="service1" {{ $client->typeBesoin == 'service1' ? 'selected' : '' }}>Service</option>
                            <option value="service2" {{ $client->typeBesoin == 'service2' ? 'selected' : '' }}>service2</option>
                            <option value="service3" {{ $client->typeBesoin == 'service3' ? 'selected' : '' }}>service3</option>
                        </select>
                        @error('type-besoin')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="categorie-besoin" class="form-label">Categories de besoin</label>
                        <select name="categorie-besoin" id="status" class="form-select">
                            <option value="besoin1" {{ $client->categorieBesoin == 'besoin1' ? 'selected' : '' }}>Nettoyage</option>
                            <option value="besoin2" {{ $client->categorieBesoin == 'besoin2' ? 'selected' : '' }}>besoin 2</option>
                            <option value="besoin3" {{ $client->categorieBesoin == 'besoin3' ? 'selected' : '' }}>besoin 3</option>
                        </select>
                        @error('categorie-besoin')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    
                    <div class="col-md-6">
                        <label for="nature-service" class="form-label">Nature De Service</label>
                        <input type="text" name="nature-service" id="name" class="form-control" value="{{ $client->natureService }}">
                        @error('nature-service')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="marchandiz" class="form-label">Marchandiz</label>
                        <input type="text" name="marchandiz" id="name" class="form-control" value="{{ $client->marchandiz }}">
                        @error('marchandiz')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="col-md-6">
                        <label for="nom-commerciale" class="form-label">Nom De Commercial</label>
                        <input type="text" name="nom-commerciale" id="name" class="form-control" value="{{ $client->nomCommerciale }}">
                        @error('nom-commerciale')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="date-visite" class="form-label">Date Visite</label>
                        <input type="date" name="date-visite" id="name" class="form-control" value="{{ $client->dateVisite }}">
                        @error('date-visite')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="col-md-6">
                        <label for="type-cadence" class="form-label">Précisez la Type de cadence</label>
                        <select name="type-cadence" id="status" class="form-select">
                            <option value="besoin1" {{ $client->typeCadence == 'besoin1' ? 'selected' : '' }}>Ponctuelle</option>
                            <option value="besoin2" {{ $client->typeCadence == 'besoin2' ? 'selected' : '' }}>besoin 2</option>
                            <option value="besoin3" {{ $client->typeCadence == 'besoin3' ? 'selected' : '' }}>besoin 3</option>
                        </select>
                        @error('type-cadence')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="client-address" class="form-label">Address</label>
                        <input type="text" name="client-address" id="name" class="form-control" value="{{ $client->address }}">
                        @error('client-address')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
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