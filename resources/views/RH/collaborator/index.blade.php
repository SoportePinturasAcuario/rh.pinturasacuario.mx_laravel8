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
            <h4>Colaboradores
                
                </h4>
                {{-- Boton modal --}}
                <a href="#" data-bs-toggle="modal" data-bs-target="#AddBranchsModel" class="btn btn-primary float-end btn-sm">
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
