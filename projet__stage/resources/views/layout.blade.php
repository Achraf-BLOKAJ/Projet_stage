
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm sticky-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('clients.index') }}">
            <i class="fas fa-users me-2"></i>Clients
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="navbar-brand d-flex align-items-center" href="{{ route('commercials.index') }}">
                        <i class="fas fa-briefcase me-2"></i>Commercial
                    </a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand d-flex align-items-center" href="{{ route('techniciens.index') }}">
                        <i class="fas fa-hard-hat me-2"></i>Techniciens
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('localisation') }}">
                        <i class="fas fa-map-marker-alt me-2"></i>Localisation
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle p-3 d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-tools me-2"></i> <!-- Icône pour "Intervention" -->
                        Intervention
                    </a>
                    <ul class="dropdown-menu shadow-sm">
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#{{--{{ route('inter_EnCours') }}--}}">
                                <i class="fas fa-spinner me-2"></i> <!-- Icône pour "Intervention en cours" -->
                                Intervention en cours
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#{{--{{ route('inter_termine') }}--}}">
                                <i class="fas fa-check-circle me-2"></i> <!-- Icône pour "Intervention terminée" -->
                                Intervention terminée
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#{{--{{ route('inter_nonConfirmer') }}--}}">
                                <i class="fas fa-exclamation-triangle me-2"></i> <!-- Icône pour "Intervention non confirmée" -->
                                Intervention non confirmée
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            {{--<form class="d-flex">
                <div class="input-group">
                    <input class="form-control" type="search" placeholder="Rechercher" aria-label="Rechercher">
                    <button class="btn btn-outline-light" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>--}}
        </div>
        @auth
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth()->user()->name }}
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li class="nav-item">
                        <a class="dropdown-item" href="{{ route('logout') }}">Déconnexion</a>
                    </li>
                </ul>
            </div>
        @endauth 
    </div>
</nav>

    @yield('content')

    <!-- Bootstrap JS CDN (including Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>