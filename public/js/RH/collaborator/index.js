$(document).ready(function () {
    $(document).on('click', '.add_colalborator', function (e) {
        e.preventDefault();
        var data = {
            'Clave': $("#key").val(),
            'Nombre_del_empleado': $("#name_collaborator").val(),
            'Edad': $("#age").val(),
            'Sexo': $('[name=sex]:checked').val(),
            'Lugar_de_nacimiento': $("#place_of_birth").val(),
            'Fecha_de_nacimiento': $("#date_of_birth").val(),
            'Escolaridad': $("#schooling").val(),
            'Telefono': $("#phone").val(),
            'Correo_electronico': $("#email").val(),
            'Calle_numero': $("#street_number").val(),
            'Colonia': $("#colony").val(),
            'Municipio': $("#municipality").val(),
            'CP': $("#cp").val(),
            'Nombre_del_padre': $("#fathers_name").val(),
            'Nombre_de_la_madre': $("#mother_name").val(),
            'Estado_civil': $("#marital_status").val(),
            'Conyuge': $("#spouse").val(),
            'Hijos': $("#children").val(),
            'IMSS': $("#no_imss").val(),
            'RFC': $("#rfc").val(),
            'CURP': $("#curp").val(),
            'Credito_infonavit': $("#credit_infonavit").val(),
            'Monto': $("#amount").val(),
            //Informacion del puesto            
            'Puesto': $("#stand").val(),
            'Departamento': $("#department").val(),
            'Responde_a': $('#supervise').val(),
            'Actividad': $('#activity').val(),
            'Nomina': $('#nominating').val(),
            'Empresa': $('#enterprise').val(),
            'Salario_actual': $('#current_salary').val(),
            'SDI': $('#sdi').val(),
            'Sueldo_sem/mes': $('#weekly_or_monthly_salary').val(),
            'Vales_de_despensa': $('#pantry_vouchers').val(),
            'Fondo_de_ahorro': $('#savings_fund').val(),
            'Asimilado': $('#assimilated').val(),
            'Total': $('#total').val(),
            'Fecha_de_ingreso': $('#date_of_entry').val(),
            'Inicio_de_contrato': $('#start_of_contract').val(),
            'Dias_contrato': $('#contracted_days').val(),
            'Evaluación_30_días': $('#day_evaluation').val(),
            'Días_contratado': $('#contracted_days_two').val(),
            'Fin_de_contrato': $('#end_of_contract').val(),
            'Antiguedad': $('#antiquity').val(),
            'N_Posición': $('#n_position').val(),
            'Sustituye_a': $('#replaces').val(),
            'Tipo_de_empleado': $('#type_of_employee').val(),
            'Cuenta_con_credencial': $('#has_a_credential').val(),
            'Centro': $('#center').val(),
            'Area_nomina': $('#payroll_area').val(),
            'Estatus_del_expediente': $("[name=dossier]:checked").val(),
            'CI_nuevo': $("[name=new_ci]:checked").val(),
            'avc': $('#avc').val(),
            'Vales_de_despensa_two': $('#pantry_voucher_two').val(),
            'Fondo_de_ahorro_two': $('#savings_fund_two').val(),
            'Asimilados': $('#assimilated').val(),
            'Salario_diario_IMMS_+_asimilado': $('#daily_wage_imss_more_assimilated').val(),
            'HC': $('#hc').val(),
            'Incremento_90_días': $('#increase_90_days').val(),
            'Direccion': $('#address').val(),
            'Vales_CCT': $('#vouchers_cct').val(),
            'N_emple_fapasa': $('#emple_fapasa_number').val(),
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: "/collaborator-add",
            data: data,
            dataType: "json",
            success: function (response) {
                if (response.status == 400) {
                    var errores = Object.values(response.errors);
                    var t = 1000;
                    for(var n = 0; n < errores.length;n++){
                        toastr["error"](errores[n]);
                        toastr.options = {
                            "closeButton": false,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-bottom-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": t,
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                          }
                          t=t+500;
                    }
                } else {
                    Swal.fire({
                        position: "top-end",
                        icon: "success",
                        title: "El colaborador " + data.name + " se registro exitosamente.",
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            }
        })
    });
})