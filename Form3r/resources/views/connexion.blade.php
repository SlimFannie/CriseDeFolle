
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
    <div class="container-fluid h-100 g-0 d-flex flex-column justify-content-center align-items-center">
        <div class="row g-0">
            <div class="col-12 g-0">
                <h1>Form3R</h1>
            </div>
        </div>
        <div class="row text-center g-0">
            <div class="col-12 g-0">
                <form method="POST" id="FormUsager" action="{{ route('usagers.login') }}">
                    @csrf
                    <div>
                        @if ($errors->any())
                        <div class="alert alert-warning" role="alert">
                            <h5>{{$errors->first()}}</h5>
                        </div>
                        @endif
                    </div>
                    <div class="form-floating mx-auto inputWidth text-center">
                        <input type="text" class="form-control inputWidth m-auto" name="matricule" id="matricule" placeholder="#">
                        <label for="matricule" id="labelMatricule" class="px-4">Votre numéro d'employé</label>
                    </div>
                    <div class="form-floating mx-auto input-group text-center inputWidth">
                        <input type="password" name="motdepasse" id="motdepasse" class="form-control" placeholder="Votre mot de passe">
                            <span class="input-group-text coBorder d-flex justify-content-center p-0" onclick="passwordShowHide();">
                                <i class="fa-solid fa-eye fa-lg" id="showEye"></i>
                                <i class="fa-solid fa-eye-slash d-none fa-lg" id="hideEye"></i>
                            </span>
                        <label for="motdepasse" id="labelPassword" class="px-4">Votre mot de passe</label>
                    </div>
                    <h5 class="alerteMDP"><i class="fa-solid fa-user-shield"></i> Les administrateurs de l'application ne vous demanderons <span class="dramaLine">JAMAIS</span> votre mot de passe!<h5>
                    <button class="btn hover" id="submitConnexion"><h3>Connexion <i class="fa-solid fa-door-closed hoverHide"></i><i class="fa-solid fa-door-open hoverShow"></i></h3></button>
                </form>
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