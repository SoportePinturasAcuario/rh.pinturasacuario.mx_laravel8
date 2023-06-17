@extends('layouts/index')
@section('head')
<link rel="stylesheet" href="css/table.css">
@endsection
@section('contend')

<!-- Tabla de reportes -->
<div class="box-body">
    <div class="box-table-report">
        <div class="" id="success_message"></div>
        {{-- Notificacion de registro correcto --}}
        <div class="card-header">
            <p class="accountant">Listado de colaboradores :</p>
            <h3>Colaboradores</h3>
                {{-- Boton modal --}}
                <a href="/collaborator-create" class="btn btn-primary float-end btn-sm">
                    Nuevo Registro
                </a>
                {{-- ----------- --}}
        </div>
    </div>

</div>

@endsection
