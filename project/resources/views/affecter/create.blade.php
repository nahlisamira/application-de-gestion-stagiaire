@extends('adminlte::page')




@section('content')
<div class="container">

<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="card my-5">
            <div class="card-header bg-blue">
                <div class="text-center font-weight ">
                    <h3>Information d'Affectation</h3>
                </div>
            </div>
            <div class="card-body">
                <form  action="{{route('affecter.index')}}" method="POST" class="mt-3">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="sujet">Titre de sujet:</label>
                        <input type="text" class="form-control" name="sujet" placeholder="sujet"
                        value="{{old('sujet')}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="date_debut">Date debut:</label>
                        <input type="date" class="form-control" name="date_debut" placeholder="date_debut"
                        value="{{old('date_debut')}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="date_fin">Date fin:</label>
                        <input type="date" class="form-control" name="date_fin" placeholder="date_fin"
                        value="{{old('date_fin')}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="service">Service:</label>
                        <input type="text" class="form-control" name="service" placeholder="service"
                        value="{{old('service')}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="enacdrant">Enacdrant:</label>
                        <input type="text" class="form-control" name="enacdrant" placeholder="enacdrant"
                        value="{{old('enacdrant')}}">
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
