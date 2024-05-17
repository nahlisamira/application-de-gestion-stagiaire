@extends('adminlte::page')

@section('title')
Attestation de Stage
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card p-3 my-5">
                
                <!-- Section card-header -->
                <div class="card-header text-center d-flex justify-content-between align-items-center">
                    <div class="header-logo">
                        <img src="https://th.bing.com/th/id/OIP.DzkYMeawDBUpCikZ8_WrDwHaIg?rs=1&pid=ImgDetMain" alt="Logo OCP" style="height: 50px; width: 50px;">
                        <p class="lead" style="font-size: 14px;">Royaume Maroc <br> Office Chérifien des Phosphates</p>

                    </div>
                    <h3 style="color:black">Attestation de stage</h3>
                </div>

                <!-- Contenu de la carte -->
                <div class="card-body">
                    <p class="lead">
                        Le Gouverneur de l'Office Chérifien des Phosphates atteste que Mr/Mlle <br>
                        <b>{{$employes->Prénom}} {{$employes->Nom}}</b>, titulaire de la carte d'identité nationale n° <b>{{$employes->Cin}}</b> a effectué <br>
                        un stage au sein de notre entreprise, l'Office Chérifien des Phosphates (OCP), dans le département de <b>{{$employes->Département}}</b> 
                        , durant la période <b>08/04/2024</b> au <b>31/05/2024</b>.
                    </p>
                    <p class="lead">
                        Cette attestation est délivrée pour confirmer l'accomplissement de son stage
                        avec succès et peut servir de référence pour ses futurs engagements professionnels.
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
