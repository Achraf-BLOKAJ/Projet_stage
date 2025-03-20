<div class="relative py-4 px-6">
    <nav>
        <a href="/client">Clients</a>
        <a href="/service">Service client</a>
        <a href="/commercial">Commercial</a>
        <a href="/technicien">Technicien</a>
        <a href="/inter_EnCours">Intervention en cours</a>
        <a href="/inter_termine">Intervention terminer</a>
        <a href="/inter_nonConfirmer">Intervention en cours</a>



    </nav>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Example</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/client">Clients</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/service">Service client</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/commercial">Commercial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/technicien">Technicien</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                             Intervention
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/inter_EnCours">Intervention en cours</a></li>
                            <li><a class="dropdown-item" href="/inter_termine">Intervention terminer</a></li>
                            <li><a class="dropdown-item" href="/inter_nonConfirmer">Intervention non confirmer</a></li>
                            
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    

    <!-- Bootstrap JS CDN (including Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>