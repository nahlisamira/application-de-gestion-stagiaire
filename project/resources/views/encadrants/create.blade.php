@extends('adminlte::page')




@section('content')
<div class="container">
    @include('layouts.alert')
<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="card my-5">
            <div class="card-header bg-blue">
                <div class="text-center font-weight ">
                    <h3>Ajouter Nouveaux Encadrants</h3>
                </div>
            </div>
            <div class="card-body">
                <form  action="{{route('encadrants.store')}}" method="POST" class="mt-3">
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
                        <label for="Téléphone">Téléphone:</label>
                        <input type="tel" class="form-control" name="Téléphone" placeholder="Téléphone"
                        value="{{old('Téléphone')}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="E_mail">E_mail:</label>
                        <input type="email" class="form-control" name="E_mail" placeholder="E_mail"
                        value="{{old('E_mail')}}">
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
