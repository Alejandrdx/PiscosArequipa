<?php

namespace App\Http\Controllers;

use App\Http\Resources\TipoReunionResource;
use App\Models\Tipo_Reunion;
use Exception;
use Illuminate\Http\Request;

class TipoReunionController extends Controller
{
    public function index()
    {
        try
        {
            return TipoReunionResource::collection(Tipo_Reunion::all());
        }
        catch(Exception $e)
        {
            return response()->json([
                'res' => false,
                'message' =>'Error',
                'Exception' => $e
            ],400);
        }
    }

    public function store(Request $request)
    {
        try
        {
            $data = $request->all();
            Tipo_Reunion::create($data);

            return response()->json([
                'res' => true,
                'message' =>'Exito'
            ],200);
        }
        catch(Exception $e)
        {
            return response()->json([
                'res' => false,
                'message' =>'Error al crear el registro',
                'Exception' => $e
            ],400);
        } 
    }

    public function show(Tipo_Reunion $tipo_Reunion)
    {
        try
        {
            return new TipoReunionResource($tipo_Reunion);
        }
        catch(Exception $e)
        {
            return response()->json([
                'res' => false,
                'message' =>'Error',
                'Exception' => $e
            ],400);
        }
    }

    public function update(Request $request, Tipo_Reunion $tipo_Reunion)
    {
        try
        {
            $datos = $request->all();
            $tipo_Reunion->update($datos);

            return response()->json([
                'res' => true,
                'message' =>'Registro actualizado Correctamente'
            ],200);
        }
        catch(Exception $e)
        {
            return response()->json([
                'res' => false,
                'message' =>'Error',
                'Exception' => $e
            ],400);
        }
    }

    public function destroy(Tipo_Reunion $tipo_Reunion)
    {
        try
        {
            $tipo_Reunion->delete();

            return response()->json([
                'res' => true,
                'message' =>'Registro eliminado Correctamente'
            ],200);
        }
        catch(Exception $e)
        {
            return response()->json([
                'res' => false,
                'message' =>'Error',
                'Exception' => $e
            ],400);
        }
    }
}
