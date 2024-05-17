@extends('adminlte::page')






@section('content')
<div class="container">
    @include('layouts.alert')
<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="card my-5">
            <div class="card-header bg-blue">
                <div class="text-center font-weight ">
                    <h3>{{$employes->Nom}} {{ $employes->Prénom }}</h3>
                </div>
            </div>
            <div class=" mt-2 text-center font-weight ">
                <a href="{{route('vacation.request',$employes->Cin)}}" class="btn btn-outline-dark">
                    ATTESTATION DE STAGE
                </a>
                <a href="{{route('certificate.request',$employes->Cin)}}" class="btn btn-outline-danger">
                    AUTORISATION DE SORTIR
                </a>
            </div>
            <div class="card-body">
                
                    <div class="form-group mb-3">
                        <label for="Cin">Cin:</label>
                        <input type="text" disabled class="form-control rounded-0" name="Cin" placeholder="Cin"
                        value="{{$employes->Cin}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="Nom">Nom:</label>
                        <input type="text" disabled class="form-control rounded-0" name="Nom" placeholder="Nom"
                        value="{{$employes->Nom}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="Prénom">Prénom:</label>
                        <input type="text" disabled class="form-control rounded-0" name="Prénom" placeholder="Prénom"
                        value="{{$employes->Prénom}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="Département">Département:</label>
                        <input type="text" disabled class="form-control rounded-0" name="Département" placeholder="Département"
                        value="{{$employes->Département}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="Date_naissance">Date_naissance:</label>
                        <input type="date" disabled class="form-control rounded-0" name="Date_naissance" placeholder="Date_naissance"
                        value="{{$employes->Date_naissance}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="Téléphone">Téléphone:</label>
                        <input type="tel" disabled class="form-control rounded-0" name="Téléphone" placeholder="Téléphone"
                        value="{{$employes->Téléphone}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="Etablissement">Etablissement:</label>
                        <input type="text" disabled class="form-control rounded-0" name="Etablissement" placeholder="Etablissement"
                        value="{{$employes->Etablissement}}">
                    </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
