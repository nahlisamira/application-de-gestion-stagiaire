@extends('adminlte::page')

@section('title')
Home | laravel Employe app
@endsection


@section('content')
<div class="container">
    <div class="row my-5">
        <div class="col-md-4">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ \App\Models\Employes::count() }}</h3>
                    <p>Stagiaires</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                <a href="{{ url('admin/employes') }}" class="small-box-footer text-center text-white">
                    More info
                    <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- Card pour les encadrants -->
        <div class="col-md-4">
            <div class="small-box bg-success"> <!-- Vous pouvez choisir une autre couleur -->
                <div class="inner">
                    <h3>{{ \App\Models\Encadrants::count() }}</h3>
                    <p>Encadrants</p>
                </div>
                <div class="icon">
                    <i class="fas fa-chalkboard-teacher"></i> <!-- Icône pour les encadrants -->
                </div>
                <a href="{{ url('admin/encadrants') }}" class="small-box-footer text-center text-white">
                    More info
                    <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- Card pour les absences -->
        <div class="col-md-4">
            <div class="small-box bg-primary"> <!-- Vous pouvez choisir une autre couleur -->
                <div class="inner">
                    <h3>{{ \App\Models\Absence::count() }}</h3>
                    <p>Absences</p>
                </div>
                <div class="icon">
                    <i class="fas fa-calendar-times"></i> <!-- Icône pour les absences -->
                </div>
                <a href="{{ url('admin/absences') }}" class="small-box-footer text-center text-white">
                    More info
                    <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection