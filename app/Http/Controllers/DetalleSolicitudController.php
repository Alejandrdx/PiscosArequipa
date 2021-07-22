<?php

namespace App\Http\Controllers;

use App\Http\Resources\DetalleSolicitudResource;
use App\Models\Detalle_Solicitud;
use Exception;
use Illuminate\Http\Request;

class DetalleSolicitudController extends Controller
{
    public function index()
    {
        try
        {
            return DetalleSolicitudResource::collection(Detalle_Solicitud::all());
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
            $detalle = $request->all();
            Detalle_Solicitud::create($detalle);

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

    public function show(Detalle_Solicitud $detalle_Solicitud)
    {
        try
        {
            return new DetalleSolicitudResource($detalle_Solicitud);
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

    public function update(Request $request, Detalle_Solicitud $detalle_Solicitud)
    {
        try
        {
            $datos = $request->all();
            $detalle_Solicitud->update($datos);

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

    public function destroy(Detalle_Solicitud $detalle_Solicitud)
    {
        try
        {
            $detalle_Solicitud->delete();

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
