$(document).ready(function () {

    // Detecta el click en el boton "-" o "+"
    var option = document.getElementById('option');
    var box_one = document.getElementById('box-one');
    option.addEventListener("click", function () {
        if (box_one.className == "box-inputs") {
            box_one.className = "box-inputs-incative";
            option.className = "fa-solid fa-minus";
        } else {
            box_one.className = "box-inputs";
            option.className = "fa-solid fa-plus";
        }
    });
    // Detecta el click en el boton "-" o "+"
    var option_two = document.getElementById('option-two');
    var box_two = document.getElementById('box-two');
    option_two.addEventListener("click", function () {
        if (box_two.className == "box-inputs") {
            box_two.className = "box-inputs-incative";
            option_two.className = "fa-solid fa-minus";
        } else {
            box_two.className = "box-inputs";
            option_two.className = "fa-solid fa-plus";
        }
    });
    var arrayInputsForm = document.querySelectorAll("input");
    for(var n = 1; n < arrayInputsForm.length; n++){
        console.log(arrayInputsForm[n].name + " / " + arrayInputsForm[n].value + " / " + n);
    };


    var ageCollaborator = document.getElementById('age');
    var dateBirth = document.getElementById('date_of_birth');
    // Calcula la edad del colaborador apartir de la fecha de nacimiento
    dateBirth.onchange = function () {
        ageCollaborator.value = calculateYears(dateBirth.value);
    };
    // Imprime el tipo de area nomina al que pertenece el colaborador
    var newPayrollArea = document.getElementById('payroll_area');
    var stringDepartment = document.getElementById('department');
    var stringTypeOfEmployee = document.getElementById('type_of_employee');
    stringDepartment.oninput = function () {
        newPayrollArea.value = payrollArea(stringDepartment.value, stringTypeOfEmployee.value);
    };
    stringTypeOfEmployee.oninput = function () {
        newPayrollArea.value = payrollArea(stringDepartment.value, stringTypeOfEmployee.value);
    };
    function payrollArea(stringDepartment, stringTypeOfEmployee) {
        let PayrollArea = (stringDepartment + " " + stringTypeOfEmployee);
        return PayrollArea;
    }
    // Imprime el AVC del colaborador
    var newAvc = document.getElementById('avc');
    var selectCenter = document.getElementById('center');
    stringTypeOfEmployee.onchange = function () {
        newAvc.value = avc(selectCenter.value, stringTypeOfEmployee.value);
    };
    selectCenter.onchange = function () {
        newAvc.value = avc(selectCenter.value, stringTypeOfEmployee.value);
    };
    function avc(stringSex, selectCenter, stringTypeOfEmployee) {
        let info = (stringSex + " " + selectCenter + " " + stringTypeOfEmployee);
        return info;
    }

    var currentSalary = document.getElementById('current_salary');
    var oldNominating = document.getElementById('nominating');
    var newSdi = document.getElementById('sdi');
    var weMoSalary = document.getElementById('weekly_or_monthly_salary');
    var oldPantryVouchers = document.getElementById('pantry_vouchers');
    var oldFund = document.getElementById('savings_fund');
    var oldtotal = document.getElementById('total');
    var dateEntry = document.getElementById('date_of_entry');
    var oldAntiquity = document.getElementById('antiquity');
    var daily = document.getElementById('daily_wage_imss_more_assimilated');
    var oldAsimilated = document.getElementById('asimilated');
    //Calcula el SDI
    function sdi(currentSalary) {
        let numSdi = (currentSalary.value * 1.04932);
        // Toma los 2 numeros siguientes despues del punto
        newSdi.value = numSdi.toFixed(2);
        return newSdi.value;
    }
    //Calcula el sueldo mensual
    function current(currentSalary) {
        let new_weMoSalary = (currentSalary.value * 30);
        weMoSalary.value = new_weMoSalary.toFixed(2);
        return weMoSalary.value;
    }
    //Calcula los valos de despensa
    function pantryVouchers(weMoSalary) {
        let vouchers = weMoSalary.value * .05;
        oldPantryVouchers.value = vouchers.toFixed(2);
        return oldPantryVouchers.value;
    }
    //Calcula el fondo de ahorro
    function savingsFund(weMoSalary) {
        let fund = weMoSalary.value * .13;
        oldFund.value = fund.toFixed(2);
        return oldFund.value;
    }

    function total(weMoSalary, oldPantryVouchers, oldFund, oldAsimilated) {
        let all = (Number(weMoSalary.value) + Number(oldPantryVouchers.value) + Number(oldFund.value));
        oldtotal.value = all.toFixed(2);
        return oldtotal.value;
    }

    //Regresa el tipo de nomina seleccionada
    // function nominating(oldNominating) {
    //     let valor = oldNominating.value;
    //     return valor;
    // }


    // Calcula los años
    function calculateYears(fecha) {
        var register = new Date(fecha);
        var date = new Date();
        let newFecha = (date.toISOString().slice(0, 10).replace(/-/g, ",")).split(",");
        let oldFecha = (register.toISOString().slice(0, 10).replace(/-/g, ",")).split(",");
        if (newFecha[0] >= oldFecha[0]) {
            if (newFecha[2] >= oldFecha[2] && newFecha[1] >= oldFecha[1]) {
                var antiquity = (newFecha[0] - oldFecha[0]);
                return antiquity;
            } else {
                var antiquity = ((newFecha[0] - oldFecha[0]) - 1);
                if (antiquity >= 0) {
                    return antiquity;
                } else {
                    antiquity = 0;
                    return antiquity;
                }
            }
        } else {
            var antiquity = 0;
            return antiquity;
        }
    }
    // Manda a llamar las funciones para calcular los valores con relacion al salario
    function salary() {
        if (currentSalary.value != "") {
            sdi(currentSalary);
            current(currentSalary);
            pantryVouchers(weMoSalary);
            savingsFund(weMoSalary);
            total(weMoSalary, oldPantryVouchers, oldFund, oldAsimilated);
            daily.value = (weMoSalary.value / 30).toFixed(2);
        } else {
            weMoSalary.value = '0.00';
            oldPantryVouchers.value = '0.00';
            oldFund.value = '0.00';
            oldtotal.value = '0.00';
            daily.value = '0.00';
            sdi(currentSalary);
        }
    }


    // Detecta los cambios dentro de Salarioactual
    currentSalary.oninput = function () {
        salary();
    };
    // //Detecta los cambios en la seleccion de nomina
    oldNominating.onchange = function () {
        salary();
    };

    // // Detecta los cambios en la fecha de inicio ,genera las fechas de evaluacion y fin de contrato
    dateEntry.onchange = function () {
        let start_contract = document.getElementById('start_of_contract');
        start_contract.value = dateEntry.value;
        let fecha = new Date(start_contract.value);
        // Obtener la fecha para evaluacion de 30 dias
        let newFecha = new Date(fecha);
        newFecha.setDate(newFecha.getDate() + 30);
        let editFecha = newFecha.toISOString().slice(0, 10);
        let dayEvaluation = document.getElementById('day_evaluation');
        dayEvaluation.value = editFecha;
        // Obtener la fecha para fin de contrato
        let endFecha = new Date(fecha);
        endFecha.setDate(endFecha.getDate() + 90);
        let editFechaEnd = endFecha.toISOString().slice(0, 10);
        let endContract = document.getElementById('end_of_contract');
        endContract.value = editFechaEnd;
        //obtiene los años de antiguedad
        oldAntiquity.value = calculateYears(fecha);
    };


});


