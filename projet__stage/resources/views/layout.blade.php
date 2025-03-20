
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
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            

            <a class="navbar-brand" href="{{ route('clients.index') }}">Clients</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand" href="{{ route('commercials.index') }}">Commercial</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="{{ route('techniciens.index') }}">techniciens</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- <li class="nav-item dropdown" >
                        <a class="nav-link dropdown-toggle" p-3 href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                             Intervention
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#{{--{{ route('inter_EnCours') }} --}}">Intervention en cours</a></li>
                            <li><a class="dropdown-item" href="#{{--{{ route('inter_termine') }}--}}">Intervention terminer</a></li>
                            <li><a class="dropdown-item" href="{{--{{ route('inter_nonConfirmer')  }}--}}">Intervention non confirmer</a></li>
                            
                        </ul>
                    </li> -->


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

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                 <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('localisation') }}">Localisation</a>
                    </li>
                </ul>
            
                    
                </ul> 
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- Bootstrap JS CDN (including Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>