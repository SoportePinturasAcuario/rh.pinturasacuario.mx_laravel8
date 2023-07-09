<?php

namespace App\Http\Controllers\RH;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\RH\collaborators;
use App\Models\RH\collaboratorJobInformation;

class CollaboratorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('RH/collaborator/index');
    }

    public function fechcollaborators(){
        $collaborators = collaboratorJobInformation::all();
        return response()->json([
            'collaborator'=>$collaborators,
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('RH/collaborator/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
        $validator = Validator::make($request->all(),[
            'Clave'=>'required|unique:collaborators,key|regex:/^[A-Z,0-9]+$/',
            'Nombre_del_empleado'=>'required|regex:/^[A-Z,Á,É,Í,Ó,Ú,a-z, ,á,é,í,ó,ú,ñ]+$/',
            'Edad'=>'required|digits:2',
            'Sexo'=>'required',
            'Lugar_de_nacimiento'=>'required|regex:/^[A-Z,Á,É,Í,Ó,Ú,a-z, ,á,é,í,ó,ú,ñ]+$/',
            'Fecha_de_nacimiento'=>'required',
            'Escolaridad'=>'required|regex:/^[A-Z,Á,É,Í,Ó,Ú,a-z, ,á,é,í,ó,ú,ñ]+$/',
            'Telefono'=>'required|digits:10',
            'Correo_electronico' => 'required|email',
            'Calle_numero' => 'required|regex:/^[A-Z,Á,É,Í,Ó,Ú, ,a-z,á,é,í,ó,ú,ñ,#,0-9]+$/',
            'Colonia' => 'required|regex:/^[A-Z,Á,É,Í,Ó,Ú, ,a-z,á,é,í,ó,ú,ñ]+$/',
            'Municipio' => 'required|regex:/^[A-Z,Á,É,Í,Ó,Ú, ,a-z,,á,é,í,ó,ú]+$/',
            'CP' => 'required|digits:5',
            'Nombre_del_padre' => 'required|regex:/^[A-Z,Á,É,Í,Ó,Ú, ,a-z,á,é,í,ó,ú,ñ]+$/',
            'Nombre_de_la_madre' => 'required|regex:/^[A-Z,Á,É,Í,Ó,Ú, ,a-z,á,é,í,ó,ú,ñ]+$/',
            'Estado_civil' => 'required',
            'Conyuge' => 'required|regex:/^[A-Z,Á,É,Í,Ó,Ú, ,a-z,á,é,í,ó,ú.ñ]+$/',
            'Hijos' => 'required|regex:/^[0-9]+$/',
            'IMSS' => 'required|digits:11',
            'RFC' => 'required|regex:/^[A-Z]{4}[0-9]{6}[A-Z]{2}[0-9]{1}+$/',
            'CURP' => 'required|regex:/^[A-Z]{4}[0-9]{6}[A-Z]{6}[0-9]{2}+$/',
            'Credito_infonavit' => 'numeric',
            'Monto' => 'numeric',
            'Puesto' => 'required|regex:/^[A-Z,Á,É,Í,Ó,Ú,", ,a-z,á,é,í,ó,ú,ñ]+$/',
            'Departamento' => 'required|regex:/^[A-Z,Á,É,Í,Ó,Ú, ,a-z,á,é,í,ó,ú,ñ]+$/',
            'Responde_a' => 'required|regex:/^[A-Z,Á,É,Í,Ó,Ú, ,a-z,á,é,í,ó,ú,ñ]+$/',
            'Actividad' => 'required|regex:/^[A-Z,Á,É,Í,Ó,Ú, ,a-z,á,é,í,ó,ú,ñ]+$/',
            'Nomina' => 'required',
            'Empresa' => 'required',
            'Salario_actual' => 'required|numeric',
            'SDI' => 'required|numeric',
            'Sueldo_sem/mes' => 'required|numeric',
            'Vales_de_despensa' => 'required|numeric',
            'Fondo_de_ahorro' => 'required|numeric',
            'Asimilado' => 'required|numeric',
            'Total' => 'required|numeric',
            'Fecha_de_ingreso' => 'required|date',
            'Inicio_de_contrato' => 'required|date',
            'Dias_contrato' => 'required|numeric',
            'Evaluación_30_días' => 'required|date',
            'Días_contratado' => 'required|numeric',
            'Fin_de_contrato' => 'required|date',
            'Antiguedad' => 'required|numeric',
            'N_Posición' => 'required|regex:/^[A-Z,Á,É,Í,Ó,Ú, ,a-z,á,é,í,ó,ú,ñ,0-9]+$/',
            'Sustituye_a' => 'required|regex:/^[A-Z,Á,É,Í,Ó,Ú, ,a-z,á,é,í,ó,ú,ñ]+$/',
            'Tipo_de_empleado' => 'required',
            'Cuenta_con_credencial' => 'required|regex:/^[A-Z,Á,É,Í,Ó,Ú, ,a-z,á,é,í,ó,ú,ñ]+$/',
            'Centro' => 'required',
            'Area_nomina' => 'required|regex:/^[A-Z,Á,É,Í,Ó,Ú, ,a-z,á,é,í,ó,ú,ñ]+$/',
            'Estatus_del_expediente' => 'required',
            // 'CI_nuevo' => 'required',
            'avc' => 'regex:/^[A-Z,Á,É,Í,Ó,Ú, ,a-z,á,é,í,ó,ú,ñ]+$/',
            // 'Vales_de_despensa_two' => 'required',
            // 'Fondo_de_ahorro_two' => 'required',
            // 'Asimilados' => 'required',
            'Salario_diario_IMMS_+_asimilado' => 'numeric',
            // 'HC' => 'required',
            // 'Incremento_90_días' => 'required',
            // 'Direccion' => 'required',
            // 'Vales_CCT' => 'required',
            'N_emple_fapasa' => 'regex:/^[A-Z,0-9]+$/',
        ]);
        if($validator->fails()){
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages(),
            ]);
        }else{
            $collaborators = new collaborators;
            $collaborators->key = $request->input('Clave');
            $collaborators->name_collaborator = $request->input('Nombre_del_empleado');
            $collaborators->age = $request->input('Edad');
            $collaborators->sex = $request->input('Sexo');
            $collaborators->place_of_birth = $request->input('Lugar_de_nacimiento');
            $collaborators->date_of_birth = $request->input('Fecha_de_nacimiento');
            $collaborators->schooling = $request->input('Escolaridad');
            $collaborators->phone = $request->input('Telefono');
            $collaborators->email = $request->input('Correo_electronico');
            $collaborators->street_number = $request->input('Calle_numero');
            $collaborators->colony = $request->input('Colonia');
            $collaborators->municipality = $request->input('Municipio');
            $collaborators->cp = $request->input('CP');
            $collaborators->fathers_name = $request->input('Nombre_del_padre');
            $collaborators->mother_name = $request->input('Nombre_de_la_madre');
            $collaborators->marital_status = $request->input('Estado_civil');
            $collaborators->spouse = $request->input('Conyuge');
            $collaborators->children = $request->input('Hijos');
            $collaborators->no_imss = $request->input('IMSS');
            $collaborators->rfc = $request->input('RFC');
            $collaborators->curp = $request->input('CURP');
            $collaborators->credit_Infonavit = $request->input('Credito_infonavit');
            $collaborators->amount = $request->input('Monto');
            $collaborators->save();

            $collaboratorjobinfo = new collaboratorJobInformation;
            $collaboratorjobinfo->key_collaborator = $request->input('Clave');
            $collaboratorjobinfo->stand = $request->input('Puesto');
            $collaboratorjobinfo->department = $request->input('Departamento');
            $collaboratorjobinfo->supervise = $request->input('Responde_a');
            $collaboratorjobinfo->activity = $request->input('Actividad');
            $collaboratorjobinfo->nominating = $request->input('Nomina');
            $collaboratorjobinfo->enterprise = $request->input('Empresa');
            $collaboratorjobinfo->current_salary = $request->input('Salario_actual');
            $collaboratorjobinfo->sdi = $request->input('SDI');
            $collaboratorjobinfo->weekly_or_monthly_salary = $request->input('Sueldo_sem/mes');
            $collaboratorjobinfo->pantry_vouchers = $request->input('Vales_de_despensa');
            $collaboratorjobinfo->savings_fund = $request->input('Fondo_de_ahorro');
            $collaboratorjobinfo->assimilated = $request->input('Asimilado');
            $collaboratorjobinfo->total = $request->input('Total');
            $collaboratorjobinfo->date_of_entry = $request->input('Fecha_de_ingreso');
            $collaboratorjobinfo->start_of_contract = $request->input('Inicio_de_contrato');
            $collaboratorjobinfo->contracted_days = $request->input('Dias_contrato');
            $collaboratorjobinfo->day_evaluation = $request->input('Evaluación_30_días');
            $collaboratorjobinfo->contracted_days_two = $request->input('Días_contratado');
            $collaboratorjobinfo->end_of_contract = $request->input('Fin_de_contrato');
            $collaboratorjobinfo->antiquity = $request->input('Antiguedad');
            $collaboratorjobinfo->n_position = $request->input('N_Posición');
            $collaboratorjobinfo->replaces = $request->input('Sustituye_a');
            $collaboratorjobinfo->type_of_employee = $request->input('Tipo_de_empleado');
            $collaboratorjobinfo->has_a_credential = $request->input('Cuenta_con_credencial');
            $collaboratorjobinfo->center = $request->input('Centro');
            $collaboratorjobinfo->payroll_area = $request->input('Area_nomina');
            $collaboratorjobinfo->dossier = $request->input('Estatus_del_expediente');
            $collaboratorjobinfo->new_ci = $request->input('CI_nuevo');
            $collaboratorjobinfo->avc = $request->input('avc');
            $collaboratorjobinfo->pantry_voucher_two = $request->input('Vales_de_despensa_two');
            $collaboratorjobinfo->savings_fund_two = $request->input('Fondo_de_ahorro_two');
            $collaboratorjobinfo->assimilateds = $request->input('Asimilados');
            $collaboratorjobinfo->daily_wage_imss_more_assimilated = $request->input('Salario_diario_IMMS_+_asimilado');
            $collaboratorjobinfo->hc = $request->input('HC');
            $collaboratorjobinfo->increase_90_days = $request->input('Incremento_90_días');
            $collaboratorjobinfo->address = $request->input('Direccion');
            $collaboratorjobinfo->vouchers_cct = $request->input('Vales_CCT');
            $collaboratorjobinfo->emple_fapasa_number = $request->input('N_emple_fapasa');
            $collaboratorjobinfo->save();

            return response()->json([
                'status'=>200,
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
