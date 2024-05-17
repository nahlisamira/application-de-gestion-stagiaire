@extends('adminlte::page')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Calendrier</h3>
        </div>
        <div class="card-body">
            <div id="calendar"></div>
        </div>
    </div>
@endsection

@push('js')
    <!-- Inclure les fichiers FullCalendar -->
    <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css' rel='stylesheet' />
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js'></script>

    <script>
        $(document).ready(function() {
            // Initialiser FullCalendar
            $('#calendar').fullCalendar({
                // Options du calendrier
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,basicWeek,basicDay'
                },
                // Événements du calendrier (vous pouvez les remplacer par vos propres événements)
                events: [
                    {
                        title: 'Événement 1',
                        start: '2024-05-01'
                    },
                    {
                        title: 'Événement 2',
                        start: '2024-05-07',
                        end: '2024-05-10'
                    },
                    // ... Ajoutez d'autres événements ici
                ]
            });
        });
    </script>
@endpush
