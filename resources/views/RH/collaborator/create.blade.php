@extends('layouts/index')
@section('head')
<link rel="stylesheet" href="css/form.css">
@endsection
@section('contend')
<div class="box-body">
    <form action="" method="get">
        <div class="form-head">
            <div></div>
            <h2>Alta de colaborador</h2>
            <div class="col-md-1 key">
                <label for="key">Clave</label>
                <input class="form-control" type="text" name="key" id="key">
            </div>
        </div>

        <div class="container">
            <!-- <div class="form-section">
                <h3>Datos Generales</h3>
            </div> -->
            <div class="row">
                <div class="col-md-12">
                    <h4>Datos del colaborador</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label for="name_collaborator">Nombre del empleado</label>
                    <input class="form-control" type="text" name="name_collaborator" id="name_collaborator">
                </div>
                <div class="col-md-2">
                    <label for="current_salary">Salario actual</label>
                    <input class="form-control" type="text" name="current_salary" id="current_salary">
                </div>
                <div class="col-md-1">
                    <label for="age">Edad</label>
                    <input class="form-control" type="text" name="age" id="age">
                </div>
                <div class="col-md-3">
                    <label for="colony">Sexo</label>
                    <div class="box-radio">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Masculino
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Femenino
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label for="place_of_birth">Lugar de nacimiento</label>
                    <input class="form-control" type="text" name="place_of_birth" id="place_of_birth">
                </div>
                <div class="col-md-2">
                    <label for="date_of_birth">Fecha de nacimiento</label>
                    <input class="form-control" type="date" name="date_of_birth" id="date_of_birth">
                </div>
                <div class="col-md-3">
                    <label for="schooling">Escolaridad</label>
                    <input class="form-control" type="text" name="schooling" id="schooling">
                </div>
                <div class="col-md-2">
                    <label for="phone">Telefono</label>
                    <input class="form-control" type="text" name="phone" id="phone">
                </div>
            </div>

            <div class="col-md-3">
                <label for="stand">Puesto</label>
                <input class="form-control" type="text" name="stand" id="stand">
            </div>
            <div class="col-md-3">
                <label for="department">Departamento</label>
                <input class="form-control" type="text" name="department" id="department">
            </div>
            <div class="col-md-3">
                <label for="supervise">Responde a</label>
                <input class="form-control" type="text" name="supervise" id="supervise">
            </div>
            <div class="col-md-3">
                <label for="activity">Actividad</label>
                <input class="form-control" class="form-control" type="text" name="activity" id="activity">
            </div>
            <div class="col-md-2">
                <label for="date_of_entry">Fecha de ingreso</label>
                <input class="form-control" type="date" name="date_of_entry" id="date_of_entry">
            </div>
            <div class="col-md-1">
                <label for="antiquity">Antiguedad</label>
                <input class="form-control" type="text" name="antiquity" id="antiquity">
            </div>
            <div class="col-md-3">
                <label for="nominating">Nomina</label>
                <select class="form-control" name="nominating" id="nominating">
                    <option value="">Selecciona una opción</option>
                    <option value="Semanal">Semanal</option>
                    <option value="QS QUIMERA SOLUTIONS, S.A. DE C.V.">QS QUIMERA SOLUTIONS, S.A. DE C.V.</option>
                    <option value="Quincenal">Quincenal</option>
                    <option value="Quincenal_Admin">Quincenal Admin</option>
                    <option value="QUINCENAL_QS_SOLUTIONS">QUINCENAL QS SOLUTIONS</option>
                    <option value="Factura">Factura</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="enterprise">Empresa</label>
                <select class="form-control" name="enterprise" id="enterprise">
                    <option value="">Selecciona una opción</option>
                    <option value="ASIM">ASIM</option>
                    <option value="FACTURA">FACTURA</option>
                    <option value="INDUSTRIAL TECNICA DE PINTURAS S.A DE C.V.">INDUSTRIAL TECNICA DE PINTURAS S.A DE C.V.</option>
                    <option value="INDUSTRIAL TÉCNICA DE PINTURAS S.A. DE C.V.">INDUSTRIAL TÉCNICA DE PINTURAS S.A. DE C.V.</option>
                    <option value="MASTER PAINTS  S.A. DE C.V.">MASTER PAINTS S.A. DE C.V.</option>
                    <option value="QS QUIMERA SOLUTIONS, S.A. DE C.V.">QS QUIMERA SOLUTIONS, S.A. DE C.V.</option>
                    <option value="REGIONALES TAM S.A. DE C.V.">REGIONALES TAM S.A. DE C.V.</option>
                    <option value="TIENDA PINTACUARIO S.A. DE C.V.">TIENDA PINTACUARIO S.A. DE C.V.</option>
                    <option value="QTRANSPORTES MASTER S.A. DE C.V.">QTRANSPORTES MASTER S.A. DE C.V.</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="no_imss">No IMSS</label>
                <input class="form-control" type="text" name="no_imss" id="no_imss" min="0">
            </div>

            <div class="col-md-2">
                <label for="rfc">RFC</label>
                <input class="form-control" type="text" name="rfc" id="rfc">
            </div>
            <div class="col-md-2">
                <label for="curp">CURP</label>
                <input class="form-control" type="string" name="curp" id="curp">
            </div>

            <div class="col-md-1">
                <label for="sdi">SDI</label>
                <input class="form-control" type="text" name="sdi" id="sdi">
            </div>
            <div class="col-md-1">
                <label for="weekly_or_monthly_salary">Sueldo semanal/mensual</label>
                <input class="form-control" type="text" name="weekly_or_monthly_salary" id="weekly_or_monthly_salary">
            </div>
            <div class="col-md-1">
                <label for="pantry_vouchers">Vales de despensa</label>
                <input class="form-control" type="text" name="pantry_vouchers" id="pantry_vouchers">
            </div>
            <div class="col-md-1">
                <label for="savings_fund">Fondo de ahorro</label>
                <input class="form-control" type="text" name="savings_fund" id="savings_fund">
            </div>
            <div class="col-md-1">
                <label for="assimilated">Asimilado</label>
                <input class="form-control" type="text" name="assimilated" id="assimilated">
            </div>
            <div class="col-md-2">
                <label for="total">Total</label>
                <input class="form-control" type="text" name="total" id="total">
            </div>
            <div class="col-md-3">
                <label for="street_number">Calle Numero</label>
                <input class="form-control" type="text" name="street_number" id="street_number">
            </div>
            <div class="col-md-3">
                <label for="colony">Colonia</label>
                <input class="form-control" type="text" name="colony" id="colony">
            </div>
            <div class="col-md-3">
                <label for="municipality">Municipio</label>
                <input class="form-control" type="text" name="municipality" id="municipality">
            </div>
            <div class="col-md-1">
                <label for="cp">CP</label>
                <input class="form-control" type="text" name="cp" id="cp">
            </div>



            <div class="col-md-2">
                <label for="marital_status">Estado civil</label>
                <select class="form-control" name="marital_status" id="marital_status">
                    <option value="">Selecciona una opción</option>
                    <option value="Casado(a)">Casado(a)</option>
                    <option value="Soltero(a)">Soltero(a)</option>
                    <option value="Union_libre">Union_libre</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="fathers_name">Nombre del padre</label>
                <input class="form-control" type="text" name="fathers_name" id="fathers_name">
            </div>
            <div class="col-md-3">
                <label for="mother_name">Nombre de la madre</label>
                <input class="form-control" type="text" name="mother_name" id="mother_name">
            </div>
            <div class="col-md-3">
                <label for="spouse">Conyuge</label>
                <input class="form-control" type="text" name="spouse" id="spouse">
            </div>
            <div class="col-md-3">
                <label for="children">N° Hijos</label>
                <input class="form-control" type="text" name="children" id="children">
            </div>
            <div class="col-md-2">
                <label for="start_of_contract">Inicio de contrato</label>
                <input class="form-control" type="date" name="start_of_contract" id="start_of_contract">
            </div>
            <div class="col-md-1">
                <label for="contracted_days">Dias contrato</label>
                <input class="form-control" type="text" value="30" o name="contracted_days" id="contracted_days" disabled>
            </div>
            <div class="col-md-2">
                <label for="day_evaluation">Evaluación 30 días</label>
                <input class="form-control" type="date" name="day_evaluation" id="day_evaluation">
            </div>
            <div class="col-md-2">
                <label for="n_position">N° Posición</label>
                <input class="form-control" type="text" name="n_position" id="n_position">
            </div>
            <div class="col-md-3">
                <label for="replaces">Sustituye a</label>
                <input class="form-control" type="text" name="replaces" id="replaces">
            </div>
            <div class="col-md-1">
                <label for="contracted_days_two">Dias contratado</label>
                <input class="form-control" type="text" name="contracted_days_two" id="contracted_days_two">
            </div>
            <div class="col-md-2">
                <label for="end_of_contract">Fin de contrato</label>
                <input class="form-control" type="date" name="end_of_contract" id="end_of_contract">
            </div>
            <div class="col-md-2">
                <label for="credit_infonavit">Credito infonavit</label>
                <input class="form-control" type="text" name="credit_infonavit" id="credit_infonavit">
            </div>
            <div class="col-md-2">
                <label for="amount">Monto</label>
                <input class="form-control" type="text" name="amount" id="amount">
            </div>
            <div class="col-md-3">
                <label for="email">Correo electronico</label>
                <input class="form-control" type="email" name="email" id="email">
            </div>
            <div class="col-md-3">
                <label for="type_of_employee">Tipo de empleado</label>
                <select class="form-control" name="type_of_employee" id="type_of_employee">
                    <option value="">Selecciona una opcion</option>
                    <option value="Empleado">Empleado</option>
                    <option value="Sindicalizado">Sindicalizado</option>
                    <option value="No sindicalodado">No sindicalodado</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="has_a_credential">Cuenta con credencial</label>
                <input class="form-control" type="text" name="has_a_credential" id="has_a_credential">
            </div>
            <div class="col-md-3">
                <label for="center">Centro</label>
                <select class="form-control" name="center" id="center">
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
            <div class="col-md-3">
                <label for="payroll_area">Area nomina</label>
                <input class="form-control" type="text" name="payroll_area" id="payroll_area">
            </div>
            <div class="col-md-3">
                <label for="dossier">Estatus expediente</label>
                <div class="box-radio">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="dossier" id="dossier1">
                        <label class="form-check-label" for="dossier1">
                            Masculino
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="dossier" id="dossier2">
                        <label class="form-check-label" for="dossier2">
                            Femenino
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <label for="new_ci">CI nuevo</label>
                <div class="box-radio">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="new_ci" id="new_ci1">
                        <label class="form-check-label" for="new_ci1">
                            Si
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="new_ci" id="new_ci2">
                        <label class="form-check-label" for="new_ci2">
                            No
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <label for="avc">AVC</label>
                <input class="form-control" type="text" name="avc" id="avc">
            </div>
            <div class="col-md-3">
                <label for="pantry_vouchers">Vales de despensa</label>
                <input class="form-control" type="text" name="pantry_vouchers" id="pantry_vouchers">
            </div>
            <div class="col-md-3">
                <label for="savings_fund">Fondo de ahorro</label>
                <input class="form-control" type="text" name="savings_fund" id="savings_fund">
            </div>
            <div class="col-md-3">
                <label for="assimilated">Asimilados</label>
                <input class="form-control" type="text" name="assimilated" id="assimilated">
            </div>
            <div class="col-md-3">
                <label for="address">Dirección</label>
                <input class="form-control" type="text" name="address" id="address">
            </div>
            <div class="col-md-3">
                <label for="vouchers_cct">Vales CCT</label>
                <input class="form-control" type="text" name="vouchers_cct" id="vouchers_cct">
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h4>Información de su trabajo</h4>
                </div>
                <div class="col-md-2">
                    <label for="emple_fapasa_number">Numero emple fapasa</label>
                    <input class="form-control" type="text" name="emple_fapasa_number" id="emple_fapasa_number">
                </div>
                <div class="col-md-3">
                    <label for="recruiter">Reclutador</label>
                    <input class="form-control" type="text" name="recruiter" id="recruiter">
                </div>
                <div class="col-md-3">
                    <label for="daily_wage_imss_more_assimilated">Salario diario IMMS + asimilado </label>
                    <input class="form-control" type="text" name="daily_wage_imss_more_assimilated" id="daily_wage_imss_more_assimilated">
                </div>
                <div class="col-md-3">
                    <label for="hc">HC</label>
                    <input class="form-control" type="text" name="hc" id="hc">
                </div>
                <div class="col-md-1">
                    <label for="increase_90_days">Incremento 90 días</label>
                    <input class="form-control" type="text" name="increase_90_days" id="increase_90_days">
                </div>
            </div>
            <div class="row">
                <button type="submit">Registrar</button>
            </div>
        </div>

</div>
</form>
</div>
@endsection