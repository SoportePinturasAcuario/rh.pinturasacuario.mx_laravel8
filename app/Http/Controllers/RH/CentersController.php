<?php

namespace App\Http\Controllers\RH;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RH\centers;
use Illuminate\Support\Facades\Validator;

class CentersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function fetchCenter(){
        $center = centers::orderBy('id_center','DESC')
        ->get();
        return response()->json([
            'center'=>$center,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú]+$/'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        } else {
            $center = new centers;
            $center->name_center = $request->input('name');
            $center->save();
            return response()->json([
                'status' => 200,
                'message' => 'Centro de trabajo registrado exitosamente',
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
        $center = centers::find($id);
        if ($center) {
            return response()->json([
                'status' => 200,
                'center' => $center,
            ]);
        } else {
            return response()->json([
                'status' => 400,
                'message' => 'Centro de trabajo no encontrado',
            ]);
        }
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
        $validator = Validator::make($request->all(), [
            'name' => 'required|regex:/^[A-Z][A-Z,a-z, ,á,é,í,ó,ú]+$/'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        } else {
            $center = centers::find($id);
            if ($center){
                $center->name_center = $request->input('name');
                $center->update();
                return response()->json([
                    'status' => 200,
                    'message' => 'Editado correctamente',
                ]);
            } else {
                return response()->json([
                    'status' => 404,
                    'message' => 'Registro no editado',
                ]);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $center = centers::find($id);
        $center ->delete();
        return response()->json([
            'status' => 200,
            'message' => 'El centro fue eliminado',
        ]);
    }
}
