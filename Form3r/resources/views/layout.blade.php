<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titre')</title>
<!-- Bootstrap 5.2 -->    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- CSS Custom -->    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
<!-- Fonts -->    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container-fluid g-0">
        <div class="row p-lg-3 bg-light g-0">
            <div class="col-2 g-0 d-flex align-items-center">
                <img src="{{ asset('img/logo_v3r_sans_texte.jpg') }}" class="logoNav pe-2">
                <h2 class="blackText">Form3R</h2>
            </div>
            <div class="col-4 g-0 d-flex align-items-center">
                <a href="{{ route('usagers.logout') }}">Logout</a>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Remplir un formulaire
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('formulaires.accident', Session::get('username')) }}">Accident de travail</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row g-0">
            <div class="col-12 g-0">
                @yield('contenu')
            </div>
        </div>
    </div>

<!-- Bootstrap 5.2 -->   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<!-- Icons -->   
    <script src="https://kit.fontawesome.com/59d2871224.js" crossorigin="anonymous"></script>
<!-- Javascript Custom -->   
    <script src="{{ asset('js/script.js') }}" crossorigin="anonymous"></script>
</body>
</html>