$(document).ready(function () {

    var currentSalary = document.getElementById('current_salary');
    var oldNominating = document.getElementById('nominating');
    var newSdi = document.getElementById('sdi');
    var weMoSalary = document.getElementById('weekly_or_monthly_salary');
    var oldPantryVouchers = document.getElementById('pantry_vouchers');
    var oldFund = document.getElementById('savings_fund');
    var oldtotal = document.getElementById('total');
    var dateEntry = document.getElementById('date_of_entry');
    var oldAntiquity = document.getElementById('antiquity');
    var numChildren = document.getElementById('children');

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
    // Calcula la antiguedad
    function newAntiquity(fecha) {
        var register = new Date(fecha);
        var date = new Date();
        let newFecha = (date.toISOString().slice(0, 10).replace(/-/g, ",")).split(",");
        let oldFecha = (register.toISOString().slice(0, 10).replace(/-/g, ",")).split(",");
        if (newFecha[0] >= oldFecha[0]) {
            if (newFecha[2] >= oldFecha[2] && newFecha[1] >= oldFecha[1]) {
                var antiquity = (newFecha[0] - oldFecha[0]);
                return antiquity;
            } else {
                var antiquity = 0;
                return antiquity;
            }
        } else {
            var antiquity = 0;
            return antiquity;
        }
    }
    // Manda a llamar las funciones para calcular los valores con relacion al salario
    function salary() {
        if (nominating(oldNominating) != "") {
            sdi(currentSalary);
            weMoSalary.value = (currentSalary.value * 30.42).toFixed(2);
            pantryVouchers(weMoSalary);
            savingsFund(weMoSalary);
            oldtotal.value = (Number(weMoSalary.value) + Number(oldPantryVouchers.value) + Number(oldFund.value)).toFixed(2);
        } else {
            weMoSalary.value = '0.00';
            oldPantryVouchers.value = '0.00';
            oldFund.value = '0.00';
            oldtotal.value = '0.00';
            sdi(currentSalary);
        }
    }
    function createInputs(){

    }
    numChildren.onchange = function (){
        var numHijos = numChildren.value;
        console.log(numHijos); 
        
    };
    // Detecta los cambios dentro de Salarioactual
    currentSalary.onchange = function () {
        salary();
    };
    //Detecta los cambios en la seleccion de nomina
    oldNominating.onchange = function () {
        salary();
    };
    // Detecta los cambios en la fecha de inicio ,genera las fechas de evaluacion y fin de contrato
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
        oldAntiquity.value = newAntiquity(fecha);
    };
});


