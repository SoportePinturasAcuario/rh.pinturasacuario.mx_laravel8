$(document).ready(function () {


    //Calcula el SDI
    function sdi(currentSalary) {
        let numSdi = (currentSalary.value * 1.04932);
        newSdi.value = numSdi.toFixed(2);
        return newSdi.value;
    }
    //Regresa el tipo de nomina seleccionada
    function nominating(oldNominating) {
        let valor = oldNominating.value;
        return valor;
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
    // Manda a llamar las funciones para calcular los valores con relacion al salario
    function salary() {
        switch (nominating(oldNominating)) {
            case 'Semanal':
                sdi(currentSalary);
                //Calcula el salario s/m
                weMoSalary.value = (currentSalary.value * 30).toFixed(2);
                pantryVouchers(weMoSalary);
                savingsFund(weMoSalary);
                oldtotal.value = (Number(weMoSalary.value) + Number(oldPantryVouchers.value) + Number(oldFund.value)).toFixed(2);

                break;
            case '':
                weMoSalary.value = '0.00';
                oldPantryVouchers.value = '0.00';
                oldFund.value = '0.00';
                oldtotal.value = '0.00';
                sdi(currentSalary);
                break;
            default:
                sdi(currentSalary);
                weMoSalary.value = (currentSalary.value * 30.42).toFixed(2);
                pantryVouchers(weMoSalary);
                savingsFund(weMoSalary);
                oldtotal.value = (Number(weMoSalary.value) + Number(oldPantryVouchers.value) + Number(oldFund.value)).toFixed(2);

        }
    }
    var currentSalary = document.getElementById('current_salary');
    var oldNominating = document.getElementById('nominating');
    var newSdi = document.getElementById('sdi');
    var weMoSalary = document.getElementById('weekly_or_monthly_salary');
    var oldPantryVouchers = document.getElementById('pantry_vouchers');
    var oldFund = document.getElementById('savings_fund');
    var oldtotal = document.getElementById('total');
    // Detecta los cambios dentro de Salarioactual
    currentSalary.onchange = function () {
        salary();
    };
    //Detecta los cambios en la seleccion de nomina
    oldNominating.onchange = function () {
        salary();
    };
    // Obtiene las fechas de inicio, evaluacion y fin de contrato
    var dateEntry = document.getElementById('date_of_entry');
    dateEntry.onchange = function () {
        let start_contract = document.getElementById('start_of_contract');
        start_contract.value = dateEntry.value;
        let fecha = new Date(start_contract.value);
        // Obtener la fecha para evaluacion de 30 dias
        let newFecha = new Date(fecha);
        newFecha.setDate(newFecha.getDate() + 30);
        let editFecha = newFecha.toISOString().slice(0, 10).replace(/-/g, "-");
        let dayEvaluation = document.getElementById('day_evaluation');
        dayEvaluation.value = editFecha;
        // Obtener la fecha para fin de contrato
        let endFecha = new Date(fecha);
        endFecha.setDate(endFecha.getDate() + 90);
        let editFechaEnd = endFecha.toISOString().slice(0, 10).replace(/-/g, "-");
        let endContract = document.getElementById('end_of_contract');
        endContract.value = editFechaEnd;
    };
});


