@extends('adminlte::page')

@section('plugins.Datatables', true)


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="card my-5">
                <div class="card-header bg-blue">
                    <div class="text-center font-weight-bold text-uppercase">
                        <h3>Stagiaires</h3>
                    </div>
                </div>
                <div class="card-body">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>sujet</th>
                                <th>date_debut</th>
                                <th>date_fin</th>
                                <th>service</th>
                                <th>encadrant</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($affecter as $key => $affecter)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $affecter->sujet }}</td>
                                <td>{{ $affecter->date_debut}}</td>
                                <td>{{ $affecter->date_fin}}</td>
                                <td>{{ $affecter->service }}</td>
                                <td>{{ $affecter->encadrant }}</td>
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

