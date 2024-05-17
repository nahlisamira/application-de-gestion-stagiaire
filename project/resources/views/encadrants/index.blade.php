@extends('adminlte::page')

@section('plugins.Datatables', true)

@section('content')
<style>
    .swal2-button {
        font-size: 10px; /* Ajustez la taille de la police selon vos besoins */
        padding: 5px 10px; /* Ajustez les dimensions du padding */
        border-radius: 3px; /* Optionnel: Ajustez le rayon de bordure */
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="card my-5">
                <div class="card-header bg-blue">
                    <div class="text-center font-weight-bold">
                        <h3> Liste des Encadrants</h3>
                    </div>
                </div>
                <div class="card-body">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Cin</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Téléphone</th>
                                <th>E_mail</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($encadrants as $key => $encadrant)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $encadrant->Cin }}</td>
                                <td>{{ $encadrant->Nom }}</td>
                                <td>{{ $encadrant->Prénom }}</td>
                                <td>{{ $encadrant->Téléphone}}</td>
                                <td>{{ $encadrant->E_mail }}</td>
                                <td style="width: 150px;">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <a href="{{ route('encadrants.edit', $encadrant->id) }}" class="btn btn-sm btn-warning mx-1">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form id="deleteForm_{{ $encadrant->id }}" action="{{ route('encadrants.destroy', $encadrant->id) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="button" onclick="confirmDelete('{{ $encadrant->id }}')" class="btn btn-sm btn-danger mx-1">
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
    $(document).ready(function() {
        $('#myTable').DataTable({
            dom: 'Bfrtip',
            buttons: ['copy', 'excel', 'csv', 'pdf', 'print', 'colvis']
        });
    });

    function confirmDelete(cin) {
        Swal.fire({
            position:"center",
            title: "Êtes-vous sûr?",
            text: "Cette action ne peut pas être annulée!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Oui, supprimez-le!"
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById(`deleteForm_${cin}`).submit();
            }
        });
    }
</script>
    
<script>
    @if(session()->has('success'))
    Swal.fire({
        position: "center",
        icon: "success",
        title: "{{ session()->get('success') }}",
        showConfirmButton: false,
        timer: 2500
    });
    @endif
</script>
    
@endsection

