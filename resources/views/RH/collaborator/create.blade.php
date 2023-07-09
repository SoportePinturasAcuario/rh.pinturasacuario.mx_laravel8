@extends('layouts/index')
@section('head')
<link rel="stylesheet" href="css/form.css">
@endsection
@section('title')
<input type="button" onclick="history.back()" name="volver atrás" value="volver atrás">
<h2>Alta de colaborador</h2>
<div></div>

@endsection
@section('contend')
<div class="box-body">
    <form>
        <div class="container">
            <div class="row nav-title">
                <div class="item-title">
                    <h4>Datos del colaborador</h4>
                </div>
                <div class="options item-title">
                    <i class="fa-solid fa-minus" id="option"></i>
                    <!-- <i class="fa-solid fa-plus"></i> -->
                </div>
            </div>
            <div class="box-inputs" id="box-one">
                <div class="row">
                    <div class="col-md-4">
                        <label for="name_collaborator">Nombre del empleado</label>
                        <div class="inputbox">
                            <div>
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <input class="form-control input-control" type="text" name="name_collaborator" id="name_collaborator">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label for="date_of_birth">Fecha de nacimiento</label>
                        <div class="inputbox">
                            <input class="form-control dis-input-control" type="date" name="date_of_birth" id="date_of_birth">
                        </div>
                    </div>

                    <div class="col-md-1">
                        <label for="age">Edad</label>
                        <div class="inputbox">
                            <input class="form-control dis-input-control" type="text" name="age" id="age" disabled>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label>Sexo</label>
                        <div class="box-radio">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sex" id="sex1" value="H">
                                <label class="form-check-label" for="sex1">
                                    M
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sex" id="sex2" value="M">
                                <label class="form-check-label" for="sex2">
                                    F
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="place_of_birth">Lugar de nacimiento</label>
                        <div class="inputbox">
                            <div>
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <input class="form-control input-control" type="text" name="place_of_birth" id="place_of_birth">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="schooling">Escolaridad</label>
                        <div class="inputbox">
                            <div>
                                <i class="fa-solid fa-school-flag"></i>
                            </div>
                            <input class="form-control input-control" type="text" name="schooling" id="schooling">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label for="phone">Telefono</label>
                        <div class="inputbox">
                            <div>
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <input class="form-control input-control" type="text" name="phone" id="phone">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="email">Correo electronico</label>
                        <div class="inputbox">
                            <div>
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <input class="form-control input-control" type="email" name="email" id="email">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="street_number">Calle y Numero</label>
                        <div class="inputbox">
                            <div>
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <input class="form-control input-control" type="text" name="street_number" id="street_number">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="colony">Colonia</label>
                        <div class="inputbox">
                            <div>
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <input class="form-control input-control" type="text" name="colony" id="colony">
                        </div>
                    </div>


                    <div class="col-md-2">
                        <label for="cp">CP</label>
                        <div class="inputbox">
                            <div>
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <input class="form-control input-control" type="text" name="cp" id="cp">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="municipality">Municipio</label>
                        <div class="inputbox">
                            <div>
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <input class="form-control input-control" type="text" name="municipality" id="municipality">
                        </div>
                    </div>


                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="fathers_name">Nombre del padre</label>
                        <div class="inputbox">
                            <div>
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <input class="form-control input-control" type="text" name="fathers_name" id="fathers_name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="mother_name">Nombre de la madre</label>
                        <div class="inputbox">
                            <div>
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <input class="form-control input-control" type="text" name="mother_name" id="mother_name">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label for="marital_status">Estado civil</label>
                        <div class="inputbox">
                            <div>
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <select class="form-control input-control" name="marital_status" id="marital_status">
                                <option value="">Selecciona una opción</option>
                                <option value="Casado(a)">Casado(a)</option>
                                <option value="Soltero(a)">Soltero(a)</option>
                                <option value="Union libre">Union libre</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="spouse">Conyuge</label>
                        <div class="inputbox">
                            <div>
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <input class="form-control input-control" type="text" name="spouse" id="spouse">
                        </div>

                    </div>

                    <div class="col-md-1">
                        <label for="children">Hijos 1</label>
                        <div class="inputbox">
                            <div>
                                <i class="fa-solid fa-user"></i>

                            </div>
                            <input class="form-control input-control" type="text" name="children" id="children" placeholder="Edad">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <label for="children">Hijos 2</label>
                        <div class="inputbox">
                            <div>
                                <i class="fa-solid fa-user"></i>

                            </div>
                            <input class="form-control input-control" type="text" name="children" id="children" placeholder="Edad">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <label for="children">Hijos 3</label>
                        <div class="inputbox">
                            <div>
                                <i class="fa-solid fa-user"></i>

                            </div>
                            <input class="form-control input-control" type="text" name="children" id="children" placeholder="Edad">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-2">
                        <label for="no_imss">No IMSS</label>
                        <div class="inputbox">
                            <div>
                                <i class="fa-solid fa-hashtag"></i>
                            </div>
                            <input class="form-control input-control" type="text" name="no_imss" id="no_imss" min="0">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <label for="rfc">RFC</label>
                        <div class="inputbox">
                            <div>
                                <i class="fa-solid fa-key"></i>
                            </div>
                            <input class="form-control input-control" type="text" name="rfc" id="rfc">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="curp">CURP</label>
                        <div class="inputbox">
                            <div>
                                <i class="fa-solid fa-key"></i>
                            </div>
                            <input class="form-control input-control" type="string" name="curp" id="curp">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label for="credit_infonavit">Credito infonavit</label>
                        <div class="inputbox">
                            <div>
                                <i class="fa-solid fa-hashtag"></i>
                            </div>
                            <input class="form-control input-control" type="text" name="credit_infonavit" id="credit_infonavit">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label for="amount">Monto</label>
                        <div class="inputbox">
                            <div>
                                <i class="fa-solid fa-dollar-sign"></i>
                            </div>
                            <input class="form-control input-control" type="text" name="amount" id="amount">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Información de su trabajo -->
            <div class="row nav-title">
                <div class="item-title">
                    <h4>Información de su trabajo</h4>
                </div>
                <div class="options item-title">
                    <i class="fa-solid fa-minus" id="option-two"></i>
                    <!-- <i class="fa-solid fa-plus"></i> -->
                </div>
            </div>
            <div class="box-inputs" id="box-two">

                <div class="row">
                    <div class="col-md-2 key">
                        <label for="">Clave</label>
                        <div class="inputbox">
                            <div>
                                <i class="fa-solid fa-key"></i>
                            </div>
                            <input class="form-control input-control" type="text" name="key" id="key" placeholder="Clave*">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="stand">Puesto</label>
                        <div class="inputbox">
                            <div>
                                <i class="fa-regular fa-id-card"></i>
                            </div>
                            <input class="form-control input-control" type="text" name="stand" id="stand">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="department">Departamento</label>
                        <div class="inputbox">
                            <div>
                                <i class="fa-solid fa-city"></i>
                            </div>
                            <input class="form-control input-control" type="text" name="department" id="department">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="supervise">Responde a</label>
                        <div class="inputbox">
                            <div>
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <input class="form-control input-control" type="text" name="supervise" id="supervise">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="activity">Actividad</label>
                        <div class="inputbox">
                            <div>
                                <i class="fa-solid fa-screwdriver-wrench"></i>
                            </div>
                            <input class="form-control input-control" type="text" name="activity" id="activity">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="nominating">Nomina</label>
                        <div class="inputbox">
                            <div>
                                <i class="fa-solid fa-file-invoice-dollar"></i>
                            </div>
                            <select class="form-control input-control" name="nominating" id="nominating">
                                <option value="">Selecciona una opción</option>
                                <option value="Semanal">Semanal</option>
                                <option value="QS QUIMERA SOLUTIONS, S.A. DE C.V.">QS QUIMERA SOLUTIONS, S.A. DE C.V.</option>
                                <option value="Quincenal">Quincenal</option>
                                <option value="Quincenal_Admin">Quincenal Admin</option>
                                <option value="QUINCENAL_QS_SOLUTIONS">QUINCENAL QS SOLUTIONS</option>
                                <option value="Factura">Factura</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="enterprise">Empresa</label>
                        <div class="inputbox">
                            <div>
                                <i class="fa-solid fa-building"></i>
                            </div>
                            <select class="form-control input-control" name="enterprise" id="enterprise">
                                <option value="">Selecciona una opción</option>
                                <option value="ASIM">ASIM</option>
                                <option value="FACTURA">FACTURA</option>
                                <option value="INDUSTRIAL TECNICA DE PINTURAS S.A DE C.V.">INDUSTRIAL TECNICA DE PINTURAS S.A DE
                                    C.V.</option>
                                <option value="INDUSTRIAL TÉCNICA DE PINTURAS S.A. DE C.V.">INDUSTRIAL TÉCNICA DE PINTURAS S.A.
                                    DE C.V.</option>
                                <option value="MASTER PAINTS  S.A. DE C.V.">MASTER PAINTS S.A. DE C.V.</option>
                                <option value="QS QUIMERA SOLUTIONS, S.A. DE C.V.">QS QUIMERA SOLUTIONS, S.A. DE C.V.</option>
                                <option value="REGIONALES TAM S.A. DE C.V.">REGIONALES TAM S.A. DE C.V.</option>
                                <option value="TIENDA PINTACUARIO S.A. DE C.V.">TIENDA PINTACUARIO S.A. DE C.V.</option>
                                <option value="QTRANSPORTES MASTER S.A. DE C.V.">QTRANSPORTES MASTER S.A. DE C.V.</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <label for="current_salary">Salario actual</label>
                        <div class="inputbox">
                            <div>
                                <i class="fa-solid fa-dollar-sign"></i>
                            </div>
                            <input class="form-control input-control" type="text" name="current_salary" id="current_salary">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label for="sdi">SDI</label>
                        <div class="inputbox">
                            <div>
                                <i class="fa-solid fa-dollar-sign"></i>
                            </div>
                            <input class="form-control input-control" type="text" name="sdi" id="sdi" value="0.00" disabled>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label for="weekly_or_monthly_salary">Sueldo sem/men</label>
                        <div class="inputbox">
                            <div>
                                <i class="fa-solid fa-dollar-sign"></i>
                            </div>
                            <input class="form-control input-control" type="text" name="weekly_or_monthly_salary" id="weekly_or_monthly_salary" value="0.00" disabled>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label for="pantry_vouchers">Vales de despensa</label>
                        <div class="inputbox">
                            <div>
                                <i class="fa-solid fa-dollar-sign"></i>
                            </div>
                            <input class="form-control input-control" type="text" name="pantry_vouchers" id="pantry_vouchers" value="0.00" disabled>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label for="savings_fund">Fondo de ahorro</label>
                        <div class="inputbox">
                            <div>
                                <i class="fa-solid fa-dollar-sign"></i>
                            </div>
                            <input class="form-control input-control" type="text" name="savings_fund" id="savings_fund" value="0.00" disabled>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label for="assimilated">Asimilado</label>
                        <div class="inputbox">
                            <div>
                                <i class="fa-solid fa-dollar-sign"></i>
                            </div>
                            <input class="form-control input-control" type="text" name="assimilated" id="assimilated" value="0.00" disabled>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label for="total">Total</label>
                        <div class="inputbox">
                            <div>
                                <i class="fa-solid fa-dollar-sign"></i>
                            </div>
                            <input class="form-control input-control" type="text" name="total" id="total" value="0.00" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <label for="date_of_entry">Fecha de ingreso</label>
                        <div class="inputbox">
                            <input class="form-control" type="date" min="Date()" name="date_of_entry" id="date_of_entry">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label for="start_of_contract">Inicio de contrato</label>
                        <div class="inputbox">
                            <div>
                                <i class="fa-solid fa-calendar-days"></i>
                            </div>
                            <input class="form-control" type="date" name="start_of_contract" id="start_of_contract" disabled>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label for="contracted_days">Dias contrato</label>
                        <div class="inputbox">
                            <div>
                                <i class="fa-solid fa-calendar-days"></i>
                            </div>
                            <input class="form-control input-control" type="text" value="30" o name="contracted_days" id="contracted_days" disabled>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label for="day_evaluation">Evaluación 30 días</label>
                        <div class="inputbox">
                            <div>
                                <i class="fa-solid fa-calendar-days"></i>
                            </div>
                            <input class="form-control" type="date" name="day_evaluation" id="day_evaluation" disabled>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label for="contracted_days_two">Dias contratado</label>
                        <div class="inputbox">
                            <div>
                                <i class="fa-solid fa-calendar-days"></i>
                            </div>
                            <input class="form-control input-control" type="text" name="contracted_days_two" id="contracted_days_two" value="90" disabled>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label for="end_of_contract">Fin de contrato</label>
                        <div class="inputbox">
                            <div>
                                <i class="fa-solid fa-calendar-days"></i>
                            </div>
                            <input class="form-control" type="date" name="end_of_contract" id="end_of_contract" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <label for="antiquity">Antiguedad</label>
                        <div class="inputbox">
                            <div>
                                <i class="fa-solid fa-calendar-days"></i>
                            </div>
                            <input class="form-control input-control" type="text" name="antiquity" id="antiquity" disabled>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label for="n_position">N° Posición</label>
                        <div class="inputbox">
                            <div>
                                <i class="fa-solid fa-hashtag"></i>
                            </div>
                            <input class="form-control input-control" type="text" name="n_position" id="n_position">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="replaces">Sustituye a</label>
                        <div class="inputbox">
                            <div>
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <input class="form-control input-control" type="text" name="replaces" id="replaces">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <label for="type_of_employee">Tipo de empleado</label>
                        <div class="inputbox">
                            <div>
                                <i class="fa-solid fa-file-contract"></i>
                            </div>
                            <select class="form-control input-control" name="type_of_employee" id="type_of_employee">
                                <option value="">Selecciona una opcion</option>
                                <option value="Empleado">Empleado</option>
                                <option value="Sindicalizado">Sindicalizado</option>
                                <option value="No sindicalodado">No sindicalodado</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="has_a_credential">Cuenta con credencial</label>
                        <div class="inputbox">
                            <div>

                            </div>
                            <input class="form-control input-control" type="text" name="has_a_credential" id="has_a_credential">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="center">Centro</label>
                        <div class="inputbox">
                            <div>
                                <i class="fa-solid fa-building"></i>
                            </div>
                            <select class="form-control input-control" name="center" id="center">
                                <option value="">Selecciona una opcion</option>
                                <option value="BODEGA NEZA">BODEGA NEZA</option>
                                <option value="BODEGA TAMPICO">BODEGA TAMPICO</option>
                                <option value="CEDIS FABELA">CEDIS FABELA</option>
                                <option value="CEDIS T- MASTER">CEDIS T- MASTER</option>
                                <option value="PLANTA LER">PLANTA LER</option>
                                <option value="PLANTA LERMA">PLANTA LERMA</option>
                                <option value="SUCURSAL ACAPULCO">SUCURSAL ACAPULCO</option>
                                <option value="TIENDA ERAZO">TIENDA ERAZO</option>
                                <option value="TIENDA PUEBLA">TIENDA PUEBLA</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="payroll_area">Area nomina</label>
                        <div class="inputbox">
                            <div>
                                <i class="fa-solid fa-file-invoice-dollar"></i>
                            </div>
                            <input class="form-control input-control" type="text" name="payroll_area" id="payroll_area">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label>Estatus expediente</label>
                        <div class="box-radio">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="dossier" id="dossier1" value="existe">
                                <label class="form-check-label" for="dossier1">
                                    Existe
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="dossier" id="dossier2" value="falta">
                                <label class="form-check-label" for="dossier2">
                                    Falta
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label>CI nuevo</label>
                        <div class="box-radio">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="new_ci" id="new_ci1" value="si">
                                <label class="form-check-label" for="new_ci1">
                                    Si
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="new_ci" id="new_ci2" value="no">
                                <label class="form-check-label" for="new_ci2">
                                    No
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="avc">AVC</label>
                        <div class="inputbox">
                            <div>
                            <i class="fa-solid fa-dollar-sign"></i>
                            </div>
                            <input class="form-control input-control" type="text" name="avc" id="avc">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label for="pantry_voucher_two">Vales de despensa</label>
                        <div class="inputbox">
                            <div>
                            <i class="fa-solid fa-dollar-sign"></i>
                            </div>

                            <input class="form-control input-control" type="text" name="pantry_voucher_two" id="pantry_voucher_two">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="savings_fund_two">Fondo de ahorro</label>
                        <div class="inputbox">
                            <div>
                            <i class="fa-solid fa-dollar-sign"></i>
                            </div>
                            <input class="form-control input-control" type="text" name="savings_fund_two" id="savings_fund_two">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="assimilated">Asimilados</label>
                        <div class="inputbox">
                            <div>
                            <i class="fa-solid fa-dollar-sign"></i>
                            </div>
                            <input class="form-control input-control" type="text" name="assimilated" id="assimilated">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="daily_wage_imss_more_assimilated">Salario diario IMMS + asimilado </label>
                        <div class="inputbox">
                            <div>
                            <i class="fa-solid fa-dollar-sign"></i>
                            </div>
                            <input class="form-control input-control" type="text" name="daily_wage_imss_more_assimilated" id="daily_wage_imss_more_assimilated" disabled>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="hc">HC</label>
                        <div class="inputbox">
                            <div>
                            <i class="fa-solid fa-dollar-sign"></i>
                            </div>
                            <input class="form-control input-control" type="text" name="hc" id="hc">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label for="increase_90_days">Incremento 90 días</label>
                        <div class="inputbox">
                            <div>
                            <i class="fa-solid fa-dollar-sign"></i>
                            </div>
                            <input class="form-control input-control" type="text" name="increase_90_days" id="increase_90_days">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label for="address">Dirección</label>
                        <div class="inputbox">
                            <div>
                            <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <input class="form-control input-control" type="text" name="address" id="address">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label for="vouchers_cct">Vales CCT</label>
                        <div class="inputbox">
                            <div>
                            <i class="fa-solid fa-dollar-sign"></i>
                            </div>
                            <input class="form-control input-control" type="text" name="vouchers_cct" id="vouchers_cct">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label for="emple_fapasa_number">N° emple fapasa</label>
                        <div class="inputbox">
                            <div>
                            <i class="fa-solid fa-hashtag"></i>
                            </div>
                            <input class="form-control input-control" type="text" name="emple_fapasa_number" id="emple_fapasa_number">
                        </div>
                    </div>

                </div>
            </div>
            <div class="row row-end">
                <div class="col-md-4">
                    <label for="recruiter">Reclutador</label>
                    <div class="inputbox">
                        <div>
                        <i class="fa-solid fa-user"></i>
                        </div>
                        <input class="form-control input-control" type="text" name="recruiter" id="recruiter" disabled>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="inputbox">

                        <button type="button" class="form-control add_colalborator">Registrar</button>
                    </div>
                </div>
            </div>

        </div>
    </form>
</div>
@endsection
@section('scripts')
<script src="js/RH/collaborator/index.js"></script>
<script src="js/RH/collaborator/form.js"></script>
@endsection