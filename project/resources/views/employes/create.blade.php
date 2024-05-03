@extends('adminlte::page')



@section('title')

Liste des Stagiraires | laravel Employe app

@endsection



@section('content')
<div class="container">
<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="card my-5">
            <div class="card-header bg-blue">
                <div class="text-center font-weight ">
                    <h3>Ajouter Nouveaux Stagiaires</h3>
                </div>
            </div>
            <div class="card-body">
                <form  action="{{route('employes.store')}}" method="POST" class="mt-3">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="Cin">Cin:</label>
                        <input type="text" class="form-control" name="Cin" placeholder="Cin"
                        value="{{old('Cin')}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="Nom">Nom:</label>
                        <input type="text" class="form-control" name="Nom" placeholder="Nom"
                        value="{{old('Nom')}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="Prénom">Prénom:</label>
                        <input type="text" class="form-control" name="Prénom" placeholder="Prénom"
                        value="{{old('Prénom')}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="Département">Département:</label>
                        <input type="text" class="form-control" name="Département" placeholder="Département"
                        value="{{old('Département')}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="Date_naissance">Date_naissance:</label>
                        <input type="date" class="form-control" name="Date_naissance" placeholder="Date_naissance"
                        value="{{old('Date_naissance')}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="Téléphone">Téléphone:</label>
                        <input type="tel" class="form-control" name="Téléphone" placeholder="Téléphone"
                        value="{{old('Téléphone')}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="Etablissement">Etablissement:</label>
                        <input type="text" class="form-control" name="Etablissement" placeholder="Etablissement"
                        value="{{old('Etablissement')}}">
                    </div>
                    <div class="form-group">
                        <button type="Submit" class="btn btn-primary">
                            Enregistrer
                        </button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>
</div>
@endsection
