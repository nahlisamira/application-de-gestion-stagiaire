@extends('adminlte::page')



@section('content')
<div class="container">
@include('layouts.alert')
<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="card my-5">
            <div class="card-header bg-blue">
                <div class="text-center font-weight ">
                    <h3>Modifier Stagiaires</h3>
                </div>
            </div>
            <div class="card-body">
                <form  action="{{route('employes.update',$employes->Cin)}}" method="POST" class="mt-3">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label for="Cin">Cin:</label>
                        <input type="text" class="form-control" name="Cin" placeholder="Cin"
                        value="{{old('Cin',$employes->Cin)}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="Nom">Nom:</label>
                        <input type="text" class="form-control" name="Nom" placeholder="Nom"
                        value="{{old('Nom',$employes->Nom)}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="Prénom">Prénom:</label>
                        <input type="text" class="form-control" name="Prénom" placeholder="Prénom"
                        value="{{old('Prénom',$employes->Prénom)}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="Département">Département:</label>
                        <input type="text" class="form-control" name="Département" placeholder="Département"
                        value="{{old('Département',$employes->Département)}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="Date_naissance">Date_naissance:</label>
                        <input type="date" class="form-control" name="Date_naissance" placeholder="Date_naissance"
                        value="{{old('Date_naissance',$employes->Date_naissance)}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="Téléphone">Téléphone:</label>
                        <input type="tel" class="form-control" name="Téléphone" placeholder="Téléphone"
                        value="{{old('Téléphone',$employes->Téléphone)}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="Etablissement">Etablissement:</label>
                        <input type="text" class="form-control" name="Etablissement" placeholder="Etablissement"
                        value="{{old('Etablissement',$employes->Etablissement)}}">
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
