
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
    







<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Services</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            {{-- <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
            </li> 

             @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login.show') }}">Se connecter</a>
                </li>
            @endguest --}}
            
            <li class="nav-item">
                <a class="nav-link" href="{{ route('clients.index') }}">Clients</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/serviceClient">Service Client</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('commercials.index') }}">Commercial</a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="{{ route('techniciens.index') }}">Techniciens</a>
            </li>




            <li class="nav-item">
                <form action="{{ route('intervention') }}" method="GET" class="form-inline">
                    <div class="d-flex align-items-center">
                        <select name="intervention" id="interventionSelect" class="form-select custom-select bg-light" onchange="this.form.submit()">
                            <option value="">Intervention</option>
                            <option value="en_cour" {{ request('intervention') == 'en-cour' ? 'selected' : '' }}>Intervention en Cours</option>
                            <option value="non_confirmer" {{ request('intervention') == 'non-confirmer' ? 'selected' : '' }}>Intervention Non Confirmée</option>
                            <option value="terminer" {{ request('intervention') == 'terminer' ? 'selected' : '' }}>Intervention Terminée</option>
                        </select>
                    </div>
                </form>
            </li>
            
        </ul>

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
    @yield('interventionContent')

    <!-- Bootstrap JS CDN (including Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>