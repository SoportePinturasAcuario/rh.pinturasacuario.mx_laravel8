<?php

namespace App\Http\Controllers\RH;

use App\Models\RH\branchs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BranchsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('RH/branch/index');
    }
    public function fetchbranch()
    {
        $branchs = branchs::orderBy('id_branch', 'DESC')
            ->get();

        return response()->json([
            'branchs' => $branchs,
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
            $branchs = new branchs;
            $branchs->name_branch = $request->input('name');
            $branchs->save();
            return response()->json([
                'status' => 200,
                'message' => 'Sucursal registrada exitosamente',
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RH\branchs  $branchs
     * @return \Illuminate\Http\Response
     */
    public function show(branchs $branchs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RH\branchs  $branchs
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $branch = branchs::find($id);
        if ($branch) {
            return response()->json([
                'status' => 200,
                'branch' => $branch,
            ]);
        } else {
            return response()->json([
                'status' => 400,
                'message' => 'Sucursal no encontrada',
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RH\branchs  $branchs
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
            $branch = branchs::find($id);
            if ($branch){
                $branch->name_branch = $request->input('name');
                $branch->update();
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
     * @param  \App\Models\RH\branchs  $branchs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $branch = branchs::find($id);
        $branch ->delete();
        return response()->json([
            'status'=>200,
            'message'=>'La sucursal se elimino',
        ]);
    }
}
