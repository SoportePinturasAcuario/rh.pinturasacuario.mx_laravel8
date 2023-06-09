@extends('layouts.index')
@section('contend')


<!-- Modal Agregar-->
<div class="modal fade" id="AddBranchsModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nueva sucuarsal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul id="saveform_errList"></ul>
                <div class="form-group mb-3">
                    <label for="">Nombre</label>
                    <input type="text" name="" id="" class="name form-control" placeholder="(Planta Lerma)">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary cancel" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success add_branchs">Agregar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal edit-->
<div class="modal fade" id="EditBranchsModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Sucuarsal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul id="updateform_errList"></ul>
                <div class="form-group mb-3">
                    <label for="">ID</label>
                    <input type="text" name="" id="edit_branch_id" class="name form-control" disabled>
                </div>
                <div class="form-group mb-3">
                    <label for="">Nombre</label>
                    <input type="text" name="" id="edit_name" class="name form-control" placeholder="(Planta Lerma)">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary cancel" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-warning update_branchs">Editar</button>
            </div>
        </div>
    </div>
</div>

<!-- Tabla de reportes -->
<div>
    <div class="" id="success_message"></div> {{-- Notificacion de registro correcto --}}
    <div class="card-header">
        <h4>Reporte de Sucursales
            {{-- Boton modal --}}
            <a href="#" data-bs-toggle="modal" data-bs-target="#AddBranchsModel" class="btn btn-primary float-end btn-sm">
                Nuevo
            </a>
            {{-- ----------- --}}

        </h4>
    </div>
    <table class="table table-hover">
        <thead>
            <tr class="table-primary">
                <td>Nombre</td>
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
@endsection
@section('scripts')
<script src="js/RH/branch/index.js"></script>
@endsection