@extends('layout')

@section('titre', 'Form3R')

@section('contenu')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2>Yo {{Session::get('user.prenom')}} {{Session::get('user.nom')}}</h2>
            <h5>Voici tes formulaires de marde</h5>
            <ul>
                @if(count((array)$formulaires))
                    @foreach($formulaires as $formulaire)
                        <li>{{$formulaire->titre}}</li>
                    @endforeach
                @else
                    <p>Vous n'avez pas de formulaires.</p>
                @endif
            </ul>
        </div>
    </div>
</div>
@endsection