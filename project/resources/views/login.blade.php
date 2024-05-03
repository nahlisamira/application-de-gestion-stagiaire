@extends('layouts.app')
@section('title', 'login')

@section('content')
<style>
    
    /* Centrer le formulaire et les éléments à gauche */
    .container {
        width: 1000px; /* Largeur du conteneur */
        margin: 50px auto; /* Centrer le formulaire */
        margin: 50px auto; /* Centrer le formulaire */
        padding: 30px; /* Plus d'espacement à l'intérieur de la carte */
        background-color: white;
        border-radius:10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        text-align: left; /* Aligner tout le contenu à gauche */
        direction: ltr;
    }
    
    /* Styling les éléments de formulaire */
    .form-control {
        margin-bottom: 0px; /* Espacement entre les champs */
        border-radius: 1px;
        border: 1px solid #ced4da;
        text-align: left; /* Aligner le texte à gauche */
        width: 100%; /* Utiliser toute la largeur du conteneur */

    }
    
    .form-label {
        display: block; /* Les labels prennent toute la largeur */
        margin-bottom: 15px; /* Espacement entre labels et champs */
        text-align: left; /* Aligner les labels à gauche */
        font-weight:bold;
    }
    
    /* Aligner le bouton à gauche */
    .btn-align-left {
        display: block; /* Le bouton prend toute la largeur */
        text-align: left; /* Aligner le bouton à gauche */
        margin-left: 0; /* Aucune marge à gauche */
    }
    
    /* Intégrer les icônes à gauche des champs */
    .input-group .input-group-text {
        border-right: 0; /* Pas de bordure à droite */
        background-color: white; /* Fond blanc */
        color: #353739; /* Couleur des icônes */
        font-size: 1.0rem; /* Taille des icônes */
        border-radius: 1px;
        border: 1px solid #ced4da;
    
    }
    
    .input-group .form-control {
        border-left: 0; /* Pas de bordure à gauche */
    }
    .check {
    display: flex; /* Utiliser un affichage flex pour aligner les éléments */
    align-items: center; /* Aligner verticalement la case à cocher et l'étiquette */
}

/* Case à cocher alignée à gauche */
.form-check-input {
    margin-right: 5px; /* Ajouter un espace à droite de la case à cocher */
}

/* Étiquette alignée à gauche */
.form-check-label {
    margin-left: 40px; /* Pas de marge à gauche */
}

    </style>

<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-md-8">
            <div class="card">
                <!-- Titre "LOG IN" avec une icône utilisateur -->
                <div class="text-center mt-4" style="display: flex; flex-direction: column; align-items: center;">
                    <i class="fas fa-user" style="font-size: 2rem;"></i>
                    <span style="margin-top: 5px;">LOG IN</span>
                </div>

                <div class="card-body">
                    <form method="POST" action="">
                        @csrf
                        <div class="row mb-2">
                            <label for="email" class="col-md-4 col-form-label form-label text-md-end">{{ __('E-mail Address') }}</label>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 form-check">
                            <div class="col-md-6 offset-md-4">
                                <div class="check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                    <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-align-left">
                                    Submit
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
