@extends('adminlte::page')

@section('plugins.Datatables',true)

@section('title')

Liste des Stagiraires | laravel Employe app

@endsection



@section('content')
<div class="container">
<div class="row">
    <div class="col-md-40 mx-auto">
        <div class="card my-5">
            <div class="card-header bg-blue">
                <div class="text-center font-weight text-uppercase">
                    <h3>Stagiaires</h3>
                </div>
            </div>
            <div class="card-body">
                <table id="myTable" class=" table table-bordered table-stripped">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Cin</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Département</th>
                            <th>Date_naissance</th>
                            <th>Téléphone</th>
                            <th>Etablissement</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employes as $key => $employe)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$employe->Cin}}</td>
                            <td>{{$employe->Nom}}</td>
                            <td>{{$employe->Prénom}}</td>
                            <td>{{$employe->Département}}</td>
                            <td>{{$employe->Date_naissance}}</td>
                            <td>{{$employe->Téléphone}}</td>
                            <td>{{$employe->Etablissement}}</td>
                            <td style="width: 150px; height: 40px;">
                                <div class="d-flex justify-content-center align-items-center">
                                    <a href="{{ Route('employes.show', $employe->Cin) }}" class="btn btn-sm btn-primary mx-1">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ Route('employes.edit', $employe->Cin) }}" class="btn btn-sm btn-warning mx-1">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ Route('employes.destroy', $employe->Cin) }}" method="post" style="margin-left: 5px;">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

@section('js')
<script>
    $(document).ready(function(){
        $('#myTable').DataTable({
            dom : 'Bfrtip',
            buttons : [
                'copy','excel','csv','pdf','print','colvis'
            ]
        });
    });
</script>
    
@endsection