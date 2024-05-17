@extends('adminlte::page')

@section('plugins.Datatables', true)

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="card my-5">
                <div class="card-header bg-blue">
                    <div class="text-center font-weight-bold ">
                        <h3>Liste d'absence</h3>
                    </div>
                </div>
                <div class="card-body">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Cin</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>date_debut</th>
                                <th>date_fin</th>
                                <th>justification</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($absences as $key => $absence)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $absence->Nom }}</td>
                                <td>{{ $absence->Prénom }}</td>
                                <td>{{ $absence->date_debut}}</td>
                                <td>{{ $absence->date_fin }}</td>
                                <td>{{ $absence->justification }}</td>
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
