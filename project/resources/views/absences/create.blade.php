@extends('adminlte::page')




@section('content')
<div class="container">
    @include('layouts.alert')
<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="card my-5">
            <div class="card-header bg-blue">
                <div class="text-center font-weight ">
                    <h3>Marquer l'absences</h3>
                </div>
            </div>
            <div class="card-body">
                <form  action="{{route('absences.store')}}" method="POST" class="mt-3">
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
                        <label for="date_debut">date_debut:</label>
                        <input type="date" class="form-control" name="date_debut" placeholder="date_debut"
                        value="{{old('date_debut')}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="date_fin">date_fin:</label>
                        <input type="date" class="form-control" name="date_fin" placeholder="date_fin"
                        value="{{old('date_fin')}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="justification">justification:</label>
                        <input type="justification" class="form-control" name="justification" placeholder="justification"
                        value="{{old('justification')}}">
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
