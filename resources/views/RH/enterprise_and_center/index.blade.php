@extends('layouts.index')
@section('head')
<link rel="stylesheet" href="css/table.css">
@endsection
@section('contend')
<!-- Contenido de centros -->
<!-- Modal Agregar-->
<div class="modal fade" id="AddcentersModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nueva sucuarsal</h5>
                <button type="button" class="btn-close cancel" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul id="saveform_errList"></ul>
                <div class="form-group mb-3">

                    <label for="name">Nombre</label>
                    <input type="text" name="" id="name" class="name form-control" placeholder="(Planta Lerma)">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary cancel" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success add_centers">Agregar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal edit-->
<div class="modal fade" id="EditcentersModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Sucuarsal</h5>
                <button type="button" class="btn-close cancel" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul id="updateform_errList"></ul>
                <div class="form-group mb-3">
                    <label for="edit_center_id">ID</label>
                    <input type="text" name="" id="edit_center_id" class="name form-control" disabled>
                </div>
                <div class="form-group mb-3">
                    <label for="edit_name">Nombre</label>
                    <input type="text" name="" id="edit_name" class="name form-control" placeholder="(Planta Lerma)">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary cancel" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-warning update_centers">Editar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal delete-->
<div class="modal fade" id="DeletecentersModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h4> ¿Deseas eliminar el registro? </h4>
                <input type="hidden" id="delete_center_id">
                <button type="button" class="btn-close cancel" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary cancel" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger delete_centers_btn">Eliminar</button>
            </div>
        </div>
    </div>
</div>

<!-- Tabla de reportes -->
<div class="box-body">
    <div class="box-table-reports ">
        <div class="" id="success_message"></div>
        {{-- Notificacion de registro correcto --}}
        <div class="card-header">
            <h4>Reporte de Sucursales
                
                </h4>
                {{-- Boton modal --}}
                <a href="#" data-bs-toggle="modal" data-bs-target="#AddcentersModel" class="btn btn-primary float-end btn-sm">
                    Nuevo
                </a>
                {{-- ----------- --}}
        </div>
        <table class="table">
            <thead>
                <tr class="table-primary">
                    <td class="col-1">#</td>
                    <td class="col-4">Nombre</td>
                    <td class="col-3">Acciones</td>
                </tr>
            </thead>
        </table>
        <div class="table-responsive">
            <table class="table table-hover">
                <tbody>
                </tbody>
            </table>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
@endsection
@section('scripts')
<script src="js/RH/centers/index.js"></script>
@endsection
