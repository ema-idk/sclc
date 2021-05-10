@extends('layouts.app')
@section('content')
    <div class="container">
        <div id="schedule">

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="evento" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        DETALLES DE LA CITA
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-group">
                            <label for="title">NOMBRE DEL CLIENTE:</label>
                            <input type="text" readonly class="form-control-plaintext" name="title" id="title" aria-describedby="helpId" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="servicios">SERVICIOS:</label>
                            <textarea readonly class="form-control-plaintext" name="servicios" id="servicios" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="start">FECHA Y HORA DE INICIO:</label>
                            <input type="text" readonly class="form-control-plaintext" name="start" id="start" aria-describedby="helpId" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="end">FECHA Y HORA DE FIN:</label>
                            <input type="text" readonly class="form-control-plaintext" name="end" id="end" aria-describedby="helpId" placeholder="">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                        </svg>
                        Regresar
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
