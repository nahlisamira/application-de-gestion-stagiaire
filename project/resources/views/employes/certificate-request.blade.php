@extends('adminlte::page')

@section('title')
Autorisation de Sortir
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card p-3 my-5">
                
                <!-- Section card-header -->
                <div class="card-header text-center d-flex justify-content-between align-items-center text-center">
                    <h3 style="color:black ">Autorisation</h3>
                </div>

                <!-- Contenu de la carte -->
                <div class="card-body">
                    <p class="lead">
                        Je soussigné(e) <br>
                        <b>________</b>, agissant en tant que une parrain au service <b>_______</b>, autorise par la présente <b>{{$employes->Prénom}} {{$employes->Nom}}</b>,à sortir de pour la période suivante <b>{{\Carbon\Carbon::today()->toDateString()}}</b> à <b>{{\Carbon\Carbon::now()->totimeString()}}</b>.
                        <br>La raison de cette sortie est la suivante <b>_________</b> Cette autorisation est valable pour la période spécifiée ci-dessus. La personne autorisée est priée de respecter les règles de sécurité applicables et de se <br>
                        conformer aux instructions de l'établissement ou de l'entreprise. <br>
                        Signature de la personne autorisant <b>____________</b>
                    </p>
                    
                    <!-- Signature à la fin de la page -->
                    <div class="signature" style="text-align: right; margin-top: 50px;">
                        <p class="m-5">
                            __________<br>
                            Signature
                        </p>
                        <div class="my-4">
                            <a href="#"
                            onclick="document.getElementById('printLink').style.display = 'none';
                            setTimeout(function(){
                                document.getElementById('printLink').style.display = 'inline-block';
                            },2000);
                            window.print();"
                            class="btn btn-sm btn-primary" id="printLink">
                                <i class="fas fa-print"></i> Imprimer
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
