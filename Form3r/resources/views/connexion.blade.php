
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form3R - Connexion</title>
<!-- Bootstrap 5.2 -->    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- CSS Custom -->  
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
<!-- Fonts -->   
    <link rel="stylesheet" href="{{ asset('css/styleCO.css') }}">
</head>
<body>
    <div class="container-fluid  h-100 accueilText g-0" id="videoFrame">
        <video id="videoBG" autoplay muted loop src="{{ asset('img/bgFleuve.mp4') }}" class="d-none d-lg-block"></video>
        <div class="wrapper">
            <div class="overlay"></div>
            <div class="row text-center">
                <div class="col-12">
                    <div class="cloudDiv">
                        <div id="cloud">
                            <img src="/img/logo_v3r_n_et_blanc.jpg" class="logoAccueil">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="formDiv">
                    <form method="POST" id="FormUsager" action="{{ route('usagers.login') }}" onsubmit="return requiredConnexion()">
                        @csrf
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                <div class="alertConnexion m-auto mb-3"><i class="fa-solid fa-triangle-exclamation"></i> {{$error}}</div>
                                @endforeach
                            @endif
                        <div id="alertMatricule" class="alert alert-primary alertPosition d-none"></div>
                        <div class="form-floating inputWidth m-auto text-center">
                            <input type="text" class="form-control inputWidth m-auto" name="inputMatricule" id="inputMatricule" placeholder="#">
                            <label for="inputMatricule" id="labelMatricule" class="px-4">Votre numéro d'employé</label>
                        </div>
                        <div id="alertPassword" class="alert alert-primary alertPosition d-none"></div>
                        <div class="form-floating input-group m-auto text-center inputWidth">
                            <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Votre mot de passe">
                                <span class="input-group-text coBorder" onclick="passwordShowHide();">
                                    <i class="fa-solid fa-eye fa-lg" id="showEye"></i>
                                    <i class="fa-solid fa-eye-slash d-none fa-lg" id="hideEye"></i>
                                </span>
                            <label for="inputPassword" id="labelPassword" class="px-4">Votre mot de passe</label>
                        </div>
                        <h5 class="alerteMDP w-75 m-auto"><i class="fa-solid fa-user-shield"></i> Les administrateurs de l'application ne vous demanderons <span class="dramaLine">JAMAIS</span> votre mot de passe!<h5>
                        <button class="btn btn-co hover" id="submitConnexion"><h3>Connexion <i class="fa-solid fa-door-closed hoverHide"></i><i class="fa-solid fa-door-open hoverShow"></i></h3></button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Bootstrap 5.2 --> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<!-- Icons -->
    <script src="https://kit.fontawesome.com/59d2871224.js" crossorigin="anonymous"></script>
<!-- Javascript Custom -->   
    <script src="{{ asset('js/scriptCO.js') }}"></script>
</body>
</html>