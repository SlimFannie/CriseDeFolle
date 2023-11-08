@extends('layout')

@section('titre', 'Accident de travail')

@section('contenu')
<div class="container-fluid g-0">
    <div class="row g-0">
        <div class="col-12 g-0">
            <h2>Déclarer un accident de travail</h2>
            <form method="POST" action="{{ route('store.accident', $username) }}">
                @csrf
                <div>
                    @if ($errors->any())
                    <div class="alert alert-warning" role="alert">
                        <h5>{{$errors->first()}}</h5>
                    </div>
                    @endif
                </div>
                <h4>Identification</h4>
                <p><span class="underline">Nom complet:</span> {{Session::get('user.prenom')}} {{Session::get('user.nom')}}</p>
                <p><span class="underline">Numéro d'employé:</span> {{Session::get('user.mwefatricule')}}</p>
                <!-- Bouton modal identifiant inexacte -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Ces identifiants sont inexactes?  
                </button>
                <!---->
                <div class="form-floating text-center">
                    <input type="text" class="form-control" name="fonction" id="fonction" placeholder="Menuisier" value="{{ old('fonction') }}">
                    <label for="fonction" id="labelFonction" class="px-4">Fonction lors de l'accident</label>
                </div>

                <h4>Description de l'accident</h4>
                <div class="form-floating text-center">
                    <input type="datetime-local" class="form-control" name="dateHeure" id="dateHeure" value="{{ old('dateHeure') }}">
                    <label for="dateHeure" id="labelDateHeure" class="px-4">Date et heure de l'accident</label>
                </div>
                <div class="form-floating text-center">
                    <input type="text" class="form-control" name="endroit" id="endroit" value="{{ old('endroit') }}" placeholder="Dans l'entrée de l'hôtel de ville.">
                    <label for="endroit" id="labelEndroit" class="px-4">Endroit où l'accident s'est produit</label>
                </div>
                <div class="form-floating text-center">
                    <input type="text" class="form-control" name="secteur" id="secteur" value="{{ old('secteur') }}" placeholder="Secteur">
                    <label for="secteur" id="labelSecteur" class="px-4">Secteur d'activité</label>
                </div>
                <div class="input-group text-center">
                    <span class="input-group-text">
                        <label for="temoins" id="labelTemoins" class="px-4">Témoins(s)</label>
                        <input type="text" class="form-control" name="temoins1" id="temoin1" placeholder="Témoin 1" value="{{ old('temoins') }}">
                        <input type="text" class="form-control" name="temoins2" id="temoin2" placeholder="Témoin 2" value="{{ old('temoins') }}">    
                    </span>
                </div>
                <div class="container-fluid g-0">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <h4>Nature et site de la blessure</h4>
                            <p>Cochez, s'il y a lieu, le côté droit ou le côté gauche.</p>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <div class="input-group" name="latete">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="tete" name="tete" value="tete">
                                            <label class="form-check-label" for="tete">Tête, visage, yeux, oreille</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="directionGauche" name="tete" value="gauche">
                                            <label class="form-check-label" for="directionGauche">Gauche</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="directionDroite" name="tete" value="droite">
                                            <label class="form-check-label" for="directionDroite">Droite</label>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="torse" name="torse" value="1">
                                        <label class="form-check-label" for="torse">Torse</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="poumon" name="poumon" value="1">
                                        <label class="form-check-label" for="poumon">Poumon</label>
                                    </div>
                                    <div class="input-group" name="lesbras">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="bras" name="bras" value="1">
                                            <label class="form-check-label" for="bras">Bras, épaule, coude</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="directionGauche" name="bras" value="1">
                                            <label class="form-check-label" for="directionGauche">Gauche</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="directionDroite" name="bras" value="1">
                                            <label class="form-check-label" for="directionDroite">Droite</label>
                                        </div>
                                    </span>
                                </div>
                                <div class="input-group" name="lesmains">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="main" name="main" value="1">
                                        <label class="form-check-label" for="main">Poignet, main, doigt</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="directionGauche" name="main" value="1">
                                        <label class="form-check-label" for="directionGauche">Gauche</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="directionDroite" name="main" value="1">
                                        <label class="form-check-label" for="directionDroite">Droite</label>
                                    </div>
                                </div>
                                <div class="input-group" name="ledos">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="dos" name="dos" value="1">
                                        <label class="form-check-label" for="main">Dos</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="haut" name="dos" value="1">
                                        <label class="form-check-label" for="haut">Haut</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="bas" name="dos" value="1">
                                        <label class="form-check-label" for="directionDroite">Bas</label>
                                    </div>
                                </div>
                                <div class="input-group" name="leshanches">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="hanche" name="hanche" value="1">
                                        <label class="form-check-label" for="hanche">Hanche</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="directionGauche" name="hanche" value="1">
                                        <label class="form-check-label" for="directionGauche">Gauche</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="directionDroite" name="hanche" value="1">
                                        <label class="form-check-label" for="directionDroite">Droite</label>
                                    </div>
                                </div>
                                <div class="input-group" name="lesjambes">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="jambe" name="jambe" value="1">
                                        <label class="form-check-label" for="jambe">Jambe, genou</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="directionGauche" name="jambe" value="1">
                                        <label class="form-check-label" for="directionGauche">Gauche</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="directionDroite" name="jambe" value="1">
                                        <label class="form-check-label" for="directionDroite">Droite</label>
                                    </div>
                                </div>
                                <div class="input-group" name="autre">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="autre" name="autre" value="1">
                                        <label class="form-check-label" for="autre">Autre</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-input" type="radio" id="directionGauche" name="jambe" value="1">
                                        <label class="form-check-label" for="directionGauche">Gauche</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <h4>Description de la blessure (à cocher)</h4>
                            <div class="input-group" name="descriptionBlessure">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="brulure" name="brulure" value="1">
                                    <label class="form-check-label" for="brulure">Brûlure, engelure</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="commotion" name="commotion" value="1">
                                    <label class="form-check-label" for="commotion">Commotion cérébrale</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="corpsEtranger" name="corpsEtranger" value="1">
                                    <label class="form-check-label" for="corpsEtranger">Corps étranger</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="coupure" name="coupure" value="1">
                                    <label class="form-check-label" for="coupure">Coupure, lacération, déchirure</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="dos" name="dos" value="1">
                                    <label class="form-check-label" for="dos">Douleur au dos</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="egratignure" name="egratignure" value="1">
                                    <label class="form-check-label" for="egratignure">Égratignure, élongation, contusion, foulure, luxation</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="fracture" name="fracture" value="1">
                                    <label class="form-check-label" for="fracture">Fracture, amputation</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="irritation" name="irritation" value="1">
                                    <label class="form-check-label" for="irritation">Irritation, infection</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inhalation" name="inhalation" value="1">
                                    <label class="form-check-label" for="inhalation">Inhalation</label>
                                </div>
                                <div class="form-check input-group">
                                    <input class="form-check-input" type="checkbox" id="autre" name="autre" value="1">
                                    <label class="form-check-label" for="autre">Autre</label>
                                    <input class="form-control" type="text" id="autreText" name="autreText" placeholder="Décrivez">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h4>Violence (à cocher)</h4>
                    <div class="form-check input-group" name="violence">
                        <input class="form-check-input" type="checkbox" id="physique" name="physique" value="1">
                        <label class="form-check-label" for="physique">Physique</label>
                        <input class="form-check-input" type="checkbox" id="verbale" name="verbale" value="1">
                        <label class="form-check-label" for="verbale">Verbale</label>
                    </div>

                <h4>Décrivez la tâcher effectuée et comment s'est produit la blessure.</h4>
                <input class="form-control" type="textarea" id="histoire" name="histoire">
                <div class="form-check input-group">
                    <input class="form-check-input" type="checkbox" id="secouriste" name="secouriste" value="1">
                    <label class="form-check-label" for="autre">Secouriste</label>
                    <input class="form-control" type="text" id="secouristeText" name="secouristeText" placeholder="Nom">
                </div>

                <h4>Détails sur la durée de l'absence</h4>
                <div class="form-check input-group" name="absence">
                    <input class="form-check-input" type="checkbox" id="aucune" name="aucune" value="1">
                    <label class="form-check-label" for="aucune">Accident de nécessitant aucune absence</label>
                    <input class="form-check-input" type="checkbox" id="consultation" name="consultation" value="1">
                    <label class="form-check-label" for="consultation">Accident nécessitant une consultation médicale</label>
                </div>

                <h4>Qui était votre supérieur au moment de l'accident?</h4>
                <select class="form-select" name="superieur" id="superieur">
                    <option selected>Choisissez...</option>
                    @if (count((array)$superieurs))
                        @foreach ($superieurs as $superieur)
                        <option value="{{$superieur->matricule}}">{{$superieur->prenom}} {{$superieur->nom}}</option>
                        @endforeach
                    @else
                        <option>Erreur, veuillez contacter un administrateur.</option>
                    @endif
                </select>
                <button type="submit" class="btn btn-primary">Envoyer le formulaire</button>
                <!-- Modal identifiant inexacte -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4>Ces identifiants sont inexactes?</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p id="exampleModalLabel">Veuillez contacter un administrateur afin de procéder à la mise à jour de vos identifiants.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection